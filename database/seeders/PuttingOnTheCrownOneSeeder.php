<?php

namespace Database\Seeders;

use App\Models\PuttingOnTheCrownOne;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PuttingOnTheCrownOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PuttingOnTheCrownOne::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Putting on the crown one',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 180,
            'holiday_id' => 1,
        ]);
        PuttingOnTheCrownOne::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Putting on the crown one',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 180,
            'holiday_id' => 2,
        ]);
        PuttingOnTheCrownOne::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Putting on the crown one',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 180,
            'holiday_id' => 3,
        ]);
    }
}
