<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {

    $welcome_message = "Hello World";

    $data = [
        'welcome_message' => $welcome_message
    ];

    return view('home', $data);

})->name('home');

Route::get('/about', function () {

    $class_number = 'Classe 87';

    $data = [
        'class_number' => $class_number,
        'students' => [
            'Federico',
            'Raffaele',
            'Sonia',
            'Alessia',
            'Riccardo',
            'Stefano',
            'Nicola'
        ],
        'teachers' => [
            'Simone',
            'Simone',
            'Daniele',
            'Thomas'
        ]
    ];
    
    return view('about', $data);

})->name('about');

