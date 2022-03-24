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
    <main id="contact_page" class="smooth_scroll_pages">
        @include('frontend.includes.contact-section')
    </main>
    <!--  end body content -->

    {{-- End Body Content --}}

    @include('frontend.includes.team-data')
    @include('frontend.includes.footer')
@endsection

@push('scripts')
    <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js">
    </script>
    <script defer>
        //for letters only
        $.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-zA-Z][a-zA-Z ]+$/i.test(value);
        });

        //for email only
        $.validator.addMethod("emailtest", function(value, element) {
            return this.optional(element) || /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/i.test(value);
        });


        $("#enquiry-form").validate({
            rules: {
                fullname: {
                    required: true,
                    lettersonly: true,
                    minlength: 2
                },
                mobile: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true
                },
                email: {
                    emailtest: true,
                    required: true,
                    email: true
                },
                message: {
                    required: true
                }
            },
            messages: {
                fullname: {
                    required: "This field is required",
                    lettersonly: "Please enter a text only"
                },
                mobile: {
                    required: "This field is required",
                    minlength: "Please enter a valid mobile number",
                    maxlength: "Please enter a valid mobile number",
                    digits: "Please enter a digits only"
                },
                email: {
                    required: "This field is required",
                    emailtest: "Please enter a valid email address"
                },
                message: {
                    required: "This field is required"
                }
            }
        });

        $("#enquiry-form").ajaxForm({
            success: function($response) {
                if ($response == 1) {
                    $('#thank-you-msg').show();
                    setTimeout(function() {
                        $('#thank-you-msg').hide();
                    }, 5000);
                }
            }
        });
    </script>
@endpush
