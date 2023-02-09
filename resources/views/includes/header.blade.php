@section('header')
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow  ">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">

                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="sun"></i></a></li>
                  <li class="nav-item d-none d-lg-block"><a href="/detail" ><i class="ficon"
                            data-feather="shopping-cart" style="margin-left: 5px; margin-right:10px;"></i></a></li>
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
                        data-bs-toggle="dropdown" aria-haspopup="true">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name fw-bolder">Kemang</span>
                            <span class="user-status">Admin</span>
                        </div>
                        <span class="avatar">
                            <img class="round"
                                src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/images/portrait/small/avatar-s-11.jpg"
                                alt="avatar" height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item"
                            href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/page/profile">
                            <i class="me-50" data-feather="user"></i> Profile
                        </a>
                        <a class="dropdown-item"
                            href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/email">
                            <i class="me-50" data-feather="mail"></i> Inbox
                        </a>
                        <a class="dropdown-item"
                            href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/todo">
                            <i class="me-50" data-feather="check-square"></i> Task
                        </a>
                        <a class="dropdown-item"
                            href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/chat">
                            <i class="me-50" data-feather="message-square"></i> Chats
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"
                            href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/page/account-settings-account">
                            <i class="me-50" data-feather="settings"></i> Settings
                        </a>
                        <a class="dropdown-item"
                            href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/page/pricing">
                            <i class="me-50" data-feather="credit-card"></i> Pricing
                        </a>
                        <a class="dropdown-item"
                            href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/page/faq">
                            <i class="me-50" data-feather="help-circle"></i> FAQ
                        </a>
                        <a class="dropdown-item" href="/login">
                            <i class="me-50" data-feather="power"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    {{-- <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center">
            <a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100"
                href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/file-manager">
                <div class="d-flex">
                    <div class="me-75">
                        <img src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/images/icons/xls.png"
                            alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p>
                        <small class="text-muted">Marketing Manager</small>
                    </div>
                </div>
                <small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100"
                href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/file-manager">
                <div class="d-flex">
                    <div class="me-75">
                        <img src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/images/icons/jpg.png"
                            alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p>
                        <small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
                <small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100"
                href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/file-manager">
                <div class="d-flex">
                    <div class="me-75">
                        <img src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/images/icons/pdf.png"
                            alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p>
                        <small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
                <small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100"
                href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/file-manager">
                <div class="d-flex">
                    <div class="me-75">
                        <img src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/images/icons/doc.png"
                            alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p>
                        <small class="text-muted">Web Designer</small>
                    </div>
                </div>
                <small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a>
        </li>
        <li class="d-flex align-items-center">
            <a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/user/view">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75">
                        <img src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/images/portrait/small/avatar-s-8.jpg"
                            alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p>
                        <small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/user/view">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75">
                        <img src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/images/portrait/small/avatar-s-1.jpg"
                            alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p>
                        <small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/user/view">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75">
                        <img src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/images/portrait/small/avatar-s-14.jpg"
                            alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p>
                        <small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/app/user/view">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75">
                        <img src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/images/portrait/small/avatar-s-6.jpg"
                            alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p>
                        <small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a>
        </li>
    </ul> --}}


    {{-- <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start">
                    <span class="me-75" data-feather="alert-circle"></span>
                    <span>No results found.</span>
                </div>
            </a>
        </li>
    </ul> --}}

    <!-- END: Header-->
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto">
                    <a class="navbar-brand" href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4">
                        <span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://newdiskominfo.bogorkab.go.id/wp-content/uploads/2017/02/cropped-logo-pemkab-bogor.png"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                        y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                        x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill:currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <h2 class="brand-text">Kemang</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pe-0" data-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        <i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc"
                            data-ticon="disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


                <li class="nav-item  ">
                    <a href="{{ url('/') }}" class="d-flex align-items-center" target="_self">
                        <i data-feather="home"></i>
                        <span class="menu-title text-truncate">Dashboards</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('/maps') }}" class="d-flex align-items-center" target="_self">
                        <i data-feather="map"></i>
                        <span class="menu-title text-truncate">Potensi Daerah</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('/umkm') }}" class="d-flex align-items-center" target="_self">
                        <i data-feather="map-pin"></i>
                        <span class="menu-title text-truncate">Potensi UMKM</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('/list') }}" class="d-flex align-items-center" target="_self">
                        <i data-feather="layers"></i>
                        <span class="menu-title text-truncate">UMKM Khusus</span>
                    </a>
                </li>

                {{-- <li class="navigation-header">
                    <span>Apps &amp; Pages</span>
                    <i data-feather="more-horizontal"></i>
                </li> --}}

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
    <!-- END: Main Menu-->
@endsection
