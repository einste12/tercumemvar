<?php


Route::get('/', 'FrontendController@welcome')->name('welcome');

Auth::routes();


Route::get('/logout', function () {
    Auth::logout();
    Session::flush();

    return Redirect::route('login');
});

//FRONTEND TARAFI

Route::get('/uye-alani', 'FrontendController@uyeAlani')->name('uye-alani');
Route::get('/tum-tercumanlar', 'FrontendController@tumTercumanlar')->name('tum-tercumanlar');
Route::get('/tercuman-alani', 'FrontendController@tercumanAlani')->name('tercuman-alani');
Route::get('/ceviri-ilani', 'FrontendController@ceviriIlani')->middleware('auth')->name('ceviri-ilani');



//BECKEND TARAFI


Route::get('/dashboard','BackEndController@index')->middleware('auth')->name('dashboard');
Route::post('/ilan-post', 'BackEndController@ilanPost')->middleware('auth')->name('ilan-post');

//UYE ROUTES
Route::get('/uye-aktif-isler','BackEndController@uyeAktifisler')->middleware('auth')->name('uye-aktif-isler');
Route::get('/uye-onay-bekleyen-isler','BackEndController@uyeOnaybekleyenisler')->middleware('auth')->name('uye-onay-bekleyen-isler');
Route::get('/uye-gelen-teklifler','BackEndController@uyeGelenteklifler')->middleware('auth')->name('uye-gelen-teklifler');

Route::get('/uye-yapilan-isler','BackEndController@uyeYapilanisler')->middleware('auth')->name('uye-yapilan-isler');

Route::post('/uye-teklif-kabul','BackEndController@uyeTeklifkabul')->middleware('auth')->name('uye-teklif-kabul');


Route::get('/uye-kabul-ettigi-isler','BackEndController@uyeKabulisler')->middleware('auth')->name('uye-kabul-ettigi-isler');

//ADMİN ONAYA GELEN İŞLER ROUTE

Route::get('/admin-onaya-gelen-isler','BackEndController@adminOnayaGelenisler')->middleware('auth')->name('admin-onaya-gelen-isler');
Route::get('/admin-teklif-kabul-edilmis-isler','BackEndController@adminTeklifKabulEdilmisisler')->middleware('auth')->name('admin-teklif-kabul-edilmis-isler');
Route::post('/admin-ilan-onayla','BackEndController@adminIlanonayla')->middleware('auth')->name('admin-ilan-onayla');
Route::post('/admin-ilan-reddet','BackEndController@adminIlanreddet')->middleware('auth')->name('admin-ilan-reddet');
Route::post('/admin-is-tamamla','BackEndController@adminIstamamla')->middleware('auth')->name('admin-is-tamamla');
Route::get('/admin-tamamlanmıs-isler','BackEndController@adminTamamlanmisisler')->middleware('auth')->name('admin-tamamlanmıs-isler');




//TERCUMAN ROUTE

Route::get('/tercuman-gelen-isler','BackEndController@tercumanGelenisler')->middleware('auth')->name('tercuman-gelen-isler');
Route::post('/tercuman-teklif-ver','BackEndController@tercumanTeklifver')->middleware('auth')->name('tercuman-teklif-ver');
Route::get('/tercuman-teklif-verilmis-isler','BackEndController@tercumanTeklifverilenisler')->middleware('auth')->name('tercuman-teklif-verilmis-isler');
Route::post('/tercuman-teklif-iptal-et','BackEndController@tercumanTeklifiptalet')->middleware('auth')->name('tercuman-teklif-iptal-et');
Route::get('/tercuman-yapilmis-isler','BackEndController@tercumanYapilanisler')->middleware('auth')->name('tercuman-yapilmis-isler');
Route::get('/tercuman-profile','BackEndController@tercumanProfile')->middleware('auth')->name('tercuman-profile');
Route::post('tercuman-profile-update/{id}','BackEndController@tercumanProfileupdate')->middleware('auth')->name('tercuman-profile-update');


//YUKARIDAKİLERİN DIŞINDA ROUTE

Route::get('/sifre-degistir','BackEndController@sifreDegistir')->middleware('auth')->name('sifre-degistir');
Route::post('/sifre-degistir-post','BackEndController@sifreDegistirpost')->middleware('auth')->name('sifre-degistir-post');



Route::get('/markasread', function () {

    auth()->user()->unreadNotifications->markasread();


});


Route::get('/test', 'BackEndController@test');