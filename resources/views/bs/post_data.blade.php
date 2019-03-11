@php
    function getActionUrl($rtrimStr) {
        $url = rtrim($_SERVER['REQUEST_URI'], '/');
        $sub = -1 * strlen($rtrimStr);
        return substr($url, $sub) === $rtrimStr ? substr($url, 0, $sub) : $url;
    }
@endphp

<form method="post" action="{{ $action ?? getActionUrl('/create') }}" enctype="multipart/form-data">
    @csrf

    {{ $slot }}

    <hr>

    <div class="form-group row">
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">新增</button>
        </div>
    </div>
</form>
