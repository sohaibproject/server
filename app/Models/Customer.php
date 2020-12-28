<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customers';
    protected $fillable = [
        'name','photo', 'description',
    ];
    // protected $casts = [
    //     'is_vedette' => 'boolean',
        
    // ];
    public $timestamps=false;
}
