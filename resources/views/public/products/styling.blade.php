@extends('layouts.public')

@section('PageTitle') - Hair Styling @endsection

@section('PageHeader')
    <header id="top-banner">
        <div class="top-banner-inner">
            <div class="fill" style="background-image: url('/img/styling.jpeg');"></div>
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
                    <h2>Hair Repair Creme</h2>
                    <p>
                        You think you’ve seen amazing leave-in creme, but our formulation is truly best in show. It 
                        will become your BFF for expert, gorgeous styling.  Not only does the styling creme enable 
                        you to effectively style even the thickest, textured hair, the added benefits of moisturisation 
                        and heat protectant enhance the health of your client’s hair. The crème helps the hair retain 
                        its memory, which makes your job much easier. The essential oils hydrate and nourish hair 
                        from the roots to the ends, while the citrus and protein extracts stimulate the scalp, resulting 
                        in vibrant, selfie-worthy hair.  
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Hair Repair Spray</h2>
                    <p>
                        Lightweight, moisturising and protective, this multi-purpose mist is one of a kind. Created to deliver 
                        moisture directly to the hair strand, smoothing and adding a defensive shield to protect the hair from 
                        environmental factors (including ultraviolet light) as well as heat styling. This barrier helps hair to 
                        retain internal moisture and provides a smooth finish. Hair is left silky, shiny and better able to 
                        repel the effects of humidity. Designed with a lightweight formulation that combines proteins, aloe vera, 
                        fruit and citrus extracts for hair and scalp vitality and thermal protection, it doesn’t weigh down the 
                        hair allowing you to create volume or finish curls perfectly, providing long lasting frizz control.   
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Styling Foam</h2>
                    <p>
                        This lightweight styling foam leaves no residue and protects from both heat and sun with UV filtering. 
                        Fruit and citrus extracts hydrate scalp and hair while the aloe vera reduces inflammation and balances 
                        hair. This is a great product that protects hair and helps you more effectively style. 
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
