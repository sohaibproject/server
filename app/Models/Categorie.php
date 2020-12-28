<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table='categories';
    protected $fillable = [
        'name','photo',
    ];
    public $timestamps=false;

    public function products()
    {
        return $this->hasMany('App\Models\Produit', 'categorie_id');
    }
}

