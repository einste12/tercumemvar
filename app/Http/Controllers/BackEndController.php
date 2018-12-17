<?php

namespace App\Http\Controllers;

use App\Notifications\RepliedToThread;
use App\Profile;
use App\Teklif;
use App\User;
use App\Il;
use App\Ilce;
use App\Isilani;
use Carbon\Carbon;
use File;
use Auth;
use phpDocumentor\Reflection\Types\This;
use Vomsis\Netgsm\NetgsmFacade as Netgsm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManagerStatic as Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Input;

class BackEndController extends Controller
{

    public function index()
    {
        return view('admin.dashboard');
    }

    public function uyeAktifisler()
    {

        $uye_aktif_is = Isilani::with('kaynakDil','hedefDil','ceviriTuru')->where('user_id',Auth::user()->id)->where('active',1)->orderBy('created_at','desc')->paginate(10);

        return view('admin.adminpages.uyeaktifisler',compact('uye_aktif_is'));
    }


    public function uyeOnaybekleyenisler()
    {
        $uye_onay_bekleyen_isler = Isilani::with('kaynakDil','hedefDil')->where('user_id',Auth::user()->id)->where('active',0)->orderBy('created_at','desc')->paginate(10);

        return view('admin.adminpages.uyeonaybekleyenisler',compact('uye_onay_bekleyen_isler'));
    }









    /* İLAN YOLLAMA */

public function  ilanPost(Request $request)
{

    $request->validate([
        'telefon' => 'max:11|min:11',
        'proje_basligi' => 'max:50|unique:is_ilani|required',
    ]);




    $isilani = new Isilani();
    $isilani->kaynak_dil_id = $request->kaynak_dil_id;
    $isilani->hedef_dil_id = $request->hedef_dil_id;
    $isilani->ceviri_turu_id = $request->ceviri_turu_id;
    $isilani->telefon = $request->telefon;
    $isilani->proje_basligi = $request->proje_basligi;
    $isilani->aciklama = $request->aciklama;
    $isilani->user_id = Auth::user()->id;
    $isilani->durum = 1;
    $isilani->active = 0;
    $isilani->save();


    $files = Input::file('images');

    $path3 = public_path().'/dosyalar/' .str_slug($request->input('proje_basligi'));
    File::makeDirectory($path3,0777,true, true);


    $path88 ='dosyalar'.'/'. str_slug($request->input('proje_basligi'));

    //If the array is not empty
    if ($files[0] != '') {
        foreach($files as $file) {

            // Get the orginal filname or create the filename of your choice
            $filename = str_slug($file->getClientOriginalName());
            $filepath=$path88.'/'.$filename;
            $fileextention=$file->getClientOriginalExtension();
            $filesize=$file->getSize();
            // Copy the file in our upload folder
            $file->move($path3, $filename.'.'.$fileextention);

            $isilani->images()->create([
                'ceviri_image_name' => $filename,
                'ceviri_image_path' => $filepath,
                'ceviri_image_size' => $filesize,
                'ceviri_image_extention'=>$fileextention
            ]);


        }
    }

    alert()->success('İşiniz Başarı İle Gönderilmiştir.', 'Admin Onayından Geçtikten Sonra Tercümanlardan Teklif Gelicektir.')->autoClose(10000);
    return redirect()->back();

}



public function adminOnayaGelenisler()
{

    $admin_onay = Isilani::with('kaynakDil','hedefDil')->where('active',0)->orderBy('created_at','DESC')->paginate(5);
    return view('admin.adminpages.adminonayagelenisler',compact('admin_onay'));

}

public function adminIlanonayla(Request $request)
{


    $ilan_id = $request->ilanonaylaid;
    $ilan = Isilani::find($ilan_id);
    $ilan->active = 1;
    $ilan->update();

    alert()->success('İlan Başarı İle Onaylanmıştır', 'Tebrikler')->autoClose(5000);
    return redirect()->back();

}


    public function adminIlanreddet(Request $request)
    {


        $ilan_id = $request->ilanreddetid;
        $ilan = Isilani::find($ilan_id);
        $ilan->active = 2;
        $ilan->reddetme_aciklamasi=$request->reddetme_aciklamasi;
        $ilan->update();

        alert()->success('İlan Başarı İle Ret Edilmiştir', 'Tebrikler')->autoClose(5000);
        return redirect()->back();

    }



    public function tercumanGelenisler()
    {
        $tercuman_gelen = Isilani::with('kaynakDil','hedefDil')->where('active',1)->where('durum',1)->orderBy('created_at','DESC')->paginate(5);
        return view('admin.adminpages.tercumangelenisler',compact('tercuman_gelen'));
    }



    public function tercumanTeklifver(Request $request)
    {

        $teklif = new Teklif();
        $teklif->user_id = Auth::user()->id;
        $teklif->ilan_id = $request->tercumanteklifid;
        $teklif->fiyat = $request->fiyat;
        $teklif->teklif_tarihi = Carbon::now();
        $teklif->save();


        $thread = Isilani::find($request->tercumanteklifid);
        $thread->durum = 2;
        $thread->update();

        $user_mail = $thread->user['email'];


        Mail::raw("Projenize Teklif Verildi.", function($message) use($user_mail)
        {
            $message->from('info@tercumemvar.com.tr', 'Portakal Medya A.Ş.')->subject('Tercümemvar.com.tr Tercüman Fiyat Teklifi');
            $message->to($user_mail);
        });

        $thread->user->notify(new RepliedToThread($thread));
        Netgsm::sendSms($thread->telefon, $thread->proje_basligi.'  '.' adlı projenize teklif verildi');

        alert()->success('İlana Başarı İle Teklif Verilmiştir', 'Tebrikler')->autoClose(5000);
        return redirect()->back();

    }


    public function tercumanTeklifverilenisler()
    {

        $tercumanteklifverilenisler = Teklif::with('is_ilani')->where('user_id',Auth::user()->id)->paginate(10);

        return view('admin.adminpages.tercumanteklifverilenisler',compact('tercumanteklifverilenisler'));


    }


    public function tercumanTeklifiptalet(Request $request)
    {

        $id = $request->tercumanteklifiptalid;

        Teklif::find($id)->delete();

        alert()->success('İlana Verdiğiniz Teklif Başarı İle Silinmiştir', 'Tebrikler')->autoClose(5000);
        return redirect()->back();

    }


    public function uyeGelenteklifler()
    {


        $data = Isilani::with('teklif','kaynakDil','hedefDil','ceviriTuru')
            ->where('user_id',Auth::user()->id)
            ->where('active',1)
            ->where('durum',2)
            ->orderBy('created_at','DESC')
            ->paginate('10');


        return view('admin.adminpages.uyegelenteklifler',compact('data'));


    }


    public function uyeTeklifkabul(Request $request)
    {




        $id  = $request->uyeteklifkabulid;

        //TEKLİF TABLOSUNDAKİ DURUMU GÜNCELLEYELİM ÇÜNKÜ O TEKLİF KABUL EDİLDİ.

        $teklif_durum = Teklif::find($id);
        $teklif_durum->durum = 1;
        $teklif_durum->update();





        $ilan_id = Teklif::where('id',$id)->pluck('ilan_id')->first();


        $teklif_kabul = Isilani::find($ilan_id);
        $teklif_kabul->durum = 3;
        $teklif_kabul->update();



        alert()->success('Tercümanın Verdiği Teklif Başarı İle Kabul Edilmiştirs', 'Tebrikler')->autoClose(5000);
        return redirect()->back();



    }


    public function uyeKabulisler()
    {


        $uyekabulisler = Isilani::with('kaynakDil','hedefDil','ceviriTuru','teklif')
            ->where('user_id',Auth::user()->id)
            ->where('active',1)
            ->where('durum',3)
            ->orderBy('created_at','DESC')
            ->paginate(5);


        return view('admin.adminpages.uyeteklifkabulisler',compact('uyekabulisler'));


    }


    public function adminTeklifKabulEdilmisisler()
    {

        $adminuyekabulisler = Isilani::with('kaynakDil','hedefDil','ceviriTuru','teklif','dosya')
            ->where('active',1)
            ->where('durum',3)
            ->orderBy('created_at','DESC')
            ->paginate(5);




        return view('admin.adminpages.adminteklifkabuledilmisisler',compact('adminuyekabulisler'));





    }



    public function adminIstamamla(Request $request)
    {

        $id =$request->administamamlaid;

        $isilanitamamla = Isilani::find($id);
        $isilanitamamla->durum = 4;
        $isilanitamamla->update();

        alert()->success('Verilen İş Başarı İle Tamamlandı', 'Tebrikler')->autoClose(5000);
        return redirect()->back();



    }


    public function adminTamamlanmisisler()
    {


        $admintamamlanmisisler = Isilani::with('kaynakDil','hedefDil','ceviriTuru','teklif','dosya')
            ->where('active',1)
            ->where('durum',4)
            ->orderBy('created_at','DESC')
            ->paginate(10);


        return view('admin.adminpages.admintamamlanmisisler',compact('admintamamlanmisisler'));


    }


    public function uyeYapilanisler()
    {

        $uyebitenisler = Isilani::with('kaynakDil','hedefDil','ceviriTuru','teklif')
            ->where('user_id',Auth::user()->id)
            ->where('active',1)
            ->where('durum',4)
            ->orderBy('created_at','DESC')
            ->paginate(10);
        return view('admin.adminpages.uyeyapilanisler',compact('uyebitenisler'));

    }


    public function tercumanYapilanisler()
    {

        $tercumanbitenisler = Isilani::with('kaynakDil','hedefDil','ceviriTuru','teklif')
            ->where('user_id',Auth::user()->id)
            ->where('active',1)
            ->where('durum',4)
            ->orderBy('created_at','DESC')
            ->paginate(10);
        return view('admin.adminpages.tercumanyapilanisler',compact('tercumanbitenisler'));

    }


    public function tercumanProfile()
    {


        $user_profile = User::with('profile')->where('id',Auth::user()->id)->first();

        $il = Il::orderBy('il_adi','ASC')->get();

        $ilce = Ilce::orderBy('ilce_adi','ASC')->get();

        return view('admin.adminpages.tercumanprofile',compact('user_profile','il','ilce'));



    }


    public function tercumanProfileupdate(Request $request,$id)
    {


        $user_profile = User::find($id);
        $user_profile->name=$request->name;
        $user_profile->telefon=$request->telefon;
        $user_profile->update();




        $request->validate([
            'telefon'=>'required|min:11|max:12',
            'iban' => 'required|min:26|max:27',
        ]);





        $profile = Profile::where('user_id',$id)->first();
        $profile->title = $request->title;
        $profile->il_id = $request->il_id;
        $profile->ilce_id = $request->ilce_id;
        $profile->web_site = $request->website;
        $profile->iban = $request->iban;
        $profile->bildigi_diller = $request->diller;
        $profile->update();




        alert()->success('Profiliniz Başarı İle Güncellenmiştir', 'Tebrikler')->autoClose(5000);
        return redirect()->back();


    }


    public function sifreDegistir()
    {

        return view('admin.adminpages.sifredegistir');

    }


    public function sifreDegistirpost(Request $request)
    {

        $request->validate([
            'old_password'=>'required|min:6',
            'new_password' => 'required|min:6|confirmed',
            'new_password_confirmation'=>'required|min:6',
        ]);

        $user = $request->user();

        if (Hash::check($request->old_password, $user->password)) {

            $user->update([
                'password' => bcrypt($request->new_password)
            ]);

            auth()->logout();
            return redirect()->route('login')->with('success','Tekrar giriş yapınız');

        } else {
            return back()->withErrors('Mevcut şifrenizi yanlış girdiniz');
        }



    }


    public function test()
    {
//        Netgsm::sendSms("05078898276", "deneme");


        $r = Profile::with('il','ilce')->get();

        return $r;


    }







}
