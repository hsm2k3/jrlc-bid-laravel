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
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Fourth Aliyah',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 1,
        ]);
        FourthAliyah::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Fourth Aliyah',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 2,
        ]);
        FourthAliyah::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Fourth Aliyah',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 3,
        ]);
    }
}
