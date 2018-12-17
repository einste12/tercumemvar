@extends('layouts.app')
@section('content')

    <div class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-xs-12">
                    <form class="submit-form customform loginform" method="POST" action="{{ route('register') }}">
                        @csrf
                        <h4>Yeni Hesap Oluştur</h4>
                        <p>Not:İşlemlerde Email Adresiniz Görünmeyecektir.</p>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Kullanıcı Adınız" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email adresiniz" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Şifreniz">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Şifre Tekrarınız">
                        </div>
                        <div class="form-group">
                            <label for="sel1">Kullanıcı Rolü Seçiniz:</label>
                            <select class="form-control" id="sel1" required name="role_id">
                                <option value="">Seçiniz</option>
                                <option value="1">Kullanıcı</option>
                                <option value="2">Tercüman</option>
                            </select>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input  type="number" class="form-control{{ $errors->has('telefon') ? ' is-invalid' : '' }}" name="telefon"  placeholder="0507 XXX XX XX">
                            @if ($errors->has('telefon'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefon') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <button class="btn btn-custom">Kullanıcı Oluştur</button>
                    </form>
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



@endsection
