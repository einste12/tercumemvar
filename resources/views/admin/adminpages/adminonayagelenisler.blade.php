@extends('layouts.app')

@section('content')


    <div class="section db">
        <div class="container">
            <div class="page-title text-center">
                <div class="heading-holder">
                    <h1>Admin Onay Bekleyen İşler</h1>
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
                        <div class="job-title nocover hidden-sm hidden-xs"><h5>Onay Bekleyen İşler ({{ $admin_onay->total() }})</h5></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive job-table">
                                    <table id="mytable" class="table table-bordred table-striped">
                                        <thead>
                                        <tr>
                                            <th>Proje Başlığı</th>
                                            <th>Kaynak/Hedef Dil</th>
                                            <th>Çeviri Türü</th>
                                            <th>İşlemler</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @forelse($admin_onay as $admin_onay_bekleyen_is)
                                            <tr>
                                                <td>
                                                        <h4>{{ $admin_onay_bekleyen_is->proje_basligi }}<br>
                                                            <small>İş Tarihi : {{ $admin_onay_bekleyen_is->created_at }}</small> <small>Güncelleme Tarihi: {{ $admin_onay_bekleyen_is->updated_at }}</small>
                                                        </h4>
                                                    </td>
                                                    <td>{{ $admin_onay_bekleyen_is->kaynakdil['DilAdi'] }} / {{ $admin_onay_bekleyen_is->hedefdil['DilAdi'] }}</td>
                                                    <td>{{ $admin_onay_bekleyen_is->ceviriTuru['name'] }}</td>
                                                    <td>
                                                        <span data-placement="top" data-toggle="tooltip" title=""  data-original-title="ONAYLA"><a href="#" data-toggle="modal" data-target="#myModal" id="{{ $admin_onay_bekleyen_is->id }}" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a></span>
                                                        <span data-placement="top" data-toggle="tooltip" title="" data-original-title="REDDET"><a  href="#"  data-toggle="modal" data-target="#myModal2" id="{{ $admin_onay_bekleyen_is->id }}" class="btn btn-danger btn-xs"><i class="fa fa-close"></i></a></span>
                                                </td>
                                            </tr>
                                        @empty

                                            <p>Onay Bekleyen İş Yok</p>

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
                                {{ $admin_onay->links() }}
                            </li>
                        </ul>
                    </nav>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>



{{--!  Admin Onaylama Modalı !--}}
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form action="{{ route('admin-ilan-onayla') }}" method="POST">
                @csrf
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">İlan Onaylama Penceresi</h4>
                    </div>

                        <div class="modal-body">
                            <p>Bu İlanı Onaylamak İstiyor Musunuz?</p>

                            <input type="hidden" name="ilanonaylaid" id="ilanonaylaid" value=""/>


                        </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">İptal</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Onayla</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

{{--!  Admin Reddetme Modalı Modalı !--}}
    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form action="{{ route('admin-ilan-reddet') }}" method="POST">
            @csrf
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">İlan Reddetme Penceresi</h4>
                    </div>

                    <div class="modal-body">
                        <p>Bu İlanı Reddetmek İstiyor Musunuz?</p>

                        <label for=""></label>

                        <textarea name="reddetme_aciklamasi"  class="form-control"  cols="30" rows="10"></textarea>

                        <input type="hidden" name="ilanreddetid" id="ilanreddetid" value=""/>


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