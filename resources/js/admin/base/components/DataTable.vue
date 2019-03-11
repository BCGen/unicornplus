<template>
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <slot name="thead"/>
    </thead>
    <tbody>
      <slot name="tbody"/>
    </tbody>
  </table>
</template>

<script>
export default {
  name: 'DataTable',
  mounted() {
    $(this.$el).DataTable({
      columnDefs: [{
        targets: 'no-sort',
        orderable: false
      }],
      order: [],
      language: {
        processing: '處理中...',
        loadingRecords: '載入中...',
        emptyTable: '尚無資料',
        info: '顯示 _START_ - _END_，共 _TOTAL_ 項',
        zeroRecords: '沒有符合的結果',
        search: '_INPUT_',
        infoFiltered: '(從 _MAX_ 項結果中過濾)',
        searchPlaceholder: '搜尋...',
        lengthMenu: '顯示  _MENU_  項',
        infoEmpty: '共 0 項',
        paginate: {
          first: '第一頁',
          last: '最末頁',
          next: '下一頁',
          previous: '上一頁'
        }
      }
    })
  }
}
</script>
