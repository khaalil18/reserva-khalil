<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zones')->insert([
            'name' => 'Patio',
        ]);
        DB::table('zones')->insert([
            'name' => 'Comedor',
        ]);
        $letters = range('A','Z');
        for($i=0;$i<10;$i++){
            DB::table('tables')->insert([
                'name' => $letters[$i],
                'capacity' => rand(2,8),
                'zone_id' => rand(1,2)
            ]);
        }
    }
}
