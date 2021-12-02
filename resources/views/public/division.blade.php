@extends('layouts.public')

@section('title')
    - {{ $division->division_type->title ?? '' }} | {{ $division->country->name ?? '' }}
@endsection

@section('content')

    <!--=================================
                                    Inner Header -->
    <div class="inner-header">
        <div class="breadcrumb-title bg-overlay-black-80 bg-dark" data-jarallax='{"speed": 0.5}'
            style="background-image: url(https://res.cloudinary.com/developerwilson/image/upload/v1634117946/dalbit/MicrosoftTeams-image_6_2_ucfywv.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-white text-uppercase">DALBIT {{ $division->country->name ?? '' }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb-list list-unstyled d-flex">
                            <li class="breadcrumb-item"><a href="/"><i class="fas fa-home mr-2"></i>Home</a></li>
                            <li class="breadcrumb-item">
                                @if ($division->division_type_id == 1)
                                    <a href="{{ route('affiliates.division') }}">Dalbit Affiliates</a>
                                @elseif ($division->division_type_id == 2)
                                    <a href="{{ route('trading.division') }}">Dalbit Trading</a>
                                @elseif ($division->division_type_id == 3)
                                    <a href="{{ route('licensees.division') }}">Dalbit Licensees</a>
                                @endif
                            </li>
                            <li class="breadcrumb-item active text-capitalize"><span>Dalbit
                                    {{ $division->country->name ?? '' }}</span></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
                                      Inner Header -->

    <!--=================================
                                      About us  -->
    <section class="space-ptb">
        <div class="container">
            <div class="row d-flex align-content-center flex-wrap">
                <div class="col-md-4 align-self-center mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-body">
                            @if ($division->country_image)
                                <img class="img-fluid " src="{{ $division->country_image->getUrl() }}" alt="">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-8 align-self-center pl-3 pl-lg-5">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-who-we-are" role="tabpanel"
                                    aria-labelledby="v-pills-who-we-are-tab">
                                    <div class="row">
                                        <div class="col-lg-12 mb-lg-0 mb-4">
                                            <h6 class="mb-3">Dalbit {{ $division->country->name ?? '' }}</h6>
                                            <p>
                                                {!! $division->country_description ?? '' !!}
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                      About us  -->

    <!--=================================
                                      operations -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                @if ($division->operation_image)
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="service-item">
                            <div class="service-img">
                                <img class="img-fluid" src="{{ $division->operation_image->getUrl() }}" alt="">
                                <a data-toggle="modal" data-target="#operationsModal"><i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                            <div class="service-info">
                                <h6 class="service-info-title"><a data-toggle="modal"
                                        data-target="#operationsModal">Operations</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- OPerations Modal -->
                    <div class="modal fade" id="operationsModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="mr-3 mt-3">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        {!! $division->operation_description ?? '' !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($division->transport_image)
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="service-item">
                            <div class="service-img">
                                <img class="img-fluid" src="{{ $division->transport_image->getUrl() }}" alt="">
                                <a data-toggle="modal" data-target="#transportModal"><i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                            <div class="service-info">
                                <h6 class="service-info-title"><a href="#">Transport</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Transport Modal -->
                    <div class="modal fade" id="transportModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="mr-3 mt-3">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        {!! $division->transport_description ?? '' !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($division->infrastructure_storage_image)
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="service-item">
                            <div class="service-img">
                                <img class="img-fluid" src="{{ $division->infrastructure_storage_image->getUrl() }}"
                                    alt="">
                                <a data-toggle="modal" data-target="#infrastructure"><i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                            <div class="service-info">
                                <h6 class="service-info-title"><a data-toggle="modal"
                                        data-target="#infrastructure">Infrastructure &
                                        Storage</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Infrastructure Modal -->
                    <div class="modal fade" id="infrastructure" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="mr-3 mt-3">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        {!! $division->infrastructure_storage_description ?? '' !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-lg-4"></div>
                <div class="col-lg-6">
                    <a data-toggle="modal" data-target="#contactModal" class="btn btn-primary  mx-0 mx-md-3">
                        <i class="btn-icon change-on-hover"> Contacts <i class="fas fa-long-arrow-alt-right"></i></i>
                        <span>Contacts</span>
                    </a>
                </div>
                <!-- contactModal -->
                <div class="modal fade" id="contactModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="mr-3 mt-3">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6 class="mb-3">Headquarters</h6>
                                <p class="mb-1">90 James Gichuru Road, Lavington, Nairobi,1931-0200, Nairobi,
                                    Kenya</p>
                                <div><strong>Telephone:</strong><span class="text-primary ml-1">+254 722 205 039, +254 733
                                        333 193, +254
                                        (0) 207 602 640</span>
                                </div>
                                <div><strong>Fax:</strong><span class="text-primary ml-1">+254 20 4347439</span></div>
                                <div><strong>E-mail:</strong><span
                                        class="text-primary ml-1">info.kenya@dalbitpetroleum.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection