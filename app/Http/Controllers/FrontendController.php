<?php

namespace App\Http\Controllers;

use App\Cevirituru;
use App\Dil;
use App\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{



    public function uyeAlani()
    {
        return view('pages.uyealani');
    }



    public function tercumanAlani()
    {
        return view('pages.tercumanalani');
    }


    public function ceviriIlani()
    {
        $dil = Dil::orderBy('DilAdi','asc')->get();
        $ceviri_turu = Cevirituru::orderBy('name','asc')->get();
        return view('pages.ceviri-ilani',compact('dil','ceviri_turu'));
    }

    public function welcome()
    {

        $tercumanlar = User::where('role_id',2)
            ->orderBy('created_at','DESC')
            ->limit(4)
            ->get();


        return view('welcome',compact('tercumanlar'));
    }


    public function tumTercumanlar()
    {
        $tercumanlarlist = User::with('profile')
            ->where('role_id',2)
            ->orderBy('created_at','DESC')
            ->paginate(10);

        return view('pages.tumtercumanlar',compact('tercumanlarlist'));

    }





}
