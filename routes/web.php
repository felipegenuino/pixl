<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feed', function () {
    $feedItems = json_decode(json_encode([
        [
            'postedDateTime' => '3h',
            'content' =>  <<<'str'
                <p>
                  I made this! <a href="#">#myartwork</a> <a href="#">#pixl</a>
                </p>
                <img src="/images/simon-chilling.png" alt="" />
            str,
            'likesCount' => 24,
            'replyCount' => 45,
            'repostCount' => 151,
            'profile' => [
                'avatar' => '/images/adrian.png',
                'displayName' => 'adrian',
                'handle' => '@adrian_dev',
                'content' => 'Just finished a new project! Check it out on my portfolio.',
            ],

        ]
    ]));
    return view('feed', compact('feedItems'));
});

Route::get('/profile', function () {
    $feedItems = json_decode(json_encode([
        [
            'postedDateTime' => '3h',
            'content' =>  <<<'str'
                <p>
                  I made this! <a href="#">#myartwork</a> <a href="#">#pixl</a>
                </p>
                <img src="/images/simon-chilling.png" alt="" />
            str,
            'likesCount' => 24,
            'replyCount' => 45,
            'repostCount' => 151,
            'profile' => [
                'avatar' => '/images/adrian.png',
                'displayName' => 'adrian',
                'handle' => '@adrian_dev',
                'content' => 'Just finished a new project! Check it out on my portfolio.',
            ],

        ]
    ]));
    return view('profile', compact('feedItems'));
});
