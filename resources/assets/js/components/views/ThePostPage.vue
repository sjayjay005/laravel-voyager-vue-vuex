<template>
  <page :classes="{'c-page--padded-top': false}">
    <div class="c-post">


      <div class="c-post-head" v-if="post" :style="{'background-image': `url(${post.image})` }">

        <img :src="post.image" class="c-post-head__bg" v-if="false">

        <h1 class="c-post-head__title">{{ post.title }}</h1>
      </div>


      <div class="c-post-body" v-if="post">
        <div class="l-wrapper">

          <div v-html="post.body"></div>

        </div>
      </div>

    </div>
  </page>
</template>

<script>
import Page from './../shared/Page';

export default {

  name: 'ThePostPage',

  metaInfo () {
    return {
      title: this.post.title ? this.post.title : 'Loading',
      meta: [
        { vmid: 'description', name: 'description', content: this.post.excerpt ? this.post.excerpt : 'Loading' }
      ]
    }
  },

  mounted() {},

  destroyed() {},

  props: [],

  data() {
    return {}
  },

  computed: {
    post() {

      let fakePost = {
        id: '',
        author_id: '',
        category_id: '',
        title: '',
        seo_title: '',
        excerpt: '',
        image: '',
        slug: '',
        meta_description: '',
        meta_keywords: '',
        status: '',
        featured: '',
        created_at: '',
        updated_at: '',
      }

      let realPost = this.$store.getters.getPost(this.$route.params.post)

     return realPost ? realPost : fakePost
   }
  },

  methods: {},

  watch: {},

  components: { Page }
};
</script>
