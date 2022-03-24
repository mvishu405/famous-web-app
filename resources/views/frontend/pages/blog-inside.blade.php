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
    <main id="blog_inside_page" class="smooth_scroll_pages">
        <div class="container">
            <div class="back_btn">
                <a href="blog.php" class="back_btn_inner">
                    <img src="img/work_inside/right-arrow.svg" alt="">
                    <span class="back_text text_xs text_500">Back</span>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="blog_inside_content">
                <h2 class="text_lg text_600">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                    eirmod tempor invidunt ut labore et.</h2>
                <div class="blog_sub_details">
                    <div class="date_min_read text_xs">
                        <span class="date">Sep 2021</span>
                        <span class="dot"></span>
                        <span class="min_read">2min read</span>
                        <span class="dot"></span>
                        <span class="min_read">VFX/CGI</span>
                    </div>
                    <div class="social_icon">
                        <div class="social_links_area">
                            <a href="#"><img src="img/blog_inside/facebook-icon.png" alt=""></a>
                            <a href="#"><img src="img/blog_inside/twitter-icon.png" alt=""></a>
                            <a href="#"><img src="img/blog_inside/linkedin-icon.png" alt=""></a>
                            <a href="#"><img src="img/blog_inside/feather-icon.png" alt=""></a>
                        </div>
                        <a href="#" class="share-icon"><img src="img/blog_inside/share-icon.png" alt=""></a>
                    </div>
                </div>
                <div class="bic_inner">
                    <img src="img/blog_inside/blog_inside_1.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt olore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.
                    </p>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt olore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.
                    </p>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt olore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.
                    </p>

                    <img src="img/blog_inside/blog_inside_2.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt olore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.
                    </p>
                </div>
            </div>
            <div class="blog_nav">
                <a class="continue_reading text_xs" target="_blank">
                    < Previous Article </a>
                        <a class="continue_reading text_xs" target="_blank">Next Article >
                        </a>
            </div>

        </div>
        <div class="other_article section_spacing">
            <div class="container">
                <h2 class="section_title text_center">read more article</h2>
                <div class="other_article_wrap">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="blog_item">
                                <div class="blog_content">
                                    <div class="blog_header">
                                        <div class="date_min_read text_xs">
                                            <span class="date">Sep 2021</span>
                                            <span class="dot"></span>
                                            <span class="min_read">2min read</span>
                                        </div>
                                        <a href="javascript:void(0)" class="share_icon">
                                            <img src="img/share_icon.svg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <h2 class="blog_title text_sm">Lorem ipsum dolor sit amet, consetetur
                                        sadipscing elitr.</h2>
                                    <a class="continue_reading text_xs" target="_blank">Continue Reading
                                        +</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="blog_item">
                                <div class="blog_content">
                                    <div class="blog_header">
                                        <div class="date_min_read text_xs">
                                            <span class="date">Sep 2021</span>
                                            <span class="dot"></span>
                                            <span class="min_read">2min read</span>
                                        </div>
                                        <a href="javascript:void(0)" class="share_icon">
                                            <img src="img/share_icon.svg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <h2 class="blog_title text_sm">Lorem ipsum dolor sit amet, consetetur
                                        sadipscing elitr.</h2>
                                    <a class="continue_reading text_xs" target="_blank">Continue Reading
                                        +</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="blog_item">
                                <div class="blog_content">
                                    <div class="blog_header">
                                        <div class="date_min_read text_xs">
                                            <span class="date">Sep 2021</span>
                                            <span class="dot"></span>
                                            <span class="min_read">2min read</span>
                                        </div>
                                        <a href="javascript:void(0)" class="share_icon">
                                            <img src="img/share_icon.svg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <h2 class="blog_title text_sm">Lorem ipsum dolor sit amet, consetetur
                                        sadipscing elitr.</h2>
                                    <a class="continue_reading text_xs" target="_blank">Continue Reading
                                        +</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--  end body content -->

    {{-- End Body Content --}}

    @include('frontend.includes.team-data')
    @include('frontend.includes.footer')
@endsection

@push('scripts')
@endpush
