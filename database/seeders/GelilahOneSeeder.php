<?php

namespace Database\Seeders;

use App\Models\GelilahOne;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GelilahOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GelilahOne::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Gelilah One',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 180,
            'holiday_id' => 1,
        ]);
        GelilahOne::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Gelilah One',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 180,
            'holiday_id' => 2,
        ]);
        GelilahOne::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Gelilah One',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 180,
            'holiday_id' => 3,
        ]);
    }
}
