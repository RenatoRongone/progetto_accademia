<?php

namespace App\Http\Controllers;

use App\Models\WorkWithUs;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RevisorController extends Controller
{
    public function show_revisor(){
        $announcement_to_check= Announcement::where('is_accepted', null)->first();
        return view ('revisor.show_revisor', compact('announcement_to_check'));
    }
    
    public function approve_announcement($announcement){
        
        $announcement= Announcement::find($announcement);
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Annuncio approvato');
    }
    
    public function reject_announcement($announcement){
        
        $announcement= Announcement::find($announcement);
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', 'Annuncio non approvato');
    }
    
    public function lavora_con_noi(){
        return view ('revisor.lavora_con_noi');
    }
    
    public function richiesta_lavoro(Request $request){
        
        $inquiries = WorkWithUs::create([
            'name' => Auth::user()->name,
            'surname'=> Auth::user()->surname,
            'birth'=> Auth::user()->birth,
            'email'=>Auth::user()->email,
            'inquiry'=> $request->inquiry
        ]);
        
        return redirect (route('welcome'))->with('message', 'la richiesta è stata inoltrata');
    }
}
