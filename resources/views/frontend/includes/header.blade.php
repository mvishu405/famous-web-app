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
    <img src="{{ asset('img/drag_btn.png')}}" alt="" class="img-responsive" />
</div>
<div
  id="commonSliderArrowLinks"
  data-left-arrow-path="{{ asset('img/arrow_left.svg')}}"
  data-right-arrow-path="{{ asset('img/arrow_right.svg')}}"
></div>

<script>
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
      });
    });
  });
</script>

<script>
  // function toggleDropdown(arrow) {
  //   const parent = arrow.closest(".menu-item"); // Parent menu-item
  //   const submenu = parent.querySelector(".submenu"); // Dropdown menu
  //   const menuBlock = parent.closest(".menu-block"); // The menu block container
  //   const nextItem = parent.nextElementSibling; // Item directly below the dropdown

  //   // Toggle the dropdown visibility
  //   submenu.classList.toggle("open");

  //   // Toggle the arrow rotation
  //   arrow.classList.toggle("rotated");

  //   // Adjust the margin for the item directly below the dropdown
  //   if (submenu.classList.contains("open")) {
  //     submenu.style.maxHeight = submenu.scrollHeight + "px";
  //     nextItem.style.marginTop = submenu.scrollHeight + "px"; // Push only the next item
  //   } else {
  //     submenu.style.maxHeight = "0px";
  //     nextItem.style.marginTop = "0px"; // Reset margin-top when closed
  //   }
  // }
  function toggleDropdown(arrow) {
    const parent = arrow.closest(".menu-item"); // Parent menu-item
    const submenu = parent.querySelector(".submenu"); // Current submenu
    const menuBlock = document.querySelector(".menu-block"); // Entire menu block

    // Close all other open dropdowns
    const openDropdowns = menuBlock.querySelectorAll(".submenu.open");
    openDropdowns.forEach((dropdown) => {
      if (dropdown !== submenu) {
        dropdown.classList.remove("open");
        dropdown.style.maxHeight = "0px";

        const dropdownParent = dropdown.closest(".menu-item");
        const dropdownNextItem = dropdownParent.nextElementSibling;
        if (dropdownNextItem) {
          dropdownNextItem.style.marginTop = "0px"; // Reset margin for other dropdowns
        }

        // Reset rotation for arrows of other dropdowns
        const otherArrow = dropdownParent.querySelector(".dropdownArrow");
        if (otherArrow) {
          otherArrow.classList.remove("rotated");
        }
      }
    });

    // Toggle the current dropdown visibility
    submenu.classList.toggle("open");
    arrow.classList.toggle("rotated");

    // Adjust margin for the next item
    const nextItem = parent.nextElementSibling;
    if (submenu.classList.contains("open")) {
      submenu.style.maxHeight = submenu.scrollHeight + "px";
      if (nextItem) {
        nextItem.style.marginTop = submenu.scrollHeight + "px"; // Push the next item
      }
    } else {
      submenu.style.maxHeight = "0px";
      if (nextItem) {
        nextItem.style.marginTop = "0px"; // Reset margin when closed
      }
    }
  }
</script>
