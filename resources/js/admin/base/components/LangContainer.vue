<template>
  <div>
    <slot
      :lang="lang"
      :upper="lang.toUpperCase()"
      :lower="lang.toLowerCase()"
      :isEN="lang === 'en'"
      :isJP="lang === 'jp'"
      :setLang="setLang"
    />
  </div>
</template>

<script>
export default {
  name: 'LangContainer',
  props: {
    defaultLang: {
      type: String,
      default: 'en'
    },
    useDefault: {
      type: Boolean,
      default: false
    },
    cookieName: {
      type: String,
      default: 'translate_lang'
    }
  },
  data() {
    return {
      lang: 'EN'
    }
  },
  created() {
    if (this.useDefault) {
      this.setLang(this.defaultLang)
    } else {
      this.setLang(this.getCookie() || this.defaultLang)
    }
  },
  methods: {
    setLang(lang) {
      this.lang = lang
      this.setCookie(lang)
    },
    setCookie(lang) {
      $cookies.set(this.cookieName, lang)
    },
    getCookie() {
      return $cookies.get(this.cookieName)
    }
  }
}
</script>
