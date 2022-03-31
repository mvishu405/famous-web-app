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
    <main id="specialized_production_page" class="smooth_scroll_pages service_inside_pages"
        data-active-id=".makeSpecializedProductionActive">
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
                <h2 class="section_title text_center fade_in">Specialized Production Services </h2>
                <p class="service_desc text_center fade_in">Our specialized production services focus on the future of
                    content creation. Our Virtual Production and Visual Engineering lab are designed to offer content
                    creators the opportunity to explore new tools and workflows to unlock value and ensure improved
                    storytelling. </p>
            </div>
        </section>

        <section class="sub_services_section section_spacing">
            <div class="container">
                <div class="text_img_wrap">
                    <div class="text_img_item">
                        <div class="col-md-7">
                            <div class="ti_image fade_in">
                                <img src="img/service/specialized-production/1.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ti_content">
                                <h3 class="text_lg text_700 fade_in">Virtual Production </h3>
                                <p class="text_sm fade_in">Our Virtual Production set-up, a division of Famous House of
                                    Artists (FHOA) has teamed up with industry leaders to create life-like 3D
                                    environments and bring the outdoor world indoors, allowing creators a boundless
                                    collaborative workflow. From Pre-viz to final delivery, our creative process unlocks
                                    the true value of visual effects and offers improved storytelling, creativity, and
                                    significant savings in total production cost. </p>
                            </div>
                        </div>
                    </div>
                    <div class="text_img_item">
                        <div class="col-md-7">
                            <div class="ti_image fade_in">
                                <img src="img/service/specialized-production/2.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ti_content ">
                                <h3 class="text_lg text_700 fade_in">High Speed Visual Engineering</h3>
                                <p class="text_sm fade_in">A fascinating blend of creativity and engineering, we combine
                                    innovative production and post production technology with the visual arts to create
                                    content masterpieces. Our in-house facility offers a complete Phantom Flex 4K GS
                                    package including lighting, lenses, precision controlled robotic arm, hydraulics and
                                    a team of highly skilled creative engineers.</p>
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
