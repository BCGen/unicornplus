<template>
  <input
    v-if="show"
    :value="value"
    type="hidden"
    name="_method"
  >
</template>

<script>
export default {
  name: 'InputHiddenMethod',
  props: {
    value: {
      type: String,
      default: 'post'
    }
  },
  computed: {
    show() {
      return ['get', 'post'].indexOf(this.value) === -1
    }
  }
}
</script>
