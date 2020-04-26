<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function __invoke()
    {
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
    }
}
