<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\countries;
use App\Models\cities;

class departaments extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameDepartament',
        'city_id',
        'country_id'
    ];

    public function country(){
        return $this->belongsTo(countries::class);
    }

    public function city(){
        return $this->belongsTo(cities::class);
    }
}
