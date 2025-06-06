@extends('layout.master')

@section('title', $seo_data['title'])
@section('og_title', $seo_data['og_title'])
@section('description', $seo_data['description'])
@section('og_description', $seo_data['og_description'])
@section('keywords', $seo_data)

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row section-devision">
                @foreach($ThesisEditingServiceOnes as $ThesisEditingServiceOne)
                <div class="col-sm-7 px-sm-2 px-0">
                    <h4 class="primary-heading">{{ $ThesisEditingServiceOne->title }}</h4>
                    <p class="mb-0 mt-4">
                        {!! nl2br(e($ThesisEditingServiceOne->description)) !!}
                    </p>
                    <ul class="mt-4 primary-heading listing-margin">
                        @foreach(explode("\n", $ThesisEditingServiceOne->link_text) as $link_text)
                        <li>{{ $link_text }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="d-none d-sm-block col-5">
                    <img src="{{ $ThesisEditingServiceOne->image }}" class="w-100 px-4 py-2 thesis-hero-image-section">
                </div>
                @endforeach
            </div>
            <div class="section-devision">
                @foreach($ThesisEditingServiceTwos as $ThesisEditingServiceTwo)
                <h4 class="primary-heading">{{ $ThesisEditingServiceTwo->feature_title }}</h4>
                <ul class="mt-4 listing-margin">
                    @foreach(explode("\n", $ThesisEditingServiceTwo->feature) as $feature)
                    <li>{{ $feature }}</li>
                    @endforeach
                    <h6 class="my-3 heading">{{ $ThesisEditingServiceTwo->service_title }}</h6>
                    @foreach(explode("\n", $ThesisEditingServiceTwo->service) as $service)
                    <li>{{ $service }}</li>
                    @endforeach
                </ul>
                @endforeach
            </div>
            <div class="section-devision">
                @foreach($ThesisEditingServiceThrees as $ThesisEditingServiceThree)
                <h4 class="primary-heading">{{ $ThesisEditingServiceThree->feature_title }}</h4>
                <ul class="mt-4 listing-margin">
                    @foreach(explode("\n", $ThesisEditingServiceThree->feature) as $feature)
                    <li>{{ $feature }}</li>
                    @endforeach
                    <h6 class="my-3 heading">{{ $ThesisEditingServiceThree->service_title }}</h6>
                    @foreach(explode("\n", $ThesisEditingServiceThree->service) as $service)
                    <li>{{ $service }}</li>
                @endforeach
                </ul>
                @endforeach
            </div>
            <div class="section-devision">
                <div class="overflow-auto lang-table-section">
                    <!-- Table for big screen -->
                    <table class="d-none d-sm-block edit-table">
                        <thead>
                            <tr class="table-heading">
                                <th class="py-2 px-3 large-column">Editing Components</th>
                                <th class="heading-two">Advanced Editing</th>
                                <th class="heading-three">Premium Editing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-3 large-column">Spelling, Punctuation, and Grammar check</td>
                                <td class="text-center">
                                    <img src="{{ asset('public/assets/images/Path 21.png') }}" class="tick-cross">
                                </td>
                                <td class="text-center"><img src="{{ asset('public/assets/images/Path 21.png') }}"
                                        class="tick-cross"></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-3 large-column">Sentence Structure, Flow, and Clarity of text</td>
                                <td class="text-center">
                                    <img src="{{ asset('public/assets/images/Path 21.png') }}" class="tick-cross">
                                </td>
                                <td class="text-center"><img src="{{ asset('public/assets/images/Path 21.png') }}"
                                        class="tick-cross"></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-3 large-column">Plagiarism check by iThenticate</td>
                                <td class="text-center">
                                    <img src="{{ asset('public/assets/images/Path 21.png') }}" class="tick-cross">
                                </td>
                                <td class="text-center"><img src="{{ asset('public/assets/images/Path 21.png') }}"
                                        class="tick-cross"></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-3 large-column">Formatting - Page layout, Table of Content, heading, numbering, etc*</td>
                                <td class="text-center">
                                    <img src="{{ asset('public/assets/images/Path 23.png') }}" class="tick-cross">
                                </td>
                                <td class="text-center"><img src="{{ asset('public/assets/images/Path 21.png') }}"
                                        class="tick-cross"></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-3 large-column">References Formatting *</td>
                                <td class="text-center">
                                    <img src="{{ asset('public/assets/images/Path 23.png') }}" class="tick-cross">
                                </td>
                                <td class="text-center"><img src="{{ asset('public/assets/images/Path 21.png') }}"
                                        class="tick-cross"></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-3 large-column">Expert comments on thesis/assignment improvement</td>
                                <td class="text-center">
                                    <img src="{{ asset('public/assets/images/Path 23.png') }}" class="tick-cross">
                                </td>
                                <td class="text-center"><img src="{{ asset('public/assets/images/Path 21.png') }}"
                                        class="tick-cross"></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-3 large-column">Revision and Re-edits ( one round only)</td>
                                <td class="text-center">
                                    <img src="{{ asset('public/assets/images/Path 23.png') }}" class="tick-cross">
                                </td>
                                <td class="text-center"><img src="{{ asset('public/assets/images/Path 21.png') }}"
                                        class="tick-cross"></td>
                            </tr>
                             <tr>
                                <td class="py-2 px-3 large-column"></td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ url('/thesis-editing-service-form/Advance') }}"
                                            class="btn theme-btn-green w-100 m-1"
                                            style="text-decoration: none; max-width: 180px;">Select</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ url('/thesis-editing-service-form/Premium') }}"
                                            class="btn theme-btn-green w-100 m-1"
                                            style="text-decoration: none; max-width: 180px;">Select</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Table for big screen -->
                    <table class="d-sm-none edit-table">
                        <thead>
                            <tr>
                                <th colspan="2" class="px-3 py-2 head-one font-600">Editing Components</th>
                            </tr>
                            <tr class="table-heading">
                                <th class="py-2 ts-small heading-two">Advanced Editing</th>
                                <th class="ts-small heading-three">Premium Editing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2" class="text-center py-2">Spelling, Punctuation, and Grammar check</td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('public/assets/images/Path 21.png') }}" class="tick-cross">
                                </td>
                                <td class="text-center py-2"><img src="{{ asset('public/assets/images/Path 21.png') }}"
                                        class="tick-cross"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center py-2">Sentence Structure, Flow, and Clarity of text</td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('public/assets/images/Path 21.png') }}" class="tick-cross">
                                </td>
                                <td class="text-center py-2"><img src="{{ asset('public/assets/images/Path 21.png') }}"
                                        class="tick-cross"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center py-2">Plagiarism check by iThenticate</td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('public/assets/images/Path 21.png') }}" class="tick-cross">
                                </td>
                                <td class="text-center py-2"><img src="{{ asset('public/assets/images/Path 21.png') }}"
                                        class="tick-cross"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center py-2">Formatting - Page layout, Table of Content, heading, numbering, etc*</td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('public/assets/images/Path 23.png') }}" class="tick-cross">
                                </td>
                                <td class="text-center py-2"><img src="{{ asset('public/assets/images/Path 21.png') }}"
                                        class="tick-cross"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center py-2">References Formatting *</td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('public/assets/images/Path 23.png') }}" class="tick-cross">
                                </td>
                                <td class="text-center py-2"><img src="{{ asset('public/assets/images/Path 21.png') }}"
                                        class="tick-cross"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center py-2">Expert comments on thesis/assignment improvement</td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('public/assets/images/Path 23.png') }}" class="tick-cross">
                                </td>
                                <td class="text-center py-2"><img src="{{ asset('public/assets/images/Path 21.png') }}"
                                        class="tick-cross"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="py-2 text-center">Revision and Re-edits ( one round only)</td>
                            </tr>
                            <tr>
                                <td class="text-center py-2">
                                    <img src="{{ asset('public/assets/images/Path 23.png') }}" class="tick-cross">
                                </td>
                                <td class="text-center"><img src="{{ asset('public/assets/images/Path 21.png') }}"
                                        class="tick-cross"></td>
                            </tr>
                            <tr>
                                {{-- <td class="text-center small py-2"></td> --}}
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ url('/thesis-editing-service-form/Advance') }}"
                                            class="btn theme-btn-green w-100 m-1"
                                            style="text-decoration: none; max-width: 180px;">Select</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ url('/thesis-editing-service-form/Premium') }}"
                                            class="btn theme-btn-green w-100 m-1"
                                            style="text-decoration: none; max-width: 180px;">Select</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="m-0 mt-1 font-500 small">*You can also request Plagarism Check and/or Manuscript Formating in the Advanced Editing package at an additional charge.</p>
                </div>
            </div>
            {{-- <div class="section-devision">
                <div class="mt-4 lang-table-section overflow-auto">
                    <div class="table-container">
                        <table class="table-size">
                            <thead>
                                <tr class="category-header header-set">
                                    <th class="px-3 py-2 head-one font-600">Price Category</th>
                                    <th class="px-3 py-2 text-white font-600 text-center basic-column">Price</th>
                                    <th class="px-3 py-2 text-white font-600 text-center advanced-column">Delivery Time</th>
                                    <th class="text-white font-600 text-center premium-column">Select Service</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="t-line">
                                        Regular Price
                                    </td>
                                    <td>
                                        USD {{ $regularPrice->less_equal_price ?? 'XXX' }}
                                    </td>
                                    <td>
                                        {{ $regularPrice->delivery_days ?? 'X' }} days
                                    </td>
                                    <td>
                                        <a href="{{url('/thesis-editing-service-form')}}" style="text-decoration: none" class="px-3 py-1 theme-btn-green">Get a Quote</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="t-line">
                                        Discounted Price for Researchers & Students in MENA Region
                                    </td>
                                    <td>
                                        USD {{ $discountedPrice->less_equal_price ?? 'XXX' }}
                                    </td>
                                    <td>
                                        {{ $discountedPrice->delivery_days ?? 'X' }} days
                                    </td>
                                    <td>
                                        <a href="{{url('/thesis-editing-service-form')}}" style="text-decoration: none" class="px-3 py-1 theme-btn-green">Get a Quote</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="m-0 mt-1 font-500 small">*Days shown above are working days</p>
                    </div>
                </div>
            </div> --}}
            <div class="section-devision">
                <h4 class="mb-lg-4 mb-3 text-center primary-heading">Pricing and Delivery Time</h4>
                <div class="mt-2 lang-table-section overflow-auto">
                    <div class="table-container">
                                <div class="p-3">
                                    <p class="mb-2">
                                        MENA Medical Research has a transparent pricing policy. We ensure that you are aware of our service charges and make a fully informed decision before placing an order.
                                    </p>
                                    <p class="mb-0">
                                        Price and Delivery Time for thesis editing service depend on the level of service required (Advanced or Premium) and the word count of your document. You can select the required service to find the estimated price, before submitting your request for work.
                                    </p>
                                </div>

                        <!-- Table for big screen -->
                        {{-- <table class="d-none d-sm-block table-size">
                            <thead>
                                <tr>
                                    <th colspan="4" class="header">
                                        <div class="d-flex align-items-center justify-content-between px-3 py-2">
                                            <label for="wordCount" class="font-600">Enter Word
                                                Count</label>
                                            <div class="d-flex align-items-center gap-3">
                                                <input type="text" id="wordCount" class="py-1" name="words">
                                                <button class="px-3 py-1 theme-btn-green" id="showPrice">Calculate
                                                    Price</button>
                                            </div>
                                        </div>

                                    </th>
                                </tr>
                                <tr class="category-header">
                                    <th class="px-3 py-2 head-one font-600">Price</th>
                                    <th class="text-white font-600 text-center advanced-column">Advanced Editing
                                    </th>
                                    <th class="text-white font-600 text-center premium-column">Premium Editing
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="t-line">
                                        Reference Check
                                    </td>
                                    <td id="regular-advance">USD xxx in XX days</td>
                                    <td id="regular-premium">USD xxx in XX days</td>
                                </tr>
                                <tr>
                                    <td class="t-line">
                                        Discounted Price for Researchers & Students in MENA Region
                                    </td>
                                    <td id="discounted-advance">USD xxx in XX days</td>
                                    <td id="discounted-premium">USD xxx in XX days</td>
                                </tr>
                                <tr class="bg-white">
                                    <td>

                                    </td>

                                    <td><a href="{{ url('/thesis-editing-service-form/Advance') }}"
                                            class="px-3 py-1 theme-btn-green" style="text-decoration: none;">Get a
                                            Quote</a></td>
                                    <td><a href="{{ url('/thesis-editing-service-form/Premium') }}"
                                            class="px-3 py-1 theme-btn-green" style="text-decoration: none;">Get a
                                            Quote</a></td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Table for small screen -->
                        <table class="d-block d-sm-none table-size">
                            <thead>
                                <tr>
                                    <th colspan="4" class="header">
                                        <div class="d-flex flex-column align-items-center justify-content-between px-3 py-2">
                                            <label for="wordCount2" class="font-600">Enter Word
                                                Count</label>
                                            <div class="d-flex align-items-center gap-3">
                                                <input type="text" id="wordCount2" class="py-0 w-50" name="words">
                                                <button style="font-size: 0.9rem;" class="px-2 py-1 theme-btn-green"
                                                        id="showPrice2">Calculate
                                                        Price</button>
                                            </div>
                                        </div>

                                    </th>
                                </tr>
                                <tr>
                                    <th colspan="3" class="px-3 py-2 head-one font-600">Price</th>
                                </tr>
                                <tr class="category-header">
                                    <th class="py-2 text-white font-600 text-center ts-small advanced-column">Advanced Editing
                                    </th>
                                    <th class="text-white font-600 text-center ts-small premium-column">Premium Editing
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3" class="text-center">
                                        Reference Check
                                    </td>
                                </tr>
                                <tr>
                                    <td id="regular-advance2">USD xxx in XX days</td>
                                    <td id="regular-premium2">USD xxx in XX days</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-center">
                                    Discounted Price for Researchers & Students in MENA Region
                                    </td>
                                </tr>
                                <tr>
                                    <td id="discounted-advance2">USD xxx in XX days</td>
                                    <td id="discounted-premium2">USD xxx in XX days</td>
                                </tr>
                                <tr class="bg-white">

                                    <td><a href="{{ url('/thesis-editing-service-form/Advance') }}"
                                            class="px-3 py-1 theme-btn-green" style="text-decoration: none;">Get a
                                            Quote</a></td>
                                    <td><a href="{{ url('/thesis-editing-service-form/Premium') }}"
                                            class="px-3 py-1 theme-btn-green" style="text-decoration: none;">Get a
                                            Quote</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="m-0 mt-1 font-500 small">*Days shown above are working days</p> --}}
                    </div>
                </div>
            </div>
            <div class="section-devision">
                <h4 class="mb-lg-4 mb-3 text-center primary-heading">Additional Services for Advanced Editing (if required)</h4>
                <div class="mt-4 lang-table-section overflow-auto">
                    <div class="table-container">
                        <!-- Table for desktop, laptop & tablets screens -->
                        <table class="table-size table-d-l">
                            <thead>
                                <tr class="category-header header-set">
                                    <th class="px-3 py-2 head-one font-600">Service</th>
                                    <th class="px-3 py-2 text-white font-600 text-center basic-column">Price</th>
                                    {{-- <th class="px-3 py-2 text-white font-600 text-center advanced-column">Delivery Time</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($additionalsServices as $additionalService)
                                <tr>
                                    <td class="t-line">
                                        {{$additionalService->additional_services}}
                                    </td>
                                    <td>USD {{$additionalService->basic_package_price}}</td>
                                    {{-- <td><a href="{{url('/thesis-editing-service-form/Advance')}}" style="text-decoration: none" class="px-3 py-1 theme-btn-green">Get a Quote</a></td> --}}
                                </tr>
                                @endforeach
                                {{-- <tr>
                                    <td class="t-line">
                                        Manuscript Formatting of thesis- Discounted price for MENA students
                                    </td>
                                    <td>USD 120</td>
                                    <td><button class="px-3 py-1 theme-btn-green">Get a Quote</button></td>
                                </tr> --}}
                            </tbody>
                        </table>

                        <!-- Table for mobile screens -->
                        <table class="d-block d-sm-none table-size">
                            <thead>
                                <tr>
                                    <th colspan="3" class="px-3 py-2 head-one font-600">Service</th>
                                </tr>
                                <tr class="category-header header-set">
                                    <th class="px-3 py-2 text-white font-600 text-center ts-small basic-column">Price</th>
                                    {{-- <th class="px-3 py-2 text-white font-600 text-center ts-small advanced-column">Delivery Time</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($additionalsServices as $additionalService)
                                <tr>
                                    <td colspan="3" class="text-center">
                                        {{$additionalService->additional_services}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>USD {{$additionalService->basic_package_price}}</td>
                                    {{-- <td><a href="{{url('/thesis-editing-service-form/Advance')}}" style="text-decoration: none" class="px-3 py-1 theme-btn-green">Get a Quote</a></td> --}}
                                </tr>
                                @endforeach
                                {{-- <tr>
                                    <td class="t-line">
                                        Manuscript Formatting of thesis- Discounted price for MENA students
                                    </td>
                                    <td>USD 120</td>
                                    <td><button class="px-3 py-1 theme-btn-green">Get a Quote</button></td>
                                </tr> --}}
                            </tbody>
                        </table>
                        <p class="m-0 mt-1 font-500 small">*Price for Manuscript Formatting displayed above is for up to 10,000 words. There will be a customized charge for longer documents. Price for Manuscript Formatting is already included in Premium Editing service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="section-devision">
                @foreach ($HomeSectionFours as $HomeSectionFour)
                    <h4 class="text-center mb-lg-5 mb-3 primary-heading">{{ $HomeSectionFour->main_title }}</h4>
                @endforeach
                <div class="container-fluid">
                    <div class="d-flex justify-content-lg-center justify-content-center gap-3 gap-md-0 flex-wrap work-section">
                        @php
                            // Filter only valid items (with title, image, and description)
                            $filteredItems = $HomeSectionFours->filter(function ($item) {
                                return !empty($item->title) && !empty($item->image) && !empty($item->description);
                            });
                            $filteredItems = $filteredItems->values(); // Reindex array for accurate loop indexing
                        @endphp

                        @foreach ($filteredItems as $index => $item)
                            <div class="d-flex flex-column align-items-center gap-3 work-section-item">
                                <img src="{{ $item->image }}" alt="">
                                <div class="text-center content">
                                    <h6>{{ $item->title }}</h6>
                                    <p class="m-0 mt-3">{{ $item->description }}</p>
                                </div>
                            </div>
                            <!-- Only show the arrow if it's not the last item -->
                            @if ($index < $filteredItems->count() - 1)
                                <div class="d-sm-block d-none">
                                    <img src="{{ asset('public/assets/images/arrow.png') }}" alt="" class="arrow">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('common.components.commitments')
@include('common.components.faqs')
@include('common.components.trusted_by')
@endsection

@section('script')
<script></script>
<script>
    $(document).on('click', '#showPrice', function() {
        let words = $("#wordCount").val();
        if (!words) {
            toastr.error("Please Enter Approximate Word Count to Calculate Price");
            return;
        }
        var formData = new FormData();
        formData.append('service_name', 'Thesis Editing Service');
        formData.append('words', words);
        console.log(JSON.stringify(Object.fromEntries(formData.entries())));

        $.ajax({
            url: '{{ route('showPackagePrices') }}', // Replace with your server endpoint
            method: 'POST',
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}',
            },
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                    // Separate data by price category
                    var regularPackages = response.filter(function(item) {
                        return item.price_category === "Regular";
                    });
                    var discountedPackages = response.filter(function(item) {
                        return item.price_category === "Discounted";
                    });

                    // Update regular prices
                    $('#regular-advance').text('USD ' + regularPackages.find(function(p) {
                            return p.package_name === 'Advance';
                        }).calculated_price +
                        ' in ' + regularPackages.find(function(p) {
                            return p.package_name === 'Advance';
                        }).delivery_days + ' days');
                    $('#regular-premium').text('USD ' + regularPackages.find(function(p) {
                            return p.package_name === 'Premium';
                        }).calculated_price +
                        ' in ' + regularPackages.find(function(p) {
                            return p.package_name === 'Premium';
                        }).delivery_days + ' days');

                    // Update discounted prices

                    $('#discounted-advance').text('USD ' + discountedPackages.find(function(p) {
                            return p.package_name === 'Advance';
                        }).calculated_price +
                        ' in ' + discountedPackages.find(function(p) {
                            return p.package_name === 'Advance';
                        }).delivery_days + ' days');
                    $('#discounted-premium').text('USD ' + discountedPackages.find(function(p) {
                            return p.package_name === 'Premium';
                        }).calculated_price +
                        ' in ' + discountedPackages.find(function(p) {
                            return p.package_name === 'Premium';
                        }).delivery_days + ' days');
                },

            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    });

    $(document).on('click', '#showPrice2', function() {
        let words = $("#wordCount2").val();
        if (!words) {
            toastr.error("Please Enter Approximate Word Count to Calculate Price");
            return;
        }
        var formData = new FormData();
        formData.append('service_name', 'Thesis Editing Service');
        formData.append('words', words);
        console.log(JSON.stringify(Object.fromEntries(formData.entries())));

        $.ajax({
            url: '{{ route('showPackagePrices') }}', // Replace with your server endpoint
            method: 'POST',
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}',
            },
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Separate data by price category
                var regularPackages = response.filter(function(item) {
                    return item.price_category === "Regular";
                });
                var discountedPackages = response.filter(function(item) {
                    return item.price_category === "Discounted";
                });

                // Update regular prices
                $('#regular-advance2').text('USD ' + regularPackages.find(function(p) {
                        return p.package_name === 'Advance';
                    }).calculated_price +
                    ' in ' + regularPackages.find(function(p) {
                        return p.package_name === 'Advance';
                    }).delivery_days + ' days');
                $('#regular-premium2').text('USD ' + regularPackages.find(function(p) {
                        return p.package_name === 'Premium';
                    }).calculated_price +
                    ' in ' + regularPackages.find(function(p) {
                        return p.package_name === 'Premium';
                    }).delivery_days + ' days');

                // Update discounted prices
                $('#discounted-advance2').text('USD ' + discountedPackages.find(function(p) {
                        return p.package_name === 'Advance';
                    }).calculated_price +
                    ' in ' + discountedPackages.find(function(p) {
                        return p.package_name === 'Advance';
                    }).delivery_days + ' days');
                $('#discounted-premium2').text('USD ' + discountedPackages.find(function(p) {
                        return p.package_name === 'Premium';
                    }).calculated_price +
                    ' in ' + discountedPackages.find(function(p) {
                        return p.package_name === 'Premium';
                    }).delivery_days + ' days');
            },

            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    });
</script>
@endsection
