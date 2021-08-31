<?php

namespace Database\Seeders;

use App\Models\SecondAliyah;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SecondAliyahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SecondAliyah::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Second Aliyah',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 1,
        ]);
        SecondAliyah::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Second Aliyah',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 2,
        ]);
        SecondAliyah::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Second Aliyah',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 3,
        ]);
    }
}
