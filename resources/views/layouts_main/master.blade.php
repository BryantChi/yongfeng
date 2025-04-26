<!DOCTYPE html>
<html lang="zh_TW">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="description" content="{{ $seoInfo->description ?? '' }}" />
    <meta name="keywords" content="{{ $seoInfo->keywords ?? '' }}" />
    <meta property="og:locale" content="zh_TW" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $seoInfo->og_title ?? '' }}" />
    <meta property="og:description" content="{{ $seoInfo->og_discription ?? '' }}" />
    <meta property="og:image" content="{{ asset('assets/images/fimgs/fbimg.jpg') }}" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:site_name" content="{{ $seoInfo->og_site_name ?? '' }}" />
    <title>{{ $seoInfo->title ?? '' }}</title>
    <meta name="title" content="{{ $seoInfo->title ?? '' }}" />
    <link rel="canonical" href="{{ url()->full() }}" />

    <!-- Favicon -->
    <link href="{{ asset('assets/images/fimgs/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}?v={{ time() }}">

    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}?v={{ time() }}">

    @stack('third_party_stylesheets')
    @stack('page_css')

    {!! $seoInfo->ga_header ?? '' !!}
</head>

<body>
    {!! $seoInfo->ga_body ?? '' !!}
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    @include('layouts_main.header')


    @include('layouts_main.hero')

    <div class="main_section"  id="{{ Request::routeIs('index') ? 'main-section' : 'main'}}">

        @yield('content')

    </div>


    @include('layouts_main.footer')


    <!-- Back to Top -->
    <a href="#" class="rounded-circle2 back-to-top">
        <img src="{{asset('assets/images/00-hp/top.png')}}" class="img-fluid" style="width: 60px;" alt="">
    </a>


    <div class="d-none d-md-block social-links-btn">
        <a href="https://line.me/ti/p/vrekUeTzac" target="_blank" class="d-none d-md-block"><img
                src="{{asset('assets/images/00-hp/left_line.svg')}}" class="img-fluid left-line-img"
                alt=""></a>
        <!-- <a href="" class="d-none d-md-block"><img
                src="{{ asset('assets/images/00-hp/left_mes.png') }}" class="img-fluid left-msg-img"
                alt=""></a> -->
    </div>


    <div class="d-flex d-md-none w-100 position-fixed bottom-0 left-0 social-links-btn-mobile">
        <div class="row justify-content-center align-content-center text-center p-0 m-0 w-100">
            <div class="col-4 s-line-btn align-self-center">
                <a href="https://line.me/ti/p/vrekUeTzac" target="_blank">
                    <span><i class="bi bi-line"></i></span> 免費諮詢
                </a>
            </div>
            <div class="col-4 s-phone-btn align-self-center">
                <a href="tel:03-5519-000" target="_blank">
                    <span><i class="bi bi-telephone-fill"></i></span> 聯絡專人
                </a>
            </div>
            <div class="col-4 s-location-btn align-self-center">
                <a href="https://maps.app.goo.gl/BtZtMreRYq83K5n18?g_st=com.google.maps.preview.copy" target="_blank">
                    <span><i class="bi bi-map-fill"></i></span> 地址導航
                </a>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}?v={{time()}}"></script>

    <script src="{{asset('assets/js/custom.js')}}?v={{time()}}"></script>

    @stack('third_party_scripts')
    @stack('page_scripts')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".heroSwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            centeredSlides: true,
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            // },
        });
    </script>
</body>

</html>
