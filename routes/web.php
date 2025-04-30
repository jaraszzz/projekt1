<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\UzytkownicyController;
use App\Models\Uzytkownicy;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Rejestr;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RejestrController;
use App\Http\Controllers\UserController;

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

$rejestr = Rejestr::orderBy('id','desc')->get();

Route::view('dashboard', 'dashboard',compact('uzytkownicy','uzytkownik1','users_last_week','rejestr'))
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::view('newuser','newuser',compact('uzytkownicy'))
    ->middleware(['auth', 'verified'])
    ->name('newuser');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});


Route::post('dodajrejestr',[RejestrController::class,'store']);

Route::post('dodajuser',[UserController::class,'store']);


require __DIR__.'/auth.php';
