<?php

namespace Database\Seeders;

use App\Models\SecondAliyah;
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
        SecondAliyah::factory()->times(100)->create();
    }
}
