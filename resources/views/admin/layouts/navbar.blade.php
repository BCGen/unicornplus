@extends('admin.layouts.base.navbar')

@section('brand', 'Unicorn')

@section('items')

    @guest

    @else

        <li class="nav-item mr-4">
            <a class="nav-link main_link" href="/admin/banner">Banner</a>
        </li>

        <li class="nav-item mr-4">
            <a class="nav-link main_link" href="/admin/class_card">課程介紹</a>
        </li>

        <li class="nav-item mr-4">
            <a class="nav-link main_link" href="/admin/school_environment">教室環境</a>
        </li>

        <li class="nav-item mr-4">
            <a class="nav-link main_link" href="/admin/message_announcement">訊息公告</a>
        </li>

        <li class="nav-item mr-4">
                <a class="nav-link main_link" href="/admin/form_download">檔案下載</a>
            </li>

        <li class="nav-item">
            <a class="nav-link main_link" href="/admin/contact_us">聯絡我們</a>
        </li>

    @endguest

@endsection

@push('css')
    <style>
        .navbar-light .navbar-nav .nav-link {
            font-weight: 600;
        }
    </style>
@endpush
