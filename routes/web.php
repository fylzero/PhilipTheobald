<?php

// Vue Router Hack
Route::get('/{any}', 'PageController@app')->where('any', '.*');
