<?php

$router->get('/dashboard', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    dump($users);

    return view('admin.dashboard');
})->name('dashboard');

$router->get('/',function (){
    return redirect()->route('admin.dashboard');

});

