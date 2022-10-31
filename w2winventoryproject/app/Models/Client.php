<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\typeClients;
use App\Models\User;
use App\Models\SectorMaster;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameClient',
        'phoneClient',
        'mailClient',
        'type_client_id',
        'user_id',
        'sector_master_id'
    ];

    public function typeClient(){
        return $this->belongsTo(typeClients::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function sectorMaster(){
        return $this->belongsTo(SectorMaster::class);
    }

}
