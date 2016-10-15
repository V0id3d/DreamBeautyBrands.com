@extends('layouts.public')

@section('PageTitle') - Shampoos @endsection

@section('PageHeader')
    <header id="top-banner">
        <div class="top-banner-inner">
            @if(Route::is('Product.Conditioner'))
                <div class="fill" style="background-image: url('/img/conditioner.jpeg');"></div>
            @else
                <div class="fill" style="background-image: url('/img/shampoo.jpeg');"></div>
            @endif
        </div>
    </header>
@endsection

@section('PageContents')
    <section>
        <div class="section-header">
            <div class="container">
                <h1>Shampoo And Conditioner</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2>Restore</h2>
                    <p>
                        This shampoo uses  gentle cleansers that will enhance hair colour. Colours will look more
                        vibrant and will last longer, without worrying about stripping the colour. Conditioner is made
                        with a special blend of sunflower and macadamia oils, it will make sure that your hair colour
                        looks radiant and shine. Sun filters help protect the colour from adding, while botanical
                        extracts help to lock in the colour for longer.
                    </p>
                </div>
                <div class="col-md-3">
                    <h2>Balanced</h2>
                    <p>
                        This shampoo and conditioner helps fight dandruff, dry hair and sensitive or flaky scalp.
                        Perfectly balanced for all use on all hair types and especially helpful to those suffering from
                        an imbalance with oily roots and dry ends. With this natural Tea Tree Oil scalp moisturising
                        shampoo, you will experience not only the refreshing scent of the Myrtle and Tea Tree Oil but
                        also its moisturising and antiseptic properties that help treat the scalp. Aloe Vera and
                        Rosemary also moisturise and balance the scalp and hair, so hair is left soft, shiny and healthier.
                    </p>
                </div>
                <div class="col-md-3">
                    <h2>Hydrating</h2>
                    <p>
                        This Shampoo & Conditioner feature a blend of chamomile essential oils, Pro-Vitamins and amino
                        acids. Its base acts as a barrier to prevent moisture breaking through and therefore it is anti
                        humidity and frizz, super smoothing. It improves manageability, adds lustre and shine, and
                        provides substantial conditioning. The Pro-Vitamins also help to prevent any damage to the hair
                        from styling or colouring.
                    </p>
                </div>
                <div class="col-md-3">
                    <h2>Cleanse</h2>
                    <p>
                        This shampoo removes chlorine, silicone and chemical residues. It clears all the build up from
                        your hair, leaving it with less weight and thus stronger and healtheier. This shampoo is also
                        recommend for use before most chemical treatments, when hair must be reside-free. Al slightly
                        basic pH opens up the cuticle without roughing up with hair.
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