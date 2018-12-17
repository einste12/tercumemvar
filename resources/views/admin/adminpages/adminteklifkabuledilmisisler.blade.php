@extends('layouts.app')

@section('content')


    <div class="section db">
        <div class="container">
            <div class="page-title text-center">
                <div class="heading-holder">
                    <h1>Admin Üyenin Kabul Ettiği İşler</h1>
                </div>
                <p class="lead">Son 5 Adet Üyenin Kabul Ettiği İşler</p>
            </div>
        </div><!-- end container -->
    </div>


    <div class="section lb">
        <div class="container">
            <div class="row">
                @include('admin.partials.menu')

                <div class="content col-md-8">
                    <div class="post-padding">
                        <div class="job-title nocover hidden-sm hidden-xs"><h5>Yapılmaya Hazır İşler ({{ $adminuyekabulisler->count() }})</h5></div>
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
                                            <th>Dosya</th>
                                            <th>Durum</th>
                                            <th>İşlemler</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @forelse($adminuyekabulisler as $admin_uye_kabul_isler)
                                            <tr>
                                                <td>
                                                    <h4>{{ $admin_uye_kabul_isler->proje_basligi }}</h4>
                                                </td>
                                                <td>{{ $admin_uye_kabul_isler->kaynakdil['DilAdi'] }} / {{ $admin_uye_kabul_isler->hedefdil['DilAdi'] }}</td>
                                                <td>{{ $admin_uye_kabul_isler->ceviriTuru['name'] }}</td>
                                                <td>{{ empty($admin_uye_kabul_isler->aciklama)? "Açıklama Girilmedi" : $admin_uye_kabul_isler->aciklama }}</td>
                                                @foreach($admin_uye_kabul_isler->teklif->where('durum',1) as $teklifs)
                                                    <td>{{  $teklifs->id }}</td>
                                                    <td> {{ $teklifs->fiyat }}TL</td>
                                                @endforeach
                                                <td>
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach($admin_uye_kabul_isler->dosya as $dosyalar)
                                                        <a target="_blank" href="{{ $dosyalar->ceviri_image_path.'.'.$dosyalar->ceviri_image_extention }}">{{ $i }}-{{ str_limit($dosyalar->ceviri_image_name.'.'.$dosyalar->ceviri_image_extention,13,'...')  }} </a> <br/>
                                                            @php
                                                                $i = $i+1;
                                                            @endphp

                                                    @endforeach
                                                </td>
                                                <td>{{ ($admin_uye_kabul_isler->durum=="4")? "TAMAMLANDI" : "HAZIRLANIYOR" }}</td>
                                                <td>


                                                    <span data-placement="top" data-toggle="tooltip" title=""  data-original-title="Tamamla"><button data-toggle="modal" data-target="#myModal6" id="{{ $admin_uye_kabul_isler->id }}" class="btn btn-success">Tamamlamak İçin Tıkla</button></span>



                                                </td>

                                            </tr>
                                        @empty

                                            <p>Üyenin Teklifi Kabul Ettiği İş Yok</p>

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
                                {{ $adminuyekabulisler->links() }}
                            </li>
                        </ul>
                    </nav>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>




    <div id="myModal6" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form action="{{ route('admin-is-tamamla') }}" method="POST">
            @csrf
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Admin İş Tamamlama Penceresi</h4>
                    </div>

                    <div class="modal-body">
                        <p>Bu iş Tamamlandı mı ? </p>

                        <input type="hidden" name="administamamlaid" id="administamamlaid" value=""/>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Hayır</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Evet</button>
                    </div>
                </div>
            </form>

        </div>
    </div>







@endsection