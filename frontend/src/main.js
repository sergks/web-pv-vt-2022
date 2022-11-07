import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import BootstrapVue from 'bootstrap-vue'
import axios from 'axios'

Vue.config.productionTip = false

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)

// // подключаем axios
Vue.prototype.$http = axios.create({
    baseURL: 'http://localhost/api'
})

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
