<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta property="og:title" content="{{ Helper::getSettings('application_name') }}">
    <meta property="og:description" content="{{ Helper::getSettings('application_toll_free') }}">
    <meta property="og:image"
        content="{{ Helper::getSettings('site_logo') ? asset(Helper::getSettings('site_logo')) : '/logo.png' }}">
    <meta property="og:url" content="https://livenzagroup.com">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ Helper::getSettings('application_name') }}">
    <meta name="twitter:description" content="{{ Helper::getSettings('application_toll_free') }}">
    <meta name="twitter:image"
        content="{{ Helper::getSettings('site_logo') ? asset(Helper::getSettings('site_logo')) : '/logo.png' }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="description" content="{{ Helper::getSettings('application_toll_free') }}">
    <meta name="keywords" content="{{ Helper::getSettings('application_fax') }}">
    <meta name="author" content="{{ Helper::getSettings('application_name') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ Helper::getSettings('site_favicon') ? asset(Helper::getSettings('site_favicon')) : '/favicon.png' }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ Helper::getSettings('site_favicon') ? asset(Helper::getSettings('site_favicon')) : '/favicon.png' }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ Helper::getSettings('site_favicon') ? asset(Helper::getSettings('site_favicon')) : '/favicon.png' }}">
















    <!-- all css -->
    <link rel="stylesheet" href="/frontend/assets/css/vendor.css">
    <link rel="stylesheet" href="/frontend/assets/css/style.css">
    <link rel="stylesheet" href="/frontend/assets/css/custom.css">
    <title>
        @hasSection('title')
            @yield('title')
        @else
            {{ Helper::getSettings('application_name') ? Helper::getSettings('application_name') : 'Livenza Group' }}
        @endif
    </title>
</head>

<body>
    <div class="full_page_wrapper">
        @include('frontend.layouts.header')
        <div class="headeremtyspace"></div>
        @yield('content')
        @include('frontend.layouts.footer')
    </div>
    @stack('footer')
    <!-- all js -->
    <script src="/frontend/assets/js/vendor.js" defer></script>
    <script src="/frontend/assets/js/main.js" defer></script>
</body>

</html>
