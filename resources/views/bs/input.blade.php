@push('php')
    @php
        $required = isset($required) && $required === true ? true : false;
    @endphp
@endpush

@form_group(['id' => $id, 'label'=> $label ])
    <input
        id="{{ $id }}"
        class="form-control"
        name="{{ $id }}"
        value="{{ isset($item) ? $item->$id : '' }}"
        @if ($required) required @endif
    >
@endform_group
