<thead>
    <tr>
        <th>檔案名稱</th>
        @th_sort
        @th_action
    </tr>
</thead>

<tbody>
    @foreach ($dataList as $item)
    <tr>
        <td>{{ $item->file_name }}</td>
        @td_sort
        @td_action
    </tr>
    @endforeach
</tbody>
