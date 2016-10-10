@extends('layouts.public')

@section('PageContents')
<div class="container">
    <div class="row">
        <section>
            <h1>Example</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequuntur cumque dolorem enim explicabo impedit ipsa, ipsum minus, nesciunt nihil perspiciatis quo, similique suscipit. Amet nam recusandae tenetur! Consectetur, minima?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequuntur cumque dolorem enim explicabo impedit ipsa, ipsum minus, nesciunt nihil perspiciatis quo, similique suscipit. Amet nam recusandae tenetur! Consectetur, minima?
            </p>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur, corporis fugiat maiores odio quas sit velit voluptate! Asperiores consequuntur, debitis enim illo incidunt ipsam ipsum quia repellendus unde ut?
            </p>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa illo suscipit tempora! Error incidunt repellendus similique soluta veniam. Cumque doloremque enim fuga in ipsum laboriosam nemo nesciunt quam tenetur velit.
            </p>
        </section>
    </div>
</div>
<div class="container test">
    <div class="row">
        <section>
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