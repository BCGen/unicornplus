<template>
  <data-container :default-data="defaultData" #default="{ data, isEdit }">

    <base-card :title="`課程介紹 - ${isEdit ? '編輯' : '新增'}`">

      <base-form >
        <form-groups>

          <!-- English -->
          <form-group label="標題 (EN) 未填寫標題則不顯示英文內容">
            <input id="title_en" v-model="data.title.en" type="text">
          </form-group>

          <form-group label="內容 (EN)">
            <textarea id="main_content_en" v-model="data.main_content.en" rows="8" />
          </form-group>

          <form-group label="圖片替代文字 (EN)">
            <input id="image_alt_en" v-model="data.image_alt.en" type="text">
          </form-group>

          <addable-list
            :list-prop="data.classes.en"
            input-id="classes_en"
            item-label="活動"
            item-label-postfix="(EN)"
            title="新增活動 (EN)"
            textarea-placeholder="活動內容 (EN)"
          />

          <hr>

          <!-- Japanese -->
          <form-group label="標題 (JP) 未填寫標題則不顯示日文內容">
            <input id="title_jp" v-model="data.title.jp" type="text">
          </form-group>

          <form-group label="內容 (JP)">
            <textarea id="main_content_jp" v-model="data.main_content.jp" rows="10" />
          </form-group>

          <form-group label="圖片替代文字 (JP)">
            <input id="image_alt_jp" v-model="data.image_alt.jp" type="text">
          </form-group>

          <addable-list
            :list-prop="data.classes.jp"
            input-id="classes_jp"
            item-label="活動"
            item-label-postfix="(JP)"
            title="新增活動 (JP)"
            textarea-placeholder="活動內容 (JP)"
          />

          <hr>

          <form-group label="權重" div-class="col-12 col-sm-6 col-lg-3">
            <input id="sort" v-model="data.sort" type="number">
          </form-group>

          <form-group v-if="isEdit" label="當前圖片" div-class="col-12 col-lg-6">
            <img :src="data.image_url" style="max-width: 100%;">
          </form-group>

          <form-group :label="isEdit ? '更新圖片 (取代當前圖片)' : '上傳圖片'">
            <input id="image" type="file" accept="image/*">
          </form-group>

          <span>建議圖片大小：415 * 400 (px)</span>

        </form-groups>
      </base-form>

    </base-card>

  </data-container>
</template>

<script>

export default {
  name: 'ClassCardView',
  data() {
    return {
      defaultData: {
        title: {},
        main_content: {},
        classes: {},
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
