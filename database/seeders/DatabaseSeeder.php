<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            HolidaySeeder::class,
            OpeningTheArkSeeder::class,
            FirstAliyahSeeder::class,
            SecondAliyahSeeder::class,
            ThirdAliyahSeeder::class,
            FourthAliyahSeeder::class,
            FifthAliyahSeeder::class,
            MaftirSeeder::class,
        ]);
    }
}
