

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>تست برای آرکان | @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/backend.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/fonts/remixicon.css') }}">

    <!-- Viewer Plugin -->
    <!--PDF-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/doc-viewer/include/pdf/pdf.viewer.css') }}">
    <!--Docs-->
    <!--PPTX-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/doc-viewer/include/PPTXjs/css/pptxjs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/doc-viewer/include/PPTXjs/css/nv.d3.min.css') }}">
    <!--All Spreadsheet -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.css') }}">
    <!--Image viewer-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/doc-viewer/include/verySimpleImageViewer/css/jquery.verySimpleImageViewer.css') }}">
    <!--officeToHtml-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.css') }}">  </head>
<body class=" color-light ">
<!-- loader Start -->
{{--<div id="loading">--}}
{{--    <div id="loading-center">--}}
{{--    </div>--}}
{{--</div>--}}
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">

    @include('sweetalert::alert')


    <div class="iq-sidebar  sidebar-default ">
        <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('panel.index') }}" class="header-logo">
                <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid rounded-normal light-logo" alt="logo">
                <img src="{{ asset('assets/images/logo-white.png') }}" class="img-fluid rounded-normal darkmode-logo" alt="logo">
            </a>
            <div class="iq-menu-bt-sidebar">
                <i class="las la-bars wrapper-menu"></i>
            </div>
        </div>
        <div class="data-scrollbar" data-scroll="1">
            <div class="new-create select-dropdown input-prepend input-append">
                <div class="btn-group">
                    <label data-toggle="dropdown">
                        <div class="search-query selet-caption"><i class="las la-plus pr-2"></i>افزودن</div><span class="search-replace"></span>
                        <span class="caret"><!--icon--></span>
                    </label>
                    <ul class="dropdown-menu">
                        <li><div class="item"><i class="ri-folder-add-line pr-3"></i><a href="{{ route('posts.index') }}">پست جدید</a></div></li>
                        <li><div class="item"><i class="ri-file-upload-line pr-3"></i><a href="{{ route('users.create') }}">کاربر جدید</a></div></li>
                    </ul>
                </div>
            </div>
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class=" ">
                        <a href="{{ route('panel.index') }}" class="">
                            <i class="las la-home iq-arrow-left"></i><span>خانه</span>
                        </a>
                        <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="#mydrive" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="las la-hdd"></i><span>کاربران</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="mydrive" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class=" ">
                                <a href="{{ route('users.index') }}">
                                    <i class="lab la-blogger-b"></i><span>لیست کاربران</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{ route('users.create') }}">
                                    <i class="las la-share-alt"></i><span>ثبت کاربر</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=" ">
                        <a href="#myPosts" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="las la-hdd"></i><span>پست ها</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="myPosts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class=" ">
                                <a href="{{ route('posts.index') }}">
                                    <i class="lab la-blogger-b"></i><span>لیست پست ها</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{ route('posts.create') }}">
                                    <i class="las la-share-alt"></i><span>ثبت پست</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <div class="p-3"></div>
        </div>
    </div>       <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                    <i class="ri-menu-line wrapper-menu"></i>
                    <a href="index.html" class="header-logo">
                        <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid rounded-normal light-logo" alt="logo">
                        <img src="{{ asset('assets/images/logo-white.png') }}" class="img-fluid rounded-normal darkmode-logo" alt="logo">
                    </a>
                </div>
                <div class="iq-search-bar device-search">


                </div>

                <div class="d-flex align-items-center">
                    <div class="change-mode">
                        <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                            <div class="custom-switch-inner">
                                <p class="mb-0"> </p>
                                <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                    <span class="switch-icon-left"><i class="a-left"></i></span>
                                    <span class="switch-icon-right"><i class="a-right"></i></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list align-items-center">
                            <li class="nav-item nav-icon search-content">
                                <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-search-line"></i>
                                </a>
                                <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                    <form action="#" class="searchbox p-2">
                                        <div class="form-group mb-0 position-relative">
                                            <input type="text" class="text search-input font-size-12" placeholder="جستجو...">
                                            <a href="#" class="search-link"><i class="las la-search"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-question-line"></i>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton01">

                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown caption-content">
                                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    <div class="caption bg-primary line-height">P</div>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton03">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <div class="profile-header">
                                                <div class="cover-container text-center">
                                                    <div class="rounded-circle profile-icon bg-primary mx-auto d-block">
                                                        P
                                                        <a href="#">

                                                        </a>
                                                    </div>
                                                    <div class="profile-detail mt-3">
                                                        <h5><a href="../app/user-profile-edit.html">مریم اسدی</a></h5>
                                                        <p><a href="https://iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5b2b3a353522363a2938341b3c363a323775383436">[email&#160;protected]</a></p>
                                                    </div>
                                                    <a href="auth-sign-in.html" class="btn btn-primary">خروج</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="content-page">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
</div>
<!-- Wrapper End-->
<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 text-right">
                طراحی و پیاده سازی
                 <a href="https://amiralikh.ir"> AMIRALIKH </a>
            </div>
        </div>
    </div>
</footer>
<!-- Backend Bundle JavaScript -->
<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/js/backend-bundle.min.js"></script>

<!-- Chart Custom JavaScript -->
<script src="{{ asset('assets/js/customizer.js') }}"></script>

<!-- Chart Custom JavaScript -->
<script src="{{ asset('assets/js/chart-custom.js') }}"></script>

<!--PDF-->
<script src="{{ asset('assets/vendor/doc-viewer/include/pdf/pdf.js') }}"></script>
<!--Docs-->
<script src="{{ asset('assets/vendor/doc-viewer/include/docx/jszip-utils.js') }}"></script>
<script src="{{ asset('assets/vendor/doc-viewer/include/docx/mammoth.browser.min.js') }}"></script>
<!--PPTX-->
<script src="{{ asset('assets/vendor/doc-viewer/include/PPTXjs/js/filereader.js') }}"></script>
<script src="{{ asset('assets/vendor/doc-viewer/include/PPTXjs/js/d3.min.js') }}"></script>
<script src="{{ asset('assets/vendor/doc-viewer/include/PPTXjs/js/nv.d3.min.js') }}"></script>
<script src="{{ asset('assets/vendor/doc-viewer/include/PPTXjs/js/pptxjs.js') }}"></script>
<script src="{{ asset('assets/vendor/doc-viewer/include/PPTXjs/js/divs2slides.js') }}"></script>
<!--All Spreadsheet -->
<script src="{{ asset('assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.js') }}"></script>
<script src="{{ asset('assets/vendor/doc-viewer/include/SheetJS/xlsx.full.min.js') }}"></script>
<!--Image viewer-->
<script src="{{ asset('assets/vendor/doc-viewer/include/verySimpleImageViewer/js/jquery.verySimpleImageViewer.js') }}"></script>
<!--officeToHtml-->
<script src="{{ asset('assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.js') }}"></script>
<script src="{{ asset('assets/js/doc-viewer.js') }}"></script>
<!-- app JavaScript -->
<script src="{{ asset('assets/js/app.js') }}"></script>
<!-- Modal -->
</body>

</html>
