@extends('layout.master')

@section('title', 'Thesis Editing Service')
<style>
    .error-message {
        font-size: 0.9em;
        color: #dc3545;
        /* Bootstrap danger color */
        margin-top: 5px;
    }
</style>
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="container-fluid section-devision">
                <h4 class="primary-heading">{{ $package }} Thesis Editing Service</h4>
                <div class="row mt-4">
                    <div class="col-md-8">
                        <form action="" class="mena-form" id="createQuotationForm">
                            <div>
                                <div class="d-flex align-items-center gap-2 px-3 py-3 heading-band">
                                    <img src="{{ asset('public/assets/images/Path 328.png') }}" class="arrow">
                                    <p class="text-white m-0 font-500">STEP 1: Select a Word Count for Price Estimate and
                                        Delivery
                                        Time</p>
                                </div>
                                <p class="m-0 mt-2 mb-3 info-heading">Please select the appropriate word count category</p>
                                <div class="overflow-auto">
                                    <!-- Table for big screen -->
                                    <div class="d-none d-sm-block advance-table-container">
                                        <table>
                                            <thead>
                                                {{-- <tr>
                                                    <th colspan="3" class="header">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between px-3 py-2">
                                                            <label for="wordCount" class="font-600">Select Package</label>
                                                            <div class="d-flex align-items-center gap-3">

                                                                <select name="package_name" id="package_name">
                                                                    <option value="" disabled selected>Select Package</option>
                                                                    <option value="Advance">Advance</option>
                                                                    <option value="Premium">Premium</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </th>
                                                </tr> --}}
                                                <input type="text" value="{{ $package }}" name="package"
                                                    id="package" hidden>
                                                {{-- <tr>
                                                    <th colspan="3" class="header">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between px-3 py-2">
                                                            <label for="wordCount" class="font-600">Enter Word
                                                                Count</label>
                                                            <div class="d-flex align-items-center gap-3">

                                                                <input type="text" id="wordCount" class="py-1"
                                                                    name="words">
                                                                <button class="px-3 py-1 theme-btn-green"
                                                                    id="calculatePrice" type="button">Calculate
                                                                    Price</button>
                                                            </div>
                                                        </div>

                                                    </th>
                                                </tr> --}}
                                                <tr class="category-header">
                                                    <th class="px-3 py-2 head-one font-600">Select Price Category
                                                    </th>
                                                    <th class="text-white font-600 text-center price-column">Price</th>
                                                    <th class="text-white font-600 text-center delivery-column">Delivery
                                                        Time
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($newPrices as $data)
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input type="radio" name="price_cat"
                                                                    value="{{ $data->range }}"
                                                                    data-price="{{ $data->price }}"
                                                                    data-days="{{ $data->delivery_time }}"
                                                                    data-limit="{{ $data->limit }}">

                                                                {{ $data->range }}
                                                            </label>
                                                            <input type="hidden" name="limit" class="limit"
                                                                value="{{ $data->limit }}">
                                                        </td>
                                                        <td>USD <span class="price_display">{{ $data->price }}</span></td>
                                                        <td><span class="days_display">{{ $data->delivery_time }}</span>
                                                            days</td>
                                                    </tr>
                                                @endforeach
                                                {{-- <tr>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="price_cat" value="Regular Price">
                                                            Regular Price
                                                        </label>
                                                    </td>
                                                    <td>USD <span id="regular_price">xxx</span></td>
                                                    <td><span id="regular_price_days">XX</span> days</td>
                                                </tr>
                                                <tr class="head-one">
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="price_cat" value="Discounted Price">
                                                            Discounted Price for students and researchers in MENA Region
                                                        </label>
                                                    </td>
                                                    <td>USD <span id="discounted_price">xxx</span></td>
                                                    <td><span id="discounted_price_days">XX</span> days</td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Table for mobile screen -->
                                    <div class="d-sm-none advance-table-container">
                                        <table>
                                            <thead>
                                                {{-- <tr>
                                                    <th colspan="3" class="header">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between px-3 py-2">
                                                            <label for="wordCount" class="font-600">Select Package</label>
                                                            <div class="d-flex align-items-center gap-3">

                                                                <select name="package_name" id="package_name">
                                                                    <option value="" disabled selected>Select Package</option>
                                                                    <option value="Advance">Advance</option>
                                                                    <option value="Premium">Premium</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </th>
                                                </tr> --}}
                                                <input type="text" value="{{ $package }}" name="package"
                                                    id="package" hidden>
                                                {{-- <tr>
                                                    <th colspan="3" class="header">
                                                        <div
                                                            class="d-flex flex-column align-items-center justify-content-between px-3 py-2">
                                                            <label for="wordCount2" class="font-600">Enter Word
                                                                Count</label>
                                                            <div class="d-flex align-items-center gap-3">

                                                                <input type="text" id="wordCount2" class="py-0 w-50"
                                                                    name="words">
                                                                <button class="px-3 py-1 theme-btn-green"
                                                                    id="calculatePrice2" type="button">Calculate
                                                                    Price</button>
                                                            </div>
                                                        </div>

                                                    </th>
                                                </tr> --}}
                                                <tr class="category-header">
                                                    <th class="px-3 py-2 head-one font-600">Select Price Category
                                                    </th>
                                                    <th class="text-white font-600 text-center price-column">Price</th>
                                                    <th class="text-white font-600 text-center delivery-column">Delivery
                                                        Time
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <tr>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="price_cat" value="Regular Price">
                                                            Regular Price
                                                        </label>
                                                    </td>
                                                    <td>USD <span id="regular_price2">xxx</span></td>
                                                    <td><span id="regular_price_days2">XX</span> days</td>
                                                </tr>
                                                <tr class="head-one">
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="price_cat" value="Discounted Price">
                                                            Discounted Price for students and researchers in MENA Region
                                                        </label>
                                                    </td>
                                                    <td>USD <span id="discounted_price2">xxx</span></td>
                                                    <td><span id="discounted_price_days2">XX</span> days</td>
                                                </tr> --}}
                                                @foreach ($newPrices as $data)
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input type="radio" name="price_cat"
                                                                    value="{{ $data->range }}"
                                                                    data-price="{{ $data->price }}"
                                                                    data-days="{{ $data->delivery_time }}"
                                                                    data-limit="{{ $data->limit }}">

                                                                {{ $data->range }}
                                                            </label>
                                                            <input type="hidden" name="limit" class="limit"
                                                                value="{{ $data->limit }}">
                                                        </td>
                                                        <td>USD <span class="price_display">{{ $data->price }}</span></td>
                                                        <td><span class="days_display">{{ $data->delivery_time }}</span>
                                                            days</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p class="m-0 mt-1 font-500 small">Additional words above 6,000 words will be charged at a
                                    fix rate of USD 40 per thousand words</p>
                            </div>
                            @if ($package == 'Advance')
                                <div class="section-devision">
                                    <div class="d-flex align-items-center gap-2 px-3 py-3 heading-band">
                                        <img src="{{ asset('public/assets/images/Path 328.png') }}" class="arrow">
                                        <p class="text-white m-0 font-500">STEP 2 - Select Additional Services that you
                                            would
                                            like for this document</p>
                                    </div>
                                    <div class="overflow-auto mt-4">
                                        <div class="advance-table-container">
                                            <table id="additional_services_table">
                                                <thead>
                                                    <tr class="category-header">
                                                        <th class="px-3 py-2 head-one font-600">Select Price Category
                                                        </th>
                                                        <th class="text-white font-600 text-center price-column">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($additionalsServices as $data)
                                                        <tr>
                                                            <td>
                                                                <label>
                                                                    <input type="checkbox" name="additional_price_cat"
                                                                        value="{{ $data->additional_services }}"
                                                                        class='m-2 additional_price_check'>
                                                                    {{ $data->additional_services }}
                                                                </label>
                                                            </td>
                                                            <td>USD <span
                                                                    class="additional_price_cat_value">{{ $data->basic_package_price }}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>


                                            </table>
                                        </div>
                                    </div>
                                    <p class="m-0 mt-1 font-500 small">*Plagiarism Check and Manuscript Formatting are
                                        already included in Premium Editing service Price for Plagiarism Check and
                                        Manuscript Formatting displayed above is for up to 6,000 words. There will be a
                                        customized charge for longer documents.</p>
                                </div>
                            @endif
                            <div class="section-devision">
                                <div class="d-flex align-items-center gap-2 px-3 py-3 heading-band">
                                    <img src="{{ asset('public/assets/images/Path 328.png') }}" class="arrow">
                                    <p class="text-white m-0 font-500">STEP {{ $package == 'Advance' ? '3' : '2' }} –
                                        Upload
                                        Document</p>
                                </div>
                                <input type="file" name="file" id="uploadFile" class="d-none">
                                <div class="d-flex">
                                    <label for="uploadFile"
                                        class="d-flex align-items-center gap-2 my-4 px-3 py-2 border-0 btn rounded-0 upload-btn theme-btn-green">
                                        <img src="{{ asset('public/assets/images/upload-file-icon.png') }}" class="arrow">
                                        <p class="text-white m-0 btn-small-text font-500">UPLOAD YOUR DOCUMENT FILE</p>
                                    </label>
                                    <div class="delete-icon">
                                        <button class="btn border-0 p-0 delete-image-btn"><img class="delete-img"
                                                src="{{ asset('public/assets/images/delete.png') }}"
                                                alt=""></button>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-600">Select an option depending on your requirements</p>
                                    <div class="overflow-auto">
                                        <div class="advance-table-container remove-border">
                                            <table class="set-width">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input type="radio" name="requirement"
                                                                    value="Edit the entire document">
                                                                Edit the entire document
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input type="radio" name="requirement"
                                                                    value="Edit the highlighted sections only">
                                                                Edit the highlighted sections only <a href="#"
                                                                    class="text-decoration-none"
                                                                    style="font-size: 0.8rem">(sections should be
                                                                    highlighted in yellow)</a>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p class="font-600">Select language style</p>
                                    <div class="overflow-auto">
                                        <div class="advance-table-container remove-border">
                                            <table class="set-width">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input type="radio" name="language"
                                                                    value="British English">
                                                                British English
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input type="radio" name="language"
                                                                    value="American English">
                                                                American English
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p class="font-600">Add any additional instructions for the editor</p>
                                    <textarea name="additional_instruction" id="" cols="30" rows="4"
                                        class="container-width light-border"></textarea>
                                </div>
                            </div>
                            <div class="section-devision">
                                <div class="d-flex align-items-center gap-2 px-3 py-3 heading-band">
                                    <img src="{{ asset('public/assets/images/Path 328.png') }}" class="arrow">
                                    <p class="text-white m-0 font-500">STEP {{ $package == 'Advance' ? '4' : '3' }} –
                                        Contact Details</p>
                                </div>
                                <div class="container-width">
                                    <div class="row mt-5">
                                        <div class="col-3">
                                            <div class="w-100 shadow-none dropdown">
                                                <button class="w-100 btn shadow-none bg-white dropdown-toggle border-make"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <p class="mb-0 text-center small-text-btn">Salutation</p>
                                                    <span class="salutation">Dr.</span>
                                                    <input type="hidden" value="" name="salutation" />
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item sal-role">Dr.</a></li>
                                                    <li><a class="dropdown-item sal-role">Mr.</a></li>
                                                    <li><a class="dropdown-item sal-role">Ms.</a></li>
                                                    <li><a class="dropdown-item sal-role">Mrs.</a></li>
                                                    <li><a class="dropdown-item sal-role">Prof.</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <input type="text" class="h-100 shadow-none form-control border-make"
                                                placeholder="First name *" name="first_name">
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <input type="text"
                                            class="shadow-none form-control border-make input-field-info"
                                            placeholder="Last name *" name="last_name">
                                    </div>
                                    <div class="my-4">
                                        <input type="email"
                                            class="shadow-none form-control border-make input-field-info"
                                            placeholder="Primary email *" name="email">
                                    </div>
                                    <div class="my-4">
                                        <h6>Which category describes you the best*</h6>
                                        <select name="study_category" id="contactCategory"
                                            class="shadow-none rounded w-100 select-control border-make input-field-info">
                                            <option value="" selected disabled>Select</option>
                                            <option value="Undergraduate Student (in Bachelor Program)">Undergraduate
                                                Student (in Bachelor Program)</option>
                                            <option value="Postgraduate Student (in Master Program)">Postgraduate Student
                                                (in Master Program)</option>
                                            <option value="PhD student">PhD student</option>
                                            <option value="Researcher by profession">Researcher by profession</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <input type="text" id="otherInput" name="other_category"
                                            class="mt-3 shadow-none form-control border-make input-field-info"
                                            placeholder="Specify other category" style="display: none;">
                                    </div>
                                    <div class="my-4">
                                        <input type="text"
                                            class="shadow-none form-control border-make input-field-info"
                                            placeholder="Your University / Company Name" name="institute_name">
                                    </div>
                                    <div class="my-4">
                                        <select name="location" id="countries"
                                            class="shadow-none rounded w-100 select-control border-make input-field-info"
                                            onchange="handleOtherOption(this)">
                                            <option value="" selected disabled>I am located in *</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Palestinian Territories">Palestinian Territories</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Other">Other</option>
                                        </select>

                                        <!-- Hidden Input Field -->
                                        <div id="otherLocationContainer" style="display: none; margin-top: 10px;">
                                            <input type="text" id="otherLocationInput" name="other_location"
                                                class="shadow-none rounded w-100 select-control border-make input-field-info"
                                                placeholder="Please specify your location" />
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <input type="text"
                                            class="shadow-none form-control border-make input-field-info"
                                            placeholder="How did you hear about us? *" name="question">
                                    </div>
                                </div>
                                <div class="ms-md-4 my-4">
                                    <label class="d-flex gap-2 align-items-center">
                                        <input type="checkbox" name="news_check" checked>
                                        <p class="mb-0">I would like to receive latest news and announcements from MENA
                                            Medical Research</p>
                                    </label>
                                    <label class="mt-3 d-flex gap-2 align-items-center">
                                        <input type="radio" name="agree_check" required value="yes">
                                        <p class="mb-0">I have read and agree to MENA Medical Research’s <a
                                                href="{{ route('privacy-policy') }}"
                                                class="text-decoration-none text-blue">Privacy Policy</a>
                                            and <a href="{{ route('term-condition') }}"
                                                class="text-decoration-none text-blue">Terms of Use</a>
                                        </p>
                                    </label>
                                </div>
                            </div>
                            <div id="agreeCheck" class="alert alert-danger alert-dismissible fade show" role="alert"
                                style="display: none;">
                                <strong>Warning!</strong> You must agree to the terms and privacy policy.
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <div id="successMessage" class="alert alert-success alert-dismissible fade show"
                                role="alert" style="display: none;">
                                <strong>Success!</strong> Your order has been successfully submitted, and a confirmation
                                email has been sent to your email address.
                                The order will be reviewed by MENA Medical Research, and a final quotation will be emailed
                                to you within 24 hours.
                                In case you do not hear from us within 24 hours, please send an email to
                                <span class="text-info">info@menamedicalresearch.com</span>.
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                             <div style="position: absolute; left: -10000px; top: -10000px; height: 1px; width: 1px; overflow: hidden;">
                                <label for="contact_time">Best time to contact you</label>
                                <input type="text" name="contact_time" id="contact_time" autocomplete="off">
                            </div>
                            <!-- reCAPTCHA widget -->
                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                            <input type="button" id="submit-quotation"
                                class="d-flex align-items-center gap-2 mt-4 text-white m-0 btn-small-text font-500 px-3 py-3 border-0 upload-btn theme-btn-green"
                                value="SUBMIT REQUEST" />

                        </form>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-4">
                        @include('common.components.order_summary')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function handleOtherOption(selectElement) {
            const otherLocationContainer = document.getElementById('otherLocationContainer');
            if (selectElement.value === 'Other') {
                // Show input field when "Other" is selected
                otherLocationContainer.style.display = 'block';
            } else {
                // Hide input field for other selections
                otherLocationContainer.style.display = 'none';
            }
        }
        $(document).ready(function() {
            // Trigger AJAX request when radio button is changed
            $("input[name='price_cat']").change(function() {
                var selectedPriceCategory = $("input[name='price_cat']:checked")
                    .val(); // Get the value of the selected radio button
                console.log("Selected Price Category:", selectedPriceCategory); // Optional: For debugging
                // alert(selectedPriceCategory);
                // let price = 0;
                // let days = 0;

                // // Check which price category is selected
                // if (selectedPriceCategory === "Regular Price") {
                //     price = parseFloat($('#regular_price').text()) || 0;
                //     days = parseInt($('#regular_price_days').text()) || 0;
                // } else if (selectedPriceCategory === "Discounted Price") {
                //     price = parseFloat($('#discounted_price').text()) || 0;
                //     days = parseInt($('#discounted_price_days').text()) || 0;
                // }
                // if (price === 0 || days === 0) {
                //     toastr.error('Please Enter Approximate Word Count to Calculate Price first.');
                //     $("input[name='price_cat']").prop('checked', false);
                //     return;
                //     // Uncheck all radio buttons
                // } else {
                //     console.log(`Price: ${price}, Days: ${days}`);
                // }
                const price = parseFloat($(this).data('price')) || 0;
                const days = parseInt($(this).data('days')) || 0;

                $('#service_name').text($("#package_name").val() + ' Language Editing - ' + selectedPriceCategory);
                $('#service_price').text(price);

                // 🔽 Correctly calculate total additional service price
                let additionalTotal = 0;
                $("#additional_service_price div").each(function() {
                    const val = parseFloat($(this).text()) || 0;
                    additionalTotal += val;
                });

                // 🔽 Proper addition
                $('#estimate-price').text(price + additionalTotal);
                return;
            });
        });

        $(document).ready(function() {
            // Trigger when any checkbox in the first two groups is changed
            $("input[name='additional_price_cat']").change(function() {
                // var group1 = $("input[name='additional_price_cat']").slice(0, 2); // First 2 checkboxes
                // var group2 = $("input[name='additional_price_cat']").slice(2, 4); // Last 2 checkboxes

                // // Logic for the first group
                // group1.each(function() {
                //     if ($(this).is(":checked")) {
                //         group1.not(this).prop("checked",
                //             false); // Uncheck the other checkbox in the group
                //     }
                // });

                // // Logic for the second group
                // group2.each(function() {
                //     if ($(this).is(":checked")) {
                //         group2.not(this).prop("checked",
                //             false); // Uncheck the other checkbox in the group
                //     }
                // });

                // Trigger price update logic
                updatePrice();
            });

            function updatePrice() {
                var selectedPriceCategory = $("input[name='price_cat']:checked").val();
                if (!selectedPriceCategory) {
                    toastr.error("Please Enter Approximate Word Count to Calculate Price first");
                    $("input[name='additional_price_cat']").prop("checked", false);
                    return;
                }

                let totalPrice = 0;
                let serviceNamesHtml = "";
                let servicePricesHtml = "";

                $("input[name='additional_price_cat']:checked").each(function() {
                    var selectedElement = $(this).closest("tr");
                    var priceElement = selectedElement.find(".additional_price_cat_value");
                    var price = parseFloat(priceElement.text()) || 0;
                    var serviceName = $(this).val();

                    if (price > 0) {
                        totalPrice += price;
                        serviceNamesHtml += `<div>${serviceName} Service</div>`;
                        servicePricesHtml += `<div>${price}</div>`;
                    }
                });

                if (totalPrice === 0) {
                    toastr.error("Please select valid additional services.");
                    $("input[name='additional_price_cat']").prop("checked", false);
                    $("#additional_service_name").html("");
                    $("#additional_service_price").html("");
                    $("#estimate-price").text($("#service_price").text());
                    return;
                }

                $("#additional_service_name").html(serviceNamesHtml);
                $("#additional_service_price").html(servicePricesHtml);
                let basePrice = parseFloat($("#service_price").text()) || 0;
                $("#estimate-price").text((basePrice + totalPrice));
            }
        });


        //calculate price base of words
        $(document).on('click', '#calculatePrice, #calculatePrice2', function() {
            let priceCat = $('input[name="price_cat"]:checked').val();
            let additionalPriceCat = $('input[name="additional_price_cat"]:checked');
            let additionPriceValue = 0;
            if (additionalPriceCat.length > 0) {
                additionPriceValue = additionalPriceCat.closest('tr').find('.additional_price_cat_value')
                    .text(); // Fetch price from span
                var selectedService = additionalPriceCat.val(); // Fetch selected service from input value
                // console.log("Selected Service:", selectedService);
                // console.log("Selected Price:", additionPriceValue);
            }
            let words = $('#wordCount').val() || $('#wordCount2').val();
            if (!words) {
                toastr.error("Please Enter Approximate Word Count to Calculate Price");
                return;
            }

            var formData = new FormData();

            formData.append('words', words);
            formData.append('service_name', 'Thesis Editing Service');

            formData.append('package_name', $('#package').val());
            formData.append('additional_price', additionPriceValue);
            formData.append('additional_service', selectedService);

            // console.log(JSON.stringify(Object.fromEntries(formData.entries())));
            // return;
            // Send AJAX request
            $.ajax({
                url: '{{ route('thesisEditingService.calculatePrice') }}', // Replace with your server endpoint
                method: 'POST',
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);

                    // Iterate through the response data
                    response.forEach(function(item) {
                        // Check price category and populate the respective fields
                        if (item.price_category === "Regular Price") {
                            document.getElementById('regular_price').textContent = parseFloat(
                                item.total);
                            document.getElementById('regular_price_days').textContent = item
                                .days;
                            document.getElementById('regular_price2').textContent = parseFloat(
                                item.total);
                            document.getElementById('regular_price_days2').textContent = item
                                .days;
                        } else if (item.price_category === "Discounted Price") {
                            document.getElementById('discounted_price').textContent =
                                parseFloat(item.total);
                            document.getElementById('discounted_price_days').textContent = item
                                .days;
                            document.getElementById('discounted_price2').textContent =
                                parseFloat(item.total);
                            document.getElementById('discounted_price_days2').textContent = item
                                .days;
                        }
                    });
                },
                error: function(error) {
                    // Handle error response
                    console.error('Error:', error);
                    // alert('An error occurred. Please try again.');
                }
            });
        });
        //store quotation request
        $('#submit-quotation, .submit-quotation').on('click', function() {
              let recaptchaResponse = grecaptcha.getResponse();
                if (!recaptchaResponse) {
                    toastr.error("Please complete the reCAPTCHA");
                    return;
                }
            let priceCat = $('input[name="price_cat"]:checked').val();
            if (!priceCat) {
                toastr.error("Please Select Price Category");
                return;
            }
            var button = $(this); // Reference to the button
            var originalText = button.val(); // Store the original button text
            // Show loading text and disable the button
            button.val('Submitting...').prop('disabled', true);
            var formData = new FormData();
            formData.append('g-recaptcha-response', recaptchaResponse);
            // formData.append('words', ($('#wordCount').val()));
            // formData.append('words', ($('#createQuotationForm input[name="words"]').val()).trim());
            formData.append('price_category', ($('input[name="price_cat"]:checked').val()).trim());
            formData.append('limit', $('input[name="price_cat"]:checked').data('limit'));
            formData.append('service_name', 'Thesis Editing Service');
            formData.append('package_name', $('#package').val());
            formData.append('language', ($('#createQuotationForm input[name="language"]:checked').val() || '')
                .trim());
            formData.append('additional_instruction', ($(
                '#createQuotationForm textarea[name="additional_instruction"]').val() || '').trim());
            formData.append('salutation', ($('#createQuotationForm input[name="salutation"]').val() || '').trim());
            formData.append('first_name', ($('#createQuotationForm input[name="first_name"]').val() || '').trim());
            formData.append('last_name', ($('#createQuotationForm input[name="last_name"]').val() || '').trim());
            formData.append('email', ($('#createQuotationForm input[name="email"]').val() || '').trim());
            formData.append('institute_name', ($('#createQuotationForm input[name="institute_name"]').val() || '')
                .trim());
            formData.append('study_category', ($('#createQuotationForm select[name="study_category"]').val() ||
                '').trim());
            formData.append('other_study_category', ($('#createQuotationForm input[name="other_category"]').val() ||
                    '')
                .trim());
            formData.append('location', ($('#createQuotationForm select[name="location"]').val() || '').trim());
            formData.append('other_location', ($('#otherLocationInput').val() || '').trim());
            formData.append('question', ($('#createQuotationForm input[name="question"]').val() || '').trim());
            formData.append('news_check', $('#createQuotationForm input[name="news_check"]').is(':checked') ? '1' :
                '0');
            formData.append('agree_check', ($('#createQuotationForm input[name="agree_check"]').val()).trim());
            var priceText = $('#estimate-price').text();
            var priceValue = parseFloat(priceText.replace('$', '').trim());
            formData.append('total_price', priceValue);
            formData.append('service_price', $('#service_price').text());
            formData.append('advance_editing', ($('#advance-editing').val() || '').trim());
            formData.append('plagirism_value', ($('#plagirism-value').val() || '').trim());
            formData.append('requirement', ($('#createQuotationForm input[name="requirement"]').val() || '')
                .trim());
            formData.append('additional_service', ($('input[name="additional_price_cat"]:checked').val() || '')
                .trim());
            if ($('#package_name').val() !== 'Premium') {
                // Collect all selected services and prices
                let selectedServices = [];
                let selectedPrices = [];

                $('input[name="additional_price_cat"]:checked').each(function() {
                    let service = $(this).val().trim();
                    let price = $(this).closest('tr').find('.additional_price_cat_value').text().trim();

                    selectedServices.push(service);
                    selectedPrices.push(price);
                });

                // Append the arrays to formData
                formData.append('additional_service', JSON.stringify(selectedServices));
                formData.append('additional_service_price', JSON.stringify(selectedPrices));
            }
            // formData.append('document_type', ($('#createQuotationForm select[name="document_type"]').val() || '').trim());
            const agreeCheck = document.querySelector('input[name="agree_check"]:checked');
            if (!agreeCheck) {
                event.preventDefault();
                $('#agreeCheck').fadeIn();
                button.val(originalText).prop('disabled', false);
                return;
            }
            let fileInput = $('input[name="file"]');
            const imageFile = fileInput[0].files[0];
            if (imageFile) {
                formData.append('file', imageFile);
            } else {
                formData.append('file', '');
            }
            console.log(JSON.stringify(Object.fromEntries(formData.entries())));
            // return;
            // Send AJAX request
            $.ajax({
                url: '{{ route('thesisEditingService.submit.request') }}', // Replace with your server endpoint
                method: 'POST',
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#successMessage').fadeIn();
                    toastr.success('Your Order has been Submitted Successfully');
                    $('#createQuotationForm')[0].reset();
                    $('#createQuotationForm input[type="text"], #createQuotationForm textarea').val('');
                    $('#createQuotationForm select').prop('selectedIndex', 0);
                    $('#createQuotationForm input[type="radio"]').prop('checked', false);
                    $('#createQuotationForm input[type="checkbox"]').prop('checked', false);
                    $('#createQuotationForm input[type="file"]').val('');
                    $('#service_name').text('');
                    $('#service_price').text('');
                    $('#plagirism-value').text('');
                    $('#estimate-price').text('0'); // Reset to default value
                    $('#additional_service_name').text('');
                    $('#additional_service_price').text('');
                    $('#regular_price').text('xxx');
                    $('#regular_price_days').text('XX');
                    $('#discounted_price').text('xxx');
                    $('#discounted_price_days').text('XX');
                    $('#regular_price2').text('xxx');
                    $('#regular_price_days2').text('XX');
                    $('#discounted_price2').text('xxx');
                    $('#discounted_price_days2').text('XX');
                    // setTimeout(function() {
                    //         location.reload();
                    //     }, 2000);
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        // Clear any existing error messages
                        $('.error-message').remove();

                        // Loop through the errors and display them under the respective input fields
                        $.each(errors, function(field, messages) {
                            var inputField = $('[name="' + field + '"]');
                            if (inputField.length) {
                                inputField.after(
                                    '<span class="error-message text-danger small">' +
                                    messages[0] + '</span>');
                            }
                        });
                    } else {
                        console.error('Error Adding Driver:', xhr);
                        toastr.error('Something went wrong. Please try again.');
                    }
                },
                complete: function() {
                    // Restore the button text and re-enable it
                    button.val(originalText).prop('disabled', false);
                    grecaptcha.reset();

                }
            });
        });
        $('input, select').on('input change', function() {
            $(this).next('.error-message').remove();
        });

        function jumpToError() {
            // Find the first error message
            var firstError = $('.error-message').filter(':visible').first()

            if (firstError.length) {
                // Scroll to the first error message
                $('html, body').animate({
                    scrollTop: firstError.offset().top - 150 // Adjust offset as needed
                }, 1000); // Animation duration in milliseconds
            }
        }

        // Call the function with a delay of 1000ms (1 second) on button click
        $('#submit-quotation, .submit-quotation').on('click', function() {
            jumpToError();
            setTimeout(function() {}, 100); // Delay of 1000 milliseconds
        });
    </script>
@endsection
