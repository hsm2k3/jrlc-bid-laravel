<?php

namespace Database\Seeders;

use App\Models\PuttingOnTheShieldTwo;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PuttingOnTheShieldTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PuttingOnTheShieldTwo::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Putting on the shield two',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'description' => '',
            'amount' => 0,
            'holiday_id' => 1,
        ]);
        PuttingOnTheShieldTwo::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Putting on the shield two',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'description' => 'test',
            'amount' => 0,
            'holiday_id' => 2,
        ]);
        PuttingOnTheShieldTwo::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Putting on the shield two',
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