<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Dil extends Model
{


    protected $table ='diller';
    public $timestamps=false;

    protected $fillable = [
        'DilAdi','DilAdiEn'
    ];



}
