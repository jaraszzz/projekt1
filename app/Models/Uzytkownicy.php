<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uzytkownicy extends Model
{
    use HasFactory;

    protected $table = 'uzytkownicy';

    protected $fillable = [
        'name',
        'email',
        'company_id',
    ];
}
