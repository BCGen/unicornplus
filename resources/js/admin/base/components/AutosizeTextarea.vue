<template>
  <textarea
    ref="textarea"
    :value="value"
    @input="$emit('input', $event.target.value)" />
</template>

<script>

import autosize from '../assets/plugins/autosize'

export default {
  name: 'AutosizeTextarea',
  props: ['value'],
  mounted() {
    autosize(this.$refs.textarea)
  }
}

</script>
