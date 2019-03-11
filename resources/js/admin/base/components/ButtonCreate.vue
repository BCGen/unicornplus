<template>
  <a
    :href="createHref"
    role="button"
    class="btn btn-primary"
    v-text="label"
  />
</template>

<script>

export default {
  name: 'ButtonCreate',
  props: {
    label: {
      type: String,
      default: '新增'
    },
    href: {
      type: String,
      default: ''
    }
  },
  data() {
    return {
      createHref: ''
    }
  },
  mounted() {
    this.createHref = this.href !== '' ? this.href : `${this.$_helper.getRoute()}/create`
  }
}

</script>
