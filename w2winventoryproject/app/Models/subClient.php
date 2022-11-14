<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Client;
use App\Models\countries;
use App\Models\departaments;
use App\Models\cities;
use App\Models\Warehouse;

class subClient extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'country_id',
        'departament_id',
        'city_id',
        'warehouse_id'
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function country(){
        return $this->belongsTo(countries::class);
    }
    public function departament(){
        return $this->belongsTo(departaments::class);
    }
    public function city(){
        return $this->belongsTo(cities::class);
    }
    public function wareHouse(){
        return $this->belongsTo(Warehouse::class);
    }
}
