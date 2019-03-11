@push('css_cdn')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
@endpush

@push('php')

@php
if (!isset($id)) $id = 'table';
@endphp

@endpush

<table id={{ $id }} class="table table-bordered table-striped table-hover">
    {{ $slot }}
</table>

@push('js')
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" defer></script>

<script>
    $(document).ready(function () {
        $("{{ '#'.$id }}").DataTable({
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false
            }],
            "order": [],
            "language": {
                "processing": "處理中...",
                "loadingRecords": "載入中...",
                "emptyTable": "尚無資料",
                "info": "顯示 _START_ - _END_，共 _TOTAL_ 項",
                "zeroRecords": "沒有符合的結果",
                "search": "_INPUT_",
                "infoFiltered": "(從 _MAX_ 項結果中過濾)",
                "searchPlaceholder": "搜尋...",
                "lengthMenu": "顯示  _MENU_  項",
                "infoEmpty": "共 0 項",
                "paginate": {
                    "first": "第一頁",
                    "last": "最末頁",
                    "next": "下一頁",
                    "previous": "上一頁"
                },
            }
        })
    });
</script>
@endpush

@push('css')
    <style>
        .table th {
            border-bottom-width: 0px !important;
            border-top: 0 !important;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F9F9F9;
            transition-duration: 0.1s;
            border: 2px solid #D8D8D8;
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: #FCFCFC;
            transition-duration: 0.1s;
        }

        .table-striped tbody tr:hover {
            background-color: #EEE;
        }

        .table th {
            color: #5D686A;
        }

        .table td {
            color: #697578;
        }
    </style>
@endpush
