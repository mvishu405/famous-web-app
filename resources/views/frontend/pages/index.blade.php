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

    <main id="index_page" class="smooth_scroll_pages">
        <!--  insert body content  -->

        <section id="banner_section" class="">
            <div class="banner_bg_image" style="background-image:url(img/home/banner.jpg)">
                <div class="video_slider">
                    @foreach ($homepageBanners as $homepageBanner)
                        <div class="video_slider_item">
                            <video width="100%" height="100%" autoplay loop playsinline muted>
                                <source src="{{ viewFile($homepageBanner->video_webm) }}"
                                    data-desktop-src="{{ viewFile($homepageBanner->video_webm) }}" type="video/webm">
                                <source src="{{ viewFile($homepageBanner->video_mp4) }}"
                                    data-desktop-src="{{ viewFile($homepageBanner->video_mp4) }}" type="video/mp4">
                            </video>
                        </div>
                    @endforeach
                </div>
                <div class="grid_lines">
                    <div class="grid_line_item"></div>
                    <div class="grid_line_item"></div>
                    <div class="grid_line_item"></div>
                    <div class="grid_line_item"></div>
                </div>
            </div>
            <div class="banner_inner_content">

                <div class="container">
                    <div class="banner_inner f_r_a_center">
                        <div class="banner_content">
                            <div class="focus_area">
                                <div class="focus_box">
                                    <div class="fb_inner fb_up"></div>
                                    <div class="fb_inner fb_down"></div>
                                </div>
                            </div>
                            <h1 class="banner_title text_xxxl text_700">
                                <span>create </span>
                                <span>ground-breaking </span>
                                <span>content </span>
                            </h1>
                            <p class="col-xs-12 col-md-6 no_pad banner_text">with award winning talent,
                                cutting-edge technology & infrastructure that unlock, inspire, and nurture the
                                imagination of storytellers.</p>
                            <a href="work.php" class="btn_default">Explore more</a>
                        </div>
                    </div>
                </div>
                <div class="scrollDown_sec">
                    <div class="container">
                        <p class="text_sm">Scroll Down</p>
                    </div>
                </div>
            </div>

        </section>

        <section id="video_area" class="">
            <div class="video_box">
                <picture>
                    <source media="(min-width:768px)" srcset="img/home/75-Years-Video.jpg">
                    <img src="img/home/75-Years-Video.jpg" alt="" class="img-responsive">
                </picture>
            </div>
            <div class="video_black_bg">
                <div class="video_black_bg_inner"></div>
            </div>
            <div class="video_content">
                <div class="container">
                    <div class="video_content_inner">
                        <h2 class="video_content_title text_xl text_600">empowering storytellers since</h2>
                        <h3 class="year_text text_700">1946</h3>
                        <a href="https://www.youtube.com/watch?v=1q2zOq1hR5w" class="play_button iframe_popup">
                            <img src="img/play_icon.svg" alt="" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="yourDream_section" class="">
            <div class="a_logomark">
                <img src="img/a-logomark.svg" alt="" class="img-responsive">
            </div>
            <div class="your_dream_content">
                <div class="container">
                    <div class="your_dream_inner">
                        <h2 class="your_dream_title text_xxxxl text_700">
                            <span class="fade_in">you dream,</span>
                            <span class="fade_in">we fulfill.</span>

                        </h2>
                        <p class="your_dream_desc fade_in">Over time, we have adapted and committed to our legacy of
                            fuelling stories with the help of innovation, infrastructure, technology, and
                            an
                            incredibly talented team. </p>
                        <a href="about.php" class="btn_default fade_in">Discover more</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="work_section" class="section_spacing">
            <div class="container">
                <div class="work_section_head">
                    <h2 class="section_title text_center fade_in">visual gallery of <br> mind-blowing craftsmanship
                    </h2>
                    <p class="text_center fade_in">A glimpse at some of our content, that has moved generations
                        literally and figuratively. </p>
                </div>
            </div>
            <div class="work_listing_slider_wrap">
                <div class="work_listing_slider addDragCursor">
                    @foreach ($works as $work)
                        <div class="work_listing_item">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="{{ viewFile($work->preview_image) }}" alt="" class="placeholder_img img-responsive">
                                    <div class="wls_actual">
                                        <img src="img/home/vg1.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md text_700">{{ $work->title }}</h2>
                                    <span class="wls_cat text_xs">{{ $work->workCategory->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="arrow_wrap">
                    <div class="arrow_item arrow_left">
                        <img data-lazy-src="img/arrow_left.svg" alt="" class="img-responsive">
                    </div>
                    <div class="arrow_item arrow_right">
                        <img data-lazy-src="img/arrow_right.svg" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="text_center">
                    <a href="{{ route('frontend.works.index') }}" class="btn_default fade_in">View more</a>
                </div>
            </div>



        </section>

        <section id="creative_solution_section" class="section_spacing">
            <div class="bg_circle_sticky_parrent">
                <div class="bg_circle_sticky">
                    <div class="bg_circle_sticky_inner"></div>
                </div>
            </div>
            <div class="rest_content">
                <div class="container">
                    <div class="cs_inner">
                        <h2 class="section_title text_center fade_in">change makers in audio visual craft and
                            creative solutions </h2>
                        <p class="cs_desc text_center fade_in">
                            <span>Looking for a one stop solution to unleash your creativity? </span>
                            <span>As global leaders in content creation, we offer a range of custom creative solutions
                                <br> that cater to content creators across the media and entertainment fraternity.
                            </span>
                        </p>
                        <div class="solution_wrap row">
                            <a href="production.php" class="solution_item col-md-4 col-xs-6">
                                <div class="solution_item_inner">
                                    <span class="solution_index text_xs text_500">01</span>
                                    <div class="solution_image">
                                        <img data-lazy-src="img/home/solution1.jpg" src="img/home/solution.jpg" alt=""
                                            class="img-responsive">
                                        <div class="solution_img_overlay">
                                            <p class="solution_title text_med text_700">Production</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="production.php" class="solution_item col-md-4 col-xs-6">
                                <div class="solution_item_inner">
                                    <span class="solution_index text_xs text_500">02</span>
                                    <div class="solution_image">
                                        <img data-lazy-src="img/home/solution2.jpg" src="img/home/solution.jpg" alt=""
                                            class="img-responsive">
                                        <div class="solution_img_overlay">
                                            <p class="solution_title text_med text_700">Visual
                                                Engineering Lab </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="production.php" class="solution_item col-md-4 col-xs-6">
                                <div class="solution_item_inner">
                                    <span class="solution_index text_xs text_500">03</span>
                                    <div class="solution_image">
                                        <img data-lazy-src="img/home/solution3.jpg" src="img/home/solution.jpg" alt=""
                                            class="img-responsive">
                                        <div class="solution_img_overlay">
                                            <p class="solution_title text_med text_700">Virtual
                                                Production</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="production.php" class="solution_item col-md-4 col-xs-6">
                                <div class="solution_item_inner">
                                    <span class="solution_index text_xs text_500">04</span>
                                    <div class="solution_image">
                                        <img data-lazy-src="img/home/solution4.jpg" src="img/home/solution.jpg" alt=""
                                            class="img-responsive">
                                        <div class="solution_img_overlay">
                                            <p class="solution_title text_med text_700">Shooting Floors
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="production.php" class="solution_item col-md-4 col-xs-6">
                                <div class="solution_item_inner">
                                    <span class="solution_index text_xs text_500">05</span>
                                    <div class="solution_image">
                                        <img data-lazy-src="img/home/solution5.jpg" src="img/home/solution.jpg" alt=""
                                            class="img-responsive">
                                        <div class="solution_img_overlay">
                                            <p class="solution_title text_med text_700">Post-production
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="production.php" class="solution_item col-md-4 col-xs-6">
                                <div class="solution_item_inner">
                                    <span class="solution_index text_xs text_500">06</span>
                                    <div class="solution_image">
                                        <img data-lazy-src="img/home/solution6.jpg" src="img/home/solution.jpg" alt=""
                                            class="img-responsive">
                                        <div class="solution_img_overlay">
                                            <p class="solution_title text_med text_700">VFX / CGI</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="production.php" class="solution_item col-md-4 col-xs-6">
                                <div class="solution_item_inner">
                                    <span class="solution_index text_xs text_500">07</span>
                                    <div class="solution_image">
                                        <img data-lazy-src="img/home/solution7.jpg" src="img/home/solution.jpg" alt=""
                                            class="img-responsive">
                                        <div class="solution_img_overlay">
                                            <p class="solution_title text_med text_700">Preview Theatre
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="production.php" class="solution_item col-md-4 col-xs-6">
                                <div class="solution_item_inner">
                                    <span class="solution_index text_xs text_500">08</span>
                                    <div class="solution_image">
                                        <img data-lazy-src="img/home/solution8.jpg" src="img/home/solution.jpg" alt=""
                                            class="img-responsive">
                                        <div class="solution_img_overlay">
                                            <p class="solution_title text_med text_700">Famous Working
                                                Company</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="production.php" class="solution_item col-md-4 col-xs-6">
                                <div class="solution_item_inner">
                                    <span class="solution_index text_xs text_500">09</span>
                                    <div class="solution_image">
                                        <img data-lazy-src="img/home/solution9.jpg" src="img/home/solution.jpg" alt=""
                                            class="img-responsive">
                                        <div class="solution_img_overlay">
                                            <p class="solution_title text_med text_700">FS Talent</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- <button class="btn_default">Know more</button> -->
                        <div class="cs_end_text">
                            <h3 class="text_xl text_200 text_center fade_in">No matter who you are or what you wish
                                to create, our solutions are inspired by
                                your vision, dream and imagination.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonial_section" class="section_spacing">
            <div class="thumb_imgs">
                @foreach ($testimonials->take(5) as $testimonial)
                    <div class="thumb_img_item">
                        <img data-lazy-src="{{ viewFile($testimonial->image) }}" alt="" class="img_responsive">
                    </div>
                @endforeach

            </div>
            <div class="ts_inner">
                <div class="container">
                    <h2 class="section_title text_center fade_in">let’s hear from fellow <br>
                        content creators</h2>
                </div>
                <div class="testimonial_slider_area">
                    <div class="container">
                        <div class="testimonial_slider">
                            <div class="testi_item">
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div id="testi_image_slider" class="testi_image">
                                            @foreach ($testimonials as $testimonial)
                                                <div class="testi_image_item">
                                                    <img src="{{ viewFile($testimonial->image) }}" alt=""
                                                        class="img-responsive">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="testi_content_slider" class="testi_content">
                                            @foreach ($testimonials as $testimonial)
                                                <div class="testi_content_item">
                                                    <div class="testi_desc">
                                                        {!! $testimonial->description !!}
                                                    </div>
                                                    <h3 class="testi_name text_md text_700">{{ $testimonial->name }}</h3>
                                                    <span
                                                        class="testi_desg text_sm text_itatic">{{ $testimonial->designation }}</span>
                                                </div>
                                            @endforeach
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="blog_and_news_section">
            <div class="row">
                <div class="blog_area col-sm-12 col-md-5 no_pad">
                    <h2 class=" section_title fade_in">blogs</h2>
                    <div class="blog_wrap">
                        @foreach ($blogs as $blog)
                            <div class="blog_item fade_in">
                                <div class="blog_content">
                                    <div class="blog_header">
                                        <div class="date_min_read text_xs">
                                            <span
                                                class="date">{{ Carbon\Carbon::parse($blog->blog_date)->toFormattedDateString() }}</span>
                                            <span class="dot"></span>
                                            <span class="min_read">{{ $blog->read_time }}</span>
                                        </div>
                                        <div class="social_icon">
                                            <div class="social_links_area">
                                                <a href="#"><img src="img/blog_inside/facebook-icon.png" alt=""></a>
                                                <a href="#"><img src="img/blog_inside/twitter-icon.png" alt=""></a>
                                                <a href="#"><img src="img/blog_inside/linkedin-icon.png" alt=""></a>
                                                <a href="#"><img src="img/blog_inside/feather-icon.png" alt=""></a>
                                            </div>
                                            <a href="#" class="share-icon">
                                                <img src="img/blog_inside/share-icon.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <h2 class="blog_title text_sm">{{ $blog->title }}</h2>
                                    <a class="continue_reading text_xs"
                                        href="{{ route('frontend.blogs.inside', ['slug' => $blog->slug]) }}">Continue
                                        Reading
                                        +</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="{{ route('frontend.blogs.index') }}" class="btn_default fade_in rem_link_style">Read
                        more</a>
                </div>
                <div class="news_area col-sm-12 col-md-7">
                    <h2 class=" section_title fade_in">in the news</h2>
                    <div class="news_wrap row">
                        @forelse ($news as $ns)
                            <div class="news_item col-sm-6 fade_in">
                                <a href="{{ $ns->news_link }}" class="news_item_inner" target="_blank">
                                    <div class="news_item_inner">
                                        <div class="news_image">
                                            <img data-lazy-src="{{ viewFile($ns->preview_image) }}" alt=""
                                                class="img-responsive">
                                        </div>
                                        <div class="news_content">
                                            <div class="blog_header">
                                                <div class="date_min_read text_xs">
                                                    <span
                                                        class="date">{{ Carbon\Carbon::parse($ns->news_date)?->toFormattedDateString() }}</span>
                                                    <span class="dot"></span>
                                                    <span class="min_read">Press</span>
                                                </div>
                                                {{-- <a href="javascript:void(0)" class="share_icon">
                                            <img data-lazy-src="img/share_icon.svg" alt="" class="img-responsive">
                                        </a> --}}
                                            </div>
                                            <h2 class="blog_title text_sm">
                                                {!! $ns->description !!}
                                            </h2>
                                        </div>
                                        <div class="news_source">
                                            <img data-lazy-src="{{ viewFile($ns->news_logo) }}" alt=""
                                                class="img-responsive">
                                        </div>
                                    </div>
                                </a>
                            </div>

                        @empty
                        @endforelse

                    </div>
                    <a href="{{ route('frontend.news.index') }}" class="btn_default fade_in rem_link_style">Read
                        more</a>
                </div>
            </div>
        </section>

        <section id="meet_out_team_section" class="section_spacing">
            <div class="mot_inner">
                <div class="container-fluid">
                    <div class="row mot_wrap">
                        <div class="col-xs-12 col-md-4">
                            <div class="mot_left">
                                <h2 class="section_title fade_in">meet our talent</h2>
                                <!-- <a href="about.php" class="btn_default fade_in rem_link_style hidden_xs">Know Them
                                                                            better</a> -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-8">
                            <div class="mot_right fade_in">
                                <div class="team_wrap team_slider">
                                    <a href="#team_member1" class="team_item inline_popup">
                                        <div class="team_item_inner">
                                            <div class="team_image">
                                                <img src="img/team/anant.jpg" alt="" class="img-responsive">
                                                <div class="team_img_overlay">
                                                    <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                                </div>
                                            </div>
                                            <div class="team_detail">
                                                <p class="member_name text_md text_500">Anant
                                                    Roongta</p>
                                                <p class="member_desg text_sm">Managing Director</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#team_member2" class="team_item inline_popup">
                                        <div class="team_item_inner">
                                            <div class="team_image">
                                                <img src="img/team/arun.jpg" alt="" class="img-responsive">
                                                <div class="team_img_overlay">
                                                    <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                                </div>
                                            </div>
                                            <div class="team_detail">
                                                <p class="member_name text_md text_500">Arun
                                                    Roongta</p>
                                                <p class="member_desg text_sm">Chairman</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#team_member3" class="team_item inline_popup">
                                        <div class="team_item_inner">
                                            <div class="team_image">
                                                <img src="img/team/Ravi-Kumar.jpg" alt="" class="img-responsive">
                                                <div class="team_img_overlay">
                                                    <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                                </div>
                                            </div>
                                            <div class="team_detail">
                                                <p class="member_name text_md text_500">Ravi Sharma</p>
                                                <p class="member_desg text_sm">Senior Flame Artist & Supervisor</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#team_member4" class="team_item inline_popup">
                                        <div class="team_item_inner">
                                            <div class="team_image">
                                                <img src="img/team/Raju-Reddy.jpg" alt="" class="img-responsive">
                                                <div class="team_img_overlay">
                                                    <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                                </div>
                                            </div>
                                            <div class="team_detail">
                                                <p class="member_name text_md text_500">Raju Reddy</p>
                                                <p class="member_desg text_sm">Senior Online Artist</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#team_member5" class="team_item inline_popup">
                                        <div class="team_item_inner">
                                            <div class="team_image">
                                                <img src="img/team/Vishal-Sinha.jpg" alt="" class="img-responsive">
                                                <div class="team_img_overlay">
                                                    <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                                </div>
                                            </div>
                                            <div class="team_detail">
                                                <p class="member_name text_md text_500">Vishal Sinha</p>
                                                <p class="member_desg text_sm">Senior Online Artist</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#team_member6" class="team_item inline_popup">
                                        <div class="team_item_inner">
                                            <div class="team_image">
                                                <img src="img/team/Abhilesh-Shivalkar.jpg" alt="" class="img-responsive">
                                                <div class="team_img_overlay">
                                                    <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                                </div>
                                            </div>
                                            <div class="team_detail">
                                                <p class="member_name text_md text_500">Abhilesh Shivalkar</p>
                                                <p class="member_desg text_sm">Offline Editor and Online Artist</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#team_member7" class="team_item inline_popup">
                                        <div class="team_item_inner">
                                            <div class="team_image">
                                                <img src="img/team/Avinash-Shukla.jpg" alt="" class="img-responsive">
                                                <div class="team_img_overlay">
                                                    <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                                </div>
                                            </div>
                                            <div class="team_detail">
                                                <p class="member_name text_md text_500">Avinash Shukla</p>
                                                <p class="member_desg text_sm">Sr. Colourist</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#team_member8" class="team_item inline_popup">
                                        <div class="team_item_inner">
                                            <div class="team_image">
                                                <img src="img/team/Swapnil-Patole.jpg" alt="" class="img-responsive">
                                                <div class="team_img_overlay">
                                                    <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                                </div>
                                            </div>
                                            <div class="team_detail">
                                                <p class="member_name text_md text_500">Swapnil Patole</p>
                                                <p class="member_desg text_sm">Chief Colourist</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#team_member9" class="team_item inline_popup">
                                        <div class="team_item_inner">
                                            <div class="team_image">
                                                <img src="img/team/Jarvis-Marcedo.jpg" alt="" class="img-responsive">
                                                <div class="team_img_overlay">
                                                    <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                                </div>
                                            </div>
                                            <div class="team_detail">
                                                <p class="member_name text_md text_500">Jarvis Marcedo</p>
                                                <p class="member_desg text_sm">Senior Sound Engineer</p>
                                            </div>
                                        </div>
                                    </a>




                                </div>
                                <div class="arrow_wrap">
                                    <div class="arrow_item arrow_left">
                                        <img data-lazy-src="img/arrow_left.svg" alt="" class="img-responsive">
                                    </div>
                                    <div class="arrow_item arrow_right">
                                        <img data-lazy-src="img/arrow_right.svg" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="text_center visible_xs">
                                    <a href="about.php" class="btn_default fade_in rem_link_style">Know Them better</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.includes.contact-section')

        <!--  end body content -->
    </main>

    {{-- End Body Content --}}

    @include('frontend.includes.team-data')
    @include('frontend.includes.footer')
@endsection

@push('scripts')
@endpush
