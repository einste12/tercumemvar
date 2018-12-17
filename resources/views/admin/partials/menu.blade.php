<div class="sidebar col-md-4">
    <div class="post-padding clearfix">
        <ul class="nav nav-pills nav-stacked">
            @if(Auth::check() && Auth::user()->role_id=="1")  {{--! USER İSE !--}}

                <li><a href="{{ route('uye-aktif-isler') }}"><span class="glyphicon glyphicon-briefcase"></span>(Kullanıcı) Onaylanmış İşlerim</a></li>
                <li><a href="{{ route('uye-onay-bekleyen-isler') }}"><span class="glyphicon glyphicon-briefcase"></span>(Kullanıcı) Onay Bekleyen İşlerim</a></li>
                <li><a href="{{ route('uye-gelen-teklifler') }}"><span class="glyphicon glyphicon-briefcase"></span>(Kullanıcı) Gelen Teklifler</a></li>
                <li><a href="{{ route('uye-kabul-ettigi-isler') }}"><span class="glyphicon glyphicon-briefcase"></span>(Kullanıcı) Teklifi Kabul Ettiğim İşler</a></li>
                <li><a href="{{ route('uye-yapilan-isler') }}"><span class="glyphicon glyphicon-briefcase"></span>(Kullanıcı) Yapılan İşlerim</a></li>

            @elseif(Auth::user()->role_id=="2") {{--! TERCUMAN İSE !--}}

                <li><a href="{{ route('tercuman-gelen-isler') }}"><span class="glyphicon glyphicon-briefcase"></span>(Tercüman) Gelen İşler</a></li>
                <li><a href="{{ route('tercuman-teklif-verilmis-isler') }}"><span class="glyphicon glyphicon-briefcase"></span>(Tercüman) Teklif Verdiğim İşler</a></li>
                <li><a href="{{ route('tercuman-yapilmis-isler') }}"><span class="glyphicon glyphicon-briefcase"></span>(Tercüman) Yaptığım İşler</a></li>
                <li><a href="{{ route('tercuman-profile') }}"><span class="glyphicon glyphicon-off"></span>Profilim</a></li>

            @else(Auth::user()->role_id=="3")  {{--! ADMİN İSE !--}}

                <li><a href="{{ route('admin-onaya-gelen-isler') }}"><span class="glyphicon glyphicon-briefcase"></span>Onaya Gelen İşler</a></li>
                <li><a href="{{ route('admin-teklif-kabul-edilmis-isler') }}"><span class="glyphicon glyphicon-briefcase"></span>Onaylanan İşler <br/>(Teklif Kabul Edilmiş ise)</a></li>
                <li><a href="{{ route('admin-tamamlanmıs-isler') }}"><span class="glyphicon glyphicon-briefcase"></span>Tamamlananmış İşler</a></li>

            @endif
            <li><a href="{{ route('sifre-degistir') }}"><span class="glyphicon glyphicon-refresh"></span>Şifre Değiştir</a></li>
            <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-lock"></span>Çıkış Yap</a></li>
        </ul>
    </div><!-- end widget -->
</div>