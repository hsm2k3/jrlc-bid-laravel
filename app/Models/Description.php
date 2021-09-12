<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Description extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['aliyah', 'description', 'holiday_id'];
}
