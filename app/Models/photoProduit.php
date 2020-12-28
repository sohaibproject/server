<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class photoProduit extends Model
{
    protected $table='`photo_produit';
    protected $fillable = [
        'name',
    ];
    public $timestamps=false;
    public function products()
    {
        return $this->hasMany('App\Models\Produit', 'photo_id');
    }
    public function getFileAttribute($image)
    {
        return "../images/".$image;
    }


}
