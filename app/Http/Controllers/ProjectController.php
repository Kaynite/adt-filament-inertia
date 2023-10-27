<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Testimonial;
use Inertia\Inertia;
use Inertia\Response;

class ProjectController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Portfolio/Index', [
            'projects' => Project::with('category')->get(),
        ]);
    }

    public function show(Project $project): Response
    {
        return Inertia::render('Portfolio/Show', [
            'project' => $project->load('category'),
            'testimonials' => Testimonial::inRandomOrder()->take(5)->get(),
        ]);
    }
}
