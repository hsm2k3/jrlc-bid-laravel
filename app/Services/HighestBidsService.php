<?php

namespace App\Services;

use App\Models\FifthAliyah;
use App\Models\FirstAliyah;
use App\Models\FourthAliyah;
use App\Models\GelilahOne;
use App\Models\GelilahTwo;
use App\Models\HagBahOne;
use App\Models\HagBahTwo;
use App\Models\Holiday;
use App\Models\Maftir;
use App\Models\OpeningTheArk;
use App\Models\PuttingOnTheCrownOne;
use App\Models\PuttingOnTheCrownTwo;
use App\Models\PuttingOnTheShieldOne;
use App\Models\PuttingOnTheShieldTwo;
use App\Models\SecondAliyah;
use App\Models\ThirdAliyah;

class HighestBidsService
{
    public function getHighestBids()
    {
        $holidays = Holiday::all();
        foreach($holidays as $holiday)
        {
            $highestBids = $this->setHighestBids($holiday->id);
            $json[] = ["key" => $holiday->id, "title" => $holiday->holiday, "biddingItems" =>  $highestBids];
        }
        return $json;
    }

    /**
     * @param int $id
     */
    public function setHighestBids($id)
    {
        $highestBids[] = OpeningTheArk::select('id', 'aliyah', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $highestBids[] = FirstAliyah::select('id', 'aliyah', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $highestBids[] = SecondAliyah::select('id', 'aliyah', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $highestBids[] = ThirdAliyah::select('id', 'aliyah', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $highestBids[] = FourthAliyah::select('id', 'aliyah', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $highestBids[] = FifthAliyah::select('id', 'aliyah', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $highestBids[] = Maftir::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $highestBids[] = HagBahOne::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $highestBids[] = HagBahTwo::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $highestBids[] = GelilahOne::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $highestBids[] = GelilahTwo::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $highestBids[] = PuttingOnTheCrownOne::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $highestBids[] = PuttingOnTheCrownTwo::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $highestBids[] = PuttingOnTheShieldOne::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $highestBids[] = PuttingOnTheShieldTwo::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        return $highestBids;
    }
}
