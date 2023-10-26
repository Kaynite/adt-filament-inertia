<?php

namespace App\Http\Controllers;

use App\Models\JobFair;
use Inertia\Inertia;
use Inertia\Response;

class JobFairController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('JobFairs/Index', [
            'jobFairs' => JobFair::latest('id')->get(),
        ]);
    }

    public function show(JobFair $jobFair): Response
    {
        return Inertia::render('JobFairs/Show', [
            'jobFair' => $jobFair,
        ]);
    }
}
