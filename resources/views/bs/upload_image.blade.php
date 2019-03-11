<div class="form-group row">

    <label
        class="col-lg-2 col-form-label"
        for="{{ $id ?? "upload_image" }}"
    >
        @if (isset($item->image_url))
            更新{{ $label ?? "圖片" }}
        @else
            上傳{{ $label ?? "圖片" }}
        @endif
    </label>

    <div class="col-lg-12">
        <input
            type="file"
            id="{{ $id ?? "upload_image" }}"
            class="form-control-file"
            name="{{ $id ?? "upload_image" }}"
            accept="image/*"
        />
    </div>
</div>
