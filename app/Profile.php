<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $table ='profile';
    public $timestamps=false;

    protected $fillable = [
        'user_id','ilan_id','title','iban','bildigi_diller','web_site','il_id','ilce_id',
    ];

    public function il()
    {
        return $this->hasOne('App\Il','id','il_id');
    }

    public function ilce()
    {
        return $this->hasOne('App\Ilce','id','ilce_id');
    }


}
