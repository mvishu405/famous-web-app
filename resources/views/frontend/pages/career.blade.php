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
    <main id="careers_page" class="smooth_scroll_pages">
        <section id="inside_page_banner_section" class="without_img">
            <div class=" banner_content">
                <div class="container">
                    <div class="banner_content_inner">
                        <h1 class="text_xxl text_700 banner_title">careers
                        </h1>
                        <p class="banner_desc">Come, let's create magic together. Join us and be a part of our super
                            talented team!</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="careers_tabs_section" class="smooth_scroll_pages">
            <div class="container">
                <div class="careers_options">
                    <div class="careers_options_head">
                        <div class="careers_title active">
                            <p class="title_text text_md text_700" data-id="#producer">Line Producer (DI)</p>
                        </div>
                        <div class="careers_title">
                            <p class="title_text text_md text_700" data-id="#master">Mastering and QC Technician</p>
                        </div>
                        <div class="careers_title">
                            <p class="title_text text_md text_700" data-id="#compositor">Compositor</p>
                        </div>
                        <div class="careers_title">
                            <p class="title_text text_md text_700" data-id="#animator">Animator</p>
                        </div>
                    </div>
                    <div class="career_option_details">
                        <div class="career_desc" id="producer">
                            <div class="accordian_item">
                                <div class="accordian_head">
                                    <div class="accordian_title text_md">Line Producer (DI)</div>
                                    <div class="accordian_icon">
                                        <div class="plus"></div>
                                    </div>
                                </div>
                                <div class="accordian_content">
                                    <p><strong>Job Description:</strong></p>
                                    <ul>


                                        <li>Experience in feature film post-production required</li>
                                        <li>Experience supervising and executing feature films and OTT projects</li>
                                        <li>Team-player operating in a fast-paced, team-oriented setting</li>
                                        <li>Strong written and verbal communication skills and the ability to multi-task</li>
                                        <li>Familiar with the current trends and colour-managed workflows for HDR, 4K, and techniques, with a willingness to continue learning to ensure understanding of current production and post-production processes</li>

                                        {{-- <li>4 to 5 years’ experience in feature film post-production required.</li>
                                        <li>Must have supervised and executed feature films and OTT projects.</li>
                                        <li>Team-player who operates in a fast-paced team-oriented setting</li>
                                        <li>Strong written and verbal communication skills and the ability to
                                            multi-task.</li>
                                        <li>Familiar with the current trends and color-managed workflows for HDR, 4K,
                                            and
                                            techniques, with a willingness to continue learning to ensure understanding
                                            of
                                            current production and post-production processes.</li> --}}
                                    </ul>
                                    <p><strong> Experience: </strong>4 to 5 Years</p>
                                    <a href="#team_form_popup" class="form_btn btn_default rem_link_style">apply now</a>
                                </div>
                            </div>
                        </div>

                        <div class="career_desc" id="master">
                            <div class="accordian_item">
                                <div class="accordian_head">
                                    <div class="accordian_title text_md">Mastering and QC Technician</div>
                                    <div class="accordian_icon">
                                        <div class="plus"></div>
                                    </div>
                                </div>
                                <div class="accordian_content">
                                    <p><strong>Job Description:</strong></p>
                                    <ul>


                                        <li>Expertise in all types of video and audio codecs</li>
                                        <li>Excellence in all SD and HD formats, timecode 2K, UHD, 4K, HDR, and Dolby Vision workflows</li>
                                        <li>Expertise in any and all file-based workflows (IMF, DCP, HDR, J2K, ProRes etc.)</li>
                                        <li>Experience using Davinci Resolve and Colorfront Transkoder</li>
                                        <li>Extensive experience in Theatrical/Long format/OTT Motion Pictures</li>


                                        {{-- <li>Expertise with all types of video and audio codecs</li>
                                        <li> Excellence in all SD and HD formats, timecode 2K, UHD, 4K, HDR and Dolby
                                            Vision
                                            workflows experience.</li>
                                        <li>Expertise with any and all file-based workflows (IMF, DCP, HDR, J2K, ProRes
                                            etc.,)
                                        </li>
                                        <li>Experience using Davinci Resolve and Colorfront Transkoder</li>
                                        <li>Extensive experience in Theatrical/Long format/OTT Motion Pictures</li> --}}
                                    </ul>
                                    <p><strong> Experience: </strong>4 to 5 Years</p>
                                    <a href="#team_form_popup" class="form_btn btn_default rem_link_style">apply now</a>
                                </div>
                            </div>
                        </div>

                        <div class="career_desc" id="compositor">
                            <div class="accordian_item">
                                <div class="accordian_head">
                                    <div class="accordian_title text_md">Compositor</div>
                                    <div class="accordian_icon">
                                        <div class="plus"></div>
                                    </div>
                                </div>
                                <div class="accordian_content">
                                    <p><strong>Job Description:</strong></p>
                                    <ul>
                                        <li>Proficiency in Adobe After Effects</li>
                                    </ul>
                                    <p><strong> Experience: </strong>4 to 5 Years</p>
                                    <a href="#team_form_popup" class="form_btn btn_default rem_link_style">apply now</a>
                                </div>
                            </div>
                        </div>

                        <div class="career_desc" id="animator">
                            <div class="accordian_item">
                                <div class="accordian_head">
                                    <div class="accordian_title text_md">Animator</div>
                                    <div class="accordian_icon">
                                        <div class="plus"></div>
                                    </div>
                                </div>
                                <div class="accordian_content">
                                    <p><strong>Job Description:</strong></p>
                                    <ul>
                                        <li>Proficiency in Maya</li>
                                    </ul>
                                    <p><strong> Experience: </strong>4 to 5 Years</p>
                                    <a href="#team_form_popup" class="form_btn btn_default rem_link_style">apply now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team_form white-popup mfp-hide" id="team_form_popup">
                    <div class="form_head">
                        <h2 class="text_xl text_700 banner_title">Are you excited to be a <br> part of our team?
                        </h2>
                        <p class="banner_desc">Fill in the form below and we will reach out to you.</p>
                    </div>
                    <form action="{{ route('frontend.career.post') }}" class="join_form row" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="input-field">
                            <label for="name">name</label>
                            <input class="text_xs" name="name" type="text" required>
                        </div>
                        <div class="input-field">
                            <label for="mobile_number">mobile number</label>
                            <input class="text_xs" name="mobile_number" type="number" required>
                        </div>
                        <div class="input-field">
                            <label for="emailId">email id</label>
                            <input class="text_xs" name="emailId" type="email" required>
                        </div>
                        <div class="input-field">
                            <label for="position">position</label>
                            <input class="text_xs" name="position" type="text" required>
                        </div>
                        <div class="input-field">
                            <label for="cv">upload cv</label>
                            <input class="text_xs" name="cv" type="file" required>
                        </div>
                        <div class="input-field">
                            <label for="showreel_link">Showreel link</label>
                            <input class="text_xs" name="showreel_link" type="url" required>
                        </div>
                        <div class="input-field">
                            <label for="message">message</label>
                            <input class="text_xs" name="message" type="text" required>
                        </div>
                        <button type="submit" class="btn_default rem_link_style">send</button>
                    </form>
                    <p id="msg" style="display: none;"></p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
        integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $(".career_desc").slice(0, 1).show();
            $('.careers_title').on('click', function() {
                $('.careers_title').removeClass('active')
                $(this).addClass('active');
                $(".career_option_details .career_desc").hide();
                $($(this).find('p').attr('data-id')).show();
            })


            $('.form_btn').magnificPopup({
                type: 'inline'
            });

            //for letters only
            $.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-zA-Z][a-zA-Z ]+$/i.test(value);
            });

            //for email only
            $.validator.addMethod("emailtest", function(value, element) {
                return this.optional(element) || /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/i.test(value);
            });

            $(".join_form").validate({
                rules: {
                    name: "required",
                    mobile_number: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    emailId: "required",
                    position: "required",
                    cv: "required",
                    showreel_link: "required",
                },
                message: {
                    name: "This field is required",
                    mobile_number: {
                        required: "This field is required",
                        minlength: "Please enter a valid mobile number",
                        maxlength: "Please enter a valid mobile number",
                        digits: "Please enter a digits only"
                    },
                    emailId: "This field is required",
                    position: "This field is required",
                    cv: "This field is required",
                    showreel_link: "This field is required",
                },
                errorElement: 'span'
            })
        });


        $('.join_form').ajaxForm(function(response) {
            $("#msg").html(response.message).show();
            $(".join_form")[0].reset();
        });
    </script>
@endpush
