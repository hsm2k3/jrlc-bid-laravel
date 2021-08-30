<?php

namespace Database\Seeders;

use App\Models\GelilahTwo;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GelilahTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GelilahTwo::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Gelilah Two',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'description' => '',
            'amount' => 0,
            'holiday_id' => 1,
        ]);
        GelilahTwo::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Gelilah Two',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'description' => 'test',
            'amount' => 0,
            'holiday_id' => 2,
        ]);
        GelilahTwo::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Gelilah Two',
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
