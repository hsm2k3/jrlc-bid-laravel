<?php

namespace Database\Seeders;

use App\Models\ThirdAliyah;
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
        ThirdAliyah::factory()->times(100)->create();
    }
}
