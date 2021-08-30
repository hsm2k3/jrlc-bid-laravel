<?php

namespace Database\Seeders;

use App\Models\Description;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aliyahs = array(
            'opening_the_arks',
            'first_aliyahs',
            'second_aliyahs',
            'third_aliyahs',
            'fourth_aliyahs',
            'fifth_aliyahs',
            'maftirs',
            'holiday_aliyah_details',
            'hag_bah_ones',
            'hag_bah_twos',
            'gelilah_ones',
            'gelilah_twos',
            'putting_on_the_crown_ones',
            'putting_on_the_crown_twos',
            'putting_on_the_shield_ones',
            'putting_on_the_shield_twos');
        $holidays = array(1,2,3,);
        foreach($holidays as $holiday)
            foreach($aliyahs as $key => $value)
                Description::create([
                    'created_at' => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                    'aliyah' => $value,
                    'description' => '',
                    'holiday_id' => $holiday,
                ]);
    }
}
