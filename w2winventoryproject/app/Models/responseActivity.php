<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class responseActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'response'
    ];
}
