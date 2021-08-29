<?php

namespace Database\Seeders;

use App\Models\FourthAliyah;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FourthAliyahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FourthAliyah::create([
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
        FourthAliyah::create([
            'created_at' => Carbon::now()->subMinutes(rand(1, 55)),
            'updated_at'  => Carbon::now()->subMinutes(rand(1, 55)),
            'name' => '',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'description' => '',
            'amount' => 0,
            'holiday_id' => 2,
        ]);
        FourthAliyah::create([
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
