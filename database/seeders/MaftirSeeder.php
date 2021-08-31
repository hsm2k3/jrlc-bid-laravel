<?php

namespace Database\Seeders;

use App\Models\Maftir;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MaftirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maftir::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Maftir',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 1,
        ]);
        Maftir::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Maftir',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 2,
        ]);
        Maftir::create([
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now(),
            'name' => '',
            'aliyah' => 'Maftir',
            'designation' => '',
            'email' => '',
            'phone' => '',
            'comment' => '',
            'amount' => 0,
            'holiday_id' => 3,
        ]);
    }
}
