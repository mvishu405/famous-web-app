<section id="get_in_touch_section">
    <div class="container">
        <h2 class="section_title">get in touch!</h2>
        <div class="location_form_wrap row no_marg">
            <div class="location_wrap col-xs-12 col-sm-6 col-md-6">
                <div class="location_heads">
                    <div class="location_head_item active" data-tab="#tab_1">
                        <p class="text_sm">Mahahlaxmi (HQ)</p>
                    </div>

                    <div class="location_head_item " data-tab="#tab_2">
                        <p class="text_sm">Santacruz</p>
                    </div>
                    <div class="location_head_item" data-tab="#tab_3">
                        <p class="text_sm">Andheri</p>
                    </div>
                    <!-- <div class="location_head_item" data-tab="#tab_4">
                        <p class="text_sm">Hyderabad</p>
                    </div> -->
                </div>
                <div class="location_details">
                    <div class="location_detail_item active" id="tab_1">
                        <div class="ldi_item">
                            <div class="ldi_item_inner">
                                <h2 class="ldi_title text_xs">Address</h2>
                                <p class="ldi_cont">
                                    <strong>Famous Cine Building, </strong>
                                    20 Dr E Moses Road, <br />
                                    Mahalaxmi,  Mumbai - 400 011
                                </p>
                            </div>
                        </div>
                        <div class="ldi_item">
                            <div class="ldi_item_inner">
                                <h2 class="ldi_title text_xs">Email Id</h2>
                                <p class="ldi_cont">
                                    <a href="mailto:info@famousstudios.com">info@famousstudios.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="ldi_item">
                            <div class="ldi_item_inner">
                                <h2 class="ldi_title text_xs">Phone No.</h2>
                                <p class="ldi_cont">
                                    <a href="tel:02261531111">022 6153 1111</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="location_detail_item" id="tab_2">
                        <div class="ldi_item">
                            <div class="ldi_item_inner">
                                <h2 class="ldi_title text_xs">Address</h2>
                                <p class="ldi_cont">
                                <strong
                                >Famous House of Artists (FHOA), Famous Studios</strong
                                >
                                Span Center, 45-A, 6th Floor, <br />
                                Linking Rd, Santacruz (W),<br />
                                Mumbai-400054
                                </p>
                                <br />
                                <h2 class="ldi_title text_xs">Phone No.</h2>
                                <p class="ldi_cont">
                                    <a href="tel:022 6232 6000">022 6232 6000</a>
                                </p>
                            </div>
                            <!-- <div class="ldi_item_inner">
                            <p class="ldi_cont">
                                <strong
                                >Famous House of Artists (FHOA), Famous Studios</strong
                                >
                                Span Center, 45-A, 6th Floor, <br />
                                Linking Rd, Santacruz (W),<br />
                                Mumbai-400054
                                </p>
                                <br />
                                <h2 class="ldi_title text_xs">Phone No.</h2>
                                <p class="ldi_cont">
                                    <a href="tel:022 6153 7475">022 6153 7475</a>
                                </p>
                            </div> -->
                        </div>
                        <div class="ldi_item">
                            <div class="ldi_item_inner">
                                <h2 class="ldi_title text_xs">Email Id</h2>
                                <p class="ldi_cont">
                                    <a href="mailto:info@famousstudios.com">info@famousstudios.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="location_detail_item" id="tab_3">
                        <div class="ldi_item">
                            <div class="ldi_item_inner">
                                <h2 class="ldi_title text_xs">Address</h2>
                                <p class="ldi_cont">
                                <!-- <strong>Famous Digital Studios </strong> -->
                                7th Floor, Blue Wave Building, <br />
                                Off New Link Road, <br />Veera Desai Industrial Estate,<br />
                                Andheri West, Mumbai, <br />
                                Maharashtra - 400053
                                </p>
                                <br />
                                <h2 class="ldi_title text_xs">Phone No.</h2>
                                <p class="ldi_cont">
                                    <a href="tel:02269522000">022 69522000</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="location_detail_item" id="tab_4">
                        <div class="ldi_item">
                        <div class="ldi_item_inner">
                            <h2 class="ldi_title text_xs">Address</h2>
                        <p class="ldi_cont">
                        <!-- <strong>Famous Digital Studios </strong> -->
                        7th Floor, Blue Wave Building, <br />
                        Off New Link Road, <br />Veera Desai Industrial Estate,<br />
                        Andheri West, Mumbai, <br />
                        Maharashtra - 400053
                        </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="location_form col-xs-12 col-md-6">
                <form class="connect_form" method="POST" action="{{ route('frontend.contact.post') }}">
                    @csrf
                    <div class="input-field">
                        <label for="name">name</label>
                        <input class="text_xs" name="name" type="text" required />
                    </div>
                    <div class="input-field">
                        <label for="mobile_number">mobile number</label>
                        <input class="text_xs" name="mobile_number" type="number" required />
                    </div>
                    <div class="input-field">
                        <label for="emailId">email id</label>
                        <input class="text_xs" name="emailId" type="email" required />
                    </div>
                    <div class="input-field">
                        <label for="message">message</label>
                        <input class="text_xs" name="message" type="text" />
                    </div>
                    <button type="submit" class="btn_default rem_link_style">
                        submit
                    </button>
                </form>
                <p id="msg" style="display: none;"></p>
            </div>
        </div>
    </div>
</section>


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
    integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function() {

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

    $(".connect_form").validate({
        rules: {
            name: "required",
            mobile_number: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10
            },
            emailId: "required",
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
        },
        errorElement: 'span'
    });


    $('.connect_form').ajaxForm(function(response) {
        $("#msg").html(response.message).show();
        $(".connect_form")[0].reset();
    });

});
</script>
@endpush