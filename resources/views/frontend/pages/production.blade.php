@extends('frontend.master-layouts.master')

@section('title')
    | Production
@endsection

@push('styles')
@endpush

@section('content')
    @include('frontend.includes.browser-upgrade')
    @include('frontend.includes.loader')
    @include('frontend.includes.header')

    {{-- Start Body Content --}}

    <!--  insert body content  -->
    <main id="production_page" class="smooth_scroll_pages service_inside_pages" data-active-id=".makeProductionActive">
        <section id="inside_page_banner_section">
            <div class="banner_image">
                <picture>
                    <source media="(min-width:768px)" srcset="img/service/production_banner.jpg">
                    <img src="img/service/production_banner.jpg" alt="" class="img-responsive">
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
                <h2 class="section_title text_center fade_in">Production</h2>
                <p class="service_desc text_center fade_in">With over 75 years of experience in producing feature films,
                    TV commercials and TV shows, we provide extensive and reliable pre - production and production
                    services for all your content creation needs. From scripting to storyboarding and from treatment
                    notes to final execution, we provide the entire stage of content creation under one roof. </p>
                <div class="service_img fade_in">
                    <img src="img/service/production.jpg" alt="" class="img-responsive">
                </div>
            </div>
        </section>
        <section class="sub_services_section section_spacing">
            <div class="container">
                <div class="sub_service_wrap">
                    <div class="accordian_wrap">
                        <div class="row align_item_end">
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">In-house event and shooting stages</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Ready made sets for bloggers, influencers and
                                            photographers
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Line Production & Production Design
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Art & Creative Direction
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Conceptualizing, Treatment & Pre-Viz
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Scripting & Story Boarding
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">On-set DIT & VFX supervision
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Phantom Flex Visual Engineering Lab
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">60 seater Theater with Barco 2K 8S Projector </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Co-working Spaces & Conference Rooms </div>
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
