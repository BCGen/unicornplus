@extends('admin.layouts.app')

@section('content')

<base-card title="Media Library">
    @table
    <thead>
        <tr>
            <th>ID</th>
            <th>Model</th>
            <th>Collection</th>
            <th>Media</th>
            <th>Size</th>
            @th_action
        </tr>
    </thead>

    <tbody>
        @foreach ($list as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ str_after($item->model_type, "App\\") }} [{{ $item->model_id }}]</td>
            <td>{{ $item->collection_name }}</td>
            <td><img src="{{ $item->url }}" style="max-width: 100px" alt="{{ $item->name }}"></td>
            <td>{{ $item->human_readable_size }}</td>
            @td_action
        </tr>
        @endforeach
    </tbody>
    @endtable

</base-card>

@endsection
