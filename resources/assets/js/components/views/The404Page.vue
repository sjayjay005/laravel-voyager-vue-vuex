<template>
  <page :classes="{'c-page--padded-top': true}">

    <div class="c-section">
      <div class="l-wrapper">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1>404</h1>
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
