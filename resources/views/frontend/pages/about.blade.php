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
    <main id="about_page" class="smooth_scroll_pages">

        <section id="inside_page_banner_section">
            <div class="banner_image">
                <picture>
                    <source media="(min-width:768px)" srcset="img/about/about_banner.jpg">
                    <img src="img/about/about_banner.jpg" alt="" class="img-responsive">
                </picture>
            </div>
            <div class="banner_content">
                <div class="container">
                    <div class="banner_content_inner">
                        <h1 class="text_xxl text_700 banner_title">fueling dreams since 1946</h1>
                        <p class="banner_desc">An unwavering legacy of world class tech, talent and infrastructure,
                            continuing to thrive and flourish in the Media and Entertainment industry. </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="canvas_for_story_tellers section_spacing">
            <div class="container">
                <h2 class="section_title text_center fade_in">canvas for storytellers</h2>
                <p class="text_center cfst_desc fade_in">We empower content creators with the best - from
                    solution-centric
                    creative teams
                    and services to co-working spaces.</p>
                <div class="text_img_wrap">
                    <div class="text_img_item">
                        <div class="col-md-7">
                            <div class="ti_image fade_in">
                                <img src="img/about/famous_studio.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ti_content">
                                <h3 class="text_lg text_700 fade_in">Shooting Floors and Event Spaces</h3>
                                <p class="text_sm fade_in">A range of shooting floors with a dedicated green screen
                                    stage,
                                    Ready-to-shoot sets
                                    with makeup rooms, and 60-seater Preview Theater with Barco 2K 8S Projector and
                                    Dolby Surround 7.1, ideal for content production and live events. </p>
                            </div>
                        </div>
                    </div>
                    <div class="text_img_item">
                        <div class="col-md-7">
                            <div class="ti_image fade_in">
                                <img src="img/about/Specialised-production.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ti_content ">
                                <h3 class="text_lg text_700 fade_in">Specialized Production Services</h3>
                                <p class="text_sm fade_in">High Speed Visual Engineering Lab with Phantom Flex 4K GS and
                                    precision controlled
                                    Robotic Arm, Virtual Production facilities integrated with Unreal Engine, and
                                    In-house production services with a global network of directors. </p>
                            </div>
                        </div>
                    </div>
                    <div class="text_img_item">
                        <div class="col-md-7">
                            <div class="ti_image fade_in">
                                <img src="img/about/post_production.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ti_content">
                                <h3 class="text_lg text_700 fade_in">Post Production Services</h3>
                                <p class="text_sm fade_in">End-to-end Creative Audio and Video Post Production services,
                                    Offline
                                    Editing Suites, Online/Finishing Suites, Dolby Vision Certified DI & Color Grading
                                    Facilities on Baselight and Da Vinci Resolve, and 4 X Sound Mix and Recording
                                    Studios including a Dolby Atmos 7.1.4 HE room. </p>
                            </div>
                        </div>
                    </div>
                    <div class="text_img_item">
                        <div class="col-md-7">
                            <div class="ti_image fade_in">
                                <img src="img/about/famous_house.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ti_content">
                                <h3 class="text_lg text_700 fade_in">Famous House of Artists</h3>
                                <p class="text_sm fade_in">FHOA provides world class talent to enable you to bring your
                                    creative
                                    vision to life. Established in 1998, FHOA has been a leading VFX, CGI, & 3D
                                    Animation service provider with a talented team of artists delivering high end
                                    VFX/CGI projects across the globe and an end-to-end capacity to deliver content from
                                    conceptualization to final delivery. </p>
                            </div>
                        </div>
                    </div>
                    <div class="text_img_item">
                        <div class="col-md-7">
                            <div class="ti_image fade_in">
                                <img src="img/about/fwc.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ti_content">
                                <h3 class="text_lg text_700 fade_in">Famous Working Company </h3>
                                <p class="text_sm fade_in">This all-inclusive co-working space has all kinds of
                                    solutions for
                                    business professionals. Situated in Worli, the space is fully equipped to foster
                                    creativity and is the ultimate abode for content creators. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mission_vision_section section_spacing">
            <div class="a_logo">
                <img src="img/a-logomark.svg" alt="" class="img-responsive">
            </div>
            <div class="container">
                <div class="mv_wrap">
                    <div class="mv_item ">
                        <div class="col-md-5">
                            <h2 class="section_title fade_in">our mission </h2>
                            <p class="fade_in">To unlock, inspire, and nurture the imagination of storytellers by
                                empowering them with a
                                unique blend of tech, talent and infrastructure. </p>
                        </div>
                    </div>
                    <div class="mv_item">
                        <div class="col-md-5">
                            <h2 class="section_title fade_in">our vision</h2>
                            <p class="fade_in">To be a global leader and enabler of audio-visual craft and creative
                                solutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our_values_section section_spacing">
            <div class="container">
                <div class="our_values_section_inner">
                    <div class="title_area">
                        <h2 class="section_title fade_in">our values</h2>
                    </div>
                    <div class="value_wrap">
                        <div class="row">
                            <div class="col-sm-6 value_item fade_in">
                                <div class="value_img">
                                    <img src="img/about/innovation_icon.svg" alt="" class="img-responsive">
                                </div>
                                <div class="value_content">
                                    <h3 class="text_md text_700">Innovation</h3>
                                    <p class="text_sm">Consistently challenging the status-quo to enhance results and
                                        overall impact. </p>
                                </div>
                            </div>
                            <div class="col-sm-6 value_item fade_in">
                                <div class="value_img">
                                    <img src="img/about/customer_centric.svg" alt="" class="img-responsive">
                                </div>
                                <div class="value_content">
                                    <h3 class="text_md text_700">Customer Centricity </h3>
                                    <p class="text_sm">Delivering on promises, and exceeding customer expectations to
                                        build trust and mutual respect within the creative community.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 value_item fade_in">
                                <div class="value_img">
                                    <img src="img/about/dependability.svg" alt="" class="img-responsive">
                                </div>
                                <div class="value_content">
                                    <h3 class="text_md text_700">Dependability</h3>
                                    <p class="text_sm">Building trust by consistently delivering on promises and
                                        results
                                        both in terms of time and overall quality. </p>
                                </div>
                            </div>
                            <div class="col-sm-6 value_item fade_in">
                                <div class="value_img">
                                    <img src="img/about/courage.svg" alt="" class="img-responsive">
                                </div>
                                <div class="value_content">
                                    <h3 class="text_md text_700">Courage</h3>
                                    <p class="text_sm">Demonstrating grace under pressure by taking the circumstances
                                        to
                                        your stride.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 value_item fade_in">
                                <div class="value_img">
                                    <img src="img/about/integrity.svg" alt="" class="img-responsive">
                                </div>
                                <div class="value_content">
                                    <h3 class="text_md text_700">Integrity </h3>
                                    <p class="text_sm">Being ethical, honest, and having strong moral principles by
                                        doing the right thing.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 value_item fade_in">
                                <div class="value_img">
                                    <img src="img/about/entrepreneurial.svg" alt="" class="img-responsive">
                                </div>
                                <div class="value_content">
                                    <h3 class="text_md text_700">Entrepreneurial Mindset</h3>
                                    <p class="text_sm">Deploying creativity, risk-taking and problem solving to tap
                                        opportunities.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 value_item fade_in">
                                <div class="value_img">
                                    <img src="img/about/learning.svg" alt="" class="img-responsive">
                                </div>
                                <div class="value_content">
                                    <h3 class="text_md text_700">Learning & Empowering</h3>
                                    <p class="text_sm">Thriving in unfamiliar situations by approaching them with
                                        wonderment rather than worry.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 value_item fade_in">
                                <div class="value_img">
                                    <img src="img/about/creative_excellence.svg" alt="" class="img-responsive">
                                </div>
                                <div class="value_content">
                                    <h3 class="text_md text_700">Creative Excellence </h3>
                                    <p class="text_sm">Consistently leveraging the ecosystem of tech, talent, and
                                        infrastructure to drive ingenious results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="team_section section_spacing">
                    <div class="container">
                        <h2 class="section_title text_center fade_in">meet our talent</h2>
                        <div class="team_wrap row fade_in about_team_slider">
                            <a href="#team_member1" class="team_item col-md-3 col-xs-12 inline_popup">
                                <div class="team_item_inner">
                                    <div class="team_image">
                                        <img src="img/home/anant.jpg" alt="" class="img-responsive">
                                        <div class="team_img_overlay">
                                            <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                        </div>
                                    </div>
                                    <div class="team_detail">
                                        <p class="member_name text_md text_500">Anant
                                            Roongta</p>
                                        <p class="member_desg text_sm">Managing
                                            Director, Famous Studios</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#team_member2" class="team_item col-md-3 col-xs-12 inline_popup">
                                <div class="team_item_inner">
                                    <div class="team_image">
                                        <img src="img/home/anant.jpg" alt="" class="img-responsive">
                                        <div class="team_img_overlay">
                                            <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                        </div>
                                    </div>
                                    <div class="team_detail">
                                        <p class="member_name text_md text_500">Anant
                                            Roongta</p>
                                        <p class="member_desg text_sm">Managing
                                            Director, Famous Studios</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#team_member3" class="team_item col-md-3 col-xs-12 inline_popup">
                                <div class="team_item_inner">
                                    <div class="team_image">
                                        <img src="img/home/anant.jpg" alt="" class="img-responsive">
                                        <div class="team_img_overlay">
                                            <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                        </div>
                                    </div>
                                    <div class="team_detail">
                                        <p class="member_name text_md text_500">Anant
                                            Roongta</p>
                                        <p class="member_desg text_sm">Managing
                                            Director, Famous Studios</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#team_member4" class="team_item col-md-3 col-xs-12 inline_popup">
                                <div class="team_item_inner">
                                    <div class="team_image">
                                        <img src="img/home/anant.jpg" alt="" class="img-responsive">
                                        <div class="team_img_overlay">
                                            <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                        </div>
                                    </div>
                                    <div class="team_detail">
                                        <p class="member_name text_md text_500">Anant
                                            Roongta</p>
                                        <p class="member_desg text_sm">Managing
                                            Director, Famous Studios</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#team_member5" class="team_item col-md-3 col-xs-12 inline_popup">
                                <div class="team_item_inner">
                                    <div class="team_image">
                                        <img src="img/home/anant.jpg" alt="" class="img-responsive">
                                        <div class="team_img_overlay">
                                            <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                        </div>
                                    </div>
                                    <div class="team_detail">
                                        <p class="member_name text_md text_500">Anant
                                            Roongta</p>
                                        <p class="member_desg text_sm">Managing
                                            Director, Famous Studios</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#team_member6" class="team_item col-md-3 col-xs-12 inline_popup">
                                <div class="team_item_inner">
                                    <div class="team_image">
                                        <img src="img/home/anant.jpg" alt="" class="img-responsive">
                                        <div class="team_img_overlay">
                                            <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                        </div>
                                    </div>
                                    <div class="team_detail">
                                        <p class="member_name text_md text_500">Anant
                                            Roongta</p>
                                        <p class="member_desg text_sm">Managing
                                            Director, Famous Studios</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#team_member7" class="team_item col-md-3 col-xs-12 inline_popup">
                                <div class="team_item_inner">
                                    <div class="team_image">
                                        <img src="img/home/anant.jpg" alt="" class="img-responsive">
                                        <div class="team_img_overlay">
                                            <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                        </div>
                                    </div>
                                    <div class="team_detail">
                                        <p class="member_name text_md text_500">Anant
                                            Roongta</p>
                                        <p class="member_desg text_sm">Managing
                                            Director, Famous Studios</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#team_member8" class="team_item col-md-3 col-xs-12 inline_popup">
                                <div class="team_item_inner">
                                    <div class="team_image">
                                        <img src="img/home/anant.jpg" alt="" class="img-responsive">
                                        <div class="team_img_overlay">
                                            <img src="img/plus_icon.svg" alt="" class="img-responsive plus_icon">
                                        </div>
                                    </div>
                                    <div class="team_detail">
                                        <p class="member_name text_md text_500">Anant
                                            Roongta</p>
                                        <p class="member_desg text_sm">Managing
                                            Director, Famous Studios</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section> -->

        <section class="awards_section section_spacing">
            <div class="container">
                <h2 class="section_title text_center fade_in">awards <br> and recognitions</h2>
                <div class="award_wrap">
                    <div class="award_item fade_in">
                        <div class="award_img">
                            <img src="img/about/award_img.png" alt="" class="img-responsive">
                        </div>
                        <div class="award_content">
                            <div class="text_top">
                                <h2 class="text_700">Gulchadi</h2>
                                <p class="text_xs">Best Visual Effect</p>
                            </div>
                            <div class="text_bottom">
                                <p class="text_sm">50 Yrs Golden Jubilee Award</p>
                            </div>
                        </div>
                    </div>
                    <div class="award_item fade_in">
                        <div class="award_img">
                            <img src="img/about/award_img.png" alt="" class="img-responsive">
                        </div>
                        <div class="award_content">
                            <div class="text_top">
                                <h2 class="text_700">Gulchadi</h2>
                                <p class="text_xs">Best Visual Effect</p>
                            </div>
                            <div class="text_bottom">
                                <p class="text_sm">50 Yrs Golden Jubilee Award</p>
                            </div>
                        </div>
                    </div>
                    <div class="award_item fade_in">
                        <div class="award_img">
                            <img src="img/about/award_img.png" alt="" class="img-responsive">
                        </div>
                        <div class="award_content">
                            <div class="text_top">
                                <h2 class="text_700">Gulchadi</h2>
                                <p class="text_xs">Best Visual Effect</p>
                            </div>
                            <div class="text_bottom">
                                <p class="text_sm">50 Yrs Golden Jubilee Award</p>
                            </div>
                        </div>
                    </div>
                    <div class="award_item fade_in">
                        <div class="award_img">
                            <img src="img/about/award_img.png" alt="" class="img-responsive">
                        </div>
                        <div class="award_content">
                            <div class="text_top">
                                <h2 class="text_700">Gulchadi</h2>
                                <p class="text_xs">Best Visual Effect</p>
                            </div>
                            <div class="text_bottom">
                                <p class="text_sm">50 Yrs Golden Jubilee Award</p>
                            </div>
                        </div>
                    </div>
                    <div class="award_item fade_in">
                        <div class="award_img">
                            <img src="img/about/award_img.png" alt="" class="img-responsive">
                        </div>
                        <div class="award_content">
                            <div class="text_top">
                                <h2 class="text_700">Gulchadi</h2>
                                <p class="text_xs">Best Visual Effect</p>
                            </div>
                            <div class="text_bottom">
                                <p class="text_sm">50 Yrs Golden Jubilee Award</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!--  end body content -->

    @include('frontend.includes.team-data')

    {{-- End Body Content --}}

    @include('frontend.includes.team-data')
    @include('frontend.includes.footer')
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            if (winW < 768) {
                $(".award_wrap").slick({
                    infinite: true,
                    slidesToScroll: 1,
                    // slidesToShow: 1,
                    variableWidth: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    arrows: false,
                    dots: false,
                    swipeToSlide: true,
                    touchThreshold: 100,
                });
            }
        })
    </script>
@endpush
