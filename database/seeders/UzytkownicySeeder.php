<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Uzytkownicy;

class UzytkownicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{   
        Uzytkownicy::factory(10)->create();
    }
}
