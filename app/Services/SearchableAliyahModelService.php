<?php

namespace App\Services;

use App\Models\FifthAliyah;
use App\Models\FirstAliyah;
use App\Models\FourthAliyah;
use App\Models\GelilahOne;
use App\Models\GelilahTwo;
use App\Models\HagBahOne;
use App\Models\HagBahTwo;
use App\Models\Maftir;
use App\Models\OpeningTheArk;
use App\Models\PuttingOnTheCrownOne;
use App\Models\PuttingOnTheCrownTwo;
use App\Models\PuttingOnTheShieldOne;
use App\Models\PuttingOnTheShieldTwo;
use App\Models\SecondAliyah;
use App\Models\ThirdAliyah;

class SearchableAliyahModelService
{
    /**
     * @param $request
     * @return string
     */
    public function getAliyah($request): ?string
    {
        $aliyahs = [
            OpeningTheArk::class => "Opening the ark",
            FirstAliyah::class => "First Aliyah",
            SecondAliyah::class => "Second Aliyah",
            ThirdAliyah::class => "Third Aliyah",
            FourthAliyah::class => "Fourth Aliyah",
            FifthAliyah::class => "Fifth Aliyah",
            Maftir::class => "Maftir",
            HagBahOne::class => "Hag Bah One",
            HagBahTwo::class => "Hag Bah Two",
            GelilahOne::class => "Gelilah One",
            GelilahTwo::class => "Gelilah Two",
            PuttingOnTheCrownOne::class => "Putting on the crown one",
            PuttingOnTheCrownTwo::class => "Putting on the crown two",
            PuttingOnTheShieldOne::class => "Putting on the shield one",
            PuttingOnTheShieldTwo::class => "Putting on the shield two",
        ];
        foreach($aliyahs as $key => $value)
        {
            if($request['aliyah'] == $value)
                return  $key;
        }
        return null;
    }

}
