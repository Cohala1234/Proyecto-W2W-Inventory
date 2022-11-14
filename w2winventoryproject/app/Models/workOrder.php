<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'workName',
        'order_type_id',
        'sub_client_id'
    ];
}
