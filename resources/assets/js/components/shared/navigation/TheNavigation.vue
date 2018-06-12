<template>
  <div>

    <!-- Menu -->
    <the-menu
      :showSidebar="ui.showSidebar"
      :links="links"
      @toggle="toggleSidebar"
      @close="closeSidebar">
      >
    </the-menu>

    <!-- Sidebar -->
    <the-sidebar
      :showSidebar="ui.showSidebar"
      :links="links"
      @toggle="toggleSidebar"
      @close="closeSidebar">
      >
      </the-sidebar>

  </div>
</template>

<script>
import TheMenu from './TheMenu'
import TheSidebar from './TheSidebar'

export default {
  name: 'TheNavigation',

  mounted () {},

  destroyed () {},

  props: [],

  data () {
    return {
      ui: {
        showHeader: true,
        showSidebar: false
      },

      links: [
        {
          name: 'home', linkName: 'Home', desktop: false, sidebar: true, active: true, scroll: false
        },
        {
          name: 'about', linkName: 'Acerca', desktop: false, sidebar: false, active: false, scroll: false
        },
        {
          name: 'services', linkName: 'Services', desktop: false, sidebar: false, active: false, scroll: false
        },
        {
          name: 'work', linkName: 'Trabajo', desktop: false, sidebar: false, active: false, scroll: false
        },
        {
          name: 'contact', linkName: 'Contacto', desktop: false, sidebar: false, active: false, scroll: false
        },
        {
          name: 'Legals', linkName: 'Legales', desktop: false, sidebar: false, active: false, scroll: false
        }
      ]
    }
  },

  computed: {},

  methods: {
    toggleSidebar () {
      this.ui.showSidebar = !this.ui.showSidebar
    },

    closeSidebar () {
      this.ui.showSidebar = false
    }
  },

  components: {
    TheMenu,
    TheSidebar
  }
}
</script>
