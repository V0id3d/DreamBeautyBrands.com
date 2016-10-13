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
            {{--<div class="carousel-caption">--}}
                {{--<h2>Your Salon</h2>--}}
            {{--</div>--}}
        </div>
        {{--Slide--}}
        <div class="item">
            <div class="fill" style="background-image: url('/img/your-clients.jpeg');"></div>
            {{--<div class="carousel-caption">--}}
                {{--<h2>Your Clients</h2>--}}
            {{--</div>--}}
        </div>
        {{--Slide--}}
        <div class="item">
            <div class="fill" style="background-image: url('/img/your-products.jpeg');"></div>
            {{--<div class="carousel-caption">--}}
                {{--<h2>Your Products</h2>--}}
            {{--</div>--}}
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