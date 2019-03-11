<template>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <h4 class="card-header d-flex align-items-center justify-content-between card_title">
            <slot name="title">
              <slot name="title-left">
                {{ title }}
              </slot>
              <slot name="title-right"/>
            </slot>
          </h4>
          <div class="card-body">
            <slot/>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: 'BaseCard',
  props: {
    title: {
      type: String,
      default: ''
    }
  }
}

</script>

<style lang="scss" scoped>
  .card_title {
    font-weight: 600;
  }

  .sub_title {
    color: #5d686b;
    font-weight: 600;
  }
</style>
