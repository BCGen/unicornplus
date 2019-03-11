<template>
  <flat-pickr
    v-model="dateData"
    :placeholder="date"
    class="form-control"
  />
</template>

<script>
import flatPickr from '../assets/plugins/vue-flatpickr-component'

export default {
  name: 'DatePicker',
  components: {
    flatPickr
  },
  props: {
    date: {
      type: String,
      default: ''
    }
  },
  data() {
    return {
      dateData: new Date()
    }
  },
  watch: {
    date(newVal, oldVal) {
      this.dateData = newVal || this.dateData
    }
  }
}
</script>

<style lang="scss" scoped>
  @import "../assets/plugins/flatpickr/dist/flatpickr.min.css";
</style>
