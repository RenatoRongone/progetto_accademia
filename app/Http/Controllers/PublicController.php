<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome() {
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        $categoriesByPop = Category::withCount('announcements')->take(3)->get();
        return view('welcome', compact('announcements' , 'categoriesByPop'));
    }
}
