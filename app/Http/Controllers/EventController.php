<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    public function getIndex() {
        $events = Event::all();
        return view('event.index', ['events' => $events]);
    }

    public function getAbout() {
        return view('about');
    }

    public function getSearch() {
        $search = \Request::get('search');
        $events = Event::where('title', 'like', '%'.$search.'%')->orderBy('id')->paginate(4);
        return view('event.search', ['events' => $events]);
    }
}
