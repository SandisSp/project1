<?php

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


Route::get('/galvena', function () {
    return view('galvena');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/blogs1', function () {
    return view('blogs1');
});

Route::get('/blogs2', function () {
    return view('blogs2');
});

Route::get('/blogs3', function () {
    return view('blogs3');
});

Route::get('/blogs4', function () {
    return view('blogs4');
});

Route::get('/blogs5', function () {
    return view('blogs5');
});

Route::get('/raksti', function () {
    return view('raksti');
});

Route::get('/kontakti', function () {
    return view('kontakti');
});

Route::post('/kontakti', function () {
    $name = request('contact_name');
    $mail = request('contact_mail');
    $msg = request('contact_msg');

    $myNewPost = new \App\Post;

    $myNewPost->title = $name;
    $myNewPost->body = $mail;
    $myNewPost->text = $msg;
    $timestamps = false;

    $myNewPost->save();
    
    return redirect('/galvena');
});