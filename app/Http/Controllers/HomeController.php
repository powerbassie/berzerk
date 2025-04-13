<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $upcomingEvents = Event::where('status', 'confirmed')
            ->where('date', '>=', now()->format('Y-m-d'))
            ->orderBy('date')
            ->limit(3)
            ->get();

        return view('home', [
            'upcomingEvents' => $upcomingEvents,
        ]);
    }
}
