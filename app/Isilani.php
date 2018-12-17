<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Isilani extends Model
{

    protected $table="is_ilani";

    protected $fillable = [
        'kaynak_dil_id', 'hedef_dil_id','ceviri_turu_id','telefon' ,'proje_basligi','aciklama','created_at','updated_at',
        'user_id','durum','active','reddetme_aciklamasi'
    ];



    public function images()
    {
        return $this->hasMany('App\CeviriImage','ceviri_is_id','id');
    }


    public function kaynakDil()
    {

        return $this->hasOne('App\Dil','id','kaynak_dil_id');

    }


    public function hedefDil()
    {
        return $this->hasOne('App\Dil','id','kaynak_dil_id');
    }


    public function ceviriTuru()
    {
        return $this->hasOne('App\Cevirituru','id','ceviri_turu_id');
    }



    public function teklif()
    {

        return $this->hasMany('App\Teklif','ilan_id','id');

    }


    public function dosya()
    {

        return $this->hasMany('App\CeviriImage','ceviri_is_id','id');

    }

    public function tercuman()
    {
        return $this->hasOne('App\User','id','user_id');
    }


    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }


}
