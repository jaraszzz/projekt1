<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\UzytkownicyController;
use App\Models\Uzytkownicy;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome', ['name' => 'James']);
})->name('home');

Route::get('/uzytkownicy',[UzytkownicyController::class,'index']);

$uzytkownicy = User::orderBy('id')
        ->get();

$uzytkownik1 = User::orderBy('created_at','desc')->first();

$date = Carbon::today();
$date = $date->sub('7 days');
$users_last_week = User::orderBy('id')->whereDate('created_at', '>=', $date)->count();

Route::view('dashboard', 'dashboard',compact('uzytkownicy','uzytkownik1','users_last_week'))
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
