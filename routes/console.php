<?php

use App\Models\Joke;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

Artisan::command('joker', function () {
    $haveJoke = false;
    while(! $haveJoke) {
        $response = Http::get('http://official-joke-api.appspot.com/random_joke');
        if (! Joke::find($response['id'])) {
            Joke::create($response->json());
            $haveJoke = true;
        }
    }
})->purpose('save joke from API')->everyFiveSeconds();