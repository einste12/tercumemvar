@extends('layouts.app')

@section('content')


    <div class="section lb">
        <div class="container">
            <div class="row">



                <div class="post-padding">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="job-title hidden-sm hidden-xs"><h5>Çeviri Detayları</h5></div>
                    <form id="submit" class="submit-form" action="{{ route('ilan-post') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Kaynak Dil</label>
                                <select name="kaynak_dil_id" class="form-control selectpicker" data-live-search="true" required>
                                    <option value="">Seçiniz</option>
                                    @foreach($dil as $diller)
                                        <option value="{{ $diller->id }}">{{ $diller->DilAdi }}</option>
                                    @endforeach
                                </select>



                            </div>
                            <div class="col-md-6">
                                <label for="">Hedef Dil</label>
                                <select name="hedef_dil_id" class="form-control selectpicker" data-live-search="true" required>
                                    <option value="">Seçiniz</option>
                                    @foreach($dil as $diller)
                                        <option value="{{ $diller->id }}">{{ $diller->DilAdi }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        {{-- ÇEVİRİ İLANI TELEFON VE TÜR --}}
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Tercume Türü</label>
                                <select name="ceviri_turu_id" class="form-control"  required>
                                    <option value="">Seçiniz</option>
                                    @foreach($ceviri_turu as $ceviri_turus)
                                        <option value="{{ $ceviri_turus->id }}">{{ $ceviri_turus->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Telefon Numaranız
                                    <small>Yaşanabilecek Sorunlar İçin  Telefon Numaranız</small>
                                </label>
                                <input type="number" name="telefon" class="form-control" placeholder="Telefon Numaranız" value="{{ old('telefon') }}">
                            </div>
                        </div>




                        <hr/>

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label class="control-label">Proje Başlığı
                                    <small>Eklemek İstediğiniz Proje Başlığını Giriniz</small>
                                </label>
                                <input type="text" class="form-control" name="proje_basligi" placeholder="Proje Başlığı" value="{{ old('proje_basligi') }}">
                            </div>
                        </div><!-- end row -->


                        <hr/>


                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="fileupload fileupload-new" data-provides="fileupload">

                                    <input type="file" name="images[]" multiple class="multi with-preview" maxlength="10"/>

                                </div>
                            </div>
                        </div><!-- end row -->

                        <hr class="invis">


                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label class="control-label">Çeviri Açıklaması
                                    <small>Not: Tercümanlara Gösterilecek Kısım Bu Alandır Lütfen Detaylı Biçimde Giriniz.</small>
                                </label>
                                <textarea class="form-control" name="aciklama" placeholder="Açıklama" required >{{ old('aciklama') }}</textarea>
                            </div>
                        </div><!-- end row -->

                        <hr class="invis">

                        <button type="submit" class="btn btn-primary btn-block">Çeviri İşi Yayınla</button>
                    </form>
                </div><!-- end post-padding -->

            </div>
        </div>
    </div>

@endsection