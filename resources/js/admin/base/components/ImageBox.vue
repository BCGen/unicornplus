<template>
  <div class="col-sm-6 col-lg-3">
    <div class="box p-3">
      <i
        class="fas fa-trash-alt fa-lg"
        @click="onDelete"/>
      <img
        :src="item.url"
        alt="Can't Found Image">
    </div>
  </div>
</template>

<script>

export default {
  name: 'ImageBox',
  props: ['item'],
  computed: {
    modalId: function() {
      return `checkModal_${this.item.id}`
    },
    dataTarget: function() {
      return `#${this.modalId}`
    }
  },
  methods: {
    onDelete() {
      confirm('確定刪除圖片?') && this.$emit('delete')
    }
  }
}

</script>

<style lang="scss" scoped>
  .box {
    position: relative;
    margin-bottom: 20px;
    border: 2px solid lightgray;
    border-radius: 5px;
  }

  i {
    position: absolute;
    top: 0;
    right: 0;
    color: white;
    background: #ff6a69;
    padding: 10px;
    cursor: pointer;
    transition-duration: 0.4s;
    border-radius: 5px;
    margin: 3px 5px;
  }

  i:hover {
    // color: #ff3860;
    background: #ff3860;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
    text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.1);
  }

  img {
    max-width: 100%;
    max-height: 300px;
  }
</style>
