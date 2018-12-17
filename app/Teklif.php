<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Teklif extends Model
{

    protected $table ='teklif';
    public $timestamps=false;

    protected $fillable = [
        'user_id','ilan_id','fiyat','teklif_tarihi','durum'
    ];



    public function is_ilani()
    {

        return $this->hasOne('App\Isilani','id','ilan_id');

    }



    public function tercuman2()
    {
        return $this->hasOne('App\User','id','user_id');
    }





}
