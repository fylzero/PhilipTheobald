<?php

// Vue Router Hack
Route::get('/{any}', function() {
    return view('welcome');
})->where('any', '.*');
