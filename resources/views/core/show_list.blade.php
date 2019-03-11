@if (isset($list))
list: {{ $list }}
@endif

@if(isset($item))
    ltem:
    {{ $item }}
@endif
