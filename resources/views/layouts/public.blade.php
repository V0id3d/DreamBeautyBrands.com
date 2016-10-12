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
<nav class="navbar navbar-inverse dbbnav" role="navigation">
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
                                <img src="/img/Shampoo.svg" alt="Conditioner Image" class="svg">
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

{{--Header--}}
@yield('PageHeader')

<div class="content">
    {{--Page Contents--}}
    @yield('PageContents')
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-brand">
                <div class="row">
                    <a href="#" class="navbar-brand">
                        <span class="cap">D</span>ream<span class="font-accent"><span class="cap">B</span>eauty</span><span class="cap">B</span>rands
                        <small>Your Salon&nbsp;&nbsp;Your Clients&nbsp;&nbsp;Your Products</small>
                    </a>
                </div>
                <p class="copyright">© 2016 Dream Beauty Brands, All rights reserved</p>
            </div>
            <div class="col-md-5 footer-nav">
                <h4>Menu -</h4>
                <div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Shampoo</a></li>
                        <li><a href="#">Conditioner</a></li>
                        <li><a href="#">Masks</a></li>
                        <li><a href="#">Styling</a></li>
                        <li><a href="#">Finishing</a></li>
                        <li><a href="#">Tools</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 footer-ns">
                <h4>Newsletter</h4>
                <p>Sign up to get up to date news.</p>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email Address">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope" style="font-size: 18px;"></span></button>
                    </span>
                </div>

            </div>
        </div>
    </div>
</footer>


<script src="/js/app.js"></script>
<script>
    $('.carousel').carousel({
        interval: 5000
    })
</script>
</body>
</html>