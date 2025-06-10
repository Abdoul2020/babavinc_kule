
 <!-- Topbar Start -->
 <div class="container-fluid bg-light social_button p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    
                    <small> 
                    <a href="https://maps.google.com/?q=No:130/1,+Kepez,+Antalya" target="_blank" style="color:#596277">
                        No:130/1, Kepez, Antalya
                    </a>
                        <!-- No:130/1, Kepez, Antalya -->
                    </small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>
                    <a href="tel:+902423314366" style="color:#596277">
                        +90 (242) 331 43 66
                    </a>
                        <!-- +90 (242) 331 43 66 -->
                    </small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">
                <img src=" {{ asset('assets/site/img/vinc.png') }}" alt="Tower Crane Icon" class="me-3 icon-container" />

                BabaVinç</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">Ana Sayfa</a>

                <div class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kurumsal</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{ route('home.about') }}" class="dropdown-item">Hakkımızda</a>
                        <a href="{{ route('home.visionandmission') }}" class="dropdown-item">Vizyon & Misyon</a>
                        <a href=" {{ route('home.kvkk') }}" class="dropdown-item">KVKK</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <!-- data-bs-toggle="dropdown" -->
                    <!-- <a href="{{ route('home.products') }}" class="nav-link dropdown-toggle" >Kule Vİnçler</a> -->
                <a href="{{ route('home.products') }}" class="nav-item nav-link">Kule Vİnçler</a>

                   

                </div>

                <div class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Hİzmetler</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{ route('home.kiralama') }}" class="dropdown-item">Kule Vinç Kiralama</a>
                        <a href="{{ route('home.satis') }}" class="dropdown-item"> Kule Vinç Satış</a>
                        <a href="{{ route('home.teknik') }}" class="dropdown-item">Teknik Servis</a>
                        <a href="{{ route('home.insaat') }}" class="dropdown-item">İnşaat</a>
                        <a href="{{ route('home.kuyumcu') }}" class="dropdown-item">Kuyumculuk</a>
                    </div>
                </div>



                <a href="{{ route('home.contactpage') }}" class="nav-item nav-link">İlETİŞİM</a>
            </div>
            <a href="{{ route('home.contactpage') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"> Teklif Al<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
