<template>
  <div>
    <h1>{{ dataLayer }}</h1>
  </div>
</template>

<script>

export default {


  data() {
    return {
      dataLayer: window.laravelDataLayer
    }
  },

  computed: {},

  methods: {},

  components: {}
};
</script>
