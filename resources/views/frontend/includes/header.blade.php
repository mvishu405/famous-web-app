<header class="header">
    <div class="container">
        <nav class="navbar">
            <div class="header_img">
                <a href="{{ route('frontend.homepage') }}" class="brand">
                    <img src="img/Logo.svg" alt="" class="img-responsive" />
                </a>
                <a href="javascript:void(0)" class="brand">
                    <img src="img/tpn-homepage-banner-1280x640-2.png" alt="" class="img-responsive"/>
                </a>
            </div>
            <button type="button" class="burger" id="burger">
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            </button>
            <span class="overlay" id="overlay"></span>
            <div class="menu" id="menu">
                <ul class="menu-block">
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('frontend.about.index') }}">About</a>
                    </li>
                    <li class="menu-item has-dropdown">
                    <a class="menu-link">Services</a>
                    <div class="dropdownArrow" onclick="toggleDropdown(this)"></div>
                    <ul class="submenu">
                    <li><a href="{{ route('frontend.service.production') }}">Production</a></li>
                    <li>
                    <a href="{{ route('frontend.service.specialized-production') }}">Specialized Production</a>
                    </li>
                    <li><a href="{{ route('frontend.service.post-production') }}">Post Production</a></li>
                    <li><a href="{{ route('frontend.service.fhoa') }}">VFX by FHOA</a></li>
                    <li>
                    <a href="{{ route('frontend.service.shooting-event-floor') }}">Shooting Event Floor</a>
                    </li>
                    <li>
                    <a href="{{ route('frontend.service.ready-to-shoot') }}">Ready to Shoot Sets</a>
                    </li>
                    <li>
                    <a href="{{ route('frontend.service.fwc') }}">Famous Working Company</a>
                    </li>
                    </ul>
                    </li>
                                <li class="menu-item has-dropdown">
                        <a class="menu-link" href="{{ route('frontend.works.index') }}">Work</a>
                        <div class="dropdownArrow" onclick="toggleDropdown(this)"></div>
                    <?php
    use App\Models\WorkCategory;

   $work_categories = WorkCategory::whereNotNull('published_at')->orderBy('order_column', 'asc')->get();
          ?>
          <ul class="submenu">
            @if(!empty($work_categories))
    @foreach ($work_categories as $category)
        <li><a href="{{ route('frontend.works.index') }}#{{ $category->slug }}">{{ $category->name }}</a></li>
        @endforeach
        @endif
</ul>
                    </li>
                   
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('frontend.blogs.index') }}">Blogs</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('frontend.news.index') }}">News</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('frontend.career.index') }}">Careers</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('frontend.contact.index') }}">Connect</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="dragCursor">
    <img src="img/drag_btn.png" alt="" class="img-responsive" />
</div>
