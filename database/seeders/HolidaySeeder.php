<?php

namespace Database\Seeders;

use App\Models\Holiday;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Holiday::create([
            'created_at' => Carbon::now()->subMinutes(rand(1, 55)),
            'updated_at'  => Carbon::now()->subMinutes(rand(1, 55)),
            'holiday' => 'Rosh Hashanah Day 1',
            'description' => '',
        ]);
        Holiday::create([
            'created_at' => Carbon::now()->subMinutes(rand(1, 55)),
            'updated_at'  => Carbon::now()->subMinutes(rand(1, 55)),
            'holiday' => 'Rosh Hashanah Day 2',
            'description' => '',
        ]);
        Holiday::create([
            'created_at' => Carbon::now()->subMinutes(rand(1, 55)),
            'updated_at'  => Carbon::now()->subMinutes(rand(1, 55)),
            'holiday' => 'Yom Kippur',
            'description' => '',
        ]);
    }
}
