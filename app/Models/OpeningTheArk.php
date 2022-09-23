<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpeningTheArk extends Model
{
    use HasFactory;

    protected $fillable = ["name", "aliyah", "designation", "email", "phone", "comment", "amount", "holiday_id"];

    protected $casts = [
        'created_at' => 'datetime:m/d/Y H:i',
        'updated_at' => 'datetime:m/d/Y H:i',
    ];

    public function holiday()
    {
        return $this->hasOne(OpeningTheArk::class);
    }
}
