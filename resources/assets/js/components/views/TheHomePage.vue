<template>
  <page :classes="{'c-page--padded-top': false}">

    <div class="c-section">
      <div class="l-wrapper">


        <div class="c-container c-container--card">

          <div class="c-post-card" v-for="post in postsList" @mouseover="loadPost(post.slug)">
            <router-link :to="{ name: 'post', params: { post: post.slug } }">
              <div class="c-post-card__head">
                <img :src="post.thumb">
              </div>
              <div class="c-post-card__body">
                <p>{{ post.title }}</p>
              </div>
            </router-link>
          </div>

        </div>

      </div>
    </div>

  </page>
</template>

<script>
  import Page from './../shared/Page';
  import {getPost} from './../../services';

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

    methods: {
      loadPost: function(slug){
        getPost(slug)
      }
    },

    components: { Page }
  };
</script>
