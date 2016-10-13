@extends('layouts.public')

@section('PageContents')
    <section class="parallax" style="background-image: url('/img/your-salon.jpeg')">
        <div class="section-header">
            <div class="container">
                <h1>Contact Us</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Customer Service</h1>
                    <div class="grouped-info">
                        <p>Office: +44 203 393 9993</p>
                        <small>Monday-Friday 9am-6pm</small>
                    </div>

                    <div class="grouped-info">
                        <p>Email:
                            <a href="mailto:hello@dreambeautybrands.com">hello@dreambeautybrands.com</a></p>
                        <small>24 Hours a day / 7 days a week</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1>Sales</h1>
                    <div class="grouped-info">
                        <p>Email:
                            <a href="mailto:sales@dreambeautybrands.com">sales@dreambeautybrands.com</a></p>
                        <small>24 Hours a day / 7 days a week</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="section-header">
            <div class="container">
                <h1>Send Us A Message</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{-- Send Mail Form --}}
                    <form action="" id="sendMail" class="form-horizontal" method="POST">
                        {{ csrf_field() }}
                        {{--Contains Name Email and Phone fields--}}
                        <div class="form-group">
                            {{--Name Text Field--}}
                            <div class="col-md-4 {{ $errors->sendMail->has('name') ? 'has-error' : '' }}">
                                <span class="help-block margin-bottom-none">
                                    <label for="name" class="control-label">Name</label>
                                </span>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}" />
                                @if($errors->sendMail->has('name'))
                                    <span class="help-block"><strong><small>{{ $errors->sendMail->first('name') }}</small></strong></span>
                                @endif
                            </div>
                            {{--Email Text Field--}}
                            <div class="col-md-4 {{ $errors->sendMail->has('email') ? 'has-error' : '' }}">
                                <span class="help-block margin-bottom-none">
                                    <label for="email" class="control-label">Email</label>
                                </span>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email@Example.com" value="{{ old('email') }}" />
                                @if($errors->sendMail->has('email'))
                                    <span class="help-block"><strong><small>{{ $errors->sendMail->first('email') }}</small></strong></span>
                                @endif
                            </div>
                            {{--Phone Text Field--}}
                            <div class="col-md-4 {{ $errors->sendMail->has('phone') ? 'has-error' : '' }}">
                                <span class="help-block margin-bottom-none">
                                    <label for="phone" class="control-label">Phone</label>
                                </span>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Number" value="{{ old('phone') }}" />
                                @if($errors->sendMail->has('phone'))
                                    <span class="help-block"><strong><small>{{ $errors->sendMail->first('phone') }}</small></strong></span>
                                @endif
                            </div>
                        </div>
                        {{--Contains Message Field--}}
                        <div class="form-group">
                            {{--Message Input Field--}}
                            <div class="col-md-12 {{ $errors->sendMail->has('message') ? 'has-error' : '' }}">
                                <span class="help-block margin-bottom-none">
                                    <label for="message" class="control-label">Message</label>
                                </span>
                                <textarea name="message" id="message" class="form-control" rows="10" placeholder="Your Message Here">{{ old('message') }}</textarea>
                                @if($errors->sendMail->has('message'))
                                    <span class="help-block"><strong><small>{{ $errors->sendMail->first('message') }}</small></strong></span>
                                @endif
                            </div>
                        </div>
                        {{--Contains Form Buttons--}}
                        <div class="form-group">
                            {{--Form Buttons--}}
                            <div class="text-center col-md-12">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection