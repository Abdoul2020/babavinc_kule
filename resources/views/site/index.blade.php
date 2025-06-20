@extends('site.master')

@section('title','Baba Vinç - Kule Vinç Hizmetleri')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title>Baba Vinç - Kule Vinç Hizmetleri</title>
<meta name="title" content="Baba Vinç - Kule Vinç Hizmetleri">
<meta name="description" content="Baba Vinç - Kule Vinç Hizmetleri">
<meta name="keywords" content=" Baba Vinç - Kule Vinç Hizmetleri ">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://babavinc.com/">
<meta property="og:title" content="Baba Vinç - Kule Vinç Hizmetleri">
<meta property="og:description" content="Baba Vinç - Kule Vinç Hizmetleri">
<meta property="og:image" content="{{ asset('assets/site/img/vinc.png') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="ttps://babavinc.com/">
<meta property="twitter:title" content="Baba Vinç - Kule Vinç Hizmetleri">
<meta property="twitter:description" content="Baba Vinç - Kule Vinç Hizmetleri">
<meta property="twitter:image" content="{{ asset('assets/site/img/vinc.png') }}">


@endsection


@section('styles')



@endsection



@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('assets/site/img/hero_slide_1_1.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown"> Güvenli Kiralama, <br> <span>
                                        Esnek Çözümler
                                    </span> </h1>
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown"> Esnek kiralamalarımızla projelerinizi destekliyoruz. </h6>

                                <a href="{{ route('home.products') }}" class="btn btn-primary py-3 px-5 animated slideInDown">KİRALAMA<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                <img class="img-fluid" src="{{ asset('assets/site/img/transparent_carousel.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/site/img/hero_slide2.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown"> Projelerizi <br> <span>
                                        Güçlendirin
                                    </span> </h1>
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown"> Esnek kiralamalarımızla projelerinizi destekliyoruz. </h6>

                                <a href="{{ route('home.products') }}" class="btn btn-primary py-3 px-5 animated slideInDown"> KİRALAMA<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                <img class="img-fluid" src="{{ asset('assets/site/img/transparent_carousel.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</div>
<!-- Carousel End -->



<!-- Service Start -->
<div class="container-xxl py-5" style="background-color: #B6262C;">
    <div class="container">


        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3"> Kule Vinç Hizmetleri</h5>
                        <p> Kaliteli Vinç Kiralamak.
                            <span style="visibility: hidden;">hidden data Lorem ipsum dolor.</span> </p>
                        <a
                            class="btn btn-outline-primary incele-btn"
                            href="{{ route('home.products') }}"> İncele</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3"> Mobil Vinç Hizmetleri</h5>
                        <p> Projelerinizin ihtiyacına yönelik her türlü mobil vinç hizmeti</p>
                        <a
                            class="btn btn-outline-primary incele-btn"
                            href="{{ route('home.mobilvincpage') }}"> İncele</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3"> Kuyum Hizmetleri</h5>
                        <p> Altın, Gümüş ve Mücevherat 
                        <span style="visibility: hidden;">hidden data Lorem ipsum dolor.</span>
                        </p>
                        <a
                            class="btn btn-outline-primary incele-btn"
                            href="{{ route('home.kuyumcu') }}"> İncele</a>

                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<!-- Service End -->


<!-- About Start -->
<div class="container-xxl py-5 mt-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/site/img/about_2.jpg') }}" style="object-fit: cover;" alt="">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: #0B2154;">
                        <h1 class="display-4 text-white mb-0"> 45 <span class="fs-4">Yıllık</span></h1>
                        <h4 class="text-white">Tecrübe</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary text-uppercase">Kurumsal</h6>
                <h1 class="mb-4"><span class="text-primary">BabaVinç</span> Hakkında</h1>
                <p class="mb-4">

                    Firmamız 1980 yılında Antalya da BABA KURTARMA olarak faaliyete girmiştir. 1980 yılında kara düzen dediğimiz vinçlerle temelini attığımız işletmeyi geliştirerek sektör haline getirip Türkiye'nin tüm illerine ulaşmayı başardık. Müşteri hizmetlerinde daha yakın ilgilenelim diye İstanbul Hadımköy de şubemiz bulunmaktadır. 2001 yılından itibaren ağımızı genişleterek Rusya/Almanya/Türkmenistan/Özbekistan şubelerimizi açmış bulunmaktayız.

                </p>

                <a href="{{ route('home.about') }}" class="btn btn-primary py-3 px-5">BİZİ Tanıyın
                    <!-- <i class="fa fa-arrow-right ms-3"></i> -->
                </a>

                <div class="row g-4 mb-3 pb-3 mt-5">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex justify-content-center">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary me-2">
                                    <img src="{{asset('assets/site/img/iso_logo3.png') }} " alt="" style="max-width: 80px;">
                                </span>
                                <span>
                                    <img src="{{asset('assets/site/img/iso_logo2.png') }}" alt="" style="max-width: 80px;">
                                </span>
                            </div>

                            <!-- <div class="ps-3">
                                    <h6> Güven</h6>
                                    
                                </div> -->
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- PRODUCT will listed here -->
<!-- Team Start -->
<div class=" product_section py-5 mt-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase"> Ürünler </h6>
            <h1 class="mb-5"> Kule Vinçler</h1>
        </div>


        <!-- carousell scroll -->





        <!-- end of carousell scroll -->


        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="card position-relative shadow-sm">


                    <div id="productCarousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="{{ route('home.productsdetail', 'gt-mobile-vinc') }}" class="stretched-link">
                                    <img src="{{ asset('assets/site/img/product2.jpg') }}" class="d-block w-100" alt="Product 1 – slide 1">
                                </a>
                            </div>

                            <div class="carousel-item">
                                <a href="{{ route('home.productsdetail', 'gt-mobile-vinc') }}" class="stretched-link">
                                    <img src="{{asset('assets/site/img/product1.jpg') }}" class="d-block w-100" alt="Product 1 – slide 2">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="{{ route('home.productsdetail', 'gt-mobile-vinc') }}" class="stretched-link">
                                    <img src="{{ asset('assets/site/img/product2.jpg') }}" class="d-block w-100" alt="Product 1 – slide 3">
                                </a>
                            </div>
                        </div>
                    </div>

                    

                    <div class="bg-white p-4">
                        <h5 class="fw-bold mb-0">Product Title 1</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card position-relative shadow-sm">
                    <div id="productCarousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <a href="{{ route('home.productsdetail', 'gt-mobile-vinc') }}" class="stretched-link">
                                    <img src="{{ asset('assets/site/img/product2.jpg') }}" class="d-block w-100" alt="Product 1 – slide 1">
                                </a>
                            </div>

                            <div class="carousel-item">
                                <a href="{{ route('home.productsdetail', 'gt-mobile-vinc') }}" class="stretched-link">
                                    <img src="{{asset('assets/site/img/product1.jpg') }}" class="d-block w-100" alt="Product 1 – slide 2">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="{{ route('home.productsdetail', 'gt-mobile-vinc') }}" class="stretched-link">
                                    <img src="{{ asset('assets/site/img/product2.jpg') }}" class="d-block w-100" alt="Product 1 – slide 3">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-4">
                        <h5 class="fw-bold mb-0">Product Title 1</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card position-relative shadow-sm">
                    <div id="productCarousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <a href="{{ route('home.productsdetail', 'gt-mobile-vinc') }}" class="stretched-link">
                                    <img src="{{ asset('assets/site/img/product2.jpg') }}" class="d-block w-100" alt="Product 1 – slide 1">
                                </a>
                            </div>

                            <div class="carousel-item">
                                <a href="{{ route('home.productsdetail', 'gt-mobile-vinc') }}" class="stretched-link">
                                    <img src="{{asset('assets/site/img/product1.jpg') }}" class="d-block w-100" alt="Product 1 – slide 2">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="{{ route('home.productsdetail', 'gt-mobile-vinc') }}" class="stretched-link">
                                    <img src="{{ asset('assets/site/img/product2.jpg') }}" class="d-block w-100" alt="Product 1 – slide 3">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-4">
                        <h5 class="fw-bold mb-0">Product Title 1</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card position-relative shadow-sm">
                    <div id="productCarousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <a href="{{ route('home.productsdetail', 'gt-mobile-vinc') }}" class="stretched-link">
                                    <img src="{{ asset('assets/site/img/product2.jpg') }}" class="d-block w-100" alt="Product 1 – slide 1">
                                </a>
                            </div>

                            <div class="carousel-item">
                                <a href="{{ route('home.productsdetail', 'gt-mobile-vinc') }}" class="stretched-link">
                                    <img src="{{asset('assets/site/img/product1.jpg') }}" class="d-block w-100" alt="Product 1 – slide 2">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="{{ route('home.productsdetail', 'gt-mobile-vinc') }}" class="stretched-link">
                                    <img src="{{ asset('assets/site/img/product2.jpg') }}" class="d-block w-100" alt="Product 1 – slide 3">
                                </a>
                            </div>


                        </div>
                    </div>

                    <div class="bg-white p-4">
                        <h5 class="fw-bold mb-0">Product Title 1</h5>
                    </div>
                </div>
            </div>


        </div>



    </div>
</div>
<!-- Team End -->


<!-- Service Start -->
<div class="container-xxl service py-5 mt-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase"> Araçlar</h6>
            <h1 class="mb-5"> Farklı Ülke Araç Parkımız</h1>
        </div>


        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <i class="fa fa-car-side fa-2x me-3"></i>

                        <h4 class="m-0">Türkiye</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <i class="fa fa-car fa-2x me-3"></i>
                        <h4 class="m-0"> Turkmenistan </h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <i class="fa fa-cog fa-2x me-3"></i>
                        <h4 class="m-0"> Almanya</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <i class="fa fa-oil-can fa-2x me-3"></i>
                        <h4 class="m-0"> Rusya</h4>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/site/img/mobil_vinc.jpg') }}"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3"> Türkiye Araçlarımız</h3>
                                <p class="mb-4">Araç parkımızda 15 tondan 1000 tona kadar her marka ve model mobil vinçlerimiz sizlere en uygun ve en kaliteli hizmeti vermek için hazır beklemektedir.</p>
                                <p><i class="fa fa-check text-success me-3"></i> Faun marka 50 tonluk mobil vinç</p>
                                <p><i class="fa fa-check text-success me-3"></i>Liebherr marka 130 tonluk mobil vinç</p>
                                <p><i class="fa fa-check text-success me-3"></i>Grove marka 200 tonluk mobil vinç</p>
                                <a href="{{ route('home.makineparkudetails', 'turkiye') }}" class="btn btn-primary py-3 px-5 mt-3">İncele<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('assets/site/img/kule_vinc.jpg') }}"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3"> Türkmenistan Araçlarımız</h3>
                                <p class="mb-4">Araç parkımızda 6 tondan 16 tona kadar her marka ve model kule vinçlerimiz sizlere en uygun ve en kaliteli hizmeti vermek için hazır beklemektedir.</p>
                                <p><i class="fa fa-check text-success me-3"></i>s-65 tipi 8 tonluk kule vinç</p>
                                <p><i class="fa fa-check text-success me-3"></i>s-60 tipi 6 tonluk kule vinç</p>
                                <p><i class="fa fa-check text-success me-3"></i>TL-55 tipi 5 tonluk kule vinç</p>
                                <a href="{{ route('home.makineparkudetails', 'turkmenistan') }}" class="btn btn-primary py-3 px-5 mt-3"> İncele<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/site/img/hipup_vinc.jpg') }}"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Hi-Almanya Araçlarımız</h3>
                                <p class="mb-4">Araç parkımızda 10 tondan 120 tona kadar her marka ve model Hi-up vinçlerimiz sizlere en uygun ve en kaliteli hizmeti vermek için hazır beklemektedir.</p>
                                <p><i class="fa fa-check text-success me-3"></i>30 tonluk Hi-up Vinçler</p>
                                <p><i class="fa fa-check text-success me-3"></i>20 tonluk</p>
                                <p><i class="fa fa-check text-success me-3"></i>5 adet Sepet</p>
                                <a href="{{ route('home.makineparkudetails', 'germany') }}" class="btn btn-primary py-3 px-5 mt-3">İncele<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src=" {{ asset('assets/site/img/forklift.jpg') }}"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3"> Rusya Araçlarımız</h3>
                                <p class="mb-4">Araç parkımızda 2 tondan 15 tona kadar her marka ve model forklifterimiz sizlere en uygun ve en kaliteli hizmeti vermek için hazır beklemektedir.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Hyster Marka 12 Tonluk Forklift</p>
                                <p><i class="fa fa-check text-success me-3"></i>Hyster Marka 10 Tonluk Forklift</p>
                                <p><i class="fa fa-check text-success me-3"></i> Hyster Marka 9 Tonluk Forklift</p>
                                <a href="{{ route('home.makineparkudetails', 'russia') }}" class="btn btn-primary py-3 px-5 mt-3"> İncele<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Call To Action Start -->
<div class=" py-5 wow fadeInUp call_to_action_top mt-5" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 col-md-6">
                <h6 class="text-primary text-uppercase" style="color: #ffff !important;"> Hemen Ara </h6>

                <h1 class="mb-4">Ön Rezervasyon Sorunuz mu Var?</h1>
                <p class="mb-0" style="color: #ffff;">Herhangi bir sorunuz varsa, lütfen bizimle iletişime geçin. Size yardımcı olmaktan memnuniyet duyarız.</p>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                    <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>
                        +90 530 200 52 20
                    </h3>
                    <a href="{{ route('home.contactpage') }}" class="btn btn-secondary py-3 px-5"> BİZİ Ara<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection