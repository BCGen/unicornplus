<template>
  <input
    :value="token"
    type="hidden"
    name="_token"
  >
</template>

<script>
export default {
  name: 'InputCsrf',
  data() {
    return {
      token: ''
    }
  },
  mounted() {
    /** @type * */
    const token = document.head.querySelector(`meta[name="csrf-token"]`)

    if (token) {
      this.token = token.content
    } else {
      console.error(
        'CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token'
      )
    }
  }
}
</script>
