<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rejestr extends Model
{
    use HasFactory;

    protected $table = 'rejestr_wejsc';

    protected $fillable = [
        'imie_i_nazwisko',
        'wejscie',
        'nazwa_podmiotu',
        'imie_i_nazwisko_pracownik',
        'cel_wizyty',
        'entrance',
    ];
}
