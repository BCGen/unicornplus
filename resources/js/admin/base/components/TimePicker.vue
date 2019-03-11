<template>
  <flat-pickr
    v-model="date"
    :placeholder="date"
    :config="config"
    class="form-control"
    required
    name="date"/>
</template>

<script>
import flatPickr from '../assets/plugins/vue-flatpickr-component'

export default {
  name: 'TimePicker',
  components: {
    flatPickr
  },
  data() {
    return {
      date: '請選擇時間',
      config: {
        wrap: true,
        altInput: true,
        enableTime: true,
        noCalendar: true,
        time_24hr: true
      }
    }
  }
}
</script>

<style lang="scss" scoped>
  @import "../assets/plugins/flatpickr/dist/flatpickr.min.css";
</style>
