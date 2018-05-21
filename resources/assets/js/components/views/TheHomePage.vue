<template>
  <div>

    <ul>
      <li v-for="post in postsList">
        <router-link :to="{ name: 'post', params: { post: post.slug } }">Título: {{ post.title }}</router-link>
      </li>
    </ul>

  </div>
</template>

<script>

export default {
  data() {
    return {}
  },

  computed: {
    postsList() {
      return this.$store.state.post_summaries
    }
  },

  methods: {},

  components: {}
};
</script>
