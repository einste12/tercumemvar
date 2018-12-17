@extends('layouts.app')

@section('content')

    <div class="parallax section parallax-off" style="background-image:url('upload/blogbg.jpg');">
        <div class="container">
            <form class="submit-form customform">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search Keywords" aria-describedby="basic-addon2">
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-map-o"></i></span>
                            <input type="text" class="form-control" placeholder="All Locations" aria-describedby="basic-addon1">
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <button class="btn btn-primary btn-block">Search Freelancer</button>
                    </div><!-- end col -->
                </div><!-- end row -->
            </form>
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="section lb">
        <div class="container">
            <div class="section-title text-center clearfix">
                <h4>Tamamamlanmış İşlerimiz</h4>
                <p class="lead">Şuana Kadar Yapılmış İşleri Aşağıda Görebilirsiniz.</p>
            </div>
            <div class="all-jobs job-listing freelancer-list clearfix">
                <div class="job-tab">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="post-media">
                                <a href="freelancer-profile.html"><img src="upload/testi_01.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="badge part-badge">Web Designer</div>
                            <h3><a href="freelancer-profile.html" title="">Carolina Keegan</a></h3>
                            <small>
                                <span>Skills : <a href="#">Web Design</a>, <a href="#">Bootstrap</a>, <a href="#">Marketing</a></span>
                                <span>Updated : 1 Week Ago</span>
                            </small>
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta">
                                <i class="fa fa-map-marker"></i>
                                <p>Antalya</p>
                                <small>Turkey</small>
                            </div><!-- end meta -->
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta text-center">
                                <h4>$20/hr</h4>
                                <a href="freelancer-profile.html" class="btn btn-primary btn-sm btn-block">View Profile</a>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end job-tab -->

                <div class="job-tab">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="post-media">
                                <a href="freelancer-profile.html"><img src="upload/testi_02.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="badge part-badge">UI Designer</div>
                            <h3><a href="freelancer-profile.html" title="">Martin Taylor</a></h3>
                            <small>
                                <span>Skills : <a href="#">UI</a>, <a href="#">Graphic Design</a>, <a href="#">Logo</a></span>
                                <span>Updated : 2 Week Ago</span>
                            </small>
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta">
                                <i class="fa fa-map-marker"></i>
                                <p>New York</p>
                                <small>USA</small>
                            </div><!-- end meta -->
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta text-center">
                                <h4>$40/hr</h4>
                                <a href="freelancer-profile.html" class="btn btn-primary btn-sm btn-block">View Profile</a>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end job-tab -->

                <div class="job-tab">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="post-media">
                                <a href="freelancer-profile.html"><img src="upload/testi_03.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="badge part-badge">SEO Expert</div>
                            <h3><a href="freelancer-profile.html" title="">Amani Tanisha</a></h3>
                            <small>
                                <span>Skills : <a href="#">SEO</a>, <a href="#">Google</a>, <a href="#">Search Engine</a></span>
                                <span>Updated : 2 Week Ago</span>
                            </small>
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta">
                                <i class="fa fa-map-marker"></i>
                                <p>Bakü</p>
                                <small>Azerbaijan</small>
                            </div><!-- end meta -->
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta text-center">
                                <h4>$60/hr</h4>
                                <a href="freelancer-profile.html" class="btn btn-primary btn-sm btn-block">View Profile</a>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end job-tab -->

                <div class="job-tab">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="post-media">
                                <a href="freelancer-profile.html"><img src="upload/testi_04.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="badge part-badge">SEO Expert</div>
                            <h3><a href="freelancer-profile.html" title="">Bob Way</a></h3>
                            <small>
                                <span>Skills : <a href="#">SEO</a>, <a href="#">Google</a>, <a href="#">Search Engine</a></span>
                                <span>Updated : 1 Week Ago</span>
                            </small>
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta">
                                <i class="fa fa-map-marker"></i>
                                <p>Amsterdam</p>
                                <small>Holland</small>
                            </div><!-- end meta -->
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta text-center">
                                <h4>$120/hr</h4>
                                <a href="freelancer-profile.html" class="btn btn-primary btn-sm btn-block">View Profile</a>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end job-tab -->

                <div class="job-tab">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="post-media">
                                <a href="freelancer-profile.html"><img src="upload/testi_05.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="badge part-badge">English Teacher</div>
                            <h3><a href="freelancer-profile.html" title="">Jenna Ashe</a></h3>
                            <small>
                                <span>Skills : <a href="#">English</a>, <a href="#">Teacher</a>, <a href="#">Learning</a></span>
                                <span>Updated : 1 Week Ago</span>
                            </small>
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta">
                                <i class="fa fa-map-marker"></i>
                                <p>Istanbul</p>
                                <small>Turkey</small>
                            </div><!-- end meta -->
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta text-center">
                                <h4>$40/hr</h4>
                                <a href="freelancer-profile.html" class="btn btn-primary btn-sm btn-block">View Profile</a>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end job-tab -->

                <div class="job-tab">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="post-media">
                                <a href="freelancer-profile.html"><img src="upload/testi_06.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="badge part-badge">Article Writer</div>
                            <h3><a href="freelancer-profile.html" title="">John DOE</a></h3>
                            <small>
                                <span>Skills : <a href="#">Blogger</a>, <a href="#">Writer</a>, <a href="#">Article</a></span>
                                <span>Updated : 1 Week Ago</span>
                            </small>
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta">
                                <i class="fa fa-map-marker"></i>
                                <p>Disnay</p>
                                <small>Australia</small>
                            </div><!-- end meta -->
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta text-center">
                                <h4>$12/hr</h4>
                                <a href="freelancer-profile.html" class="btn btn-primary btn-sm btn-block">View Profile</a>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end job-tab -->

                <div class="job-tab">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="post-media">
                                <a href="freelancer-profile.html"><img src="upload/testi_01.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="badge part-badge">Web Designer</div>
                            <h3><a href="freelancer-profile.html" title="">Carolina Keegan</a></h3>
                            <small>
                                <span>Skills : <a href="#">Web Design</a>, <a href="#">Bootstrap</a>, <a href="#">Marketing</a></span>
                                <span>Updated : 1 Week Ago</span>
                            </small>
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta">
                                <i class="fa fa-map-marker"></i>
                                <p>Antalya</p>
                                <small>Turkey</small>
                            </div><!-- end meta -->
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta text-center">
                                <h4>$20/hr</h4>
                                <a href="freelancer-profile.html" class="btn btn-primary btn-sm btn-block">View Profile</a>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end job-tab -->

                <div class="job-tab">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="post-media">
                                <a href="freelancer-profile.html"><img src="upload/testi_02.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="badge part-badge">UI Designer</div>
                            <h3><a href="freelancer-profile.html" title="">Martin Taylor</a></h3>
                            <small>
                                <span>Skills : <a href="#">UI</a>, <a href="#">Graphic Design</a>, <a href="#">Logo</a></span>
                                <span>Updated : 2 Week Ago</span>
                            </small>
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta">
                                <i class="fa fa-map-marker"></i>
                                <p>New York</p>
                                <small>USA</small>
                            </div><!-- end meta -->
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta text-center">
                                <h4>$40/hr</h4>
                                <a href="freelancer-profile.html" class="btn btn-primary btn-sm btn-block">View Profile</a>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end job-tab -->

                <div class="job-tab">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="post-media">
                                <a href="freelancer-profile.html"><img src="upload/testi_03.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="badge part-badge">SEO Expert</div>
                            <h3><a href="freelancer-profile.html" title="">Amani Tanisha</a></h3>
                            <small>
                                <span>Skills : <a href="#">SEO</a>, <a href="#">Google</a>, <a href="#">Search Engine</a></span>
                                <span>Updated : 2 Week Ago</span>
                            </small>
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta">
                                <i class="fa fa-map-marker"></i>
                                <p>Bakü</p>
                                <small>Azerbaijan</small>
                            </div><!-- end meta -->
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta text-center">
                                <h4>$60/hr</h4>
                                <a href="freelancer-profile.html" class="btn btn-primary btn-sm btn-block">View Profile</a>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end job-tab -->

                <div class="job-tab">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="post-media">
                                <a href="freelancer-profile.html"><img src="upload/testi_04.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="badge part-badge">SEO Expert</div>
                            <h3><a href="freelancer-profile.html" title="">Bob Way</a></h3>
                            <small>
                                <span>Skills : <a href="#">SEO</a>, <a href="#">Google</a>, <a href="#">Search Engine</a></span>
                                <span>Updated : 1 Week Ago</span>
                            </small>
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta">
                                <i class="fa fa-map-marker"></i>
                                <p>Amsterdam</p>
                                <small>Holland</small>
                            </div><!-- end meta -->
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta text-center">
                                <h4>$120/hr</h4>
                                <a href="freelancer-profile.html" class="btn btn-primary btn-sm btn-block">View Profile</a>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end job-tab -->

                <div class="job-tab">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="post-media">
                                <a href="freelancer-profile.html"><img src="upload/testi_05.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="badge part-badge">English Teacher</div>
                            <h3><a href="freelancer-profile.html" title="">Jenna Ashe</a></h3>
                            <small>
                                <span>Skills : <a href="#">English</a>, <a href="#">Teacher</a>, <a href="#">Learning</a></span>
                                <span>Updated : 1 Week Ago</span>
                            </small>
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta">
                                <i class="fa fa-map-marker"></i>
                                <p>Istanbul</p>
                                <small>Turkey</small>
                            </div><!-- end meta -->
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta text-center">
                                <h4>$40/hr</h4>
                                <a href="freelancer-profile.html" class="btn btn-primary btn-sm btn-block">View Profile</a>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end job-tab -->

                <div class="job-tab">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="post-media">
                                <a href="freelancer-profile.html"><img src="upload/testi_06.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="badge part-badge">Article Writer</div>
                            <h3><a href="freelancer-profile.html" title="">John DOE</a></h3>
                            <small>
                                <span>Skills : <a href="#">Blogger</a>, <a href="#">Writer</a>, <a href="#">Article</a></span>
                                <span>Updated : 1 Week Ago</span>
                            </small>
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta">
                                <i class="fa fa-map-marker"></i>
                                <p>Disnay</p>
                                <small>Australia</small>
                            </div><!-- end meta -->
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="job-meta text-center">
                                <h4>$12/hr</h4>
                                <a href="freelancer-profile.html" class="btn btn-primary btn-sm btn-block">View Profile</a>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end job-tab -->
            </div><!-- end alljobs -->

            <div class="loadmorebutton text-center clearfix">
                <a href="#" class="btn btn-primary" id="loadMore">Bütün Tamamlanmış İşler</a>
            </div><!-- end loadmore -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="section wb">
        <div class="container">
            <div class="section-title text-center clearfix">
                <h4>Müşteri Yorumları</h4>
                <p class="lead">Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed quam nulla mauris iaculis. Erat eget vitae malesuada, tortor tincidunt porta lorem lectus.</p>
            </div>

            <div class="row freelancer-list">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="freelancer-wrap row-fluid clearfix">
                        <div class="col-md-3 text-center">
                            <div class="post-media">
                                <img class="img-responsive" src="upload/testi_09.png" alt="">
                            </div>
                        </div><!-- end col -->

                        <div class="col-md-9">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="#">Jenny Lisbon</a></h4>
                            <ul class="list-inline">
                                <li><small>Graphic Designer</small></li>
                                <li><small>21 Jobs Done</small></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed quam nulla mauris iaculis.</p>
                        </div><!-- end col -->
                        <a href="#" class="btn btn-primary"><span class="oi" data-glyph="link-intact"></span></a>
                    </div><!-- end freelancer-wrap -->
                </div><!-- end col -->

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="freelancer-wrap row-fluid clearfix">
                        <div class="col-md-3 text-center">
                            <div class="post-media">
                                <img class="img-responsive" src="upload/testi_08.png" alt="">
                            </div>
                        </div><!-- end col -->

                        <div class="col-md-9">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="#">Amanda Martin</a></h4>
                            <ul class="list-inline">
                                <li><small>Blogger (Article Writer)</small></li>
                                <li><small>33 Jobs Done</small></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed quam nulla mauris iaculis.</p>
                        </div><!-- end col -->
                        <a href="#" class="btn btn-primary"><span class="oi" data-glyph="link-intact"></span></a>
                    </div><!-- end freelancer-wrap -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



@endsection