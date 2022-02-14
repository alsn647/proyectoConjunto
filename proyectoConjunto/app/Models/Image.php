<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ["id", "product_id", "path", "name", "default", "created_at", "updated_at"];
    public function products(){
        return $this->belongsTo(Product::class);
    }
}
