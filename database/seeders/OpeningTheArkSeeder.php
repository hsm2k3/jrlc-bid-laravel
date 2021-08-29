<?php

namespace Database\Seeders;

use App\Models\OpeningTheArk;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OpeningTheArkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OpeningTheArk::create([
            'created_at' => Carbon::now()->subMinutes(rand(1, 55)),
            'updated_at'  => Carbon::now()->subMinutes(rand(1, 55)),
            'name' => '',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'description' => '',
            'amount' => 0,
            'holiday_id' => 1,
        ]);
        OpeningTheArk::create([
            'created_at' => Carbon::now()->subMinutes(rand(1, 55)),
            'updated_at'  => Carbon::now()->subMinutes(rand(1, 55)),
            'name' => '',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'description' => 'test',
            'amount' => 0,
            'holiday_id' => 2,
        ]);
        OpeningTheArk::create([
            'created_at' => Carbon::now()->subMinutes(rand(1, 55)),
            'updated_at'  => Carbon::now()->subMinutes(rand(1, 55)),
            'name' => '',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'description' => '',
            'amount' => 0,
            'holiday_id' => 3,
        ]);
    }
}
