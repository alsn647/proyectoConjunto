<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ["id", "user_id", "town", "address", "patio", "puerta", "cp", "default", "created_at", "updated_at"];
    public function users(){
        return $this->belongsTo(User::class);
    }
}
