<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('currencies')->insert([
            [
                'name' => 'US Dollar',
                'symbol' => 'USD',
                'exchange_rate' => 1.000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Euro',
                'symbol' => 'EUR',
                'exchange_rate' => 0.900000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
