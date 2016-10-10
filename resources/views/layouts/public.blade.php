<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hair Care Products Branding">
    <meta name="author" content="Carlos Quinones">

    <title>Dream Beauty Brands @yield('PageTitle')</title>

    <link rel="stylesheet" href="/css/app.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
{{--Navigation--}}
<nav class="navbar navbar-inverse navbar-fixed-top dbbnav" role="navigation">
    <div class="container">
        {{--Brand and toggle grouped for mobile display--}}
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dbb-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">
                <span class="cap">D</span>ream<span class="font-accent"><span class="cap">B</span>eauty</span><span class="cap">B</span>rands
                <small>Your Salon&nbsp;&nbsp;Your Clients&nbsp;&nbsp;Your Products</small>
            </a>
        </div>
        {{--Nav Menu Items--}}
        <div class="collapse navbar-collapse" id="dbb-navbar-collapse">
            {{--Top Level Menu--}}
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                {{--Dropdown Menu (Products)--}}
                <li class="dropdown dbbnav-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="">
                                <img src="/img/Shampoo.svg" alt="Shampoo Image" class="svg">
                                <span class="item-label">Shampoo</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="">
                                <img src="/img/Conditioner.svg" alt="Conditioner Image" class="svg">
                                <span class="item-label">Conditioner</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="">
                                <img src="/img/Masks.svg" alt="Shampoo Image" class="svg">
                                <span class="item-label">Masks</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="">
                                <img src="/img/Styling.svg" alt="Shampoo Image" class="svg">
                                <span class="item-label">Styling</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="">
                                <img src="/img/Finish.svg" alt="Shampoo Image" class="svg">
                                <span class="item-label">Finishing</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="">
                                <img src="/img/Tools.svg" alt="Shampoo Image" class="svg">
                                <span class="item-label">Tools</span>
                            </a>
                        </li>
                        {{--<li><a href="#">Shampoo</a></li>--}}
                        {{--<li><a href="#">Conditioner</a></li>--}}
                        {{--<li><a href="#">Masks</a></li>--}}
                        {{--<li><a href="#">Styling</a></li>--}}
                        {{--<li><a href="#">Finishing</a></li>--}}
                        {{--<li><a href="#">Tools</a></li>--}}
                    </ul>
                </li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

{{--Header Carousel--}}
<header id="dbbCarousel" class="carousel slide">

    {{--Indicators--}}
    <ol class="carousel-indicators">
        <li data-target="#dbbCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#dbbCarousel" data-slide-to="1"></li>
        <li data-target="#dbbCarousel" data-slide-to="2"></li>
    </ol>

    {{--Slide Wrappers--}}
    <div class="carousel-inner">
        {{--Active Slide--}}
        <div class="item active">
            <div class="fill" style="background-image: url('/img/your-salon.jpeg');"></div>
            <div class="carousel-caption">
                <h2>Your Salon</h2>
            </div>
        </div>
        {{--Slide--}}
        <div class="item">
            <div class="fill" style="background-image: url('/img/your-clients.jpeg');"></div>
            <div class="carousel-caption">
                <h2>Your Clients</h2>
            </div>
        </div>
        {{--Slide--}}
        <div class="item">
            <div class="fill" style="background-image: url('/img/your-products.jpeg');"></div>
            <div class="carousel-caption">
                <h2>Your Products</h2>
            </div>
        </div>
    </div>

    {{--Carousel Controls--}}
    <a class="left carousel-control" href="#dbbCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#dbbCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</header>

{{--Page Contents--}}
@yield('PageContents')
<div class="container">
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>
</div>
<script src="/js/app.js"></script>
<script>
    $('.carousel').carousel({
        interval: 5000
    })
</script>
</body>
</html>