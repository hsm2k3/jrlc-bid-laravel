<?php

namespace Database\Seeders;

use App\Models\FirstAliyah;
use Illuminate\Database\Seeder;

class FirstAliyahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FirstAliyah::factory()->times(100)->create();
    }
}
