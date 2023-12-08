<!doctype html>
<html class="no-js" lang="en">
@include('Admin.Layout.sidebar')
@include('Admin.Layout.navbar')

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.3 | Nalika - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('nalika/img/favicon.ico') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('nalika/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('nalika/css/font-awesome.min.css') }}">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('nalika/css/nalika-icon.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('nalika/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('nalika/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('nalika/css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('nalika/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('nalika/css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('nalika/css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('nalika/css/main.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('nalika/css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('nalika/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('nalika/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('nalika/css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('nalika/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('nalika/css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('nalika/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('nalika/css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('nalika/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo mx-1" src="{{ asset('nalika/img/logo/logo.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">

            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                                <li><a href="index-1.html">Dashboard v.2</a></li>
                                                <li><a href="index-3.html">Dashboard v.3</a></li>
                                                <li><a href="product-list.html">Product List</a></li>
                                                <li><a href="product-edit.html">Product Edit</a></li>
                                                <li><a href="product-detail.html">Product Detail</a></li>
                                                <li><a href="product-cart.html">Product Cart</a></li>
                                                <li><a href="product-payment.html">Product Payment</a></li>
                                                <li><a href="analytics.html">Analytics</a></li>
                                                <li><a href="widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="file-manager.html">File Manager</a></li>
                                                <li><a href="contacts.html">Contacts Client</a></li>
                                                <li><a href="projects.html">Project</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('Admin.count')

        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject text-uppercase"><b>User List</b></span>
                                        </div>
                                    </div>

                                    {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp">
                                            <div class="btn-group">
                                                <div class="menu">
                                                    <div class="breadcome-heading">
                                                        <form action="{{ route('admin.userList') }}" method="GET">
                                                            <button type="submit">
                                                            <input type="text" name="keyword" placeholder="Search by Name" class="form-control" style="color: white" value="{{ request('keyword') }}">
                                                            Search</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                            @include('Admin.userData')

                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <hr>
        <h2 style="color: white; margin-left: 50px">Item List</h2>
        <div class="product-new-list-area">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($itemsOnSale as $item)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="single-new-trend mg-t-30">
                            <img src="{{ asset('storage/item-photo/' . $item->pic_item_dt) }}" class="card-img-top" alt="..." width="370" height="400">
                            <div class="overlay-content">
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a data-toggle="tooltip" title="Delete" href="{{ route('deleteItem', ['id' => $item->id_item_dt]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id_item_dt }}').submit();">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                                </svg>
                                                Delete
                                            </a>
                                            
                                            <form id="delete-form-{{ $item->id_item_dt }}" action="{{ route('deleteItem', ['id' => $item->id_item_dt]) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>                                            
                                        </li>
                                    </ul>
                                </div>
                                <a href="">
                                    <h4>{{ $item->nm_item_dt }}</h4>
                                </a>
                                <div class="pro-rating">
                                    <h6>Seller : {{ $item->user->name }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        
        {{-- <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>

    <!-- jquery
		============================================ -->
    <script src={{ asset('nalika/js/vendor/jquery-1.12.4.min.js') }}></script>
    <!-- bootstrap JS
		============================================ -->
    <script src={{ asset('nalika/js/bootstrap.min.js') }}></script>
    <!-- wow JS
		============================================ -->
    <script src={{ asset('nalika/js/wow.min.js') }}></script>
    <!-- price-slider JS
		============================================ -->
    <script src={{ asset('nalika/js/jquery-price-slider.js') }}></script>
    <!-- meanmenu JS
		============================================ -->
    <script src={{ asset('nalika/js/jquery.meanmenu.js') }}></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src={{ asset('nalika/js/owl.carousel.min.js') }}></script>
    <!-- sticky JS
		============================================ -->
    <script src={{ asset('nalika/js/jquery.sticky.js') }}></script>
    <!-- scrollUp JS
		============================================ -->
    <script src={{ asset('nalika/js/jquery.scrollUp.min.js') }}></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src={{ asset('nalika/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}></script>
    <script src={{ asset('nalika/js/scrollbar/mCustomScrollbar-active.js') }}></script>
    <!-- metisMenu JS
		============================================ -->
    <script src={{ asset('nalika/js/metisMenu/metisMenu.min.js') }}></script>
    <script src={{ asset('nalika/js/metisMenu/metisMenu-active.js') }}></script>
    <!-- morrisjs JS
		============================================ -->
    <script src={{ asset('nalika/js/sparkline/jquery.sparkline.min.js') }}></script>
    <script src={{ asset('nalika/js/sparkline/jquery.charts-sparkline.js') }}></script>
    <!-- calendar JS
		============================================ -->
    <script src={{ asset('nalika/js/calendar/moment.min.js') }}></script>
    <script src={{ asset('nalika/js/calendar/fullcalendar.min.js') }}></script>
    <script src={{ asset('nalika/js/calendar/fullcalendar-active.js') }}></script>
	<!-- float JS
		============================================ -->
    <script src={{ asset('nalika/js/flot/jquery.flot.js') }}></script>
    <script src={{ asset('nalika/js/flot/jquery.flot.resize.js') }}></script>
    <script src={{ asset('nalika/js/flot/jquery.flot.pie.js') }}></script>
    <script src={{ asset('nalika/js/flot/jquery.flot.tooltip.min.js') }}></script>
    <script src={{ asset('nalika/js/flot/jquery.flot.orderBars.js') }}></script>
    <script src={{ asset('nalika/js/flot/curvedLines.js') }}></script>
    <script src={{ asset('nalika/js/flot/flot-active.js') }}></script>
    <!-- plugins JS
		============================================ -->
    <script src={{ asset('nalika/js/plugins.js') }}></script>
    <!-- main JS
		============================================ -->
    <script src={{ asset('nalika/js/main.js') }}></script>
</body>

</html>