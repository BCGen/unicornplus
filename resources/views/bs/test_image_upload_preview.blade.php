<div class="row">

    <label class="col-lg-1 col-form-label">
        {{ isset($label) ? $label : 'label' }}
    </label>

    <div class=" col-lg-11">
        <div class="form-group">
            <div class="input-group">
                        <input type="file" id="imgInp">
            <label class="form-control" for="imgInp" readonly style="cursor: pointer;">選擇</label>
            </div>
            <img id='img-upload' />
        </div>
    </div>
</div>

@push('css')
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
        /* background: red; */
    }

   .input-group input[type=file] {
        position: fixed;
        right: 100%;
        top: 100%;
    }

    #img-upload {
        width: 100%;
    }

</style>
@endpush

@push('js')
<script>
    $(document).ready(function () {
        $(document).on('change', '.btn-file :file', function () {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function (event, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = label;

            if (input.length) {
                input.val(log);
            } else {
                if (log) alert(log);
            }

        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function () {
            readURL(this);
        });
    });

</script>
@endpush
