@extends('frontend.master-layouts.master')

@section('title')
    | Blog
@endsection

@push('styles')
@endpush

@section('content')
    @include('frontend.includes.browser-upgrade')
    @include('frontend.includes.loader')
    @include('frontend.includes.header')

    {{-- Start Body Content --}}

    <!--  insert body content  -->
    <main id="blog_page" class="smooth_scroll_pages">

        <section id="inside_page_banner_section" class="without_img">
            <div class=" banner_content">
                <div class="container">
                    <div class="banner_content_inner">
                        <h1 class="text_xxl text_700 banner_title">blogs</h1>
                        <p class="banner_desc">Everything you need to know about thriving in the creative field</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog_section">
            <div class="container">
                <div class="blog_wrap row">


                    @forelse ($blogs as $blog)
                        <div class="blog_item fade_in col-md-4">
                            <div class="blog_img">
                                <img src="img/blog/blog_7.jpg" alt="" class="img-responsive">
                            </div>
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
                                {{-- <p class="blog_desc text_xs">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam
                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                    voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                                    gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p> --}}
                                <a class="continue_reading text_xs"
                                    href="{{ route('frontend.blogs.inside', ['slug' => $blog->slug]) }}">Continue Reading
                                    +</a>
                            </div>
                        </div>
                    @empty
                    @endforelse



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
