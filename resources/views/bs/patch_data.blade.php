@php
function getActionUrl($rtrimStr) {
    $url = rtrim($_SERVER['REQUEST_URI'], '/');
    $sub = -1 * strlen($rtrimStr);

    return substr($url, $sub) === $rtrimStr ? substr($url, 0, $sub) : $url;
}
@endphp

<form method="post" action="{{ $action ?? getActionUrl("/".$item_id."/edit")."/".$item_id }}" enctype="multipart/form-data">
    @method('PATCH')
    @csrf

    {{ $slot }}

    <hr>

    <div class="form-group row">
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">更新</button>
        </div>
    </div>
</form>
