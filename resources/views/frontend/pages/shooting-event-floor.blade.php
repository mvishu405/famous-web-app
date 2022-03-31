@extends('frontend.master-layouts.master')

@section('title')
    | Homepage
@endsection

@push('styles')
@endpush

@section('content')
    @include('frontend.includes.browser-upgrade')
    @include('frontend.includes.loader')
    @include('frontend.includes.header')

    {{-- Start Body Content --}}

    <!--  insert body content  -->
    <main id="shooting_event_floor" class="smooth_scroll_pages service_inside_pages"
        data-active-id=".makeShootingEventActive">
        <section id="inside_page_banner_section">
            <div class="banner_image">
                <picture>
                    <source media="(min-width:768px)" srcset="img/service/service_banner.jpg">
                    <img src="img/service/service_banner.jpg" alt="" class="img-responsive">
                </picture>
            </div>
            <div class="banner_content">
                <div class="container">
                    <div class="banner_content_inner">
                        <h1 class="text_xxl text_700 banner_title">we believe in the power of dreams</h1>
                        <p class="banner_desc">Our range of end to end creative and technical services enable
                            storytellers to realize those dreams</p>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.includes.service-tab')
        <section class="service_intro section_spacing">
            <div class="container">
                <h2 class="section_title text_center fade_in">Shooting & Event Floors
                </h2>
                <p class="service_desc text_center fade_in">At Famous, our world-class shooting stages fuel the vision
                    of content creators by providing an inimitable setting to transform their dreams into reality. The
                    stages are exclusively designed to support staging requirements for production of feature films,
                    Broadcast, OTT, reality shows, events, music video shoots, new media, TV commercial productions and
                    just about anything you can imagine! </p>
            </div>
        </section>

        <section class="sub_services_section section_spacing">
            <div class="container">
                <div class="text_img_wrap">
                    <div class="text_img_item">
                        <div class="col-md-7">
                            <div class="ti_image fade_in">
                                <img src="img/service/shooting-event-floor/1.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="studio_details col-md-4 col-xs-12">
                            <div class="ti_content">
                                <h3 class="text_lg text_700 fade_in">Studio 1 </h3>
                                <div class="dimension fade_in">
                                    <p class="text_sm ">Dimensions:</p>
                                    <p>108 ft x 78 ft (wall to wall)</p>
                                    <p>95 ft x 65 ft (within cyclorama)</p>
                                    <p>28 ft clear height</p>
                                    <p>Sq. ft - 8424</p>
                                </div>
                                <div class="electric fade_in">
                                    <p class="text_sm ">Electric Services:</p>
                                    <p>AC: 160 Ton</p>
                                    <p>Power: 500 KW</p>
                                </div>
                                <div class="extras fade_in">
                                    <p class="text_sm ">Extras:</p>
                                    <p>Make up / Dress rooms: Available</p>
                                    <p>Dining area: Available</p>
                                    <p>Sound Proof: Yes</p>
                                    <p>Control Room: Available</p>
                                </div>
                                <a href="img/service/shooting-event-floor/pdf/studio-1.pdf"
                                    class="continue_reading text_xs text_500 fade_in" target="_blank">DOWNLOAD PDF
                                    <img src="img/service/shooting-event-floor/download_icon.svg" class="download_btn"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="text_img_item">
                        <div class="col-md-7">
                            <div class="ti_image fade_in">
                                <img src="img/service/shooting-event-floor/2.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="studio_details col-md-4 col-xs-12">
                            <div class="ti_content ">
                                <h3 class="text_lg text_700 fade_in">Studio 2</h3>
                                <div class="dimension fade_in">
                                    <p class="text_sm ">Dimensions:</p>
                                    <p>80 ft x 30 ft x 16 ft (Clear height)</p>
                                    <p>Clear height</p>
                                    <p>Sq. ft - 2640</p>
                                </div>
                                <div class="electric fade_in">
                                    <p class="text_sm ">Electric Services:</p>
                                    <p>AC: 45 Ton</p>
                                    <p>Power: 50 KW</p>
                                </div>
                                <div class="extras fade_in">
                                    <p class="text_sm ">Extras:</p>
                                    <p>Make up / Dress rooms: Available</p>
                                    <p>Dining area: Available</p>
                                    <p>Sound Insulation: Yes</p>
                                </div>
                                <a href="img/service/shooting-event-floor/pdf/studio-2.pdf"
                                    class="continue_reading text_xs text_500 fade_in" target="_blank">DOWNLOAD PDF
                                    <img src="img/service/shooting-event-floor/download_icon.svg" class="download_btn"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="text_img_item">
                        <div class="col-md-7 ">
                            <div class="ti_image fade_in">
                                <img src="img/service/shooting-event-floor/3.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="studio_details col-md-4 col-xs-12">
                            <div class="ti_content">
                                <h3 class="text_lg text_700 fade_in">Studio 3 </h3>
                                <div class="dimension fade_in">
                                    <p class="text_sm ">Dimensions:</p>
                                    <p>60 ft x 28 ft x 17 ft Height</p>
                                    <p>Clear height</p>
                                    <p>Sq. ft - 1680</p>
                                </div>
                                <div class="electric fade_in">
                                    <p class="text_sm ">Electric Services:</p>
                                    <p>AC: 16 Ton</p>
                                    <p>Power: 40 KW</p>
                                </div>
                                <div class="extras fade_in">
                                    <p class="text_sm ">Extras:</p>
                                    <p>Make up / Dress rooms: Available</p>
                                    <p>Dining area: Available</p>
                                    <p>Sound Insulation: Yes</p>
                                </div>
                                <a href="img/service/shooting-event-floor/pdf/studio-3.pdf"
                                    class="continue_reading text_xs text_500 fade_in" target="_blank">
                                    DOWNLOAD PDF
                                    <img src="img/service/shooting-event-floor/download_icon.svg" class="download_btn"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text_img_item">
                        <div class="col-md-7">
                            <div class="ti_image fade_in">
                                <img src="img/service/shooting-event-floor/4.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="studio_details col-md-4 col-xs-12">
                            <div class="ti_content ">
                                <h3 class="text_lg text_700 fade_in">Studio 4</h3>
                                <div class="dimension fade_in">
                                    <div class="dimension fade_in">
                                        <p class="text_sm ">Dedicated green screen stage which is Pre-lit with Black
                                            Magic Ultimate facility.</p>
                                    </div>
                                    <div class="dimension fade_in">
                                        <p class="text_sm ">Dimensions:</p>
                                        <p>108 ft x 78 ft (wall to wall)</p>
                                        <p>95 ft x 65 ft (within cyclorama)</p>
                                        <p>28 ft clear height</p>
                                        <p>Sq. ft - 8424</p>
                                    </div>
                                    <div class="electric fade_in">
                                        <p class="text_sm ">Electric Services:</p>
                                        <p>AC: 160 Ton</p>
                                        <p>Power: 500 KW</p>
                                    </div>
                                    <div class="extras fade_in">
                                        <p class="text_sm ">Extras:</p>
                                        <p>Make up / Dress rooms: Available</p>
                                        <p>Dining area: Available</p>
                                        <p>Sound Proof: Yes</p>
                                        <p>Control Room: Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <!--  end body content -->

    {{-- End Body Content --}}

    @include('frontend.includes.team-data')
    @include('frontend.includes.footer')
@endsection

@push('scripts')
@endpush
