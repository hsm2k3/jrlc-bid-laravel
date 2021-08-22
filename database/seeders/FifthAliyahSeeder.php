<?php

namespace Database\Seeders;

use App\Models\FifthAliyah;
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
        FifthAliyah::factory()->times(100)->create();
    }
}
