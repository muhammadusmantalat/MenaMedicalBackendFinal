@extends('layout.master')

@section('title', $seo_data['title'])
@section('og_title', $seo_data['og_title'])
@section('description', $seo_data['description'])
@section('og_description', $seo_data['og_description'])
@section('keywords', $seo_data)


<style>
    .trusted-by .heading, .trusted-by small {
        display: none;
    }
    .trusted-by small + .slick-slider {
        margin-top: 0!important;
    }
</style>

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row section-devision">
                @foreach ($ManuscriptFormattingOnes as $ManuscriptFormattingOne)
                <div class="col-sm-7 px-sm-2 px-0">
                    <h4 class="primary-heading">{{ $ManuscriptFormattingOne->title }}</h4>
                    <p class="mb-0 mt-4 me-lg-3">
                        {!! nl2br(e($ManuscriptFormattingOne->description)) !!}
                    </p>
                </div>
                <div class="d-none d-sm-block col-5">
                    <img src="{{ $ManuscriptFormattingOne->image }}" class="w-100">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="section-devision">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="container-fluid">
                <h4 class="mb-lg-4 mb-3 text-center primary-heading">Pricing and Delivery Time</h4>
                <div class="mt-4 lang-table-section overflow-auto">
                    <div class="table-container">

                          <div class="p-3">
                            <p class="mb-2">
                                MENA Medical Research has a transparent pricing policy. We ensure that you are aware of our service charges and make a fully informed decision before placing an order.
                            </p>
                            <p class="mb-0">
                                Price and Delivery Time depend on the word count of your document. You can find the estimated price before submitting your request for work.
                            </p>
                            <form action="{{ url('/manuscript-formatting-service-form') }}" method="get" class="mt-3">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn theme-btn-green px-4 py-2" style="text-decoration: none;">
                                        Get Price Estimate
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- Table for big screen -->
                        {{-- <table class="d-none d-sm-block table-size">
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
                                        <a href="{{url('/manuscript-formatting-service-form')}}" style="text-decoration: none;" class="px-3 py-1 theme-btn-green">Get a Quote</a>
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
                                        <a href="{{url('/manuscript-formatting-service-form')}}" style="text-decoration: none;" class="px-3 py-1 theme-btn-green">Get a Quote</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <!-- Table for mobile screen -->
                        <table class="d-block d-sm-none table-size">
                            <thead>
                                <tr>
                                    <th colspan="3" class="px-3 py-2 head-one font-600">Price Category</th>
                                </tr>
                                <tr class="category-header header-set">
                                    <th class="py-2 text-white font-600 text-center ts-small basic-column">Price</th>
                                    <th class="text-white text-nowrap font-600 text-center ts-small advanced-column">Delivery Time</th>
                                    <th class="text-white font-600 text-center ts-small premium-column">Select Service</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3" class="text-center">
                                        Regular Price
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        USD {{ $regularPrice->less_equal_price ?? 'XXX' }}
                                    </td>
                                    <td>
                                        {{ $regularPrice->delivery_days ?? 'X' }} days
                                    </td>
                                    <td>
                                        <a href="{{url('/manuscript-formatting-service-form')}}" style="text-decoration: none;" class="text-nowrap px-2 py-1 theme-btn-green">Get a Quote</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-center">
                                    Discounted Price for Researchers & Students in MENA Region
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        USD {{ $discountedPrice->less_equal_price ?? 'XXX' }}
                                    </td>
                                    <td>
                                        {{ $discountedPrice->delivery_days ?? 'X' }} days
                                    </td>
                                    <td>
                                        <a href="{{url('/manuscript-formatting-service-form')}}" style="text-decoration: none;" class="text-nowrap px-2 py-1 theme-btn-green">Get a Quote</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <p class="m-0 mt-1 font-500 small">*Price displayed above is for up to 6,000 words. There will be a customized charge for longer documents.</p> --}}
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
</div>
<div class="py-5 grey-bg">
    @foreach($ManuscriptFormattingTwos as $ManuscriptFormattingTwo)
    @if(empty($ManuscriptFormattingTwo->title && $ManuscriptFormattingTwo->description && $ManuscriptFormattingTwo->image))
    <h4 class="mb-lg-4 mb-3 text-center primary-heading">{{ $ManuscriptFormattingTwo->main_title }}</h4>
    @endif
    @endforeach
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row mt-4 gy-5 feature-benifits-sec">
                    @foreach ($ManuscriptFormattingTwos as $ManuscriptFormattingTwo)
                    @if(empty($ManuscriptFormattingTwo->main_title))
                    <div class="col-md-6 col-12">

                        <div class="d-flex align-items-start gap-3">
                            <img src="{{ $ManuscriptFormattingTwo->image }}" alt="">
                            <div class="heading w-100">
                                <p class="mb-0 font-500">{{ $ManuscriptFormattingTwo->title }}</p>
                            </div>
                        </div>
                        <p class="mt-3 mb-0">{{ $ManuscriptFormattingTwo->description }}</p>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid section-devision">
    @foreach($ManuscriptFormattingThrees as $ManuscriptFormattingThree)
    <div class="container-fluid">
        <div class="container-fluid">
            <p class="mb-0">{!! nl2br(e($ManuscriptFormattingThree->description)) !!}</p>
        </div>
    </div>
    @endforeach
</div>
@include('common.components.commitments')
@include('common.components.faqs')
@include('common.components.trusted_by')
@endsection

@section('script')
<script></script>
@endsection
