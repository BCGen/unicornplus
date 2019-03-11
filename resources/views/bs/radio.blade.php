<fieldset class="form-group">
    <div class="row">
        <legend class="col-lg-12 col-form-label d-block">
            {{ $label }}
        </legend>

        <div class="col-12 col-lg-12 mt-2">
            @foreach ($options as $key=>$option)
            <div class="form-check">
                <input id={{ $id.$key}} class="form-check-input radio-primary" type="radio" name={{ $id }} value={{ $option }} style="cursor: pointer;" {{ isset($item) ? ($item->$id === $option ? "checked" : "") : "" }}>

                <label class="form-check-label" for={{ $id.$key }} style="cursor: pointer;">
                    {{ $option }}
                </label>
            </div>
            @endforeach
        </div>
    </div>
</fieldset>
