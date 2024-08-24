<?php
use Illuminate\Support\Facades\Route;

$routes = [
    '/' => 'inicio',
    '/nosotros' => 'nosotros',
    '/blog' => 'blog',
    '/contacto' => 'contacto',
    '/titulo-de-ejemplo' => 'titulo-de-ejemplo',
];

foreach ($routes as $uri => $name) {
    Route::get($uri, function () use ($name) {
        return view('pages')->with('page', $name);
    })->name($name);
}

