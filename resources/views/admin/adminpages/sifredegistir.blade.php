@extends('layouts.app')

@section('content')


    <div class="section db">
        <div class="container">
            <div class="page-title text-center">
                <div class="heading-holder">
                    <h1>ŞİFRE DEĞİŞTİR</h1>
                </div>
                <p class="lead">ŞİFRE DEĞİŞTİR</p>
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

                        <div class="job-title nocover hidden-sm hidden-xs"><h5>Şifre Değiştir</h5></div>
                        <form id="submit" class="submit-form" method="POST" action="{{ route('sifre-degistir-post') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label class="control-label">Eski Şifreniz</label>
                                    <input type="password" name="old_password" class="form-control" placeholder="">
                                    <br>
                                    <label class="control-label">Yeni Şifreniz</label>
                                    <input type="password" name="new_password" class="form-control" placeholder="">
                                    <br>
                                    <label class="control-label">Yeni Şifreniz Tekrar</label>
                                    <input  type="password" name="new_password_confirmation" class="form-control" placeholder="">
                                    <br>
                                    <button class="btn btn-primary">Şifre Değiştir</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- end post-padding -->
                </div><!-- end col -->




            </div><!-- end row -->
        </div><!-- end container -->
    </div>
































@endsection