@extends('admin.layouts.app')

@section('content')

<data-container #default="{ data, isEdit }">
    <base-card title="聯絡我們 - 詳細內容">

        <form-groups label-class="col-lg-1" div-class="col-lg-11">

            <form-group label="姓名">
                <input type="text" id="name" class="form-control" :value="data.name" readonly>
            </form-group>

            <form-group label="電話">
                <input type="text" id="phone" :value="data.phone" readonly>
            </form-group>

            <form-group label="信箱">
                <input type="text" id="email" :value="data.email" readonly>
            </form-group>

            <form-group label="時間">
                <input type="text" id="date" :value="data.time" readonly>
            </form-group>

            <form-group label="內容">
                <textarea id="main_content" cols="30" rows="10" readonly v-text="data.main_content"></textarea>
            </form-group>

        </form-groups>

    </base-card>
</data-container>

@endsection

@push('css')

<style>
    .form-control:read-only {
        background: #f7f7f7;
    }

</style>

@endpush
