<header>
    <nav
        class="navbar nav-border mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed white no-background">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand smooth-menu" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logo-light.png') }}" class="logo logo-display" alt="Logo" />
                    <img src="{{ asset('assets/img/logo-light.png') }}" class="logo logo-scrolled" alt="Logo" />
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-menu">
                <img src="{{ asset('assets/img/logo-icon.png') }}" alt="Logo" />
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a class="smooth-menu" href="{{ url('/') }}">Beranda</a></li>
                    <li class="dropdown dropdown-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('obat') }}">Obat</a></li>
                            <li><a href="{{ url('obat-tradisional') }}">Obat Tradisional</a></li>
                            <li><a href="{{ url('suplamen-kesehatan') }}">Suplamen Kesehatan</a></li>
                            <li><a href="{{ url('kosmetik') }}">Kosmetik</a></li>
                            <li><a href="{{ url('pangan') }}">Pangan</a></li>
                            <li><a href="{{ url('materi-fkhp-2025') }}">Materi FKP 2025</a></li>
                        </ul>
                    </li>
                    <li><a class="smooth-menu" href="{{ url('kontak-kami') }}">Kontak Kami</a></li>
                </ul>
            </div>

            <div class="attr-right">
                <div class="subscribe-area text-light text-center">
                    <div class="subscribe">
                        <form action="#">
                            <div class="input-group stylish-input-group">
                                <input type="email" placeholder="Cari Informasi" class="form-control"
                                    name="email" />
                                <span class="input-group-addon">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay-screen"></div>
    </nav>
</header>
