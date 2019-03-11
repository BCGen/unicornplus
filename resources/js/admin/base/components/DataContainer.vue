<template>
  <div>
    <slot
      :data="data"
      :route="route"
      :routeAction="route.routeAction()"
      :isCreate="route.routeAction() === 'create'"
      :isEdit="route.routeAction() === 'edit'"
      :isIndex="route.routeAction() === 'index'"
      :isShow="route.routeAction() === 'show'"
    />
  </div>
</template>

<script>
import _ from 'lodash'
import Route from '../utils/route'

export default {
  name: 'DataContainer',
  props: {
    defaultData: {
      type: Object,
      default() {
        return {}
      }
    }
  },
  data() {
    return {
      data: {},
      route: new Route()
    }
  },
  created() {
    this.data = this.defaultData
    this.getData()
  },
  methods: {
    getData() {
      if (['edit', 'show'].indexOf(this.route.routeAction()) !== -1) {
        axios.get(location.pathname)
          .then(({ data }) => {
            const copy = Object.assign({}, this.data)

            this.data = _.mergeWith(copy, data, (objValue, srcValue) => {
              return srcValue || objValue
            })
            console.log(this.data)

            this.$emit('success', this.data)
          })
          .catch(error => {
            console.log(error.response)
          })
      }
    }
  }
}
</script>
