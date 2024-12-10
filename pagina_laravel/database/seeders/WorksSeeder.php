<?php

namespace Database\Seeders;

use App\Models\Works;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $work = new Works();
        $work->Nombre='Abel ';
        $work->Apellidos='Estrella Ojeda';
        $work->Gmail='Abel@gmail.com';
        $work->Contraseña=bcrypt('12345');
        $work->save();



    }
}
