@extends('layouts.templates.front')

@push('css_cdn')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('content')
    <div class="lang_jp">
    <div class="dynamictitle"></div>
    @include('front_jp.banner')
    @include('front_jp.scroll_navbar')
    @include('front_jp.page2')
    @include('front_jp.page3')
    <div class="dynamictitle"></div>
    @include('front_jp.page4bg')
    <div class="dynamictitle"></div>
    <div  id="MessageAnnouncement" class="white-cloud"></div>
    <div class="dynamictitle"></div>
    @include('front_jp.message_announcement')
    <div  id="ContactUs" class="propImgTop2"></div>
    <div class="dynamictitle"></div>
    @include('front_jp.map_contact_us')
    @include('front_jp.footer')
</div>
@endsection

@push('js_cdn')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>
@endpush

@push('js')
    @include('front_jp.google_map')
@endpush
