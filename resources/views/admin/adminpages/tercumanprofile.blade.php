@extends('layouts.app')

@section('content')

    <div class="section db">
        <div class="container">
            <div class="page-title text-center">
                <div class="heading-holder">
                    <h1>Active Jobs</h1>
                </div>
                <p class="lead">Listed here 5 active jobs from your clients.</p>
            </div>
        </div><!-- end container -->
    </div>



    <div class="section lb">
        <div class="container">
            <div class="row">
            @include('admin.partials.menu')

                <div class="content col-md-8">
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



                        <div class="job-title nocover hidden-sm hidden-xs"><h5>Profilim</h5></div>
                        <form id="submit" class="submit-form" method="POST" action="{{ route('tercuman-profile-update',['id'=>Auth::user()->id]) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label class="control-label">Adınız<small>Adınız</small></label>
                                    <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                                    <br>
                                    <label class="control-label">Sitede Görünecek Olan İsminiz<small>Title</small></label>
                                    <input type="text" name="title" class="form-control"  value="{{ $user_profile->profile['title'] }}" >
                                    <br>
                                    <label class="control-label">Website <small>Web siteniz varsa girebilirsiniz</small></label>
                                    <input type="text" name="website" class="form-control"  value="{{ $user_profile->profile['web_site'] }}">
                                    <br>
                                    <label class="control-label">Telefon Numaranız<small>Telefon Numaranız</small></label>
                                    <input type="number" name="telefon" class="form-control"  value="{{ Auth::user()->telefon }}">
                                    <br>
                                    <label class="control-label">Hesap Numaranız<small>Hesap Numaranız</small></label>
                                    <input type="text" name="iban" class="form-control"  value="{{ $user_profile->profile['iban'] }}">
                                    <br>
                                    <label class="control-label">Bildiğiniz Diller(Arasında "," olacak şekilde giriniz)<small>Diller</small></label>
                                    <input type="text" name="diller" class="form-control"  value="{{ $user_profile->profile['bildigi_diller'] }}">
                                    <br/>
                                        <div class="col-md-6">
                                            <label class="control-label">Yaşadığınız İl</label>
                                            <select class="selectpicker bs-select-hidden form-control" name="il_id" data-style="btn-default" data-live-search="true">
                                               @foreach($il as $iller)
                                                <option @if($iller->id==$user_profile->profile['il_id']) selected @endif  value="{{ $iller->id }}">{{ $iller->il_adi }}</option>
                                               @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Yaşadığınız İlçe</label>
                                            <select class="selectpicker bs-select-hidden form-control" name="ilce_id" data-style="btn-default" data-live-search="true">
                                                @foreach($ilce as $ilceler)
                                                    <option @if($ilceler->id==$user_profile->profile['ilce_id']) selected @endif   value="{{ $ilceler->id }}">{{ $ilceler->ilce_adi }}</option>
                                                @endforeach
                                            </select>



                                        </div>
                                </div>
                            </div><!-- end row -->
                            <hr>
                            <button type="submit" class="btn btn-primary">Profil Güncelle</button>
                        </form>
                    </div><!-- end post-padding -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>





@endsection