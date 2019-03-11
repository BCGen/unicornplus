<template>
  <div>
    <div
      v-for="(option, index) in options"
      :key="id + index"
      class="form-check"
    >

      <input
        :id="id + index"
        :name="id"
        :value="option"
        :checked="option === checkedOption"
        class="form-check-input radio-primary"
        type="radio"
        style="cursor: pointer;"
        @change="onChange"
      >

      <label
        :for="id + index"
        class="form-check-label"
        style="cursor: pointer;"
        v-text="labels[index] || option"
      />

    </div>
  </div>
</template>

<script>
export default {
  name: 'RadioBase',
  props: {
    id: {
      type: String,
      required: true
    },
    labels: {
      type: Array,
      default() {
        return []
      }
    },
    options: {
      type: Array,
      required: true
    },
    checked: {
      type: String,
      default: ''
    }
  },
  data() {
    return {
      value: null
    }
  },
  computed: {
    checkedOption() {
      return this.value || this.checked
    }
  },
  methods: {
    onChange(e) {
      this.value = e.target.value
      this.$emit('change', e.target.value)
    }
  }
}
</script>
