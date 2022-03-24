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
    <main id="news_page" class="smooth_scroll_pages">
        <section id="inside_page_banner_section" class="without_img">
            <div class=" banner_content">
                <div class="container">
                    <div class="banner_content_inner">
                        <h1 class="text_xxl text_700 banner_title">in the news</h1>
                        <p class="banner_desc">Our range of end to end creative and technical services enable
                            storytellers to realize those dreams</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="tab_section">
            <div class="container">
                <div class="tab_section_inner">
                    <ul class="service_tabs">
                        <!-- <li class="active">
                                <a href="javascript:void(0)">All</a>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)">Famous Studio</a>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)">Famous House of artists</a>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)">Famous Working Company</a>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)">Awards</a>
                            </li> -->
                    </ul>
                    <div class="filter">
                        <select name="latest" id="latest">
                            <option value="Latest">Latest</option>
                            <option value="Oldest">Oldest</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <section class="news_section">
            <div class="container">
                <div class="news_wrap">
                    <div class="news_item fade_in col-md-4">
                        <a href="https://www.thehindubusinessline.com/catalyst/famous-studios-reinvents-itself-for-the-ott-generation/article34804968.ece"
                            class="news_item_inner" target="_blank">
                            <div class="news_image">
                                <img src="img/news/img_1.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="news_content">
                                <div class="blog_header">
                                    <div class="date_min_read text_xs">
                                        <span class="date">November 2021</span>
                                        <span class="dot"></span>
                                        <span class="min_read">Work</span>
                                    </div>
                                </div>
                                <h2 class="blog_title text_sm">Famous Studios keeps pace with the
                                    moving screens.
                                    How Mumbai’s Famous Studios, set up in pre-Partition days,
                                    is reinventing itself
                                    for the streaming entertainment sector.</h2>
                            </div>
                            <div class="news_source">
                                <img src="img/home/news_source.png" alt="" class="img-responsive">
                            </div>
                        </a>
                    </div>
                    <div class="news_item fade_in col-md-4">
                        <a href="https://www.thehindubusinessline.com/catalyst/famous-studios-reinvents-itself-for-the-ott-generation/article34804968.ece"
                            class="news_item_inner" target="_blank">
                            <div class="news_image">
                                <img src="img/news/img_3.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="news_content">
                                <div class="blog_header">
                                    <div class="date_min_read text_xs">
                                        <span class="date">November 2021</span>
                                        <span class="dot"></span>
                                        <span class="min_read">Work</span>
                                    </div>
                                </div>
                                <h2 class="blog_title text_sm">Famous Studios keeps pace with the
                                    moving screens.
                                    How Mumbai’s Famous Studios, set up in pre-Partition days,
                                    is reinventing itself
                                    for the streaming entertainment sector.</h2>
                            </div>
                            <div class="news_source">
                                <img src="img/home/news_source.png" alt="" class="img-responsive">
                            </div>
                        </a>
                    </div>
                    <div class="news_item fade_in col-md-4">
                        <a href="https://www.thehindubusinessline.com/catalyst/famous-studios-reinvents-itself-for-the-ott-generation/article34804968.ece"
                            class="news_item_inner" target="_blank">
                            <div class="news_image">
                                <img src="img/news/img_4.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="news_content">
                                <div class="blog_header">
                                    <div class="date_min_read text_xs">
                                        <span class="date">November 2021</span>
                                        <span class="dot"></span>
                                        <span class="min_read">Work</span>
                                    </div>
                                </div>
                                <h2 class="blog_title text_sm">Famous Studios keeps pace with the
                                    moving screens.
                                    How Mumbai’s Famous Studios, set up in pre-Partition days,
                                    is reinventing itself
                                    for the streaming entertainment sector.</h2>
                            </div>
                            <div class="news_source">
                                <img src="img/home/news_source.png" alt="" class="img-responsive">
                            </div>
                        </a>
                    </div>
                    <div class="news_item fade_in col-md-4">
                        <a href="https://www.thehindubusinessline.com/catalyst/famous-studios-reinvents-itself-for-the-ott-generation/article34804968.ece"
                            class="news_item_inner" target="_blank">
                            <div class="news_image">
                                <img src="img/news/img_5.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="news_content">
                                <div class="blog_header">
                                    <div class="date_min_read text_xs">
                                        <span class="date">November 2021</span>
                                        <span class="dot"></span>
                                        <span class="min_read">Work</span>
                                    </div>
                                </div>
                                <h2 class="blog_title text_sm">Famous Studios keeps pace with the
                                    moving screens.
                                    How Mumbai’s Famous Studios, set up in pre-Partition days,
                                    is reinventing itself
                                    for the streaming entertainment sector.</h2>
                            </div>
                            <div class="news_source">
                                <img src="img/home/news_source.png" alt="" class="img-responsive">
                            </div>
                        </a>
                    </div>
                    <div class="news_item fade_in col-md-4">
                        <a href="https://www.thehindubusinessline.com/catalyst/famous-studios-reinvents-itself-for-the-ott-generation/article34804968.ece"
                            class="news_item_inner" target="_blank">
                            <div class="news_image">
                                <img src="img/news/img_6.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="news_content">
                                <div class="blog_header">
                                    <div class="date_min_read text_xs">
                                        <span class="date">November 2021</span>
                                        <span class="dot"></span>
                                        <span class="min_read">Work</span>
                                    </div>
                                </div>
                                <h2 class="blog_title text_sm">Famous Studios keeps pace with the
                                    moving screens.
                                    How Mumbai’s Famous Studios, set up in pre-Partition days,
                                    is reinventing itself
                                    for the streaming entertainment sector.</h2>
                            </div>
                            <div class="news_source">
                                <img src="img/home/news_source.png" alt="" class="img-responsive">
                            </div>
                        </a>
                    </div>
                    <div class="news_item fade_in col-md-4">
                        <a href="https://www.thehindubusinessline.com/catalyst/famous-studios-reinvents-itself-for-the-ott-generation/article34804968.ece"
                            class="news_item_inner" target="_blank">
                            <div class="news_image">
                                <img src="img/news/img_7.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="news_content">
                                <div class="blog_header">
                                    <div class="date_min_read text_xs">
                                        <span class="date">November 2021</span>
                                        <span class="dot"></span>
                                        <span class="min_read">Work</span>
                                    </div>
                                </div>
                                <h2 class="blog_title text_sm">Famous Studios keeps pace with the
                                    moving screens.
                                    How Mumbai’s Famous Studios, set up in pre-Partition days,
                                    is reinventing itself
                                    for the streaming entertainment sector.</h2>
                            </div>
                            <div class="news_source">
                                <img src="img/home/news_source.png" alt="" class="img-responsive">
                            </div>
                        </a>
                    </div>
                    <div class="news_item fade_in col-md-4">
                        <a href="https://www.thehindubusinessline.com/catalyst/famous-studios-reinvents-itself-for-the-ott-generation/article34804968.ece"
                            class="news_item_inner" target="_blank">
                            <div class="news_image">
                                <img src="img/news/img_1.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="news_content">
                                <div class="blog_header">
                                    <div class="date_min_read text_xs">
                                        <span class="date">November 2021</span>
                                        <span class="dot"></span>
                                        <span class="min_read">Work</span>
                                    </div>
                                </div>
                                <h2 class="blog_title text_sm">Famous Studios keeps pace with the
                                    moving screens.
                                    How Mumbai’s Famous Studios, set up in pre-Partition days,
                                    is reinventing itself
                                    for the streaming entertainment sector.</h2>
                            </div>
                            <div class="news_source">
                                <img src="img/home/news_source.png" alt="" class="img-responsive">
                            </div>
                        </a>
                    </div>
                    <div class="news_item fade_in col-md-4">
                        <a href="https://www.thehindubusinessline.com/catalyst/famous-studios-reinvents-itself-for-the-ott-generation/article34804968.ece"
                            class="news_item_inner" target="_blank">
                            <div class="news_image">
                                <img src="img/news/img_3.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="news_content">
                                <div class="blog_header">
                                    <div class="date_min_read text_xs">
                                        <span class="date">November 2021</span>
                                        <span class="dot"></span>
                                        <span class="min_read">Work</span>
                                    </div>
                                </div>
                                <h2 class="blog_title text_sm">Famous Studios keeps pace with the
                                    moving screens.
                                    How Mumbai’s Famous Studios, set up in pre-Partition days,
                                    is reinventing itself
                                    for the streaming entertainment sector.</h2>
                            </div>
                            <div class="news_source">
                                <img src="img/home/news_source.png" alt="" class="img-responsive">
                            </div>
                        </a>
                    </div>
                    <div class="news_item fade_in col-md-4">
                        <a href="https://www.thehindubusinessline.com/catalyst/famous-studios-reinvents-itself-for-the-ott-generation/article34804968.ece"
                            class="news_item_inner" target="_blank">
                            <div class="news_image">
                                <img src="img/news/img_4.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="news_content">
                                <div class="blog_header">
                                    <div class="date_min_read text_xs">
                                        <span class="date">November 2021</span>
                                        <span class="dot"></span>
                                        <span class="min_read">Work</span>
                                    </div>
                                </div>
                                <h2 class="blog_title text_sm">Famous Studios keeps pace with the
                                    moving screens.
                                    How Mumbai’s Famous Studios, set up in pre-Partition days,
                                    is reinventing itself
                                    for the streaming entertainment sector.</h2>
                            </div>
                            <div class="news_source">
                                <img src="img/home/news_source.png" alt="" class="img-responsive">
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
