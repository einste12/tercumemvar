@extends('layouts.app')

@section('content')
    <div class="section hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="home-title text-center">
                        <h3>TERCÜMEM VAR</h3>
                        <p>Çeviri İşin Mi Var ? O Zaman Doğru Yerdesin . İşini Yayınla - Tekliflerini Al - Kabul Et - İş Tamam</p>
                        <a href="{{ route('uye-alani') }}" class="btn btn-primary">Üye Alanı</a>
                    </div>
                </div><!-- end col -->

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="home-title rightside text-center">
                        <h3>BEN TERCÜMANIMddd</h3>
                        <p>Para Kazanmak İster Misin ? O Zaman Doğru Yerdesin.Üye Ol - İş İlanlarını Gör - Para Kazanmaya Başla</p>
                        <a href="{{ route('tercuman-alani') }}" class="btn btn-primary">Tercüman Alanı</a>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="section wb">
        <div class="container">
            <div class="section-title text-center clearfix">
                <h4>Ücretsiz Online Tercümanları Bul</h4>
                <p class="lead">En Çok İş Yapan 4 Tercüman Aşağıdadır</p>
            </div>

            <div class="row service-custom">
               @forelse($tercumanlar as $tercumanlars)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-tab">
                            <div class="post-media">
                                <a href="#"><img src="{{ asset('user.jpg') }}" alt="" class="img-responsive"></a>
                            </div>
                            <div class="service-title">
                                <h4><a href="#">{{ $tercumanlars->name }}</a></h4>
                                <small>Kayıt Tarihi : {{ $tercumanlars->created_at }}</small>
                            </div>
                        </div><!-- end service-tab -->
                    </div><!-- end col -->
               @empty

                <p>Şuan Tercüman Bulunmamaktadır</p>

                @endforelse

            </div><!-- end row -->

            <div class="loadmorebutton text-center clearfix">
                <a href="{{ route('tum-tercumanlar') }}" class="btn btn-primary">Tüm Tercümanlarımız</a>
            </div><!-- end loadmore -->
        </div><!-- end container -->
    </div><!-- end section -->

@endsection