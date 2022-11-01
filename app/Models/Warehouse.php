<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Client;
use App\Models\Section;
use App\Models\Site;

class Warehouse extends Model
{
    use HasFactory;
    protected $fillable = [
        'direction',
        'client_id',
        'section_id',
        'site_id'
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function site(){
        return $this->belongsTo(Site::class);
    }
}
