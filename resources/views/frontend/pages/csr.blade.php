@extends('frontend.master-layouts.master')

@section('title')
    | CSR
@endsection

@push('styles')
@endpush

@section('content')
    @include('frontend.includes.browser-upgrade')
    @include('frontend.includes.loader')
    @include('frontend.includes.header')

    {{-- Start Body Content --}}
    <!--  insert body content  -->
    <main id="csr_page" class="smooth_scroll_pages service_inside_pages" data-active-id=".makeProductionActive">
        <section id="inside_page_banner_section">
            <div class="banner_image">
                <picture>
                    <source media="(min-width:768px)" srcset="img/csr/csr_banner.jpg">
                    <img src="img/csr/csr_banner.jpg" alt="" class="img-responsive">
                </picture>
            </div>
            <div class="banner_content">
                <div class="container">
                    <div class="banner_content_inner">
                        <h1 class="text_xxl text_700 banner_title">Giving back to the community </h1>
                        <p class="banner_desc text_reg ">At Famous, we believe in empowering the society by supporting
                            initiatives
                            that work towards the betterment of the community</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="para_box">
            <div class="container">
                <div class="para-text">
                    <p class="text_reg ">We contribute to Rajasthani Mahila Mandal, a 70-year-old institution run by
                        women, which provides subsidized education, medical, and vocational activities. We believe that
                        for a developed country, literacy is very important. Hence, we support Friends of Tribals
                        Society, a literacy program spread across 90,000 schools all over the country.We support Eklavya
                        Swawalamban Trust in Wada, which reaches out to the rural villagers and gives training in better
                        agriculture methods and vocational training to women as well as the youth.</p>
                </div>
            </div>
        </section>

        <section class="slider_box">
            <div class="container">

                <div class="work_listing_slider_wrap">
                    <div class="work_listing_slider addDragCursor">
                        <div class="work_listing_item">
                            <a href="#" class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/home/work-placeholder.jpg" alt="" class="placeholder_img img-responsive">
                                    <div class="wls_actual">
                                        <img src="img/csr/slider-img1.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md text_700"></h2>
                                    <span class="wls_cat text_xs"></span>
                                </div>
                            </a>
                        </div>

                        <div class="work_listing_item">
                            <a href="#" class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/home/work-placeholder.jpg" alt="" class="placeholder_img img-responsive">
                                    <div class="wls_actual">
                                        <img src="img/csr/slider-img2.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md text_700"></h2>
                                    <span class="wls_cat text_xs"></span>
                                </div>
                            </a>
                        </div>

                        <div class="work_listing_item">
                            <a href="#" class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/home/work-placeholder.jpg" alt="" class="placeholder_img img-responsive">
                                    <div class="wls_actual">
                                        <img src="img/csr/slider-img3.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md text_700"></h2>
                                    <span class="wls_cat text_xs"></span>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="arrow_wrap">
                        <div class="arrow_item arrow_left">
                            <img data-lazy-src="img/arrow_left.svg" alt="" class="img-responsive">
                        </div>
                        <div class="arrow_item arrow_right">
                            <img data-lazy-src="img/arrow_right.svg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="para_box">
            <div class="container">
                <div class="para-text">
                    <p class="text_reg ">During the pandemic, we provided monetary help to cultural artists in Mumbai
                        who lacked the means to purchase food as well as basic medicines. We also extended our support
                        to migrant laborers from Bihar, who were stuck in Mumbai during the pandemic's peak, with food
                        and cash. We also crowd-sourced funds to help them out.
                    </p>
                    <p class="text_reg ">Beyond being grateful for our monetary support, they felt that they were
                        connected with someone in the city who knew their plight and that they were not alone. Help was
                        also sent to Bihari laborers in Kerala who were stuck there during the time. </p>

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
