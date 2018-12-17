<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Ilce extends Model
{

    protected $table ='Ilce';
    public $timestamps=false;

    protected $fillable = [
        'il_id','ilce_adi','slug'
    ];


}
