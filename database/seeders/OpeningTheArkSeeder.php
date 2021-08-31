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
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Opening the ark',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 1,
        ]);
        OpeningTheArk::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Opening the ark',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 2,
        ]);
        OpeningTheArk::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Opening the ark',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 3,
        ]);
    }
}
