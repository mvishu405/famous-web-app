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
                <a href="{{ route('frontend.works.index') }}" class="back_btn_inner">
                    <img src="img/work_inside/right-arrow.svg" alt="">
                    <span class="back_text text_xs text_500">Back</span>
                </a>
            </div>

            <section class="work_inside_inner">

                <section class="work_video">
                    <div class="">
                        <div class="work_text">
                            <h2 class="text_lg text_600">{{ $work->sub_title }}</h2>
                            <ul>
                                <li class="text_xs"><span
                                        class="dot"></span>{{ $work->workCategory->name }}</li>
                            </ul>
                        </div>
                        <a href="{{ $work->inside_video_link }}" class="work_video_play iframe_popup">
                            <img src="{{ viewFile($work->inside_image) }}" alt="" class="img-responsive work_video_img">
                            @isset($work->inside_video_link)
                                <div class="play_button">
                                    <img src="img/play_icon.svg" alt="" class="img-responsive">
                                </div>
                            @endisset
                        </a>
                    </div>
                </section>

                <section class="work_brief">
                    <div class="">
                        <div class="work_brief_inner">
                            {!! $work->description !!}
                        </div>
                    </div>
                </section>

                @isset($work->before_image)
                    <section class="twenty_slider">
                        <div class="">
                            <div id="container1" class='twentytwenty-container'>
                                <img src="{{ viewFile($work->before_image) }}">
                                <img src="{{ viewFile($work->after_image) }}">
                            </div>
                        </div>
                    </section>
                @endisset

            </section>
        </div>



        {{-- <section class="img_slider section_spacing">
            <div class="work_listing_slider_wrap">
                <div class="work_listing_slider addDragCursor">


                    @foreach ($work->galleryImages as $gi)
                        <div class="work_listing_item">
                            <div class="wls_inner">
                                <div class="wls_img">
                                    <img src="img/home/work-placeholder.jpg" alt="" class="placeholder_img img-responsive">
                                    <div class="wls_actual">
                                        <img src="{{ viewFile($gi->image) }}" alt="" class="img-responsive">
                                    </div>
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
            </div>
        </section> --}}

        <section class="other_projects section_spacing">
            <h2 class="section_title text_center">other projects</h2>
            <div class="other_project_slider_wrap">
                <div class="other_project_slider addDragCursor">

                    @foreach ($related_works as $relatedWork)
                        <div class="work_listing_item">
                            <a class="wls_inner" href="{{ route('frontend.works.show', ['slug' => $relatedWork->slug]) }}">
                                <div class="wls_img">
                                    <img src="{{ viewFile($relatedWork->preview_image) }}" alt="" class="img-responsive">
                                </div>
                                <div class="wls_cont">
                                    <h2 class="wls_title text_md text_700">{{ $relatedWork->title }}</h2>
                                    <span class="wls_cat text_xs">{{ $relatedWork->workCategory->name }}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach

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
