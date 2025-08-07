@extends('layouts.app')

@section('title', 'Blog Single - BPOM Bogor')

@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url({{ asset('assets/img/banner/8.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-5">
                    <h1>Blog Single</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active">Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog ============================================= -->
    <div id="blog" class="blog-area bg-gray full-width single default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            <div class="info">
                                <h3>
                                    <a href="#">Judul PDF Flipbook</a>
                                </h3>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-calendar-alt"></i> 07 Agu, 2025</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 0</a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- FlipbookJS Container -->
                                <div id="flipbookContainer" style="
                      width: 100%;
                      max-width: 800px;
                      height: 500px;
                      margin: 0 auto;
                    "></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
