<!DOCTYPE html>
<html class="root rd-navbar-sidebar-active" lang="en">
<head>
    <title>Laravel Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('uploads/setting/basic/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/vendors/components/base/base.css')}}">

    @yield('page_styles')

</head>
<body>

<div class="page">
    <header class=" section page-header">
        <!--RD Navbar-->
        @include('includes.backend.left_sidebar')
    </header>

    @yield('page_content')

    @include('includes.backend.right_sidebar')

</div>

<script src="{{asset('assets/vendors/components/base/script.js')}}"></script>

@yield('page_scripts')
</body>
</html>
