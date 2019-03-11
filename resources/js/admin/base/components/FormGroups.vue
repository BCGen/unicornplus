<template>
  <div>
    <slot/>
  </div>
</template>

<script>
export default {
  name: 'FormGroups',
  props: {
    labelClass: {
      type: String,
      default: 'col-12'
    },
    divClass: {
      type: String,
      default: 'col-12'
    }
  },
  mounted() {
    /** @type *[] | undefined */
    const slots = this.$slots.default
    const em = this

    slots && slots.forEach((value, key) => {
      if (em.labelClass && value.componentOptions && value.componentOptions.tag === 'form-group') {
        const labelClassList = value['elm']['children'][0].classList
        if (labelClassList.length === 1) {
          em.labelClass.split(' ').forEach(value => {
            if (value.trim()) {
              labelClassList.add(value)
            }
          })
        }

        const divClassList = value['elm']['children'][1].classList
        if (divClassList.length === 0) {
          em.divClass.split(' ').forEach(value => {
            if (value.trim()) {
              divClassList.add(value)
            }
          })
        }

        if (this.$attrs.hasOwnProperty('form-controller')) {
          const input = value['elm']['children'][1]['children'][0]
          if (input.type === 'file') {
            input.classList.add('form-control-file')
          } else {
            input.classList.add('form-control')
          }
        }
      }
    })
  }
}
</script>
