<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\JobFairController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('clients', ClientController::class)->name('clients.index');
Route::get('team', TeamController::class)->name('team.index');
Route::resource('events', EventController::class)->only('index', 'show')->scoped(['event' => 'slug']);
Route::resource('job-fairs', JobFairController::class)->only('index', 'show')->scoped(['job_fair' => 'slug']);

Route::get('talent', [PageController::class, 'talent'])->name('pages.talent');
Route::get('history', [PageController::class, 'history'])->name('pages.history');
Route::get('gallery', [PageController::class, 'gallery'])->name('pages.gallery');
Route::get('contact-us', [PageController::class, 'contact'])->name('pages.contact');
Route::post('contact-us', [PageController::class, 'handleContact']);

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::resource('blog', BlogController::class)
    ->only('index', 'show')
    ->scoped(['post' => 'slug'])
    ->parameter('blog', 'post');

Route::resource('portfolio', ProjectController::class)
    ->only('index', 'show')
    ->scoped(['project' => 'slug'])
    ->parameter('portfolio', 'project');
