@extends('frontend.master-layouts.master')

@section('title')
    | Homepage
@endsection

@push('styles')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/mhayes-twentytwenty/1.0.0/css/twentytwenty.min.css" />
@endpush

@section('content')
    @include('frontend.includes.browser-upgrade')
    @include('frontend.includes.loader')
    @include('frontend.includes.header')

    {{-- Start Body Content --}}

    <!--  insert body content  -->
    <main id="work_inside_page" class="smooth_scroll_pages">

        <div class="container">
            <div class="back_btn">
                <a href="work.php" class="back_btn_inner">
                    <img src="img/work_inside/right-arrow.svg" alt="">
                    <span class="back_text text_xs text_500">Back</span>
                </a>
            </div>

            <section class="work_inside_inner">

                <section class="work_video">
                    <div class="">
                        <div class="work_text">
                            <h2 class="text_lg text_600">Launching the all-electric Ford F-150 Lightning</h2>
                            <ul>
                                <li class="text_xs"><span class="dot"></span>TVC's</li>
                            </ul>
                        </div>
                        <a href="https://www.youtube.com/watch?v=ojU-KG_7qFA" class="work_video_play iframe_popup">
                            <img src="img/work_inside/work-video.jpg" alt="" class="img-responsive work_video_img">
                            <div class="play_button">
                                <img src="img/play_icon.svg" alt="" class="img-responsive">
                            </div>
                        </a>
                    </div>
                </section>

                <section class="work_brief">
                    <div class="">
                        <div class="work_brief_inner">
                            <div class="work_brief_text">
                                <span>Description</span>
                                <p class="text_sm">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy
                                    eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                    eos
                                    et
                                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                    sanctus
                                    est
                                    Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                    sed
                                    diam
                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                    voluptua. At
                                    vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                    sea
                                    takimata
                                    sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="brief_details">
                                <div class="brief_details_item">
                                    <span>Client</span>
                                    <p>Client</p>
                                </div>
                                <div class="brief_details_item">
                                    <span>Director</span>
                                    <p>Famous Studios</p>
                                </div>
                                <div class="brief_details_item">
                                    <span>Brand</span>
                                    <p>Yardley</p>
                                </div>
                                <div class="brief_details_item">
                                    <span>Creative Director</span>
                                    <p>Adam Grint</p>
                                </div>
                                <div class="brief_details_item">
                                    <span>Production Company</span>
                                    <p>Famous Studios</p>
                                </div>
                                <div class="brief_details_item">
                                    <span>Capabilities</span>
                                    <p>Virtual Production / Real-time / Direction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="twenty_slider">
                    <div class="">
                        <div id="container1" class='twentytwenty-container'>
                            <img src="img/work_inside/slider_img_2.jpg">
                            <img src="img/work_inside/slider_img_1.jpg">
                        </div>
                    </div>
                </section>

            </section>
        </div>



        <section class="img_slider section_spacing">
            <div class="work_listing_slider_wrap">
                <div class="work_listing_slider addDragCursor">
                    <div class="work_listing_item">
                        <div class="wls_inner">
                            <div class="wls_img">
                                <img src="img/home/work-placeholder.jpg" alt="" class="placeholder_img img-responsive">
                                <div class="wls_actual">
                                    <img src="img/home/vg1.jpg" alt="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="work_listing_item">
                        <div class="wls_inner">
                            <div class="wls_img">
                                <img src="img/home/work-placeholder.jpg" alt="" class="placeholder_img img-responsive">
                                <div class="wls_actual">
                                    <img src="img/home/vg2.jpg" alt="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="work_listing_item">
                        <div class="wls_inner">
                            <div class="wls_img">
                                <img src="img/home/work-placeholder.jpg" alt="" class="placeholder_img img-responsive">
                                <div class="wls_actual">
                                    <img src="img/home/vg3.jpg" alt="" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="work_listing_item">
                        <div class="wls_inner">
                            <div class="wls_img">
                                <img src="img/home/work-placeholder.jpg" alt="" class="placeholder_img img-responsive">
                                <div class="wls_actual">
                                    <img src="img/home/vg4.jpg" alt="" class="img-responsive">
                                </div>
                            </div>

                        </div>
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
        </section>

        <section class="other_projects section_spacing">
            <h2 class="section_title text_center">other projects</h2>
            <div class="other_project_slider_wrap">
                <div class="other_project_slider addDragCursor">
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
        </section>
    </main>
    <!--  end body content -->


    {{-- End Body Content --}}

    @include('frontend.includes.team-data')
    @include('frontend.includes.footer')
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mhayes-twentytwenty/1.0.0/js/jquery.twentytwenty.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mhayes-twentytwenty/1.0.0/js/jquery.event.move.min.js"></script>

    <script>
        $(window).load(function() {
            $("#container1").twentytwenty();
        });
    </script>
@endpush
