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
    <main id="post_production_page" class="smooth_scroll_pages service_inside_pages"
        data-active-id=".makePostProductionActive">
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
                <h2 class="section_title text_center fade_in">Post-production</h2>
                <p class="service_desc text_center fade_in">Famous Studios’ Dolby Atmos and Dolby Vision certified audio
                    and
                    video creative post production services are designed to provide you with powerful tools to make your
                    work as innovative and breathtaking as you'd imagined it. </p>
                <div class="service_img fade_in">
                    <img src="img/service/post_production_banner.jpg" alt="" class="img-responsive">
                </div>
            </div>
        </section>
        <section class="sub_services_section section_spacing">
            <div class="container">
                <h2 class="section_title text_center fade_in">Audio Visual Post <br> Production Services</h2>
                <p class="service_desc text_center fade_in">Our award winning artists ensure quality output, while
                    maintaining
                    efficiency. We have catered to every need of TV commercials, International broadcast channels, OTT
                    platforms, film-makers and advertising agencies - adding a superb finishing touch with our post
                    production services. </p>
                <div class="sub_service_wrap">
                    <div class="accordian_wrap">
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Offline Editing Services </div>
                                        <div class="accordian_icon">
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="accordian_content">
                                        <p>Editing suites equipped with:</p>
                                        <ul>
                                            <li> Avid Media Composer</li>
                                            <li> Final Cut Pro </li>
                                            <li> Adobe Premier Pro</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Color Grading (DI) </div>
                                        <div class="accordian_icon">
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="accordian_content">
                                        <p>Flexible Dolby Vision 4K HDR grading solutions with a combination of
                                            Baselight and DaVinci Resolve.</p>
                                        <p>Baselight Suite equipped with:</p>
                                        <ul>
                                            <li> Blackboard One</li>
                                            <li> Dolby Vision 4K HDR workflow </li>
                                            <li> Sony BVM series 4K OLED monitor </li>
                                            <li> Projector to grade feature films</li>
                                        </ul>
                                        <p>DaVinci Resolve Suite equipped with:</p>
                                        <ul>
                                            <li> Advanced Resolve panel </li>
                                            <li> Dolby Vision 4K HDR workflow</li>
                                            <li> Eizo 4K HDR monitor (ColorEdge Prominence CG3146)
                                            </li>
                                            <li> Projector (TBD) (Barco)
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">VFX, CGI and 3D </div>
                                        <div class="accordian_icon">
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="accordian_content">
                                        <p>Our strong foundation is built on a vibrant and creative team of 30+ VFX/CGI
                                            artists, consistently delivering global standard projects.</p>
                                        <p>Our standards for excellence, are structured by proficiency in Rotomation,
                                            Rigging, Compositing, Lighting, and Animation, using a blend of the latest
                                            software such as After Effects, 3DS Max, Maya, and Flame.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Online Finishing & Design </div>
                                        <div class="accordian_icon">
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="accordian_content">
                                        <p>Our Flame Premium 2021 suites offer the best tools with a user-friendly
                                            interface to deliver real time 3D compositing, advanced graphics, and
                                            design.</p>
                                        <ul>
                                            <li> Autodesk Flame Premium for finishing and visual effects</li>
                                            <li> 4K workflow with integrated Quantum SAN storage</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Sound Engineering </div>
                                        <div class="accordian_icon">
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="accordian_content">
                                        <p>Galactica, our flagship sound studios offer the latest Dolby Atmos HE and 5.1
                                            certified sound facilities, all under one roof. From recording to dubbing,
                                            sound design to mix and orchestral scoring, we have it all covered.</p>
                                        <ul>
                                            <li> Dolby Atmos 7.1.4. HE and 5.1 certified Sound Studios with Avid S6 and
                                                S1 consoles, (Avid S6 M40 - 4 Fader modules and 1 master module) (7.1.4
                                                DynaAudio Acoustics Speaker System)
                                            </li>
                                            <li> Dolby RMU </li>
                                            <li> Acoustics, all designed and delivered by Munro Acoustics </li>
                                            <li> End-to-end audio post production for all formats
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Localisation</div>
                                        <div class="accordian_icon">
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="accordian_content">
                                        <p>Flexible Dolby Vision 4K HDR grading solutions with a combination of
                                            Baselight and DaVinci Resolve. Baselight Suite equipped with:</p>
                                        <ul>
                                            <li> Dubbing, Voice Over & Mixing capabilities in 60+ languages
                                            </li>
                                            <li> Subtitling </li>
                                            <li> Global network of native translators and artists</li>
                                            <li> Cloud based platform for project management
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="accordian_item fade_in">
                                    <div class="accordian_head">
                                        <div class="accordian_title">Mastering & QC</div>
                                        <div class="accordian_icon">
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="accordian_content">
                                        <p>End to End Mastering and QC services that include:</p>
                                        <ul>
                                            <li>HDR Mastering</li>
                                            <li>IMF Mastering </li>
                                            <li>DCP Mastering</li>
                                            <li>Dolby Vision Mastering</li>
                                        </ul>
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
