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
    <main id="service_page" class="smooth_scroll_pages service_inside_pages" data-active-id=".makeFhoaActive">
        <section id="inside_page_banner_section">
            <div class="banner_image">
                <picture>
                    <source media="(min-width:768px)" srcset="img/service/vfx_by_phoa_banner.jpg">
                    <img src="img/service/vfx_by_phoa_banner.jpg" alt="" class="img-responsive">
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
                <h2 class="section_title text_center fade_in">VFX by Famous House of Artists</h2>
                <p class="service_desc text_center fade_in">Estd 1998, FHOA is an award winning boutique international
                    grade visual effects facility, has redefined the limits of visual effects creations. Our award
                    winning team has collaborated to meet the unique challenges each project presents, in advertising
                    and long format content.</p>
                <p class="service_desc text_center fade_in">This specialized vertical offers high end VFX, CGI, 3D, and
                    animation services with new techniques that offer innovative ways to ensure efficiency and improve
                    output. Our custom-built state of the art workflow blends seamlessly with world-class technology -
                    all under one roof. </p>
                <p class="service_desc text_center fade_in">Our round-the-clock creative and technical team acts as a
                    support system for content creators through every stage of the film-making process including
                    conceptualisation, pre-viz, storyboarding and animatics, VFX, post-production, and final delivery.
                </p>
                <div class="service_img fade_in">
                    <img src="img/service/vfx_img.jpg" alt="" class="img-responsive">
                </div>
            </div>
        </section>
        <section class="sub_services_section section_spacing">
            <div class="container">

                <p class="text_center fade_in text_600">Pioneers in global visual effects with expertise in:</p>
                <div class="sub_service_wrap">
                    <div class="accordian_wrap">
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Animals</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Animation</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Characters & Conceptual Models </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Food, Beverage & Fluids </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Motion Graphics</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Particle Simulations</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Packshots</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Virtual sets & Crowd Rendering
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Compositing </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="other_projects section_spacing">
            <h2 class="section_title text_center">featured projects</h2>
            <div class="other_project_slider_wrap">
                <div class="other_project_slider addDragCursor" id="feature_projects_slider">
                    <div class="work_listing_item">
                        <div class="wls_inner">
                            <div class="wls_img">
                                <img src="img/home/vg1.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="wls_cont">
                                <h2 class="wls_title text_md text_700">Yardley</h2>
                                <span class="wls_cat text_xs">TVCs</span>
                            </div>
                        </div>
                    </div>
                    <div class="work_listing_item">
                        <div class="wls_inner">
                            <div class="wls_img">
                                <img src="img/home/vg1.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="wls_cont">
                                <h2 class="wls_title text_md text_700">Yardley</h2>
                                <span class="wls_cat text_xs">TVCs</span>
                            </div>
                        </div>
                    </div>
                    <div class="work_listing_item">
                        <div class="wls_inner">
                            <div class="wls_img">
                                <img src="img/home/vg1.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="wls_cont">
                                <h2 class="wls_title text_md text_700">Yardley</h2>
                                <span class="wls_cat text_xs">TVCs</span>
                            </div>
                        </div>
                    </div>
                    <div class="work_listing_item">
                        <div class="wls_inner">
                            <div class="wls_img">
                                <img src="img/home/vg1.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="wls_cont">
                                <h2 class="wls_title text_md text_700">Yardley</h2>
                                <span class="wls_cat text_xs">TVCs</span>
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
            <div class="text_center">
                <button class="btn_default fade_in">View more</button>
            </div>
        </section> --}}
    </main>
    <!--  end body content -->

    {{-- End Body Content --}}

    @include('frontend.includes.team-data')
    @include('frontend.includes.footer')
@endsection

@push('scripts')
@endpush
