@extends('admin.layouts.app')

@section('content')

<lang-container #default="lang">
    <base-card :title="'檔案下載 - 管理 (' + lang.upper + ')'">

        <template #title-right>
            @include('admin.layouts.lang_create_btn')
        </template>

        <div v-show="lang.isEN">
            @table(['id' => 'table_en'])
            @include(
                'admin.formDownload.index_table',
                ['dataList' => collect($list)->filter(function($item) { return $item->lang === 'en' || !$item->lang; })]
            )
            @endtable
        </div>

        <div v-show="lang.isJP">
            @table(['id' => 'table_jp'])
            @include(
                'admin.formDownload.index_table',
                ['dataList' => collect($list)->filter(function($item) { return $item->lang === 'jp'; })]
            )
            @endtable
        </div>

    </base-card>
</lang-container>

@endsection
