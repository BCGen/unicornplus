<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <h4 class="card-header d-flex align-items-center justify-content-between card_title">
                    {{ $title }}

                    @if (isset($create_btn) && $create_btn=== 'right')
                        <create-button></create-button>
                    @endif
                </h4>

                <div class="card-body">
                    @if (isset($create_btn) && $create_btn === 'left')
                        <create-button></create-button>
                        <hr>
                    @endif
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>

@push('css')
<style>
    .card_title {
        font-weight: 600;
    }
</style>
@endpush
