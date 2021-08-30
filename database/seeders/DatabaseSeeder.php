<?php

namespace Database\Seeders;

use App\Models\GelilahOne;
use App\Models\GelilahTwo;
use App\Models\HagBahOne;
use App\Models\HagBahTwo;
use App\Models\PuttingOnTheCrownOne;
use App\Models\PuttingOnTheCrownTwo;
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
            HagBahOneSeeder::class,
            HagBahTwoSeeder::class,
            GelilahOneSeeder::class,
            GelilahTwoSeeder::class,
            PuttingOnTheCrownOneSeeder::class,
            PuttingOnTheCrownTwoSeeder::class,
            PuttingOnTheShieldOneSeeder::class,
            PuttingOnTheShieldTwoSeeder::class,
        ]);
    }
}
