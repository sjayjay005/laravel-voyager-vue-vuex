<template>
  <div v-if="post">
    <h1>Post page</h1>
    <br>

    <p>{{ post.id }}</p>
    <p>{{ post.author_id }}</p>
    <p>{{ post.category_id }}</p>
    <p>{{ post.title }}</p>
    <p>{{ post.seo_title }}</p>
    <p>{{ post.excerpt }}</p>
    <p>{{ post.image }}</p>
    <p>{{ post.slug }}</p>
    <p>{{ post.meta_description }}</p>
    <p>{{ post.meta_keywords }}</p>
    <p>{{ post.status }}</p>
    <p>{{ post.featured }}</p>
    <p>{{ post.created_at }}</p>
    <p>{{ post.updated_at }}</p>


  </div>
</template>

<script>

export default {

  name: "ThePost",

  mounted() {},

  destroyed() {},

  props: [],

  data() {
    return {}
  },

  computed: {
    post() {
     return this.$store.getters.getPost(this.$route.params.post)
   }
  },

  methods: {},

  watch: {},

  components: {}
};
</script>
