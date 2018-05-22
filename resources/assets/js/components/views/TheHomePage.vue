<template>
  <page :classes="{'c-page--padded-top': false}">

    <div class="c-section">
      <div class="l-wrapper">

        <ul>
          <li v-for="post in postsList">
            <router-link :to="{ name: 'post', params: { post: post.slug } }">Título: {{ post.title }}</router-link>
          </li>
        </ul>

      </div>
    </div>


  </page>
</template>

<script>
import Page from './../shared/Page'

export default {
  name: 'TheHomePage',

  metaInfo: {
    title: 'My Awesome Webapp',
    titleTemplate: null
  },

  data() {
    return {}
  },

  computed: {
    postsList() {
      return this.$store.state.post_summaries
    }
  },

  methods: {},

  components: { Page }
};
</script>
