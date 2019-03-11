@if (isset($item->image_url))
    <div class="form-group row show_image">

        <label class="col-lg-12 col-form-label" for="{{ $id ?? "upload_image" }}">
            {{ $label ?? "當前圖片" }}
        </label>

        <div class="col-12 col-lg-6">
            <img src="{{ $item->image_url }}" alt="">
        </div>

    </div>
@endif

@push('css')
    <style>
        .show_image img {
            max-width: 100%;
        }
    </style>
@endpush
