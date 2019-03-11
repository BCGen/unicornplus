<template>
  <div>
    <div
      v-for="(item, index) in list"
      :key="item.key"
    >

      <div class="form-group row">
        <label class="col-12 col-form-label">
          {{ itemLabel }} {{ index + 1 }} {{ itemLabelPostfix }}
        </label>

        <div class="col-lg-6">
          <autosizeTextarea
            v-model="item.main_content"
            :placeholder="textareaPlaceholder"
            rows="1"
            class="form-control"
          />
        </div>

        <div class="w-100 py-1 d-lg-none" />

        <div
          :class="clockPickerCol"
          class="col-lg-2"
        >
          <clockPicker
            v-model="item.time"
            placeholder="選擇時間"
            @blur.native="afterTimePick"
            @afterDone="afterTimePick"
          />
        </div>

        <div class="col-2 pl-0 text-center col-lg-1 pl-lg-1 text-lg-left">
          <TrashIcon @click.native="removeItem(item.key)"/>
        </div>
      </div>
    </div>

    <div
      v-if="!isDataEmpty"
      class="text-center">
      <PlusIcon @click.native="addItem"/>
    </div>

    <div
      v-if="isDataEmpty"
    >
      <button
        type="button"
        class="btn btn-outline-info"
        @click="addItem">{{ title }}</button>
    </div>

    <input
      v-model="listJson"
      :id="inputId"
      :name="inputId"
      hidden
      type="text"
    >
  </div>

</template>

<script>

export default {
  name: 'AddableList',
  props: {
    title: {
      type: String,
      default: ''
    },
    itemLabel: {
      type: String,
      default: ''
    },
    itemLabelPostfix: {
      type: String,
      default: ''
    },
    listProp: {
      type: null,
      default() {
        return []
      }
    },
    textareaPlaceholder: {
      type: String,
      default: '活動內容'
    },
    inputId: {
      type: String,
      required: true
    }
  },
  data() {
    return {
      /** @type * */
      list: []
    }
  },
  computed: {
    listJson: function() {
      return JSON.stringify(this.list)
    },
    listSize: function() {
      return this.list.length - 1
    },
    showDeleteIcon: function() {
      return this.list.length !== 1
    },
    clockPickerCol: function() {
      return this.list.length === 1 ? 'col-12' : 'col-10'
    },
    isDataEmpty: function() {
      return this.list.length === 0
    }
  },
  watch: {
    listProp: function(newVal, oldVal) {
      if (newVal) {
        if (typeof newVal === 'string') {
          this.list = JSON.parse(newVal)
        } else {
          this.list = newVal
        }
      } else {
        this.list = []
      }
    }
  },
  methods: {
    addItem() {
      this.list.push({
        main_content: '',
        time: '',
        key: new Date().getTime().toString()
      })
    },
    removeItem(key) {
      const index = this.list
        .map(item => item.key)
        .indexOf(key)

      const item = this.list[index]

      if (!(item.main_content || item.time) || confirm('確定刪除？')) {
        this.list.splice(index, 1)
      }
    },
    afterTimePick() {
      this.list.sort(function(current, next) {
        if (current.item > next.tiem) {
          return 1
        } else if (current.time < next.time) {
          return -1
        }
        return 0
      })
    }
  }
}
</script>

<style lang="scss" scoped>
  .btn-outline-info:hover {
    color: white;
  }
</style>
