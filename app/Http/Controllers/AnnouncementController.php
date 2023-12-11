<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create_announcements(){
        return view ('announcements.create_announcements');
    }

    public function show_announcements(Announcement $announcement){
        return view ('announcements.show_announcements', compact('announcement'));
    }
}
