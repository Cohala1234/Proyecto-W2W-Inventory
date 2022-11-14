<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\generalActivity;
use App\Models\responseActivity;
use App\Models\workOrder;

class orderActivityResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderActivityResponse',
        'general_activity_id',
        'response_activity_id',
        'work_order_id'
    ];

    public function generalActivity(){
        return $this->belongsTo(generalActivity::class);
    }
    public function responseActivity(){
        return $this->belongsTo(responseActivity::class);
    }
    public function workOrder(){
        return $this->belongsTo(workOrder::class);
    }
}
