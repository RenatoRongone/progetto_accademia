<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\WorkWithUs;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function show_revisor(){
        $count = 0;
        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        $announcements_to_check_limit = Announcement::where('is_accepted', null)->get();
        foreach($announcements_to_check_limit as $announcement){
            if($announcement->user->id == Auth::user()->id){
                $count++;
            }
        }

        return view ('revisor.show_revisor', compact('announcement_to_check', 'count'));
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
            'email'=> Auth::user()->email,
            'inquiry'=> $request->inquiry
        ]);

        if(Auth::user()->telephone){
            $inquiries->telephone = Auth::user()->telephone;
            $inquiries->save();
        }
        

        $adminMail = 'admin@presto.it';
        Mail::to($adminMail)->send(new BecomeRevisor($inquiries));


        return redirect (route('welcome'))->with('message', 'la richiesta è stata inoltrata');
    }

    public function make_revisor(){
        Artisan::call('presto:makeUserRevisor', ['email'=>Auth::user()->email]);
        return redirect(route('welcome'))->with('message', 'Utente reso revisore con successo');
    }
}
