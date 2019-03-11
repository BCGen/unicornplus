<div class="form-group row">

    <label class="col-lg-12 col-form-label" for={{ $id }}>
        {{ $label }}
    </label>

    <div class="col-12 col-sm-6 col-lg-3">
        <input
            type="number"
            id="{{ $id }}"
            class="form-control"
            name="{{ $id }}"
            value="{{ isset($item) ? $item->$id : 0 }}"
        />
    </div>

</div>
