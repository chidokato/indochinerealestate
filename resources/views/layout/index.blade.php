<!doctype html>
<html>
<head>
    <!-- seo -->
    <base href="{{asset('')}}">
    <title>@yield('title')</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" itemprop="keywords" content="@yield('keywords')" />
    <meta name="news_keywords" content="@yield('keywords')" />
    <meta name="robots" content="@yield('robots')"/>
    <link rel="shortcut icon" href="data/images/{{$setting->favicon}}" />
    <link rel="canonical" href="@yield('url')"/>
    <link rel="alternate" href="{{asset('')}}" hreflang="vi-vn" />
    <!-- and seo -->
    <!-- og -->
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="@yield('url')" />
    <meta property="og:site_name" content="site_name" />
    <meta property="og:images" content="@yield('img')" />
    <meta property="og:image" content="@yield('img')" />
    <meta property="og:image:alt" content="@yield('title')" />
    <!-- and og -->
    <!-- twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('description')" />
    <!-- and twitter -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta property="article:author" content="admin" />

    <!-- CSS ========================= -->
    <!------------------- CSS ------------------->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/fonts.css" rel="stylesheet">
    <link href="assets/css/common.css" rel="stylesheet">
    <link href="assets/css/header.css" rel="stylesheet">
    <link href="assets/css/footer.css" rel="stylesheet">
    <link href="assets/css/sort.css" rel="stylesheet">
    <link href="assets/css/card.css" rel="stylesheet">
    <link href="assets/css/form.css" rel="stylesheet">
    <link href="assets/css/runglac.css" rel="stylesheet">
    <link href="assets/css/simpleLightbox.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8R10SSS97Z"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-8R10SSS97Z');
    </script>

    @yield('css')
    
</head>

<body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')

    <div class="hotline-phone-ring-wrap form-ring-wrap">
        <div class="hotline-phone-ring ">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle click_popup">
                <a href="javascript:void(0)" class="pps-btn-img">
                    <img src="assets/img/icon/dowload.png" alt="Gọi điện thoại" width="50">
                </a>
            </div>
        
        <div class="hotline-bar click_popup">
            <a href="javascript:void(0)">
                <span class="text-hotline">Bảng giá</span>
            </a>
        </div>
        </div>
    </div>

    <div class="hotline-phone-ring-wrap zalo-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
            <a target="_blank" href="https://zalo.me/{{$setting->hotline}}" class="pps-btn-img">
                <img src="assets/img/icon/zalo.png" alt="Gọi điện thoại" width="50">
            </a>
            </div>
        
        <div class="hotline-bar">
            <a target="_blank" href="https://zalo.me/{{$setting->hotline}}">
                <span class="text-hotline">Chat</span>
            </a>
        </div>
        </div>
    </div>

    <div class="hotline-phone-ring-wrap hotline-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
            <a href="tel:{{$setting->hotline}}" class="pps-btn-img">
                <img src="assets/img/icon/icon-call-nh.png" alt="Gọi điện thoại" width="50">
            </a>
            </div>
        
        <div class="hotline-bar">
            <a href="tel:{{$setting->hotline}}">
                <span class="text-hotline">Gọi ngay</span>
            </a>
        </div>
        </div>
    </div>

    <!-- JS
    ============================================ -->
    <!------------------- JS core------------------->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/simpleLightbox.min.js"></script>
    <script src="assets/js/custom.js?v=30"></script>
    
    @yield('js')

    @if (Session::has('success'))
    <div class="alert alert-success">
    {{ Session::get('success') }}
    </div>
    @endif

</body>

</html>