<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\kit_roboticas;

class kitRoboticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kit_roboticas')->insert([
            'nombre_kit' => 'Introduction to Robotics',
            ]);
        
            DB::table('kit_roboticas')->insert([
                'nombre_kit' => 'Introduction to Automation',
                ]);
            
                DB::table('kit_roboticas')->insert([
                    'nombre_kit' => 'Programming for Robotics',
                    ]);
                
                    DB::table('kit_roboticas')->insert([
                        'nombre_kit' => 'Characteristics of a Robot',
                        ]);
    }
}
