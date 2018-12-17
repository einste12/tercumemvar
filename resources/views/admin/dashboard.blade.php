@extends('layouts.app')

@section('content')

    <div class="section db">
        <div class="container">
            <div class="page-title text-center">
                <div class="heading-holder">
                    <h1>Active Jobs</h1>
                </div>
                <p class="lead">Listed here 5 active jobs from your clients.</p>
            </div>
        </div><!-- end container -->
    </div>



    <div class="section lb">
        <div class="container">
            <div class="row">
            @include('admin.partials.menu')

                <div class="content col-md-8">
                    <div class="post-padding">
                        <div class="job-title nocover hidden-sm hidden-xs"><h5>Dashboard</h5></div>

                       DASHBOARD ALANI

                    </div><!-- end post-padding -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>





@endsection