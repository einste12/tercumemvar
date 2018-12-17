@extends('layouts.app')



@section('content')

    <div class="section wb">
        <div class="container">
            <div class="row">


                <div class="col-md-6 col-md-offset-3 col-sm-6 col-xs-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="submit-form customform loginform" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h4>Giriş Yap</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail Adresiniz" value="{{ old('email') }}">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Şifreniz">
                        </div>
                        <button class="btn btn-custom">Giriş Yap</button>
                        <p>Hesabın Yoksa | <a href="{{ route('register') }}">Kayıt Ol</a><p/>
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox_qu_01" type="checkbox" class="styled">
                            <label for="checkbox_qu_01"><small>Beni Hatırla</small></label>
                        </div>
                    </form>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


@endsection
