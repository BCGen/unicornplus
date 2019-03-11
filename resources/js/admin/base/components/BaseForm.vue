<template>
  <form
    :action="action"
    :enctype="enctype"
    :method="formMethod"
  >
    <input-csrf />
    <input-hidden-method :value="hiddenMethod"/>

    <slot />

    <slot name="bottom">
      <hr>
      <div class="form-group row">
        <div class="col-12 text-center">
          <button
            type="submit"
            class="btn btn-primary">確定</button>
        </div>
      </div>
    </slot>

  </form>

</template>

<script>
import propsValidator from '../utils/propsValidator'
import Route from '../utils/route'

export default {
  name: 'BaseForm',
  props: {
    method: {
      type: String,
      default: '',
      validator(value) {
        const values = ['', 'get', 'post', 'patch', 'put', 'delete']
        return propsValidator.indexOf(values, value)
      }
    }
  },
  data() {
    return {
      action: '',
      hiddenMethod: '',
      enctype: null,
      route: new Route()
    }
  },
  computed: {
    formMethod() {
      return this.hiddenMethod === 'get' ? 'get' : 'post'
    }
  },
  mounted() {
    this.action = this.$attrs.action || this.route.action()
    this.hiddenMethod = this.method || this.route.method()
    this.setEnctype()
  },
  methods: {
    setEnctype() {
      const elm = this.$vnode.elm
      for (let i = 0; i < elm.length; i++) {
        if (elm[i].type === 'file') {
          this.enctype = 'multipart/form-data'
          break
        }
      }
    }
  }
}
</script>
