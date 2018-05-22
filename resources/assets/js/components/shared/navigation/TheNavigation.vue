<template>
  <div class="c-navigation">

    <router-link :to="{ name: 'home' }">
      <div class="c-navigation__logo" @mouseover="loadHome"></div>
    </router-link>


    <div class="c-navigation__menu"></div>


  </div>
</template>

<script>

import {getHome} from './../../../services.js'

export default {
  name: 'TheNavigation',

  mounted () {},

  destroyed () {},

  props: [],

  data () {
    return {
      styles: {
        height: 440
      },
    }
  },

  methods: {
    loadHome: () => {
      getHome()
    }
  },

}
</script>
