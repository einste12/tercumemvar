<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CeviriImage extends Model
{

    protected $table="ceviri_images";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ceviri_is_id', 'ceviri_image_name','ceviri_image_path','ceviri_image_size' ,'ceviri_image_extention','created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
