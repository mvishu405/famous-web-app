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
                        <h1 class="text_xxl text_700 banner_title">the famous portfolio of diverse creative solutions
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
                        @foreach ($work_categories as $workCategory)
                            <li>
                                <a href="{{ route('frontend.works.index') }}#{{ $workCategory->slug }}"
                                    data-cat=".{{ $workCategory->slug }}">{{ $workCategory->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

        <section class="img_gallary">
            <div class="container">
                <div class="row">
                    @foreach ($work_categories as $workCategory)
                        @foreach ($workCategory->works as $work)
                            <div class="col-md-6 all_cat {{ $workCategory->slug }}">
                                <a href="{{ route('frontend.works.show', ['slug' => $work->slug]) }}" class="work_listing_item fade_in">
                                    <div class="wls_inner">
                                        <div class="wls_img">
                                            <img src="{{ viewFile($work->preview_image) }}" alt="" class="img-responsive">
                                        </div>
                                        <div class="wls_cont">
                                            <h2 class="wls_title text_md text_700">{{ $work->title }}</h2>
                                            <span class="wls_cat text_xs">{{ $workCategory->name }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endforeach
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

        $(window).on("load", function() {
        var getHash = window.location.hash;
        // console.log(getHash.split('#')[1]);
        // console.log('.tab_section .service_tabs li[data-cat=".' + getHash.split('#')[1] + '"]');
        $('.tab_section .service_tabs li a[data-cat=".' + getHash.split('#')[1] + '"]').trigger('click')
    })
    </script>
@endpush
