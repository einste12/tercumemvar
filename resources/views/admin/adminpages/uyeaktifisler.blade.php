@extends('layouts.app')

@section('content')


    <div class="section db">
        <div class="container">
            <div class="page-title text-center">
                <div class="heading-holder">
                    <h1>Onaylanmış İşlerim</h1>
                </div>
                <p class="lead">Son 10 Adet Üyenin Onaylanan İşleri</p>
            </div>
        </div><!-- end container -->
    </div>


    <div class="section lb">
        <div class="container">
            <div class="row">
                @include('admin.partials.menu')

                <div class="content col-md-8">
                    <div class="post-padding">
                        <div class="job-title nocover hidden-sm hidden-xs"><h5>Onaylanmış İşlerim ({{ $uye_aktif_is->total() }})</h5></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive job-table">
                                    <table id="mytable" class="table table-bordred table-striped">
                                        <thead>
                                        <tr>
                                            <th>Proje Başlığı</th>
                                            <th>Kaynak/Hedef Dil</th>
                                            <th>Çeviri Türü</th>
                                            {{--<th>İşlemler</th>--}}
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @forelse($uye_aktif_is as $uye_aktif_isler)
                                            <tr>
                                                <td>
                                                    <h4>{{ $uye_aktif_isler->proje_basligi }}<br>
                                                        <small>İş Tarihi : {{ $uye_aktif_isler->created_at }}</small> <small>Güncelleme Tarihi: {{ $uye_aktif_isler->updated_at }}</small>
                                                    </h4>
                                                </td>
                                                <td>{{ $uye_aktif_isler->kaynakDil['DilAdi'] }} / {{ $uye_aktif_isler->hedefDil['DilAdi'] }}</td>
                                                <td>{{ $uye_aktif_isler->ceviriTuru['name'] }}</td>
                                                {{--<td>--}}
                                                    {{--<span data-placement="top" data-toggle="tooltip" title="" data-original-title="Complete"><a href="#" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a></span>--}}
                                                    {{--<span data-placement="top" data-toggle="tooltip" title="" data-original-title="Remove"><a  href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></span>--}}
                                                {{--</td>--}}
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
                                {{ $uye_aktif_is->links()}}
                            </li>
                        </ul>
                    </nav>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>







@endsection