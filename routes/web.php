<?php
use Illuminate\Support\Facades\Route;

$routes = [
    '/' => 'inicio',
    '/nosotros' => 'nosotros',
    '/blog' => 'blog',
    '/contacto' => 'contacto',
];

foreach ($routes as $uri => $name) {
    Route::get($uri, function () use ($name) {
        return view('pages')->with('page', $name);
    })->name($name);
}

