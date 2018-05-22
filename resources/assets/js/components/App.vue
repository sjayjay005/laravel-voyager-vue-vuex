<template>
  <div>
    <the-navigation />

    <router-view></router-view>

    <the-footer />
  </div>
</template>

<script>

  import TheNavigation from './shared/navigation/TheNavigation.vue'
  import TheFooter from './shared/navigation/TheFooter.vue'

  export default {
    name: 'App',

    metaInfo: {
      title: 'Default Title',
      titleTemplate: '%s | My Awesome Webapp'
    },

    data() {
      return {
        csrf_token: window.csrf_token
      }
    },

    methods: {
      logout() {}
    },

    components: {
      TheNavigation,
      TheFooter
    }
  }
</script>

