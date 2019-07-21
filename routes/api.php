<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/info', function() {
    $about = [
        'first_name' => 'Philip',
        'last_name' => 'Theobald',
        'email' => 'info@philiptheobald.com',
        'phone' => '312-802-2423',
        'website' => 'https://www.philiptheobald.com',
        'socials' => [
            'linkedin_url' => 'https://www.linkedin.com/in/philiptheobald/',
            'facebook_url' => 'https://www.facebook.com/fylzero',
            'twitter_url' => 'https://twitter.com/fylzero',
            'youtube_url' => 'https://www.youtube.com/fylzero',
            'instagram_url' => 'https://www.instagram.com/fylzero/',
        ]
    ];
    return response()->json($about);
});
