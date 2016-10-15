@extends('layouts.public')

@section('PageTitle') - Hair Finishing @endsection

@section('PageHeader')
    <header id="top-banner">
        <div class="top-banner-inner">
            <div class="fill" style="background-image: url('/img/finishing.jpeg');"></div>
        </div>
    </header>
@endsection

@section('PageContents')
    <section class="gradient-down">
        <div class="section-header">
            <div class="container">
                <h1>Styling Products</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Glimmer shine spray</h2>
                    <p>
                        Add this perfect final step to any style for beautiful, shiny hair. A finishing spray that
                        attracts and reflects light to give hair a gorgeous glossy final finish. Infused with sunflower,
                        tea tree oil, natural chamomile, balm mint extracts and Vitamin E, this shine spray has
                        antioxidants that help seal in colour as well as creating an invisible protection barrier to
                        help protect hair against harmful environmental elements like the sun, salt water and chlorine.
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Argan Oil Serum</h2>
                    <p>
                        This ancient ingredient from Morocco is like liquid gold for the hair. A rich, smooth formula
                        that doesn’t weigh down the hair and doesn’t feel greasy. Hair feels silky, with incredible
                        shine. Great for smoothing flyaway and unruly hair.
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Keratin & Silk Serum</h2>
                    <p>
                        This serum helps to restore hair back to a healthy state. It achieves this by filling the gaps
                        left by decreases in the hairs natural keratin. Small silk protein molecules are absorbed into
                        the hair shaft to help restore the structure and integrity of the hair.
                    </p>
                </div>
                <div class="col-md-12">
                    <h2>Miracle Mist</h2>
                    <p>
                        Lightweight, moisturising and protective, this multi-purpose mist is one of a kind. Created to
                        deliver moisture directly to the hair strand, smoothing and adding a defensive shield to protect
                        the hair from environmental factors as well as heat styling. This barrier helps your hair to
                        retain internal moisture and provides a smooth finish. Your hair is therefore left silky, shiny
                        and better able to repel the effects of humidity. Designed with a lightweight formulation, it
                        doesn’t weigh down the hair allowing you to create volume or finish curls perfectly, providing
                        long lasting frizz control. This distinctive blend of Keratin with Argan Oil can be used as
                        frequently as you wish, and is perfect if you want to change styles quickly, as a finishing
                        product, or as a quick detangled for unruly or knotty hair.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="parallax" style="background-image: url('/img/parallax-1.jpeg')">
        <div class="section-header">
            <div class="container">
                <h1>Packaging Options</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pricing pricing--table">
                        <div class="pricing__item">
                            <h3 class="pricing__title">Classic</h3>
                            <p class="pricing__sentence">
                                For people who like the idea of private label, but only need a very basic design. Great
                                for starting up!
                            </p>
                            <div class="pricing__price"><span class="pricing__currency">Call For Details</span></div>
                            <ul class="pricing__feature-list">
                                <li class="pricing__feature">Basic Template</li>
                                <li class="pricing__feature">Basic Colors</li>
                                <li class="pricing__feature">Basic Bottles</li>
                            </ul>
                            {{--<button class="pricing__action">Choose plan</button>--}}
                        </div>
                        <div class="pricing__item">
                            <h3 class="pricing__title">Classy</h3>
                            <p class="pricing__sentence">
                                For people who want are ready to start their private label and have a design they
                                already want to use
                            </p>
                            <div class="pricing__price"><span class="pricing__currency">Call For Details</span></div>
                            <ul class="pricing__feature-list">
                                <li class="pricing__feature">Classic Options</li>
                                <li class="pricing__feature">Premium Template / Design</li>
                                <li class="pricing__feature">Premium Colors</li>
                                <li class="pricing__feature">Premium Bottles</li>
                            </ul>
                            {{--<button class="pricing__action">Choose plan</button>--}}
                        </div>
                        <div class="pricing__item">
                            <h3 class="pricing__title">Concierge</h3>
                            <p class="pricing__sentence">
                                For people who like the idea of how they would like their private label, but need help
                                developing the design with their brand.
                            </p>
                            <div class="pricing__price"><span class="pricing__currency">Call For Details</span></div>
                            <ul class="pricing__feature-list">
                                <li class="pricing__feature">Classic / Classy Options</li>
                                <li class="pricing__feature">Full Service Design</li>
                            </ul>
                            {{--<button class="pricing__action">Choose plan</button>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection