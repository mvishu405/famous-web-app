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
    <main id="ready_to_shoot_page" class="smooth_scroll_pages service_inside_pages" data-active-id=".makeReadyToShootActive">
        <section id="inside_page_banner_section">
            <div class="banner_image">
                <picture>
                    <source media="(min-width:768px)" srcset="img/service/Ready_to_shoot_sets.jpg">
                    <img src="img/service/Ready_to_shoot_sets.jpg" alt="" class="img-responsive">
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
                <h2 class="section_title text_center fade_in">Ready-to-Shoot Sets</h2>
                <p class="service_desc text_center fade_in">With different types of sets made available, Famous Studios
                    is always a few steps ahead when it comes to offering you an unparalleled shooting experience. Our
                    ready-to-shoot spaces can be customised and utilised as per your brand needs. Some of our spaces
                    are: </p>
            </div>
        </section>
        <section class="shoot_set">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/service/ready-to-shoot/office_img.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md ">Office Set</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/service/ready-to-shoot/wardrop_img.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md ">Walk-in Wardrobe
                                    </h2>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/service/ready-to-shoot/interview_img.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md ">Interview Set</h2>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/service/ready-to-shoot/launge_img.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md ">Lounge Area</h2>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/service/ready-to-shoot/bedroom_img.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md ">Bedroom</h2>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/service/ready-to-shoot/terminal_img.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md ">Beauty Terminal </h2>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/service/ready-to-shoot/DIY_img.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md ">DIY Area</h2>

                                </div>
                            </div>
                        </a>
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
