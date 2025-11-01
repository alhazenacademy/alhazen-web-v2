<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('programs')->insert([
            ['name' => 'Coding Anak', 'sort_order' => 1, 'is_active' => true, 'created_at' => $now, ],
            ['name' => 'Roblox Studio', 'sort_order' => 2, 'is_active' => true, 'created_at' => $now, ],
            ['name' => 'Microsoft Office', 'sort_order' => 3, 'is_active' => true, 'created_at' => $now, ],
        ]);
    }
}
