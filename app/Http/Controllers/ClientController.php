<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Testimonial;
use Inertia\Inertia;

class ClientController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Clients/Index', [
            'clients' => Client::all(),
            'testimonials' => Testimonial::inRandomOrder()->take(6)->get(),
        ]);
    }
}
