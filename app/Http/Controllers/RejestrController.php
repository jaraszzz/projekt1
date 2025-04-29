<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rejestr;

use Carbon\Carbon;

class RejestrController extends Controller
{
    public function index(){
        return redirect()->route('home');
    }   

    public function store(Request $request){
        $request->validate([
            'imie_i_nazwisko' => 'required',
            'wejscie' => 'required',
            'imie_i_nazwisko_pracownik' => 'required',
            'cel_wizyty' => 'required',
            'nazwa_podmiotu' => 'required',
            'entrance' => 'required',
        ]);

        $rejestr = new Rejestr();

        $rejestr->imie_i_nazwisko = $request->get('imie_i_nazwisko');
        $rejestr->imie_i_nazwisko_pracownik = $request->get('imie_i_nazwisko_pracownik');
        $rejestr->nazwa_podmiotu = $request->get('nazwa_podmiotu');
        $rejestr->cel_wizyty = $request->get('cel_wizyty');
        $rejestr->wejscie = Carbon::parse($request->get('wejscie'))->format('Y-m-d H:i');
        $rejestr->entrance = $request->get('entrance');

        $rejestr->save();

        return $this->index();
    }
}
