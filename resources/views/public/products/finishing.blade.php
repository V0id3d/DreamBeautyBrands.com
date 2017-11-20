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
                    <h2>Hair Repair Spray</h2>
                    <p>
                        Lightweight, moisturising and protective, this multi-purpose mist is one of a kind. Created to 
                        deliver moisture directly to the hair strand, smoothing and adding a defensive shield to protect 
                        the hair from environmental factors (including ultraviolet light) as well as heat styling. This 
                        barrier helps hair to retain internal moisture and provides a smooth finish. Hair is left silky, 
                        shiny and better able to repel the effects of humidity. Designed with a lightweight formulation 
                        that combines proteins, aloe vera, fruit and citrus extracts for hair and scalp vitality and 
                        thermal protection, it doesn’t weigh down the hair allowing you to create volume or finish curls 
                        perfectly, providing long lasting frizz control.
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Styling Serum</h2>
                    <p>
                        Our serum delivers exactly what you need: a conditioning, styling or finishing product that's 
                        effective on both wet and dry hair. We're proud of this formulation: completely non-greasy, but 
                        still amazing at temporarily repairing split ends and keeping frizz at bay. Great to add as a layer 
                        of heat protectant and humidity deflector. Preserves curls and is also perfect for a straightened, 
                        smooth look. Best of all for the stylist, when the serum is applied prior to blow drying, the drying 
                        and styling time is significantly reduced.
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Styling Clay</h2>
                    <p>
                        You'll be so pleased with the versatility and strength of our styling clay. It really enhances the memory 
                        of the hair, so that styling lasts well beyond when they walk out the salon door. Create defined textured 
                        looks with ease. Even better, clients like the feel of the product as it doesn't feel too heavy or stiff. 
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
