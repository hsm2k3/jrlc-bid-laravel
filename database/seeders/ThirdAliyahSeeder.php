<?php

namespace Database\Seeders;

use App\Models\ThirdAliyah;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ThirdAliyahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThirdAliyah::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Third Aliyah',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 180,
            'holiday_id' => 1,
        ]);
        ThirdAliyah::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Third Aliyah',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 180,
            'holiday_id' => 2,
        ]);
        ThirdAliyah::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Third Aliyah',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 180,
            'holiday_id' => 3,
        ]);
    }
}
