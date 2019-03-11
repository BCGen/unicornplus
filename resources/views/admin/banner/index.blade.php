@extends('admin.layouts.app')

@section('content')

<base-card title="Banner - 管理">

    <template #title-right>
        <button-create></button-create>
    </template>

    @table(['id' => 'table'])
        <thead>
            <tr>
                <th>圖片</th>
                <th>替代文字</th>
                @th_sort
                @th_action
            </tr>
        </thead>

        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td><img src="{{ $item->image_url }}" alt="{{ $item->image_alt }}" style="max-width: 300px"></td>
                    <td>{{ $item->image_alt }}</td>
                    @td_sort
                    @td_action
                </tr>
            @endforeach
        </tbody>
    @endtable

</base-card>

@endsection
