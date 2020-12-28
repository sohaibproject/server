<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table='produits';
    protected $fillable = [
        'name', 'price','photo', 'details','vedatte','categorie_id',
    ];
    protected $casts = [
        'is_vedette' => 'boolean',
        
    ];
    public $timestamps=false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'created_at','updated_at', 'remember_token',
    // ];
    public function Categorie()
    {
        return $this->belongsTo('App\Models\Categorie', 'categorie_id');
    }
    public function photo()
    {
        return $this->belongsTo('App\Models\photoProduit', 'photo_id');
    }
    public function getprice(){

        $price=$this->price;
        return number_format($price,2,',',' ') . 'da';
    }
}
