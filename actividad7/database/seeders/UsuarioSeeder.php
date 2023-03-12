<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Usuarios;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'nombre_usuario' => 'Admon',
            'rol' => 'Administrativo',
            'email' => 'admon@robotics.com',
            'password' => 'Adm@2022',
        ]);

        DB::table('usuarios')->insert([
            'nombre_usuario' => 'Tecmilenio',
            'rol' => 'Profesor',
            'email' => 'tecmilenio@robotics.com',
            'password' => 'Adm@2022',
        ]);

        DB::table('usuarios')->insert([
            'nombre_usuario' => 'Estudiante',
            'rol' => 'Estudiante',
            'email' => 'student@robotics.com',
            'password' => 'Adm@2022',
        ]);

    }
}
