@extends('layouts.app')

@section('title', 'Materi FKHP 2025 - BPOM Bogor')

@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url({{ asset('assets/img/banner/6.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-5">
                    <h1>Materi FKHP 2025</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li class="active">Materi FKHP 2025</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
        ============================================= -->
    <div class="blog-area full-width bg-gray default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="col-lg-6 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ url('single') }}">
                                    <img src="{{ asset('assets/img/blog/4.jpg') }}" alt="Thumb" />
                                    <div class="post-type">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{ url('single') }}">Believe has request not how comfort</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-calendar-alt"></i> 12 Nov, 2018</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> User</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 23</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    Months on ye at by esteem desire warmth former. Sure that
                                    that way gave any fond now. His boy middleton sir nor
                                    engrossed affection excellent. Dissimilar compliment
                                    cultivated preference eat sufficient may. Well next door
                                    soon we mr he four
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ url('single') }}">
                                    <img src="{{ asset('assets/img/blog/2.jpg') }}" alt="Thumb" />
                                    <div class="post-type">
                                        <i class="fas fa-video"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{ url('single') }}">Speaking replying mistress him numerous</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-calendar-alt"></i> 09 Nov, 2018</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> User</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 47</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    Timed she his law the spoil round defer. In surprise
                                    concerns informed betrayed he learning is ye. Ignorant
                                    formerly so ye blessing. He as spoke avoid given downs money
                                    on we. Of properly carriage shutters ye as wandered up
                                    repeated moreover.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ url('single') }}">
                                    <img src="{{ asset('assets/img/blog/3.jpg') }}" alt="Thumb" />
                                    <div class="post-type">
                                        <i class="fas fa-images"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{ url('single') }}">Reasonably conviction solicitude</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-calendar-alt"></i> 16 Nov, 2018</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> User</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 58</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    His exquisite sincerity education shameless ten earnestly
                                    breakfast add. So we me unknown as improve hastily sitting
                                    forming. Especially favourable compliment but thoroughly
                                    unreserved saw she themselves. Sufficient impossible him may
                                    ten insensible
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{ url('single') }}">
                                    <img src="{{ asset('assets/img/blog/1.jpg') }}" alt="Thumb" />
                                    <div class="post-type">
                                        <i class="fas fa-images"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{ url('single') }}">Reasonably conviction solicitude</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-calendar-alt"></i> 16 Nov, 2018</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> User</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 58</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    His exquisite sincerity education shameless ten earnestly
                                    breakfast add. So we me unknown as improve hastily sitting
                                    forming. Especially favourable compliment but thoroughly
                                    unreserved saw she themselves. Sufficient impossible him may
                                    ten insensible
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 pagi-area">
                        <nav aria-label="navigation">
                            <ul class="pagination">
                                <li><a href="#">Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
