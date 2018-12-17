@extends('layouts.app')

@section('content')


    <div class="section db">
        <div class="container">
            <div class="page-title text-center">
                <div class="heading-holder">
                    <h1>Teklifi Kabul Ettiğim  İşler</h1>
                </div>
                <p class="lead">Son 5 Adet Teklifi Kabul Ettiğim İşler</p>
            </div>
        </div><!-- end container -->
    </div>


    <div class="section lb">
        <div class="container">
            <div class="row">
                @include('admin.partials.menu')

                <div class="content col-md-8">
                    <div class="post-padding">
                        <div class="job-title nocover hidden-sm hidden-xs"><h5>Teklifi Kabul Ettiğim İşler ({{ $uyekabulisler->count() }})</h5></div>
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
                                        @forelse($uyekabulisler as $uye_kabul_isler)
                                            <tr>
                                                    <td>
                                                        <h4>{{ $uye_kabul_isler->proje_basligi }}</h4>
                                                    </td>
                                                    <td>{{ $uye_kabul_isler->kaynakdil['DilAdi'] }} / {{ $uye_kabul_isler->hedefdil['DilAdi'] }}</td>
                                                    <td>{{ $uye_kabul_isler->ceviriTuru['name'] }}</td>
                                                    <td>{{ empty($uye_kabul_isler->aciklama)? "Açıklama Girilmedi" : $uye_kabul_isler->aciklama }}</td>
                                                    @foreach($uye_kabul_isler->teklif->where('durum',1) as $teklifs)
                                                          <td>{{  $teklifs->id }}</td>
                                                          <td> {{ $teklifs->fiyat }}TL</td>
                                                    @endforeach

                                                <td>{{ ($uye_kabul_isler->durum=="4")? "TAMAMLANDI" : "HAZIRLANIYOR" }}</td>

                                            </tr>
                                        @empty

                                            <p>Teklifi Kabul Ettiğim İş Yok</p>

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
                                {{ $uyekabulisler->links() }}
                            </li>
                        </ul>
                    </nav>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>







@endsection