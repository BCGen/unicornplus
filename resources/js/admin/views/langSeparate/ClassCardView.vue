<template>
  <data-container :default-data="defaultData" #default="{ data, isEdit }">
    <lang-container #default="{ lang, isEN, isJP, setLang, upper }">

      <base-card :title="`課程介紹 - ${isEdit ? '編輯' : '新增'} (${upper})`">

        <template #title-right>
          <lang-button-group :lang="lang" :langs="['en', 'jp']" @setter="setLang"/>
        </template>

        <base-form >
          <form-groups>

            <form-group v-show="isEN" label="標題 (EN)">
              <input id="title_en" v-model="data.title.en" type="text">
            </form-group>

            <form-group v-show="isJP" label="標題 (JP)">
              <input id="title_jp" v-model="data.title.jp" type="text">
            </form-group>

            <form-group v-show="isEN" label="內容 (EN)">
              <textarea id="main_content_en" v-model="data.main_content.en" rows="10" />
            </form-group>

            <form-group v-show="isJP" label="內容 (JP)">
              <textarea id="main_content_jp" v-model="data.main_content.jp" rows="10" />
            </form-group>

            <form-group label="權重" div-class="col-12 col-sm-6 col-lg-3">
              <input id="sort" v-model="data.sort" type="number">
            </form-group>

            <form-group v-if="isEdit" label="當前圖片" div-class="col-12 col-lg-6">
              <img :src="data.image_url" style="max-width: 100%;">
            </form-group>

            <form-group :label="isEdit ? '更新圖片' : '上傳圖片'">
              <input id="image" type="file" accept="image/*">
            </form-group>

            <form-group v-show="isEN" label="圖片替代文字 (EN)">
              <input id="image_alt_en" v-model="data.image_alt.en" type="text">
            </form-group>

            <form-group v-show="isJP" label="圖片替代文字 (JP)">
              <input id="image_alt_jp" v-model="data.image_alt.jp" type="text">
            </form-group>

            <addable-list
              v-show="isEN"
              :list-prop="data.classes.en"
              input-id="classes_en"
              textarea-placeholder="活動內容 (EN)"
            />

            <addable-list
              v-show="isJP"
              :list-prop="data.classes.jp"
              input-id="classes_jp"
              textarea-placeholder="活動內容 (JP)"
            />

          </form-groups>
        </base-form>

      </base-card>

    </lang-container>
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
