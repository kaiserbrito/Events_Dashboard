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
}
