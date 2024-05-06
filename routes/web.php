<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        "hello" => 'Hello Laravel',
        "about" => "about",
        "contacts" => "contacts"
    ];
    return view('home', $data);
});

Route::get('/about', function () {
    $about = [
        "about" => "About"
    ];
    return view('about', $about);
})->name("about");

Route::get('/contacts', function () {
    $data = [
        "contacts" => "Contacts"
    ];
    return view('contacts', $data);
})->name("contacts");
