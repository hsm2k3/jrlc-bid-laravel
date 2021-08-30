<?php

namespace Database\Seeders;

use App\Models\PuttingOnTheShieldOne;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PuttingOnTheShieldOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PuttingonTheShieldOne::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Putting on the shield one',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'description' => '',
            'amount' => 0,
            'holiday_id' => 1,
        ]);
        PuttingonTheShieldOne::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Putting on the shield one',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'description' => 'test',
            'amount' => 0,
            'holiday_id' => 2,
        ]);
        PuttingonTheShieldOne::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Putting on the shield one',
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
