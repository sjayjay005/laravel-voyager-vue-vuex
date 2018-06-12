<template>
  <div class="c-nav" :class="{ 'is-visible': ui.showHeader }">
    <div class="c-nav-wrapper">

      <div class="c-nav__logo" v-on:click="closeSidebar">
        <router-link :to="{ name: 'home' }">
          <span>Base</span>
        </router-link>
      </div>

      <ul class="c-nav__navigation">
        <li
          v-for="link in links"
          :key="link.name"
          v-if="link.desktop && link.active"
          class="c-nav__navigation__el">

          <template v-if="link.scroll">
            <a href="#" v-scroll-to="`#${link.name}`">
              <span>{{ link.linkName }}</span>
            </a>
          </template>

          <template v-if="!link.scroll">
            <router-link :to="{ name: link.name }">
              <span>{{ link.linkName }}</span>
            </router-link>
          </template>

        </li>
      </ul>

      <div class="c-nav__hamburger" v-on:click="toggleSidebar">
        <div class="c-hamburger" :class="{ 'is-active': showSidebar }">
          <span class="c-hamburger__line c-hamburger__line--1"></span>
          <span class="c-hamburger__line c-hamburger__line--2"></span>
          <span class="c-hamburger__line c-hamburger__line--3"></span>
        </div>
      </div>

    </div>
  </div>
</template>

<script>
export default {
  name: 'TheMenu',

  mounted () {
    setTimeout(() => {
      this.ui.showHeader = true
    }, 500)
  },

  destroyed () {},

  props: ['links', 'showSidebar'],

  data () {
    return {
      ui: {
        showHeader: false
      }
    }
  },

  computed: {},

  methods: {
    toggleSidebar () {
      this.$emit('toggle')
    },

    closeSidebar () {
      this.$emit('close')
    }
  },

  components: {}

}
</script>
