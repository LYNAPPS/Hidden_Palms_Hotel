<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Facility;
use App\Models\RoomType;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $blogs = BlogPost::where('status', 'published')->take(3)->get();
        $facilities = Facility::all();
        $rooms = RoomType::all();
        return view('welcome', compact('blogs', 'facilities', 'rooms'));
    }

    public function about()
    {
        $facilities = Facility::all();
        return view('pages.about.index', compact('facilities'));
    }
    public function rooms()
    {
        $rooms = RoomType::all();

        return view('pages.rooms.index', compact('rooms'));
    }
    public function gallery()
    {
        return view('pages.gallery.index');
    }
    public function events()
    {
        return view('pages.events.index');
    }
    public function contact()
    {
        return view('pages.contact.index');
    }
}
