<?php

namespace Database\Seeders;

use App\Models\Maftir;
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
        Maftir::factory()->times(100)->create();
    }
}
