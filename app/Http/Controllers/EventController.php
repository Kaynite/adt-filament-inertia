<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Inertia\Inertia;
use Inertia\Response;

class EventController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Events/Index', [
            'events' => Event::latest('id')->get(),
        ]);
    }

    public function show(Event $event): Response
    {
        return Inertia::render('Events/Show', [
            'event' => $event,
        ]);
    }
}
