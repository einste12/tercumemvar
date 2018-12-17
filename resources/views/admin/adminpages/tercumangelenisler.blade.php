@extends('layouts.app')

@section('content')


    <div class="section db">
        <div class="container">
            <div class="page-title text-center">
                <div class="heading-holder">
                    <h1>Tercüman Teklif Bekleyen İşler</h1>
                </div>
                <p class="lead">Son 10 Adet Admin Tarafından Onay Bekleyen İş</p>
            </div>
        </div><!-- end container -->
    </div>


    <div class="section lb">
        <div class="container">
            <div class="row">
                @include('admin.partials.menu')

                <div class="content col-md-8">
                    <div class="post-padding">
                        <div class="job-title nocover hidden-sm hidden-xs"><h5>Fiyat Teklifi Bekleyen İşler ({{ $tercuman_gelen->total() }})</h5></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive job-table">
                                    <table id="mytable" class="table table-bordred table-striped">
                                        <thead>
                                        <tr>
                                            <th>Proje Başlığı</th>
                                            <th>Açıklama</th>
                                            <th>Kaynak/Hedef Dil</th>
                                            <th>Çeviri Türü</th>
                                            <th>İşlemler</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @forelse($tercuman_gelen as $uye_onay_is)
                                            <tr>
                                                <td>
                                                    <h4>{{ $uye_onay_is->proje_basligi }}<br>
                                                        <small>İş Tarihi : {{ $uye_onay_is->created_at }}</small> <small>Güncelleme Tarihi: {{ $uye_onay_is->updated_at }}</small>
                                                    </h4>
                                                </td>
                                                <td>{{ $uye_onay_is->aciklama }}</td>
                                                <td>{{ $uye_onay_is->kaynakdil['DilAdi'] }} / {{ $uye_onay_is->hedefdil['DilAdi'] }}</td>
                                                <td>{{ $uye_onay_is->ceviriTuru['name'] }}</td>
                                                <td>
                                                    <span data-placement="top" data-toggle="tooltip" title=""  data-original-title="TEKLİF VER"><button data-toggle="modal" data-target="#myModal3" id="{{ $uye_onay_is->id }}" class="btn btn-success">Teklif Ver</button></span>
                                                </td>
                                            </tr>
                                        @empty

                                            <p>Aktif İş Yok</p>

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
                                {{ $tercuman_gelen->links()}}
                            </li>
                        </ul>
                    </nav>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>



    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form action="{{ route('tercuman-teklif-ver') }}" method="POST">
            @csrf
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">FİYAT TEKLİFİ VER</h4>
                    </div>

                    <div class="modal-body">
                        <p>Bu işe teklif vereceğiniz miktarı yazınız..</p>

                        <input type="hidden" name="tercumanteklifid" id="tercumanteklifid" value=""/>

                        <input type="number" class="form-control" name="fiyat" placeholder="TL cinsinden fiyat teklifi"/>


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">İptal</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Onayla</button>
                    </div>
                </div>
            </form>

        </div>
    </div>






@endsection