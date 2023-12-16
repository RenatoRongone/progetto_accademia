<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    //Funzione della rotta create_announcement che mostra il form di creazione annuncio
    public function create_announcements(){
        
        return view ('announcements.create_announcements');
    }
    
    //Funzione della rotta che mostra tutti gli annunci
    public function show_announcements(Announcement $announcement){
        
        return view ('announcements.show_announcements', compact('announcement'));
    }
    
    //Funzione della rotta che mostra le categorie
    public function show_category(Category $category){
        
        return view ('announcements.show_category', compact('category'));
    }
    
    public function index_category(){
        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        
        return view('announcements.index_category', compact('announcements'));
    }
    
    //Funzione per la ricerca con TNTSearch
    public function ricerca(Request $request){
        $string = str_replace(" e ", " ", $request->searched);
        $announcements = Announcement::search($string)->where('is_accepted', true)->get();
        
        return view('announcements.search_announcements', compact('announcements'));
    }
    
    public function user_announcements(User $user){
        $announcements = $user->announcements()->orderBy('created_at', 'desc')->get();
        
        // Raggruppare gli annunci dell'utente per categoria attraverso il metodo groupBy
        /*         $groupedAnnouncements = $announcements->groupBy(function($item) {
            return $item->category->name;
        }); */
        
        return view('announcements.user_announcements', compact('announcements', 'user'));
    } 
}
