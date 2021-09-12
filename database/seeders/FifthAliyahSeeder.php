<?php

namespace Database\Seeders;

use App\Models\FifthAliyah;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FifthAliyahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FifthAliyah::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Fifth Aliyah',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 180,
            'holiday_id' => 1,
        ]);
        FifthAliyah::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Fifth Aliyah',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 180,
            'holiday_id' => 2,
        ]);
        FifthAliyah::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Fifth Aliyah',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 180,
            'holiday_id' => 3,
        ]);
    }
}
