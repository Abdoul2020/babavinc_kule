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
<div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('assets/site/img/inside_page.jpg') }});">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown"> Ürün Detayı </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">AnaSayfa</a></li>
                    <li class="breadcrumb-item"><a href="#">KULE VİNÇLER</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"> {{ $products->title }}  </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->



<div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="row g-4">


                <div class="sidebar-widget">
                    <div class="tab-post">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#turkiye">Türkiye</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#turkmenistan">Türkmenistan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#almanya">Almanya</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#rusya">Rusya</a>
                            </li>
                        </ul>
            
                        <div class="tab-content">


                            <div id="turkiye" class="container tab-pane active">
                                 <!-- Service Start -->
        
        <div class="container">
            

            
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">

                <div class="col-lg-12">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src=" {{asset('assets/site/img/product2.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Türkiye'de Mobil Vinçler </h3>
                                    <p class="mb-4">Araç parkımızda 15 tondan 1000 tona kadar her marka ve model mobil vinçlerimiz sizlere en uygun ve en kaliteli hizmeti vermek için hazır beklemektedir.</p>
                                    <p><i class="fa fa-check text-success me-3"></i> Faun marka 50 tonluk mobil vinç</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Liebherr marka 130 tonluk mobil vinç</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Grove marka 200 tonluk mobil vinç</p>
                                </div>
                            </div>


                             <!-- baglı urunlaer -->

     <!-- Testimonial Start -->
     <div class=" py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="">
                <h6 class="text-primary text-uppercase"> Kule </h6>
                <h1 class="mb-5"> Mevcut kuleler</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light  p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product1.jpg') }}">
                    <div class="testimonial-text bg-light p-2">
                    <p class="mb-0"> GT Kule Vinç</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light  p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product2.jpg') }}" >
                    <div class="testimonial-text bg-light text-center p-2">
                    <p class="mb-0"> GT Kule Vinç</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product1.jpg') }}" >
                    <div class="testimonial-text bg-light p-2">
                    <p class="mb-0"> GT Kule Vinç </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light  p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product2.jpg') }}">
                    <div class="testimonial-text bg-light p-2">
                    <p class="mb-0"> GT Kule Vinç </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- baglı urunler -->



    <!-- Urun features -->





                        </div>

                    </div>
                </div>
            </div>
        </div>
    <!-- Service End -->
                              
                                
                            </div>

                            <div id="turkmenistan" class="container tab-pane fade">


                                <div class="container">
            
                                    <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                        
                                        <div class="col-lg-12">
                                            <div class="tab-content w-100">
                                                <div class="tab-pane fade show active" id="tab-pane-1">
                                                    <div class="row g-4">
                                                        <div class="col-md-6" style="min-height: 350px;">
                                                            <div class="position-relative h-100">
                                                                <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/site/img/product2.jpg') }}"
                                                                    style="object-fit: cover;" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h3 class="mb-3"> Türkmenistan'da Mobil Vinçler</h3>
                                                            <p class="mb-4">Araç parkımızda 15 tondan 1000 tona kadar her marka ve model mobil vinçlerimiz sizlere en uygun ve en kaliteli hizmeti vermek için hazır beklemektedir.</p>
                                                            <p><i class="fa fa-check text-success me-3"></i> Faun marka 50 tonluk mobil vinç</p>
                                                            <p><i class="fa fa-check text-success me-3"></i>Liebherr marka 130 tonluk mobil vinç</p>
                                                            <p><i class="fa fa-check text-success me-3"></i>Grove marka 200 tonluk mobil vinç</p>
                                                        </div>
                                                    </div>
                        
                        
                                                     <!-- baglı urunlaer -->
                        
                             <!-- Testimonial Start -->
                             <div class=" py-5 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="container">
                                    <div class="">
                                        <h6 class="text-primary text-uppercase"> Kule </h6>
                                        <h1 class="mb-5">  Mevcut kuleler</h1>
                                    </div>
                                    <div class="owl-carousel testimonial-carousel position-relative">
                                        <div class="testimonial-item text-center">
                                            <img class="bg-light  p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product1.jpg') }}">
                                            <div class="testimonial-text bg-light p-2">
                                            <p class="mb-0"> GT Kule Vinç</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-item text-center">
                                            <img class="bg-light  p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product2.jpg') }}" >
                                            <div class="testimonial-text bg-light text-center p-2">
                                            <p class="mb-0"> GT Kule Vinç</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-item text-center">
                                            <img class="bg-light p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product1.jpg') }}" >
                                            <div class="testimonial-text bg-light p-2">
                                            <p class="mb-0"> GT Kule Vinç </p>
                                            </div>
                                        </div>
                                        <div class="testimonial-item text-center">
                                            <img class="bg-light  p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product2.jpg') }}">
                                            <div class="testimonial-text bg-light p-2">
                                            <p class="mb-0"> GT Kule Vinç </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial End -->
                        
                        
                            <!-- baglı urunler -->
                        
                        
                        
                            <!-- Urun features -->
                        
                        
                        
                        
                        
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="almanya" class="container tab-pane fade">


                                <div class="container">
            

            
                                    <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                        
                                        <div class="col-lg-12">
                                            <div class="tab-content w-100">
                                                <div class="tab-pane fade show active" id="tab-pane-1">
                                                    <div class="row g-4">
                                                        <div class="col-md-6" style="min-height: 350px;">
                                                            <div class="position-relative h-100">
                                                                <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/site/img/product2.jpg') }}"
                                                                    style="object-fit: cover;" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h3 class="mb-3">Almanya'da Mobil Vinç</h3>
                                                            <p class="mb-4">Araç parkımızda 15 tondan 1000 tona kadar her marka ve model mobil vinçlerimiz sizlere en uygun ve en kaliteli hizmeti vermek için hazır beklemektedir.</p>
                                                            <p><i class="fa fa-check text-success me-3"></i> Faun marka 50 tonluk mobil vinç</p>
                                                            <p><i class="fa fa-check text-success me-3"></i>Liebherr marka 130 tonluk mobil vinç</p>
                                                            <p><i class="fa fa-check text-success me-3"></i>Grove marka 200 tonluk mobil vinç</p>
                                                        </div>
                                                    </div>
                        
                        
                                                     <!-- baglı urunlaer -->
                        
                             <!-- Testimonial Start -->
                             <div class=" py-5 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="container">
                                    <div class="">
                                        <h6 class="text-primary text-uppercase"> Kule </h6>
                                        <h1 class="mb-5"> Mevcut kuleler</h1>
                                    </div>
                                    <div class="owl-carousel testimonial-carousel position-relative">
                                        <div class="testimonial-item text-center">
                                            <img class="bg-light  p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product1.jpg') }}">
                                            <div class="testimonial-text bg-light p-2">
                                            <p class="mb-0"> GT Kule Vinç</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-item text-center">
                                            <img class="bg-light  p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product2.jpg') }}" >
                                            <div class="testimonial-text bg-light text-center p-2">
                                            <p class="mb-0"> GT Kule Vinç</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-item text-center">
                                            <img class="bg-light p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product1.jpg') }}" >
                                            <div class="testimonial-text bg-light p-2">
                                            <p class="mb-0"> GT Kule Vinç </p>
                                            </div>
                                        </div>
                                        <div class="testimonial-item text-center">
                                            <img class="bg-light  p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product2.jpg') }}">
                                            <div class="testimonial-text bg-light p-2">
                                            <p class="mb-0"> GT Kule Vinç </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial End -->
                        
                        
                            <!-- baglı urunler -->
                        
                        
                        
                            <!-- Urun features -->
                        
                        
                        
                        
                        
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                           
                            </div>


                            <div id="rusya" class="container tab-pane fade">


                                <div class="container">
            

            
                                    <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                        
                                        <div class="col-lg-12">
                                            <div class="tab-content w-100">
                                                <div class="tab-pane fade show active" id="tab-pane-1">
                                                    <div class="row g-4">
                                                        <div class="col-md-6" style="min-height: 350px;">
                                                            <div class="position-relative h-100">
                                                                <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/site/img/product2.jpg') }}"
                                                                    style="object-fit: cover;" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h3 class="mb-3">Rusya'da Mobil Vinçler</h3>
                                                            <p class="mb-4">Araç parkımızda 15 tondan 1000 tona kadar her marka ve model mobil vinçlerimiz sizlere en uygun ve en kaliteli hizmeti vermek için hazır beklemektedir.</p>
                                                            <p><i class="fa fa-check text-success me-3"></i> Faun marka 50 tonluk mobil vinç</p>
                                                            <p><i class="fa fa-check text-success me-3"></i>Liebherr marka 130 tonluk mobil vinç</p>
                                                            <p><i class="fa fa-check text-success me-3"></i>Grove marka 200 tonluk mobil vinç</p>
                                                        </div>
                                                    </div>
                        
                        
                                                     <!-- baglı urunlaer -->
                        
                             <!-- Testimonial Start -->
                             <div class=" py-5 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="container">
                                    <div class="">
                                        <h6 class="text-primary text-uppercase"> Kule </h6>
                                        <h1 class="mb-5"> Mevcut kuleler</h1>
                                    </div>
                                    <div class="owl-carousel testimonial-carousel position-relative">
                                        <div class="testimonial-item text-center">
                                            <img class="bg-light  p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product1.jpg') }}">
                                            <div class="testimonial-text bg-light p-2">
                                            <p class="mb-0"> GT Kule Vinç</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-item text-center">
                                            <img class="bg-light  p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product2.jpg') }}" >
                                            <div class="testimonial-text bg-light text-center p-2">
                                            <p class="mb-0"> GT Kule Vinç</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-item text-center">
                                            <img class="bg-light p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product1.jpg') }}" >
                                            <div class="testimonial-text bg-light p-2">
                                            <p class="mb-0"> GT Kule Vinç </p>
                                            </div>
                                        </div>
                                        <div class="testimonial-item text-center">
                                            <img class="bg-light  p-2 mx-auto mb-3" src="{{ asset('assets/site/img/product2.jpg') }}">
                                            <div class="testimonial-text bg-light p-2">
                                            <p class="mb-0"> GT Kule Vinç </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial End -->
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                           
                            </div>



                        </div>
                    </div>
                </div>
               
                
                
               
            </div>
        </div>
    </div>



     <!-- Service Start -->
<div class="service product_section mb-5">
    <div class="container py-5">
      <div class="section-header text-center mb-4">
        <h2>Öne Çıkan Özellikler</h2>
      </div>
      <div class="row g-4 mt-3"> <!-- Adds vertical and horizontal gutter spacing -->
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center bg-light p-4 h-100 rounded">
            <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
            <h3> Hızlı kurulum ve söküm imkanının olması</h3>
            <p> Açıklama </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center bg-light p-4 h-100 rounded">
            <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
            <h3> Kurulum esnasında en üst seviye güvenlik önlemlerinin alınması</h3>
            <p> Açıklama</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center bg-light p-4 h-100 rounded">
            <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
            <h3>
                En ağır şartlara ve En zorlu iklim koşullarına dayanacak şekilde tasarlanması</h3>
            <p> Açıklama</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center bg-light p-4 h-100 rounded">
            <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
            <h3> Yurtiçi ve Uluslararası sertifikalara sahiptir (ISO,CE,GOST-R, TUVNORD,EAC)</h3>
            <p>Açıklama</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center bg-light p-4 h-100 rounded">
            <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
            <h3> Ekipman kullanımında en iyi kalite tercih edilmiştir</h3>
            <p>Açıklama</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center bg-light p-4 h-100 rounded">
            <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
            <h3>Daha az tır ve konteyner ile taşınabilirlik</h3>
            <p> Açıklama</p>
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
                    <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+90 (242) 331 43 66
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