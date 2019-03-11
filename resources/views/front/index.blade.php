@extends('layouts.templates.front')

@push('css_cdn')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('content')
<div class="lang_en">
<div class="dynamictitle"></div>
    @include('front.banner')
    @include('front.scroll_navbar')
    @include('front.page2')
    @include('front.page3')
<div class="dynamictitle"></div>
    @include('front.page4bg')
<div class="dynamictitle"></div>
    <div  id="MessageAnnouncement" class="white-cloud"></div>
    <div class="dynamictitle"></div>
    @include('front.message_announcement')
    <div  id="ContactUs" class="propImgTop2"></div>
    <div class="dynamictitle"></div>
    @include('front.map_contact_us')
    @include('front.footer')
</div>
@endsection

@push('js_cdn')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>
@endpush

@push('js')
    @include('front.google_map')
@endpush
