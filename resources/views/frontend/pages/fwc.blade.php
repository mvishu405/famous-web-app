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
    <main id="fwc_page" class="smooth_scroll_pages service_inside_pages" data-active-id=".makeFwcActive">
        <section id="inside_page_banner_section">
            <div class="banner_image">
                <picture>
                    <source media="(min-width:768px)" srcset="img/service/fwc_banner.jpg">
                    <img src="img/service/fwc_banner.jpg" alt="" class="img-responsive">
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
                <h2 class="section_title text_center fade_in">FWC - Co-Working Space</h2>
                <p class="service_desc text_center fade_in">A co-working space designed to foster collaboration &
                    innovation.</p>
                <div class="service_img fade_in">
                    <img src="img/service/work_space_img.jpg" alt="" class="img-responsive">
                </div>
            </div>
        </section>
        <section class="sub_services_section section_spacing">
            <div class="container">
                <!-- <h2 class="section_title text_center fade_in">Pioneers in global visual effects with expertise in:</h2> -->
                <p class="service_desc text_center fade_in">FWC by Famous Studios, a co-working space in the heart of
                    Mumbai, is the perfect launchpad for entrepreneurs. From collaboration to innovation, FWC has
                    fostered some of India’s brightest minds and startups. To learn more, click on the tab below:</p>
                <div class="text_center">
                    <a href="https://famousworkingco.com/" target="_blank" class="btn_default fade_in">Visit Website</a>
                </div>
            </div>
        </section>
        <!-- <section class="other_projects section_spacing">
            <div class="other_project_slider_wrap">
                <div class="other_project_slider addDragCursor" id="feature_projects_slider">
                    <div class="work_listing_item">
                        <div class="wls_inner">
                            <div class="wls_img">
                                <img src="img/home/vg1.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="work_listing_item">
                        <div class="wls_inner">
                            <div class="wls_img">
                                <img src="img/home/vg1.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="work_listing_item">
                        <div class="wls_inner">
                            <div class="wls_img">
                                <img src="img/home/vg1.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="work_listing_item">
                        <div class="wls_inner">
                            <div class="wls_img">
                                <img src="img/home/vg1.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrow_wrap">
                    <div class="arrow_item arrow_left">
                        <img src="img/arrow_left.svg" alt="" class="img-responsive">
                    </div>
                    <div class="arrow_item arrow_right">
                        <img src="img/arrow_right.svg" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </section> -->
    </main>
    <!--  end body content -->

    {{-- End Body Content --}}

    @include('frontend.includes.team-data')
    @include('frontend.includes.footer')
@endsection

@push('scripts')
@endpush
