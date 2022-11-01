<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeProduct;
use App\Models\Section;
use App\Models\unityMeasurement;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameProduct',
        'barCode',
        'type_product_id',
        'section_id',
        'unity_measurement_id'
    ];

    public function typeProduct(){
        return $this->belongsTo(TypeProduct::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function unityMeasurement(){
        return $this->belongsTo(unityMeasurement::class);
    }
}
