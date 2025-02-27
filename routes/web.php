<?php

use App\Http\Resources\JokeResource;
use App\Models\Joke;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return JokeResource::collection(Joke::all());
});
