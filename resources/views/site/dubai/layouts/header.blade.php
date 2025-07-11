<header class="main-header header-style-two">
    <div class="header-container">

        <div class="header-upper">
            <div class="auto-container" style="max-width:1600px">
                <div class="inner-container clearfix">

                    <div class="logo-box logo__web">
                        <div class="logo"><a href="{{ route('homepage.index') }}"
                                title="Escape Rooms in Dubai | Black-Out"><img
                                    src="{{ asset('assets/site/images/newImages/newImage1.webp') }}"
                                    alt="Escape Rooms in Dubai | Black-Out" title="Escape Rooms in Dubai | Black-Out"
                                    style="max-width: 250px; margin-top: 10px;"></a></div>
                    </div>

                    <div class="logo-box logo__mobile" style="width: 100%; z-index:999999; max-width:250px">
                        <div class="logo"><a href="{{ route('homepage.index') }}"
                                title="Escape Rooms in Dubai | Black-Out"><img
                                    src="{{ asset('assets/site/images/newImages/newImage1.webp') }}"
                                    alt="Escape Rooms in Dubai | Black-Out" title="Escape Rooms in Dubai | Black-Out"
                                    style="max-width: 250px; margin-top: 10px; height:auto !important; float:left;"></a>
                        </div>
                    </div>

                    <div class="nav-outer clearfix mobile___menu">

                        <div class="mobile-nav-toggler" style="color: #ffff;"><span class="icon flaticon-menu-2"></span>
                        </div>

                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix d-flex flex-column flex-lg-row align-items-center justify-content-between">
                                    <li class="">
                                        <a href="{{ route('homepage.index') }}">HOME</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#">CORPORATE</a>

                                        <ul>
                                            <li><a href="{{ route('dubai.faq') }}">Faq</a></li>
                                            <li><a href="{{ route('dubai.terms') }}">Terms
                                                    &
                                                    Conditions</a></li>

                                            <li><a href="{{ route('dubai.disclaimer') }}">
                                                    Disclaimers &
                                                    Liability</a></li>

                                            <li><a href="{{ route('dubai.privacy') }}">
                                                    Privacy
                                                    Policy</a></li>

                                            <li><a href="{{ route('dubai.teambuilding') }}">
                                                    Team
                                                    Building</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="{{ route('requestvideo.dubai') }}">REQUEST
                                            VIDEO</a></li>

                                    <li><a href="{{ route('dubai.franchise') }}">FRANCHISE</a></li>

                                    <li class><a href="{{ route('supernatural.index') }}"
                                            target="_blank">Supernatural</a>

                                    </li>
                                    <li class><a href="{{ route('dubai.blog') }}">BLOG</a>

                                    </li>

                                    <li><a href="{{ route('dubai.contact') }}">CONTACT</a></li>

                                    <li class="redButtonNav glitch d-flex align-items-center justify-content-between">
                                        <a href="{{ route('rooms.dubai') }}" class="theme-btn btn-style-one"
                                            style><span class="btn-title"
                                                style="background: transparent; padding: 5px 20px; border-radius:30px !important; border:.15rem solid #ffffffb0; font-weight:700">
                                                BOOK NOW</span></a>
                                    </li>


                                    <li class="redButtonNav d-flex align-items-center justify-content-between">
                                        <a href="{{ route('homeabudhabi.index') }}" class="theme-btn btn-style-one"
                                            ><span class="btn-title"
                                                style="background: transparent; padding: 5px 40px;border-radius:30px !important; border:.15rem solid #ffffffb0">
                                                Abudhabi</span></a>
                                    </li>

                                </ul>
                            </div>
                        </nav>

                        <ul class="social-links clearfix">
                            @foreach ($socialMedia as $media)
                                <li>
                                    <a href="@if ($media->platform == 'whatsap') https://wa.me/{{ $media->username }}
                                    @elseif($media->platform == 'snapchat') https://www.{{ $media->platform }}.com/add/{{ $media->username }}
                                    @elseif($media->platform == 'youtube') https://www.{{ $media->platform }}.com/channel/{{ $media->username }}
                                    @else https://www.{{ $media->platform }}.com/{{ $media->username }} @endif"
                                        target="_blank">
                                        @switch($media->platform)
                                            @case('twitter')
                                                <span class="fab fa-twitter"></span>
                                            @break

                                            @case('facebook')
                                                <span class="fab fa-facebook-square"></span>
                                            @break

                                            @case('linkedin')
                                                <span class="fab fa-linkedin-in"></span>
                                            @break

                                            @case('pinterest')
                                                <span class="fab fa-pinterest-p"></span>
                                            @break

                                            @case('youtube')
                                                <span class="fab fa-youtube"></span>
                                            @break

                                            @case('tiktok')
                                                <span class="fab fa-tiktok"></span>
                                            @break

                                            @case('snapchat')
                                                <span class="fab fa-snapchat-ghost"></span>
                                            @break

                                            @case('whatsap')
                                                <span class="fab fa-whatsapp"></span>
                                            @break

                                            @case('instagram')
                                                <span class="fab fa-instagram"></span>
                                            @break

                                            @default
                                                {{-- Optionally handle unknown platform with a default or no icon --}}
                                        @endswitch
                                    </a>
                                </li>
                            @endforeach
                        </ul>


                    </div>
                </div>
            </div>
        </div>


        <div class="header-top ">
            <div class="auto-container " style="max-width:1600px">
                <div class="inner clearfix">
                    <div class="top-left" style="visibility: hidden;">
                        <div class="top-text">Black-Out</div>
                    </div>

                    <div class="top-right">
                        <ul class="info clearfix">
                            <li>
                                <img src="{{ asset('assets/site/images/logoPart/phone-icon.webp') }}"
                                    alt="Black Out - Dubai Phone Number" style="max-width: 29px;" class="mobil_imgicon">
                                <a href="tel:+9710521111041">+971 052 111 1041</a>
                            </li>
                            <li>
                                <img src="{{ asset('assets/site/images/logoPart/mail_icon.webp') }}"
                                    alt="Black Out - Dubai mail address " style="max-width: 29px;"
                                    class="mobil_imgicon">
                                &nbsp;
                                <a href="mailto:info.dxb@black-out.ae">info.dxb@black-out.ae</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="sticky-header">
        <div class="auto-container clearfix">

            <div style="display: flex; justify-content: space-between; align-items: center;">

                <div class="logo pull-left">
                    <a href="{{ route('homepage.index') }}" title><img
                            src="{{ asset('assets/site/images/newImages/newImage1.webp') }}"
                            alt="Black-out Rooms in Dubai | Black-Out"
                            title></a>
                </div>

                <div class="pull-right">

                    <nav class="main-menu clearfix">

                    </nav>
                </div>

            </div>

        </div>
    </div>

    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

        <nav class="menu-box">

            <div class="nav-logo"><a href="{{ route('homepage.index') }}">
                    <img src="" alt="" title></a></div>
            <div class="menu-outer"></div>


            <div class="link-box" style="padding: 30px 25px 0px 25px; display: list-item; text-align:center">
                <a href="{{ route('rooms.dubai') }}" class="theme-btn btn-style-one"
                    style="padding: 0px 0px !important;"><span class="btn-title glitch"
                        style="background: transparent;  padding: 5px 50px;border-radius:30px !important; border:1px solid #ffff">
                        BOOK NOW</span></a>
            </div>

            <div class="link-box" style="padding: 30px 25px 0px 25px; display: list-item; text-align:center">
                <a href="{{ route('homeabudhabi.index') }}" class="theme-btn btn-style-one"
                    style="padding: 0px 0px !important;"><span class="btn-title"
                        style="background: transparent;  padding: 5px 50px;border-radius:30px !important; border:1px solid #ffff">
                        ABU DHABI</span></a>
            </div>

            <div style="text-align: center; border-bottom:2px solid rgba(255, 255, 255, 0.10)" class="mt-3">
                <p style="font-size: 14px; text-align:center"> EXPLORE OUR ABU DHABI ESCAPE ROOMS
                </p>
            </div>

            <div class="social-links mt-5 mb-5" style="display: flex; flex-direction: column; align-items: center;">
                <ul class="social-links-top" style="width: 100%; display: flex; justify-content: space-evenly;">
                    @foreach ($socialMedia->take(3) as $media)
                        <li>
                            <a href="@if ($media->platform == 'whatsap') https://wa.me/{{ $media->username }}
                            @elseif($media->platform == 'snapchat') https://www.{{ $media->platform }}.com/add/{{ $media->username }}
                            @elseif($media->platform == 'youtube') https://www.{{ $media->platform }}.com/channel/{{ $media->username }}
                            @else https://www.{{ $media->platform }}.com/{{ $media->username }} @endif"
                                target="_blank">
                                @switch($media->platform)
                                    @case('twitter')
                                        <span class="fab fa-twitter"></span>
                                    @break

                                    @case('facebook')
                                        <span class="fab fa-facebook-square"></span>
                                    @break

                                    @case('linkedin')
                                        <span class="fab fa-linkedin-in"></span>
                                    @break

                                    @case('pinterest')
                                        <span class="fab fa-pinterest-p"></span>
                                    @break

                                    @case('youtube')
                                        <span class="fab fa-youtube"></span>
                                    @break

                                    @case('tiktok')
                                        <span class="fab fa-tiktok"></span>
                                    @break

                                    @case('snapchat')
                                        <span class="fab fa-snapchat-ghost"></span>
                                    @break

                                    @case('whatsap')
                                        <span class="fab fa-whatsapp"></span>
                                    @break

                                    @case('instagram')
                                        <span class="fab fa-instagram"></span>
                                    @break

                                    @default
                                        {{-- Optionally handle unknown platform with a default or no icon --}}
                                @endswitch
                            </a>
                        </li>
                    @endforeach
                </ul>
                <ul class="social-links-bottom mt-4"
                    style="width: 100%; display: flex; justify-content: space-evenly;">
                    @foreach ($socialMedia->slice(3, 2) as $media)
                        <li>
                            <a href="@if ($media->platform == 'whatsap') https://wa.me/{{ $media->username }}
                            @elseif($media->platform == 'snapchat') https://www.{{ $media->platform }}.com/add/{{ $media->username }}
                            @elseif($media->platform == 'youtube') https://www.{{ $media->platform }}.com/channel/{{ $media->username }}
                            @else https://www.{{ $media->platform }}.com/{{ $media->username }} @endif"
                                target="_blank">
                                @switch($media->platform)
                                    @case('twitter')
                                        <span class="fab fa-twitter"></span>
                                    @break

                                    @case('facebook')
                                        <span class="fab fa-facebook-square"></span>
                                    @break

                                    @case('linkedin')
                                        <span class="fab fa-linkedin-in"></span>
                                    @break

                                    @case('pinterest')
                                        <span class="fab fa-pinterest-p"></span>
                                    @break

                                    @case('youtube')
                                        <span class="fab fa-youtube"></span>
                                    @break

                                    @case('tiktok')
                                        <span class="fab fa-tiktok"></span>
                                    @break

                                    @case('snapchat')
                                        <span class="fab fa-snapchat-ghost"></span>
                                    @break

                                    @case('whatsap')
                                        <span class="fab fa-whatsapp"></span>
                                    @break

                                    @case('instagram')
                                        <span class="fab fa-instagram"></span>
                                    @break

                                    @default
                                        {{-- Optionally handle unknown platform with a default or no icon --}}
                                @endswitch
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>



        </nav>
    </div>

</header>
