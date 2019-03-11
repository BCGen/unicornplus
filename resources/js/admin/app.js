import './bootstrap'
import Base from './base'
import Vue from 'vue'
import * as Components from './components'
import * as Views from './views'

Vue.use(Base)
bindComponents(Components)
bindComponents(Views)

const app = new Vue({
  el: '#app'
})
