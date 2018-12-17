@extends('layouts.app')

@section('content')


    <div class="section lb">
        <div class="container">
            <div class="section-title text-center clearfix">
                <h4>Tüm Tercümanlar</h4>
                <p class="lead">Tercüman mı Arıyorsunuz O Zaman Doğru Yerdesiniz</p>
            </div>

            @forelse($tercumanlarlist as $tercumanlarlist2)
                <div class="all-jobs job-listing freelancer-list clearfix">
                    <div class="job-tab" style="display: block;">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="post-media">
                                    <a href="#"><img src="{{ asset('tercumanlist.jpg') }}" alt="" class="img-responsive img-thumbnail"></a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="badge part-badge">Tercüman</div>
                                <h3><a href="freelancer-profile.html" title="">{{ $tercumanlarlist2->name }}</a></h3>
                                <small>
                                    <span>Kayıt Tarihi : {{ $tercumanlarlist2->created_at }}</span>
                                </small>
                            </div><!-- end col -->

                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="job-meta">
                                    <i class="fa fa-map-marker"></i>
                                    <p>{{ empty($tercumanlarlist2->profile['il_id'])? "Girilmemiş" : $tercumanlarlist2->profile->il['il_adi'] }}</p>
                                    <small>{{ empty($tercumanlarlist2->profile['ilce_id'])? "Girilmemiş" : $tercumanlarlist2->profile->ilce['ilce_adi'] }}</small>
                                </div><!-- end meta -->
                            </div><!-- end col -->

                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="job-meta text-center">
                                    <a href="#" class="btn btn-primary btn-sm btn-block">Onaylandı</a>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end job-tab -->
                </div><!-- end alljobs -->
                @empty

                <p>Tercüman Bulunmamaktadır</p>

            @endforelse

            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        {{ $tercumanlarlist->links() }}
                    </li>
                </ul>
            </nav>


        </div><!-- end container -->
    </div>




@endsection