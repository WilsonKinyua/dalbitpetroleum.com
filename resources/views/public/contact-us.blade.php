@extends('layouts.public')

@section('title') Contact Us @endsection
@section('keywords') Dalbit Affiliates,Dalbit Trading, Dalbit Licensees @endsection
@section('description') We are here to help you. Please get in touch with us. @endsection

@section('css')
    {{-- toastr --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.min.css') }}">
    <style>
        #phone {
            width: 400px;
        }

    </style>
@endsection

@section('content')
    <div class="inner-header">
        <div class="breadcrumb-title bg-overlay-black-80 bg-dark" data-jarallax='{"speed": 0.5}'
            style="background-image: url({{ asset('images/contact.jpg') }}); background-repeat:no-repeat;background-position:center;background-size:cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-white">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb-list list-unstyled d-flex">
                            <li class="breadcrumb-item"><a href="/"><i class="fas fa-home mr-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active"><span>Contact us</span></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .contact-us-section p {
            line-height: 13px;
        }

    </style>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="text-center">Contact Us</h2>
                        <p class="text-center">We are here to help you. Please get in touch with us.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row mb-4 contact-us-section">
                        @if (count($dalbitAffiliates) > 0)
                            <div class="col-md-12">
                                <h3 class="">Dalbit Affiliates</h3>
                            </div>
                            @foreach ($dalbitAffiliates as $contact)
                                <div class="col-md-4 mt-1">
                                    <h6 class="text-uppercase"><strong> {{ $contact->country->name ?? '' }}</strong>
                                    </h6>
                                    <p class="location">{!! $contact->country->company ?? '' !!}</p>
                                    <p class="location">{!! $contact->location ?? '' !!}</p>
                                    @if (!$contact->telephone == '')
                                        <div><strong>Telephone:</strong>
                                            <span class="text-primary ml-1">
                                                {!! $contact->telephone ?? '' !!}
                                            </span>
                                        </div>
                                    @endif
                                    @if (!$contact->fax == '')
                                        <div><strong>FAX:</strong><span class="text-primary ml-1">{!! $contact->fax ?? '' !!}
                                            </span></div>
                                    @endif
                                    @if (!$contact->email == '')
                                        <div><strong>E-mail:</strong><span class="text-primary ml-1"><a
                                                    href="mailto:{{ $contact->email ?? '' }}">{{ $contact->email ?? '' }}</a></span>
                                        </div>
                                    @endif

                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <hr class="m-0 mt-3 mb-3">
                </div>
                <div class="col-md-12">
                    <div class="row mb-4">
                        @if (count($dalbitTrading) > 0)
                            <div class="col-md-12">
                                <h3 class="">Dalbit Trading</h3>
                            </div>
                            @foreach ($dalbitTrading as $contact)
                                <div class="col-md-4 mt-1">
                                    <h6 class="text-uppercase"><strong>{{ $contact->country->name ?? '' }}</strong>
                                    </h6>
                                    <p class="location">{!! $contact->country->company ?? '' !!}</p>
                                    <p>{!! $contact->location ?? '' !!}</p>
                                    @if (!$contact->telephone == '')
                                        <div><strong>Telephone:</strong>
                                            <span class="text-primary ml-1">
                                                {!! $contact->telephone ?? '' !!}
                                            </span>
                                        </div>
                                    @endif
                                    @if (!$contact->fax == '')
                                        <div><strong>FAX:</strong><span class="text-primary ml-1">{!! $contact->fax ?? '' !!}
                                            </span></div>
                                    @endif
                                    @if (!$contact->email == '')
                                        <div><strong>E-mail:</strong><span class="text-primary ml-1"><a
                                                    href="mailto:{{ $contact->email ?? '' }}">{{ $contact->email ?? '' }}</a></span>
                                        </div>
                                    @endif

                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <hr class="m-0 mt-3 mb-3">
                </div>
                <div class="col-md-12">
                    <div class="row">
                        @if (count($dalbitLicensees) > 0)
                            <div class="col-md-12">
                                <h3 class="">Dalbit Licensees</h3>
                            </div>
                            @foreach ($dalbitLicensees as $contact)
                                <div class="col-md-4 mt-1">
                                    <h6 class="text-uppercase"><strong>
                                            {{ $contact->country->name ?? '' }}</strong>
                                    </h6>
                                    <p class="location">{!! $contact->country->company ?? '' !!}</p>
                                    <p>{!! $contact->location ?? '' !!}</p>
                                    @if (!$contact->telephone == '')
                                        <div><strong>Telephone:</strong>
                                            <span class="text-primary ml-1">
                                                {!! $contact->telephone ?? '' !!}
                                            </span>
                                        </div>
                                    @endif
                                    @if (!$contact->fax == '')
                                        <div><strong>FAX:</strong><span class="text-primary ml-1">{!! $contact->fax ?? '' !!}
                                            </span></div>
                                    @endif
                                    @if (!$contact->email == '')
                                        <div><strong>E-mail:</strong><span class="text-primary ml-1"><a
                                                    href="mailto:{{ $contact->email ?? '' }}">{{ $contact->email ?? '' }}</a></span>
                                        </div>
                                    @endif

                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space-pb mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-4 mb-4">
                    <h4>Talk To Us</h4>
                </div>
                <div class="col-md-12">
                    <form class="form-flat-style" method="POST" action="{{ route('contact.message') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" placeholder="Your Email"
                                    name="email" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Phone Number</label>
                                <input id="phone" type="tel" class="form-control" name="telephone_number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="">Message <span class="text-danger">*</span></label>
                                <textarea rows="8" class="form-control" id="sector" placeholder="Your Message"
                                    name="message" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat"><i
                                class="btn-icon fas fa-paper-plane"></i><span>
                                Send Message</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    {{-- notification --}}
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>
        @if (Session::has('success'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            // toastr.options.positionClass = 'toast-bottom-right';
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>

@endsection
