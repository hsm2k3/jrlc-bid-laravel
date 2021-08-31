<?php

namespace Database\Seeders;

use App\Models\PuttingOnTheCrownTwo;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PuttingOnTheCrownTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PuttingOnTheCrownTwo::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Putting on the crown two',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 1,
        ]);
        PuttingOnTheCrownTwo::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Putting on the crown two',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 2,
        ]);
        PuttingOnTheCrownTwo::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Putting on the crown two',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 3,
        ]);
    }
}
