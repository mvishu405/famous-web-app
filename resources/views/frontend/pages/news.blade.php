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
                        <p class="banner_desc">Special mentions of our range of end-to-end creative and technical services for storytellers, far and wide.</p>
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
                            <option value="">Latest</option>
                            <option value="sort_by_asc" {{ request()->has('sort_by_asc') ? 'selected' : '' }}>Oldest</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <section class="news_section">
            <div class="container">
                <div class="news_wrap">

                    @foreach ($news as $ns)
                        <div class="news_item fade_in col-md-4">
                            <a href="{{ $ns->news_link }}"
                                class="news_item_inner" target="_blank">
                                <div class="news_image">
                                    <img src="{{ viewFile($ns->preview_image) }}" alt="" class="img-responsive">
                                </div>
                                <div class="news_content">
                                    <div class="blog_header">
                                        <div class="date_min_read text_xs">
                                            <span class="date">{{ Carbon\Carbon::parse($ns->news_date)?->toFormattedDateString() }}</span>
                                            <span class="dot"></span>
                                            <span class="min_read">Work</span>
                                        </div>
                                    </div>
                                    <h2 class="blog_title text_sm">
                                        {{ strip_tags($ns->description) }}
                                    </h2>
                                </div>
                                <div class="news_source">
                                    <img src="{{ viewFile($ns->news_logo) }}" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>
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
        $('select#latest').on('change', function(e) {
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;
            //             console.log(optionSelected, valueSelected, location.protocol + '//' + location.host + location.pathname
            // );
            window.location.href = location.protocol + '//' + location.host + location.pathname + '?' +
                valueSelected;
        });
    </script>
@endpush
