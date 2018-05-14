<template>
  <div>
    <div>Header</div>

    <router-view></router-view>

    <div>Footer</div>
  </div>
</template>

 <script>


export default {
  data() {
    return {
      csrf_token: window.csrf_token
    }
  },
  methods: {
    logout() {
      document.getElementById('logout').submit();
    }
  },

  components: {}
}
</script>

