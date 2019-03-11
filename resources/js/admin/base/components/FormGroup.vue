<template>
  <div :class="{ row: !col }" class="form-group">

    <label
      :for="inputId"
      :class="labelClass"
      class="col-form-label"
      v-text="label"
    />

    <div :class="divClass">
      <slot />
    </div>

  </div>
</template>

<script>
export default {
  name: 'FormGroup',
  props: {
    label: {
      type: String,
      default: ''
    },
    divClass: {
      type: String,
      default: ''
    },
    labelClass: {
      type: String,
      default: ''
    },
    col: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      inputId: ''
    }
  },
  mounted() {
    /**
     * @type {VNode[] | undefined}
     */
    const slots = this.$slots.default

    if (slots) {
      const slot = slots[0].elm
      const tag = slots[0].tag
      this.inputId = slot.id

      if (['input', 'textarea'].indexOf(tag) !== -1) {
        if (slot.type === 'file') {
          slot.classList.add('form-control-file')
        } else {
          slot.classList.add('form-control')
        }
      }

      if (!slot.name) {
        slot.name = slot.multiple ? `${slot.id}[]` : slot.id
      }
    }
  }
}
</script>
