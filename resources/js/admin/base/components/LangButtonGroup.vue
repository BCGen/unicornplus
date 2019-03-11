<template>
  <div class="btn-group">
    <button
      v-for="(item, index) in langs"
      :class="{ 'btn-primary': lang === item, 'btn-outline-primary': lang !== item }"
      :key="index"
      type="button"
      class="btn"
      @click="$emit('setter', item)"
    >
      {{ item.toUpperCase() }}
    </button>
  </div>
</template>

<script>
export default {
  name: 'LangButtonGroup',
  props: {
    lang: {
      type: String,
      default: 'en'
    },
    langs: {
      type: Array,
      default() {
        return []
      }
    }
  }
}
</script>
