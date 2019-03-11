import './bootstrap'
import Vue from 'vue'
import VueCookies from '../admin/base/plugins/vue-cookies'

window.Vue = Vue
Vue.use(VueCookies)

const app = new Vue({
  el: '#app',
  data: {
    title:'About us',
    titlejp:'会社概要',
    lang: 'en',
    srcContent: {
      en: {
        title: 'Introduction'
      },
      jp: {
        title: 'はじめに'
      }
    }
  },
  computed: {
    content() {
      return this.srcContent[this.lang]
    },
    isEN() {
      return this.lang === 'en'
    },
    isJP() {
      return this.lang === 'jp'
    }
  },
  methods: {
      changeTitle() {
          const vm = this;

          let Y = document.querySelectorAll(".dynamictitle");
          let titleHeight = [];
          for (let i = 0; i < Y.length; i++) {
              titleHeight.push(Y[i].offsetTop)
          };
          console.log(titleHeight)

          var titles = ["About us", "Class Introduction","School Environment" ,"Admission Instructions" ,"Message Announcement" , "Contact Us"];
          var titlesjp = ["会社概要", "クラス紹介","学校環境" ,"入学説明" ,"メッセージの報告" , "お問い合わせ"];
          window.document.addEventListener("scroll",checkHeight,false);
          function checkHeight(e) {
              // console.log(e)
              var bodyTop = window.scrollY;
              for (let i = 0; i < titles.length; i++) {
                  if (titleHeight[i] <= bodyTop) {
                      console.log(titles[i])
                      vm.title = titles[i]
                      vm.titlejp = titlesjp[i]
                  }
              }
          }
      }
  },
  mounted(){
    this.changeTitle();
  },
  created() {
    // this.$cookies.set('lang', 'en')
    if (window.location.pathname === '/jp') {
      this.lang = 'jp'
    }
  }
})
