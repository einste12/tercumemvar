<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Il extends Model
{

    protected $table ='il';
    public $timestamps=false;

    protected $fillable = [
        'il_adi','slug',
    ];


}
