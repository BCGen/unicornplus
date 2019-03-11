<template>
  <data-container :default-data="defaultData" #default="{ data, isEdit }">

    <base-card :title="`訊息公告 - ${isEdit ? '編輯' : '新增'}`">

      <base-form>
        <form-groups>

          <form-group label="標題 (EN) 未填寫標題則不顯示英文內容">
            <input id="title_en" v-model="data.title.en" type="text">
          </form-group>

          <form-group label="內容 (EN)">
            <textarea id="main_content_en" v-model="data.main_content.en" rows="8" />
          </form-group>

          <form-group v-if="isEdit" label="當前文件 (EN)">
            <file-preview :list="data['files_en']" action="/admin/media_library"/>
          </form-group>

          <form-group label="新增文件 (EN)">
            <input id="files_en" type="file" multiple>
          </form-group>

          <hr>

          <form-group label="標題 (JP) 未填寫標題則不顯示日文內容">
            <input id="title_jp" v-model="data.title.jp" type="text">
          </form-group>

          <form-group label="內容 (JP)">
            <textarea id="main_content_jp" v-model="data.main_content.jp" rows="8" />
          </form-group>

          <form-group v-if="isEdit" label="當前文件 (JP)">
            <file-preview :list="data['files_jp']" action="/admin/media_library"/>
          </form-group>

          <form-group label="新增文件 (JP)">
            <input id="files_jp" type="file" multiple>
          </form-group>

          <hr>

          <form-group v-if="isEdit" label="當前圖片">
            <image-preview :list="data.images" action="/admin/media_library"/>
          </form-group>

          <form-group label="新增圖片 (可選取多圖)">
            <input
              id="images"
              type="file"
              accept="image/*"
              multiple>
          </form-group>

          <span>建議圖片大小 ：1140 * 480 (px)</span>
          <br>
          <br>

          <form-group label="日期" div-class="col-12 col-sm-6 col-lg-3">
            <date-picker id="date" :date="data.date"/>
          </form-group>

          <form-group label="權重" div-class="col-12 col-sm-6 col-lg-3">
            <input id="sort" v-model="data.sort" type="number">
          </form-group>

          <form-group label="類別" div-class="col-12 col-sm-6 col-lg-3">
            <radio-base
              id="message_type"
              :options="['school', 'admission', 'event', 'others']"
              :labels="['學校公告', '招生資訊', '活動記錄', '其他事項']"
              :checked="data.message_type"
            />
          </form-group>

        </form-groups>
      </base-form>

    </base-card>

  </data-container>
</template>

<script>

export default {
  name: 'MessageAnnouncementView',
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

<style lang="scss" scoped>
  span {
    font-size: 16px;
    color: red;
  }
</style>
