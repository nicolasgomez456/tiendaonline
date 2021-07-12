<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //relacion muchos a muchos
    public function products(){
        return $this->belongsToMany(product::class);
    }

    public function sizes(){
        return $this->belongsToMany(size::class);
    }
}
