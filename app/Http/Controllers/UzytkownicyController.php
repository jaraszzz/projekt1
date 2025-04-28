<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uzytkownicy;

class UzytkownicyController extends Controller
{
    public function index(){
        $uzytkownicy = Uzytkownicy::orderBy('id')
        ->get();
        return view('viewtest', compact('uzytkownicy'));
    }
}
