<?php

use App\Livewire\Fouls;
use App\Livewire\Matchs;
use App\Livewire\Players;
use App\Livewire\SoccerTeam;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('teams', SoccerTeam::class)->name('teams.show');
    Route::get('matchs', Matchs::class)->name('matchs.show');
    Route::get('players', Players::class)->name('players.show');
    Route::get('fouls', Fouls::class)->name('fouls.show');
});
