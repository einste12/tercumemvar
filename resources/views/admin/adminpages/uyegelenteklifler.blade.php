@extends('layouts.app')

@section('content')


    <div class="section db">
        <div class="container">
            <div class="page-title text-center">
                <div class="heading-holder">
                    <h1>İŞLERİME GELEN TEKLİFLER</h1>
                </div>
                <p class="lead">İŞLERİME GELEN TEKLİFLER</p>
            </div>
        </div><!-- end container -->
    </div>


    <div class="section lb">
        <div class="container">
            <div class="row">
                @include('admin.partials.menu')

                <div class="content col-md-8">
                    <div class="post-padding">
                        <p>Aşağıda Tercümanların Verdiği Teklifler Sıralanmıştır</p>
                    @forelse($data as $datas)
                        <h2>PROJE ADI : {{ $datas->proje_basligi }} </h2>
                        <h3>AÇIKLAMA : <br/>

                            {{ $datas->aciklama }}

                        </h3>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Tercuman ID</th>
                                <th>Fiyat</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($datas->teklif as $teklifs)
                                <tr>
                                    <td>{{ $teklifs->id }}</td>
                                    <td>{{ $teklifs->fiyat }} TL</td>
                                    <td>

                                        <span data-placement="top" data-toggle="tooltip" title=""  data-original-title="Kabul Et"><button data-toggle="modal" data-target="#myModal5" id="{{ $teklifs->id }}" class="btn btn-success">Kabul Et</button></span>

                                    </td>
                                </tr>

                                @empty

                               <span>Bu Projeye Verilen Teklif Yoktur.</span>

                            @endforelse

                            </tbody>
                        </table>
                        @empty

                        <p>Projeye Verilen Teklif Bulunmamaktadır.</p>

                        @endforelse


                    </div>
                </div>


        </div><!-- end row -->
        </div><!-- end container -->
    </div>










    <div id="myModal5" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form action="{{ route('uye-teklif-kabul') }}" method="POST">
            @csrf
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Tercüman Teklifi Kabul Etme Penceresi</h4>
                    </div>

                    <div class="modal-body">
                        <p>Bu Teklifi Kabul Etmek İstediğinize Emin Misiniz ? </p>

                        <input type="hidden" name="uyeteklifkabulid" id="uyeteklifkabulid" value=""/>

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