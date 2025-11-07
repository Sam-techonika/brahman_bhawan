<?php

use App\Livewire\Admin\BookingList;
use App\Livewire\Admin\ContentList;
use App\Livewire\Public\About;
use App\Livewire\Public\Contact;
use App\Livewire\Public\Home;
use App\Livewire\Public\Room;
use App\Livewire\Login;
use App\Models\Booking;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/',BookingList::class)->name('admin.booking.list');
    Route::get('content-list',ContentList::class)->name('admin.content.list');
 });
 Route::post('logout', function () {
    auth()->logout();
    return redirect()->route('home');
})->name('logout');

Route::get('/',Home::class)->name('home');
Route::get('/about',About::class)->name('about');
Route::get('/rooms',Room::class)->name('rooms');
Route::get('/contact',Contact::class)->name('contact');
Route::get('/login', Login::class)->name('login');