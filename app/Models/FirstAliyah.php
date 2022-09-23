<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FirstAliyah extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ["name", "aliyah", "designation", "email", "phone", "comment", "amount", "holiday_id"];
    protected $casts = [
        'created_at' => 'datetime:m/d/Y H:i',
        'updated_at' => 'datetime:m/d/Y H:i',
    ];
}
