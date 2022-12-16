<!doctype html>
<html class="loading dark-layout" lang="en" data-textdirection="ltr" data-layout="dark-layout">

<head>
    @yield('head')
</head>

<body class="vertical-layout vertical-menu-modern navbar-floating    footer-static default" data-open="click"
    data-menu="vertical-menu-modern" data-col="default" data-framework="laravel"
    data-asset-path="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/">

    <header>
        @yield('header')
    </header>
    <div id="main">
        @yield('content')
    </div>
    <footer>
        @include('includes.footer')
    </footer>

</body>

</html>
