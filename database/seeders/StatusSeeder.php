<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            ['name' => 'Not Verified'],
            ['name' => 'Verified'],
            ['name' => 'Registered'],
            ['name' => 'Already Chosen'],
        ];

        DB::table('statuses')->insert($status);
    }
}
