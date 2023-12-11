<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function show_category(Category $category){
        return view ('announcements.show_category', compact('category'));
    }

    public function index_category(){
        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        return view('announcements.index_category', compact('announcements'));
    }
}
