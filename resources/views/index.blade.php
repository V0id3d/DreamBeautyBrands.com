@extends('layouts.public')

@section('PageContents')
<div class="container">
    <div class="row">
        <section>
            <h1 class="text-center">Why Have your own products?</h1>
            <p>
                Why not? You’re already supplying products through your salon. Your own branded products are likely to
                increase sales and increase revenue. Why promote other peoples brands, when you can promote your own?
                You have a name that your clients trust. Everyone trusts their hairdresser, with a client in your chair
                they are excited to be introduced and educated on your products, the products your using on their hair.
                You will gain a higher client retention. If your client knows you have the best product for their hair,
                they simply will have to come back to you to buy it! No internet competition! Its hard when you are
                trying to sell products to your clients who trust you, when you know they are able to purchase them
                online cheaper. This is a breach of your trust, and since most of us treat clients like friends, is a
                hard thing to do resulting in less salon sales. Endless sale or promotional opportunities. You’re in
                control, you know your clients and the way your salon works the best so create your offers directly for
                your customers. No restrictions on re-sale. This is your brand name and you can sell your products
                wherever and however you like. If you chose to promote your products online through a webstore or just
                on social media, this is entirely your choice.
            </p>

        </section>
    </div>
</div>
<div class="container">
    <div class="row">
        <section>
            <h1 class="text-center">How it works?</h1>
            <div class="infoGraphic" id="howItWorks">
                <div class="infoGraphic-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active" role="presentation">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Create Design">
                                <span class="round-tab">
                                    <img src="/img/design.svg" alt="Step 1: Design" class="svg">
                                </span>
                            </a>
                        </li>
                        <li class="" role="presentation">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Place Order">
                                <span class="round-tab">
                                    <img src="/img/placeorder.svg" alt="Step 2: Place Order" class="svg">
                                </span>
                            </a>
                        </li>
                        <li class="" role="presentation">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Sent To Production">
                                <span class="round-tab">
                                    <img src="/img/production.svg" alt="Step 3: Sent To Production" class="svg">
                                </span>
                            </a>
                        </li>
                        <li class="" role="presentation">
                            <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Ship Product">
                                <span class="round-tab">
                                    <img src="/img/delivered.svg" alt="Step 4: Product Shipped" class="svg">
                                </span>
                            </a>
                        </li>
                        <li class="" role="presentation">
                            <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" title="Place Product">
                                <span class="round-tab">
                                    <img src="/img/arrived.svg" alt="Step 5: Product Arrives" class="svg">
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div id="step1" class="tab-pane active" role="tabpanel">
                        <div class="col-sm-3">
                            <img src="/img/design.svg" alt="Step 1: Design" class="svg">
                        </div>
                        <div class="col-sm-9">
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
                        <div class="col-sm-3">
                            <img src="/img/placeorder.svg" alt="Step 2: Place Order" class="svg">
                        </div>
                        <div class="col-sm-9">
                            <h3>Place Order</h3>
                            <p>
                                Simple and easy. Just give us a shout with whatever you need and we’ll process the
                                order for you. Keep in mind you will need to order a minimum of 24 of each product that you need.
                            </p>
                        </div>
                    </div>
                    <div id="step3" class="tab-pane" role="tabpanel">
                        <div class="col-sm-3">
                            <img src="/img/production.svg" alt="Step 2: Place Order" class="svg">
                        </div>
                        <div class="col-sm-9">
                            <h3>Production</h3>
                            <p>
                                Your products go to production, and the dream of your own brand is realised!
                                This is the most exciting stage for us and we will keep you in the loop at ever stage from making the
                                formulation, to filling to packaging for shipment.
                            </p>
                        </div>
                    </div>
                    <div id="step4" class="tab-pane" role="tabpanel">
                        <div class="col-sm-3">
                            <img src="/img/delivered.svg" alt="Step 4: Product Shipped" class="svg">
                        </div>
                        <div class="col-sm-9">
                            <h3>Product Is Shipped</h3>
                            <p>
                                Products are shipped directly to your salon. If space is tight, we can hold stock on your behalf and ship in at
                                agreed times.
                            </p>
                        </div>
                    </div>
                    <div id="step5" class="tab-pane" role="tabpanel">
                        <div class="col-sm-3">
                            <img src="/img/arrived.svg" alt="Step 5: Product Arrives" class="svg">
                        </div>
                        <div class="col-sm-9">
                            <h3>Place Your Product On Your Shelf</h3>
                            <p>
                                Nothing beats the feeling of receiving your first delivery of your products. Get the salon ready and get creative with
                                your displays! Remember, the customer has to see your products in order to buy them.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection