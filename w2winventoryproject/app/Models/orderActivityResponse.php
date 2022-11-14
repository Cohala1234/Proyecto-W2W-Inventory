<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderActivityResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderActivityResponse',
        'general_activity_id',
        'response_activity_id',
        'work_order_id'
    ];
}
