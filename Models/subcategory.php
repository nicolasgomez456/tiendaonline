<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    use HasFactory;

    protected $guarded =['id', 'created_at', 'updated_at'];

    //relacion uno a muchos
    public function products(){
        return $this->hasMany(product::class);
    }

    //relacion uno a muchos inversa
    public function category(){
        return $this->belongsTo(category::class);
    }
}
