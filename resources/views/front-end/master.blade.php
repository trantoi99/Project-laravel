<!DOCTYPE html>
<html>

<head>
    <base href="{{asset('/front-end')}}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/cart.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="">
    </div>
    <!-- header -->
    <header id="header ">
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color bg-primary shadow-none fixed-top ">
            <div class="container">
                <!-- Navbar brand -->
            <a class="navbar-brand" href="/">
                    <h1>Trang chủ</h1>
                </a>
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">
                    <!-- Links -->
                    <ul class="navbar-nav mr-auto text-center align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Loại Sản Phẩm
                            </a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                                @foreach($category as $cate)
                                <a class="dropdown-item" href="/category/{{ $cate->id_danhmuc}}">{{$cate->ten_danhmuc}}</a>
                                @endforeach
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Thương Hiệu
                            </a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                                @foreach($brand as $key)
                                <a class="dropdown-item" href="/brand/{{ $key->id_hang}}">{{$key->ten_hang}}</a>
                                @endforeach
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('/cart')}}" style="display: grid">
                                <div>
                                    <i style="font-size: 24px" class="fa fa-cart-plus" aria-hidden="true"></i>
                                    {{Cart::getTotalQuantity()}}
                                </div>
                                 Giỏ Hàng</a>
                        </li>
                    </ul>
                    <!-- Links -->
                    <form class="form-inline" method="GET" action="{{asset('/search')}}">
                        <div class="md-form my-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" name="result" aria-label="Search">
                        </div>
                        <button class="btn btn-outline-white btn-sm my-0" type="submit">Search</button>
                    </form>
                </div>
                <!-- Collapsible content -->
            </div>
        </nav>
        <!--/.Navbar-->

    </header>
    <!-- /header -->
    <!-- endheader -->

    <!-- main -->
    <section id="body">
        <div class="container">
            <div class="row" style="margin-top: 100px;">
                <div id="sidebar" class="col-md-3">
                    <div id="banner-l" class="text-center">
                        <div class="banner-l-item">
                            <a href="#"><img src="img/home/banner-l-1.png" alt="" class="img-thumbnail"></a>
                        </div>
                        <div class="banner-l-item">
                            <a href="#"><img src="img/home/banner-l-2.png" alt="" class="img-thumbnail"></a>
                        </div>
                        <div class="banner-l-item">
                            <a href="#"><img src="img/home/banner-l-3.png" alt="" class="img-thumbnail"></a>
                        </div>
                        <div class="banner-l-item">
                            <a href="#"><img src="img/home/banner-l-4.png" alt="" class="img-thumbnail"></a>
                        </div>
                        <div class="banner-l-item">
                            <a href="#"><img src="img/home/banner-l-5.png" alt="" class="img-thumbnail"></a>
                        </div>
                        <div class="banner-l-item">
                            <a href="#"><img src="img/home/banner-l-6.png" alt="" class="img-thumbnail"></a>
                        </div>
                        <div class="banner-l-item">
                            <a href="#"><img src="img/home/banner-l-7.png" alt="" class="img-thumbnail"></a>
                        </div>
                    </div>
                </div>

                <div id="main" class="col-md-9">
                    <!-- main -->
                    <!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
                    <div id="slider">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/home/slide-1.png" alt="Los Angeles">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/home/slide-2.png" alt="Chicago">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/home/slide-3.png" alt="New York">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>

                    <div id="banner-t pb-4" class="text-center">
                        <div class="row">
                            <div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
                                <a href="#"><img src="img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
                            </div>
                            <div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
                                <a href="#"><img src="img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
                            </div>
                        </div>
                    </div>

                    <!-- wrap -->
                    @yield('main')
                    <!-- end main -->
                </div>
            </div>
        </div>
    </section>
    <!-- endmain -->

    <!-- footer -->
    <!-- Footer -->
    <footer class="page-footer font-small bg-primary pt-4">

        <!-- Footer Text -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row pb-3">

                <!-- Grid column -->
                <div class="col-md-4 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class=" font-weight-normal pb-4">Về Chúng Tôi</h5>
                    <p></p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-4 mb-md-0 mb-3">

                    <!-- Content -->
                    <h5 class="font-weight-normal pb-4">Liên Hệ Với Chúng Tôi</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga perferendis modi earum commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam, aspernatur id excepturi hic.</p>

                </div>
                <!-- Grid column -->
                <div class="col-md-4">
                    <h5 class="font-weight-normal pb-4">Theo Dõi Chúng Tôi</h5>
                    <form class="input-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Your email" aria-label="Your email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-sm btn-outline-white my-0" type="button">Subcrible</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Text -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#">My Team</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
        });

        $(window).resize(function() {
            var w = $(window).width();
            if (w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    </script>
</body>

</html>
