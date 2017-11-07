@extends('layouts.public')

@section('PageTitle') - Hair Masks @endsection

@section('PageHeader')
    <header id="top-banner">
        <div class="top-banner-inner">
            <div class="fill" style="background-image: url('/img/masks.jpeg');"></div>
        </div>
    </header>
@endsection

@section('PageContents')
    <section>
        <div class="section-header">
            <div class="container">
                <h1>Treatment Masks</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Restore Masque</h2>
                    <p>
                        This treatment has small silk amino acid molecules which penetrate the hair cuticle to
                        provide an enhanced conditioning effect. Because of its hygroscopic properties, this
                        treatment allows your hair to retain more moisture. It makes hair easier to manage and
                        shortens blow-dry time. This product conditions without build-up. The treatment helps
                        improve hair colour retention. Sunflower extract provides a natural sunscreen.
                    </p>
                </div>
                <div class="col-md-6">
                    <h2>Hydrating Masque</h2>
                    <p>
                        This deeply nourishing mask combines the moisturising properties of Aloe with the healing
                        provided by Bamboo. The result is a treatment that can rescue just about any hair type. The
                        botanical extracts and amino acids act deep within the hair shaft to treat the hair from the
                        inside out.
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
