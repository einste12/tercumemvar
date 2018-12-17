@extends('layouts.app')

@section('content')


    <div class="section db">
        <div class="container">
            <div class="page-title text-center">
                <div class="heading-holder">
                    <h1>Biten İşlerim</h1>
                </div>
                <p class="lead">Son 5 Adet Biten İşlerim</p>
            </div>
        </div><!-- end container -->
    </div>


    <div class="section lb">
        <div class="container">
            <div class="row">
                @include('admin.partials.menu')

                <div class="content col-md-8">
                    <div class="post-padding">
                        <div class="job-title nocover hidden-sm hidden-xs"><h5>Biten İşlerim ({{ $uyebitenisler->count() }})</h5></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive job-table">
                                    <table id="mytable" class="table table-bordred table-striped">
                                        <thead>
                                        <tr>
                                            <th>Proje Başlığı</th>
                                            <th>Kaynak/Hedef Dil</th>
                                            <th>Çeviri Türü</th>
                                            <th>Açıklama</th>
                                            <th>Tercüman ID</th>
                                            <th>Fiyat</th>
                                            <th>Durum</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @forelse($uyebitenisler as $uye_biten_isler)
                                            <tr>
                                                    <td>
                                                        <h4>{{ $uye_biten_isler->proje_basligi }}</h4>
                                                    </td>
                                                    <td>{{ $uye_biten_isler->kaynakdil['DilAdi'] }} / {{ $uye_biten_isler->hedefdil['DilAdi'] }}</td>
                                                    <td>{{ $uye_biten_isler->ceviriTuru['name'] }}</td>
                                                    <td>{{ empty($uye_biten_isler->aciklama)? "Açıklama Girilmedi" : $uye_biten_isler->aciklama }}</td>
                                                    @foreach($uye_biten_isler->teklif->where('durum',1) as $teklifs)
                                                          <td>{{  $teklifs->tercuman2['name'] }}</td>
                                                          <td> {{ $teklifs->fiyat }}TL</td>
                                                    @endforeach

                                                <td>{{ ($uye_biten_isler->durum=="4")? "TAMAMLANDI" : "HAZIRLANIYOR" }}</td>

                                            </tr>
                                        @empty

                                            <p>Tamamlanan İş Bulunmamaktadır</p>

                                        @endforelse
                                        </tbody>
                                    </table>
                                </div><!-- end table -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end post-padding -->

                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                {{ $uyebitenisler->links() }}
                            </li>
                        </ul>
                    </nav>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>







@endsection