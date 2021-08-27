<?php

namespace App\Services;

use App\Models\FifthAliyah;
use App\Models\FirstAliyah;
use App\Models\FourthAliyah;
use App\Models\Maftir;
use App\Models\OpeningTheArk;
use App\Models\SecondAliyah;
use App\Models\ThirdAliyah;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class HighestBidsService
{
    private $highestBids = [
        "OpeningTheArk" => "",
        "FirstAliyah" => "",
        "SecondAliyah" => "",
        "ThirdAliyah" => "",
        "FourthAliyah" => "",
        "FifthAliyah" => "",
        "Maftir" => "",
        ];

    public function getHighestBids()
    {
        $this->highestBids["OpeningTheArk"] = $this->openingTheArk = OpeningTheArk::latest('updated_at')->first();
        $this->highestBids["FirstAliyah"] = $this->firstAliyah = FirstAliyah::latest('updated_at')->first();
        $this->highestBids["SecondAliyah"] = $this->secondAliyah = SecondAliyah::latest('updated_at')->first();
        $this->highestBids["ThirdAliyah"] = $this->thirdAliyah = ThirdAliyah::latest('updated_at')->first();
        $this->highestBids["FourthAliyah"] = $this->fourthAliyah = FourthAliyah::latest('updated_at')->first();
        $this->highestBids["FifthAliyah"] = $this->fifthAliyah = FifthAliyah::latest('updated_at')->first();
        $this->highestBids["Maftir"] = $this->maftir = Maftir::latest('updated_at')->first();
        return $this->highestBids;

    }

    public function isOpeningTheArk() : bool
    {
        try{
            $this->openingTheArk = OpeningTheArk::latest('created_at')->firstOrFail();
            return true;
        }
        catch(ModelNotFoundException $e)
        {
            return false;
        }
    }
}
