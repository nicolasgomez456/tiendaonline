<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $guarded =['id', 'created_at', 'updated_at'];

    //relacion uno a muchos
    public function sizes(){
        return $this->hasMany(size::class);
    }

    //relacion uno a muchos inversa
    public function brand(){
        return $this->belongsTo(brand::class);
    }

    public function subcategory(){
        return $this->belongsTo(subcategory::class);
    }


    //relacion muchos a muchos
    public function colors(){
        return $this->belongsToMany(color::class);
    }

    //relacion uno a muchos polimorficas
    public function images(){
        return $this->morphMany(image::class, "imageable");
    }


}
