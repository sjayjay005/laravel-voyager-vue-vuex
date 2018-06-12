<template>
  <div class="c-nav-sidebar" :class="{ 'is-visible': showSidebar }">
    <div class="c-nav-sidebar__container">

      <ul class="c-nav-sidebar__navigation">
        <li
          v-for="link in links"
          :key="link.name"
          v-if="link.sidebar && link.active"
          class="c-nav-sidebar__navigation__el" v-on:click="toggleSidebar">

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

    </div>
  </div>
</template>

<script>
export default {
  name: 'TheSidebar',

  mounted () {
    window.addEventListener('resize', this.closeSidebar)
  },

  destroyed () {
    window.removeEventListener('resize', () => {})
  },

  props: ['links', 'showSidebar'],

  data () {
    return {
      ui: {
        showSidebar: false
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
