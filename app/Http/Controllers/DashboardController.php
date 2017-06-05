<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dashboard;
use App\Event;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Event::all();
        return view('dashboard', ['events' => $events]);
    }

    public function getConfirmPresence(Request $request, $id) {
        $event = Event::find($id);
        $oldDash = Session::has('dashboard') ? Session::get('dashboard') : null;
        $dash = new Dashboard($oldDash);
        $dash->add($event, $event->id);

        $request->session()->put('dashboard', $dash);
        return redirect()->route('event.index');
    }

    public function getDash() {
        if (!Session::has('dashboard')) {
            return view('user.dashboard');
        }
        $oldDash = Session::get('dashboard');
        $dash = new Dashboard($oldDash);
        return view('user.dashboard', ['events' => $dash->items]);
    }
}
