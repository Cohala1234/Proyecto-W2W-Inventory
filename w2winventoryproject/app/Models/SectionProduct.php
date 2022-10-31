<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
use App\Models\Section;
class SectionProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'section_id'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function section(){
        return $this->belongsTo(Section::class);
    }
}
