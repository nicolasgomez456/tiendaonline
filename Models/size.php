<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_id'];

    //relacion uno a muchos inversa
    public function product(){
        return $this->belongsTo(product::class);
    }

    //relacion muchos a muchos
    public function colors(){
        return $this->belongsToMany(color::class);
    }
}
