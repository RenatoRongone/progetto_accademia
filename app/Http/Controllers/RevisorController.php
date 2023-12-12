<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

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

}
