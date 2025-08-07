{{-- filepath: c:\xampp\htdocs\coba\resources\views\kontak-kami.blade.php --}}
@extends('layouts.app')

@section('title', 'Kontak Kami - BPOM Bogor')

@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url({{ asset('assets/img/banner/8.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-5">
                    <h1>Kontak Kami</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li class="active">Kontak Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Area
        ============================================= -->
    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Hubungi Kami</h2>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Consequatur, fuga est repellat nihil pariatur distinctio placeat
                            soluta, porro magni, aperiam commodi esse a saepe enim eius
                            praesentium dolores et illum!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 address">
                    <div class="address-items">
                        <h4>Lokasi Kami</h4>
                        <ul class="info">
                            <li>
                                <i class="fas fa-map-marked-alt"></i>
                                <span>
                                    <a href="https://www.google.com/maps?q=Balai+POM+di+Bogor&ll=-6.5122073,106.8396128"
                                        class="link-grey" target="_blank">
                                        Jl. Raya Jakarta-Bogor No.27B, Nanggewer,<br />
                                        Kec. Cibinong, Kabupaten Bogor,<br />
                                        Jawa Barat 16810
                                    </a>
                                </span>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <span>
                                    <a href="https://wa.me/08111188378" target="_blank" class="link-grey">08111188378</a>
                                </span>
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                <span>
                                    <a href="mailto:bpom_bogor@pom.go.id" target="_blank"
                                        class="link-grey">bpom_bogor@pom.go.id</a>
                                </span>
                            </li>
                        </ul>
                        <div class="social-address">
                            <h4>Media Sosial</h4>
                            <ul class="social">
                                <li class="facebook">
                                    <a href="https://www.facebook.com/bpom.bogor/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="https://x.com/bpombogor" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="instagram">
                                    <a href="https://www.instagram.com/bpom.bogor/" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                                <li class="pinterest">
                                    <a href="https://www.youtube.com/@lokapomdikabupatenbogor4021" target="_blank"><i
                                            class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 contact-form">
                    <h2>Sampaikan Ide atau Masukan Anda</h2>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name"
                                        type="text" />
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email" />
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                        type="text" />
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit">
                                    Kirim Pesan <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-lg-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection
