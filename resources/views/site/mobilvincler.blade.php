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


@section('content')



<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url( {{asset('assets/site/img/inside_page.jpg') }});">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown"> Mobil Vinçler </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">AnaSayfa</a></li>
                    <li class="breadcrumb-item"><a href="#">Vinçler</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Ürünler</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->




<!-- PRODUCT will listed here -->
<!-- Team Start -->
<div class="py-5 mt-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <!-- <h6 class="text-primary text-uppercase"> Ürünler </h6> -->
            <h1 class="mb-5"> Mobil Vinçler</h1>
        </div>


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
                    <a href="contact.html" class="btn btn-secondary py-3 px-5"> BİZİ Ara<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection