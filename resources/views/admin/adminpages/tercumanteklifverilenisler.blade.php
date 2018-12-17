@extends('layouts.app')

@section('content')


    <div class="section db">
        <div class="container">
            <div class="page-title text-center">
                <div class="heading-holder">
                    <h1>Teklif Verdiğim İşler</h1>
                </div>
                <p class="lead">Son 10 Adet Teklif Verdiğim İşler</p>
            </div>
        </div><!-- end container -->
    </div>


    <div class="section lb">
        <div class="container">
            <div class="row">
                @include('admin.partials.menu')

                <div class="content col-md-8">
                    <div class="post-padding">
                        <div class="job-title nocover hidden-sm hidden-xs"><h5>Teklif Verdiğim İşler ({{ $tercumanteklifverilenisler->total() }})</h5></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive job-table">
                                    <table id="mytable" class="table table-bordred table-striped">
                                        <thead>
                                        <tr>
                                            <th>Proje Başlığı</th>
                                            <th>Kaynak/Hedef Dil</th>
                                            <th>Çeviri Türü</th>
                                            <th>Onay Durumu</th>
                                            <th>İşlemler</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @forelse($tercumanteklifverilenisler as $tercuman_teklif_verdigim_is)
                                            <tr>
                                                <td>
                                                    <h4>{{ $tercuman_teklif_verdigim_is->is_ilani['proje_basligi'] }}<br>
                                                        <small>İş Tarihi : {{ $tercuman_teklif_verdigim_is->is_ilani['created_at'] }}</small> <small>Teklif Tarihi: {{ $tercuman_teklif_verdigim_is->teklif_tarihi }}</small>
                                                    </h4>
                                                </td>
                                                <td>{{ $tercuman_teklif_verdigim_is->is_ilani->kaynakdil['DilAdi'] }} / {{ $tercuman_teklif_verdigim_is->is_ilani->hedefdil['DilAdi'] }}</td>
                                                <td>{{ $tercuman_teklif_verdigim_is->is_ilani->ceviriTuru['name'] }}</td>
                                                <td>{{ ($tercuman_teklif_verdigim_is->is_ilani['durum']=="3")? "Onaylandı" : "Onay Bekliyor" }}</td>
                                                <td>
                                                    <span data-placement="top" data-toggle="tooltip" title=""  data-original-title="TEKLİF VER"><button data-toggle="modal" data-target="#myModal4" id="{{ $tercuman_teklif_verdigim_is->id }}" class="btn btn-success">İptal Et</button></span>
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
                                {{ $tercumanteklifverilenisler->links()}}
                            </li>
                        </ul>
                    </nav>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>



    <div id="myModal4" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form action="{{ route('tercuman-teklif-iptal-et') }}" method="POST">
            @csrf
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">FİYAT TEKLİFİ İPTAL ET</h4>
                    </div>

                    <div class="modal-body">
                        <p>Verdiğiniz Fiyatı İptal Etmek İstediğinize Emin Misiniz?</p>

                        <input type="hidden" name="tercumanteklifiptalid" id="tercumanteklifiptalid" value=""/>

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