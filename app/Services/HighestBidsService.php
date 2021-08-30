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
    private $highestBids = [];
    private $openingTheArk;
    private $firstAliyah;
    private $secondAliyah;
    private $thirdAliyah;
    private $fourthAliyah;
    private $fifthAliyah;
    private $maftir;
    private $hagBahOne;
    private $hagBahTwo;
    private $gelilahOne;
    private $gelilahTwo;
    private $puttingOnTheCrownOne;
    private $puttingOnTheCrownTwo;
    private $puttingOnTheShieldOne;
    private $puttingOnTheShieldTwo;

    public function getHighestBids()
    {
        $holidays = Holiday::all();
        foreach($holidays as $holiday)
        {
            $this->setHighestBids($holiday->id);
            $json[] = ["key" => $holiday->id, "title" => $holiday->holiday, "biddingItems" =>  $this->highestBids];
        }
        return $json;
    }

    /**
     * @param $id
     */
    public function setHighestBids($id)
    {
        $this->openingTheArk = OpeningTheArk::select('id', 'aliyah', 'amount', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->firstAliyah = FirstAliyah::select('id', 'aliyah', 'amount', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->secondAliyah = SecondAliyah::select('id', 'aliyah', 'amount', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->thirdAliyah = ThirdAliyah::select('id', 'aliyah', 'amount', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->fourthAliyah = FourthAliyah::select('id', 'aliyah', 'amount', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->fifthAliyah = FifthAliyah::select('id', 'aliyah', 'amount', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->maftir = Maftir::select('id', 'amount', 'aliyah', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->hagBahOne = HagBahOne::select('id', 'amount', 'aliyah', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->hagBahTwo = HagBahTwo::select('id', 'amount', 'aliyah', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->gelilahOne = GelilahOne::select('id', 'amount', 'aliyah', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->gelilahTwo = GelilahTwo::select('id', 'amount', 'aliyah', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->puttingOnTheCrownOne = PuttingOnTheCrownOne::select('id', 'amount', 'aliyah', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->puttingOnTheCrownTwo = PuttingOnTheCrownTwo::select('id', 'amount', 'aliyah', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->puttingOnTheShieldOne = PuttingOnTheShieldOne::select('id', 'amount', 'aliyah', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->puttingOnTheShieldTwo = PuttingOnTheShieldTwo::select('id', 'amount', 'aliyah', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->highestBids[] = $this->openingTheArk;
        $this->highestBids[] = $this->firstAliyah;
        $this->highestBids[] = $this->secondAliyah;
        $this->highestBids[] = $this->thirdAliyah;
        $this->highestBids[] = $this->fourthAliyah;
        $this->highestBids[] = $this->fifthAliyah;
        $this->highestBids[] = $this->maftir;
        $this->highestBids[] = $this->hagBahOne;
        $this->highestBids[] = $this->hagBahTwo;
        $this->highestBids[] = $this->gelilahOne;
        $this->highestBids[] = $this->gelilahTwo;
        $this->highestBids[] = $this->puttingOnTheCrownOne;
        $this->highestBids[] = $this->puttingOnTheCrownTwo;
        $this->highestBids[] = $this->puttingOnTheShieldOne;
        $this->highestBids[] = $this->puttingOnTheShieldTwo;
    }
}
