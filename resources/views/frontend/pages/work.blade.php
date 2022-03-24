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
    <main id="work_page" class="smooth_scroll_pages">
        <section id="inside_page_banner_section" class="without_img">
            <div class=" banner_content">
                <div class="container">
                    <div class="banner_content_inner">
                        <h1 class="text_xxl text_700 banner_title">The Famous Portfolio of diverse creative solutions
                        </h1>
                        <p class="banner_desc">Here's a peek at some of our creative projects by our talented team of
                            in-house experts across several verticals.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="tab_section">
            <div class="container">
                <div class="tab_section_inner">
                    <ul class="service_tabs">
                        <li class="active">
                            <a href="javascript:void(0)" data-cat=".all_cat">All</a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0)" data-cat=".cat2">TVCs</a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0)" data-cat=".cat3">Long Format / OTT</a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0)" data-cat=".cat4">Documentaries</a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0)" data-cat=".cat5">VFX</a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0)" data-cat=".cat6">Virtual Production</a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0)" data-cat=".cat7">Music Videos</a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0)" data-cat=".cat8">Visual Engineering</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="img_gallary">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 all_cat cat8">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/work_listing/work_img_1.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md text_700">Yardley</h2>
                                    <span class="wls_cat text_xs">TVCs</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 all_cat cat2">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/work_listing/work_img_2.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md text_700">Yardley</h2>
                                    <span class="wls_cat text_xs">TVCs</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 all_cat cat3">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/work_listing/work_img_3.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md text_700">Yardley</h2>
                                    <span class="wls_cat text_xs">TVCs</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 all_cat cat4">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/work_listing/work_img_4.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md text_700">Yardley</h2>
                                    <span class="wls_cat text_xs">TVCs</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 all_cat cat5">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/work_listing/work_img_5.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md text_700">Yardley</h2>
                                    <span class="wls_cat text_xs">TVCs</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 all_cat cat6">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/work_listing/work_img_6.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md text_700">Yardley</h2>
                                    <span class="wls_cat text_xs">TVCs</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 all_cat cat7">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/work_listing/work_img_7.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md text_700">Yardley</h2>
                                    <span class="wls_cat text_xs">TVCs</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 all_cat cat8">
                        <a href="work-inside.php" class="work_listing_item fade_in">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/work_listing/work_img_8.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md text_700">Yardley</h2>
                                    <span class="wls_cat text_xs">TVCs</span>
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
    <script>
        $(document).ready(function() {
            $('.tab_section .service_tabs li').on('click', function() {
                $('.tab_section .service_tabs li').removeClass('active')
                $(this).addClass('active');
                $(".all_cat").hide();
                $($(this).find('a').attr('data-cat')).show();
            })
        })
    </script>
@endpush
