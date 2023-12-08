<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create_announcements(){
        return view ('announcements.create_announcements');
    }
}
