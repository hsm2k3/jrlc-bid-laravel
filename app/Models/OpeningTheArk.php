<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpeningTheArk extends Model
{
    use HasFactory;

    public function holiday()
    {
        return $this->hasOne(OpeningTheArk::class);
    }
}
