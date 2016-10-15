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
                <h1>Conditioning Hair Spray</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 25px;">
                    <p>
                        This lightweight and workable finishing hair spray covers the hair in a reflective shield of
                        shine that helps to fights fizz and humidity, yet brushes out easily and leaves no flakey or
                        sticky residue. Infused with a combination of advanced ingredients, including antioxidant-rich
                        argan oil. Available in two types of hold
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2>Light Hold</h2>
                    <p>
                        This medium hold, flexible hairspray provides long-lasting, weightless hold for soft and
                        natural styles. Medium hold is ideal for natural styles, including easy up-dos, taming flyaway
                        and fixing blowouts.
                    </p>
                </div>
                <div class="col-md-6">
                    <h2>Strong Hold</h2>
                    <p>
                        A flexible hairspray for building long-lasting styles and keeping them firm, with a moveable
                        texture. This firm-hold finishing spray is ideal for creating up-styles or protecting hair
                        styles in tough weather environments.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="section-header">
            <div class="container">
                <h1>Additional</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Leave In Smoothing Creme</h2>
                    <p>
                        Intensive, smoothing and protective the ideal partner for achieving a perfect blow-dry. An
                        intensive, lightweight formulation that instantly boosts moisture and elasticity to leave a
                        unique radiance to hair. It also provides a protective shield around every hair strand to help
                        protect hair from heat and environmental damage, eliminate frizz, reduce static and repel
                        humidity. Use with even the most unruly types of hair to smooth, detangle and style with ease
                        creating the perfect finish every time.
                    </p>
                </div>
                <div class="col-md-6">
                    <h2>Conditioning Styling Gel</h2>
                    <p>
                        Don’t just style hair, treat the hair! This gel conditions the hair without leaving flakes,
                        while the proteins act on the hair repairing damage. Wheat, soy, rice and silk proteins restore
                        damaged hair while providing excellent manageability.
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