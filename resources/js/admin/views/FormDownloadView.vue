<template>
  <data-container :default-data="defaultData" #default="{ data, isEdit }">
    <lang-container #default="{ lang }">

      <base-card :title="`檔案下載 - ${isEdit ? '編輯' : '新增'}`">

        <base-form >
          <form-groups>

            <form-group v-if="isEdit" label="當前檔案">
              <span>{{ data.file_name }}</span>
            </form-group>

            <form-group :label="isEdit ? '更新檔案' : '上傳檔案'">
              <input id="file" type="file" >
            </form-group>

            <form-group label="權重" div-class="col-12 col-sm-6 col-lg-3">
              <input id="sort" v-model="data.sort" type="number">
            </form-group>

            <form-group label="語言" div-class="col-12 col-sm-6 col-lg-3">
              <radio-base
                id="lang"
                :labels="['EN', 'JP']"
                :options="['en', 'jp']"
                :checked="data.lang || lang"
              />
            </form-group>

          </form-groups>
        </base-form>

      </base-card>

    </lang-container>
  </data-container>
</template>

<script>

export default {
  name: 'FormDownloadView',
  data() {
    return {
      defaultData: {
        title: {},
        main_content: {},
        image_alt: {},
        sort: 0
      }
    }
  }
}

</script>
