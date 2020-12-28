<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';
    protected $fillable = [
        'montant','produits','mobile','name','photo','created_at','updated_at',
    ];
    protected $hidden = [
        'created_at','updated_at',
        
     ];
    //  public $timestamps=false;
}
