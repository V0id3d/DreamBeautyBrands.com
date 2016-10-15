@extends('layouts.public')

@section('PageHeader')
    @include('public.partials._HomePageSlider')
@endsection

@section('PageContents')
    <section class="gradient-down">
        <div class="section-header">
            <div class="container">
                <h1>Your Private Label Solution</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Ever wanted to have your own products at your own salon to offer to your clients? At Dream Beauty
                        Brands we can turn this Dream into a reality with just a few clicks of the mouse. You can now have
                        your very own products presented on your shelves easier than ever before. Whether you want to use
                        one of our many templates or prefer to design your products from scratch, Dream Beauty Brands has
                        the solutions to get your products out there for your public to see.
                    </p>
                    <p>
                        There are millions of different packaging design options out there. However, in the hair industry
                        brands are not too creative with the bottles - just their labelling and branding really
                        differentiates them. You can be as involved as you like with the creation of your products. We have
                        perfected formulations ready to go, which will be packaged under your brand/salon name and can be
                        on your shelves in as little as two weeks. We have made the process super simple to get started.
                        Once you get start and see the great response, you can look at creating your own fragrance for the
                        products. If you are feeling super creative, meet with us and create your own formulations from
                        beginning to end!
                    </p>
                    <p>
                        Like yourself, we work in the hair and beauty industry. We have worked with all the big names and
                        we have seen a substantial amount of change in the way the industry works over recent years. There
                        is little respect given to professional products anymore and I’m sure you’ll agree, times are tougher
                        now than they have ever been. We have to contend with online prices, no restrictions on professional
                        only products and now there is little business left for the hair salons. The product ranges have
                        become so big and mass market that they are almost unaffordable to stock and the salon support just
                        isn’t there anymore.
                    </p>
                    <p>
                        Dream Beauty Brands is dedicated to bring back power to the salons. By offering your own brand you
                        can cut out some of the big name brands who offer professional products that still end up selling
                        in retail chains.  With our private label solutions salon owners will have opportunity to connect
                        further with clients while simultaneously building a brand that will assist in growing overall
                        business. Sounds good? We think so, let us help you turn your private label dreams into reality.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="section-header">
            <div class="container">
                <h1>Why Have Your Own Products?</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/ownbrand.jpeg" alt="Own Brands Image" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <p>
                        <strong>Why not?</strong> You’re already supplying products through your salon. Your own branded products are
                        likely to increase sales and increase revenue. Why promote other peoples brands, when you
                        can promote your own?
                    </p>
                    <p>
                        <strong>You have a name that your clients trust.</strong> Everyone trusts their hairdresser, with a client in
                        your chair they are excited to be introduced and educated on your products, the products
                        your using on their hair.
                    </p>
                    <p>
                        <strong>You will gain a higher client retention.</strong> If your client knows you have the best product for
                        their hair, they simply will have to come back to you to buy it!
                    </p>
                    <p>
                        <strong>No internet competition!</strong> Its hard when you are trying to sell products to your clients who
                        trust you, when you know they are able to purchase them online cheaper. This is a breach of
                        your trust, and since most of us treat clients like friends, is a hard thing to do resulting
                        in less salon sales.
                    </p>
                    <p>
                        <strong>Endless sale or promotional opportunities.</strong> You’re in control, you know your clients and the
                        way your salon works the best so create your offers directly for your customers.
                    </p>
                    <p>
                        <strong>No restrictions on re-sale.</strong> This is your brand name and you can sell your products wherever
                        and however you like. If you chose to promote your products online through a webstore or
                        just on social media, this is entirely your choice.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="parallax" style="background-image: url('/img/parallax-1.jpeg')">
        <div class="section-header">
            <div class="container">
                <h1>Helping to make your dream project a reality</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                {{--Section Text--}}
                <div class="col-md-5 section-text" style="margin-top: 60px;">
                    <p>
                        We’ve picked two of the most popular bottle ranges to offer to you, if you would prefer
                        something completely different, just ask. Classic & Classy - these have two different price points
                        but you can do a lot with a decent label design. Nothing will look “off the shelf” - it will all
                        be unique to you.
                    </p>
                    <blockquote>
                        <strong>Be inspired. Be creative.</strong> Think of something new. Think of something unique. Your ideas are the
                        inspiration for you creations.
                    </blockquote>
                </div>
                {{--Info Graphic--}}
                <div class="col-md-7">
                    <h1>How It Works</h1>
                    <div class="infoGraphic" id="howItWorks">
                        <div class="infoGraphic-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active" role="presentation">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                            title="Create Design">
                                        <span class="round-tab">
                                            <img src="/img/design.svg" alt="Step 1: Design" class="svg">
                                        </span>
                                    </a>
                                </li>
                                <li class="" role="presentation">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                            title="Place Order">
                                        <span class="round-tab">
                                            <img src="/img/placeorder.svg" alt="Step 2: Place Order" class="svg">
                                        </span>
                                    </a>
                                </li>
                                <li class="" role="presentation">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"
                                            title="Sent To Production">
                                        <span class="round-tab">
                                            <img src="/img/production.svg" alt="Step 3: Sent To Production" class="svg">
                                        </span>
                                    </a>
                                </li>
                                <li class="" role="presentation">
                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"
                                            title="Ship Product">
                                        <span class="round-tab">
                                            <img src="/img/delivered.svg" alt="Step 4: Product Shipped" class="svg">
                                        </span>
                                    </a>
                                </li>
                                <li class="" role="presentation">
                                    <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"
                                            title="Place Product">
                                        <span class="round-tab">
                                            <img src="/img/arrived.svg" alt="Step 5: Product Arrives" class="svg">
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div id="step1" class="tab-pane active" role="tabpanel">
                                <div class="col-xs-3">
                                    <img src="/img/design.svg" alt="Step 1: Design" class="svg">
                                </div>
                                <div class="col-xs-9">
                                    <h3>Design Label</h3>
                                    <p>
                                        There are two options here, you can ask us to completely design the logo, following
                                        your branding and just provide you with the finished product. Or, you can have the logo designed
                                        yourself and just provide us with the finished artwork for print. This is part of the initial set-up only and
                                        we will keep the artwork safe for your repeat orders.
                                    </p>
                                </div>
                            </div>
                            <div id="step2" class="tab-pane" role="tabpanel">
                                <div class="col-xs-3">
                                    <img src="/img/placeorder.svg" alt="Step 2: Place Order" class="svg">
                                </div>
                                <div class="col-xs-9">
                                    <h3>Place Order</h3>
                                    <p>
                                        Simple and easy. Just give us a shout with whatever you need and we’ll process the
                                        order for you. Keep in mind you will need to order a minimum of 24 of each product that you need.
                                    </p>
                                </div>
                            </div>
                            <div id="step3" class="tab-pane" role="tabpanel">
                                <div class="col-xs-3">
                                    <img src="/img/production.svg" alt="Step 2: Place Order" class="svg">
                                </div>
                                <div class="col-xs-9">
                                    <h3>Production</h3>
                                    <p>
                                        Your products go to production, and the dream of your own brand is realised!
                                        This is the most exciting stage for us and we will keep you in the loop at ever stage from making the
                                        formulation, to filling to packaging for shipment.
                                    </p>
                                </div>
                            </div>
                            <div id="step4" class="tab-pane" role="tabpanel">
                                <div class="col-xs-3">
                                    <img src="/img/delivered.svg" alt="Step 4: Product Shipped" class="svg">
                                </div>
                                <div class="col-xs-9">
                                    <h3>Product Is Shipped</h3>
                                    <p>
                                        Products are shipped directly to your salon. If space is tight, we can hold stock on your behalf and ship in at
                                        agreed times.
                                    </p>
                                </div>
                            </div>
                            <div id="step5" class="tab-pane" role="tabpanel">
                                <div class="col-xs-3">
                                    <img src="/img/arrived.svg" alt="Step 5: Product Arrives" class="svg">
                                </div>
                                <div class="col-xs-9">
                                    <h3>Place Your Product On Your Shelf</h3>
                                    <p>
                                        Nothing beats the feeling of receiving your first delivery of your products. Get the salon ready and get creative with
                                        your displays! Remember, the customer has to see your products in order to buy them.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection