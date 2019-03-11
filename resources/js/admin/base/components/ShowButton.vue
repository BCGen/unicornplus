<template>
  <div class="d-inline">
    <i
      class="far fa-file-alt"
      @click="onClick"
    />
  </div>
</template>

<script>

export default {
  name: 'ShowButton',
  props: {
    label: {
      type: String,
      default: '更新'
    },
    item_id: {
      type: Number,
      default: 0
    },
    action: {
      type: String,
      default: ''
    }
  },
  methods: {
    onClick() {
      const action = this.action === '' ? `${this.$_helper.getRoute()}` : this.action
      window.location.pathname = `${action}/${this.item_id}`
    }
  }
}

</script>

<style lang="scss" scoped>
  i {
    // color: silver;
    color: white;
    background: #6face8;
    // padding: 7px 10.15px;
    padding: 6.1px 10.1px 7.9px 10.1px;
    cursor: pointer;
    transition-duration: 0.4s;
    border-radius: 4px;
    margin: 3px 4px;
  }

  i:hover {
    // color: #17a2b8;
    background-color: #3490dc;
    // text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
    text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.1);
  }
</style>
