<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Image;
use App\Models\Message;
use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    public function history(): Response
    {
        return Inertia::render('Pages/History');
    }

    public function contact(): Response
    {
        return Inertia::render('Pages/ContactUs');
    }

    public function talent(): Response
    {
        return Inertia::render('Pages/Talent');
    }

    public function gallery(): Response
    {
        return Inertia::render('Pages/Gallery', [
            'images' => Image::latest('id')->get(),
        ]);
    }

    public function handleContact(MessageRequest $request)
    {
        Message::create($request->validated());

        return to_route('pages.contact');
    }
}
