<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cevirituru extends Model
{

    protected $table ='ceviri_turu';
    public $timestamps=false;

    protected $fillable = [
        'name',
    ];



}
