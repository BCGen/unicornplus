<template>
  <data-container #default="{ data, isEdit }">
    <base-card :title="`Banner - ${isEdit ? '編輯' : '新增'}`">

      <base-form>
        <form-groups>

          <form-group v-if="isEdit" label="當前圖片" div-class="col-12 col-lg-6">
            <img :src="data.image_url" style="max-width: 100%">
          </form-group>

          <form-group :label="isEdit ? '更新圖片' : '上傳圖片'">
            <input id="image" type="file" accept="image/*" >
          </form-group>

          <form-group label="圖片替代文字">
            <input id="image_alt" :value="data.image_alt" type="text">
          </form-group>

          <form-group label="權重" div-class="col-12 col-sm-6 col-lg-3">
            <input id="sort" :value="data.sort || 0" type="number" >
          </form-group>

        </form-groups>
      </base-form>

    </base-card>
  </data-container>
</template>

<script>

export default {
  name: 'BannerView',
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
