<?php

namespace Database\Seeders;

use App\Models\FourthAliyah;
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
        FourthAliyah::factory()->times(100)->create();
    }
}
