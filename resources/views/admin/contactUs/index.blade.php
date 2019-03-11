@extends('admin.layouts.app')

@section('content')

<base-card title="聯絡我們 - 管理">

    @table
        <thead>
            <tr>
                @th_index
                <th>姓名</th>
                <th>電話</th>
                <th>信箱</th>
                <th>日期</th>
                @th_action
            </tr>
        </thead>

        <tbody>
            @foreach ($list as $item)
                <tr>
                    @td_index
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->date }}</td>
                    <td class="text-center" style="padding: 7px">
                        <show-button :item_id={{ $item->id }}></show-button>
                        <delete-button :item_id={{ $item->id }}></delete-button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    @endtable

</base-card>

@endsection
