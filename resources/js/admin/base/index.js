import utils from './utils/utils'
import helper, { A } from './utils/helper'
import VueCookies from './plugins/vue-cookies'

import * as components from './components'

export default {
  install(Vue) {
    try {
      window.bindComponents = utils.bindComponents
      window.clockpicker = require('./assets/plugins/clockpicker/dist/bootstrap-clockpicker.min.js')
      Vue.prototype.$_helper = helper
      Vue.prototype.$_ = new A()
    } catch (e) {
      console.log(e)
    }

    Vue.use(VueCookies)
    utils.bindComponents(components)
  }
}
