<div class="form-group row">

    <label class="col-lg-2 col-form-label" for="{{ $id }}">
        {{ $label }}
    </label>

    <div class="col-lg-12">
        {{-- <input
        id="{{ $id }}"
        class="form-control"
        name="{{ $id }}"
        value="{{ isset($item) ? $item->$id : '' }}"
        @if (false) required @endif --}}
        {{ $slot }}
    </div>

</div>
