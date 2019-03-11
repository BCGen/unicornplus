@extends('admin.layouts.app')

@section('content')

<lang-container #default="lang">
    <base-card :title="'訊息公告 - 管理 (' + lang.upper + ')'">

        <template #title-right>
            @include('admin.layouts.lang_create_btn')
        </template>

        @table
        <thead>
            <tr>
                <th width="60">類別</th>
                <th>標題</th>
                <th>內容</th>
                <th width="80">時間</th>
                @th_sort
                @th_action
            </tr>
        </thead>

        <tbody>
            @foreach ($list as $item)
            <tr>
                <td>{{ $item->tag }}</td>

                <td style="max-width: 200px;">
                    <div v-if="lang.isEN">{{ $item->getTranslation('title', 'en') }}</div>
                    <div v-if="lang.isJP">{{ $item->getTranslation('title', 'jp') }}</div>
                </td>

                <td class="main_content">
                    <div v-if="lang.isEN">{{ $item->getTranslation('main_content', 'en') }}</div>
                    <div v-if="lang.isJP">{{ $item->getTranslation('main_content', 'jp') }}</div>
                </td>

                <td>{{ $item->date }}</td>

                @td_sort
                @td_action
            </tr>
            @endforeach
        </tbody>
        @endtable

    </base-card>
</lang-container>

@endsection
