<template>
  <page :classes="{'c-page--padded-top': false}">

    <!-- -->
    <div class="c-home-slider">
      <swiper :options="swiperOption" ref="mySwiper">

        <swiper-slide><div class="c-home-slider__slide">I'm Slide 1</div></swiper-slide>
        <swiper-slide><div class="c-home-slider__slide">I'm Slide 2</div></swiper-slide>
        <swiper-slide><div class="c-home-slider__slide">I'm Slide 3</div></swiper-slide>
        <swiper-slide><div class="c-home-slider__slide">I'm Slide 4</div></swiper-slide>
        <swiper-slide><div class="c-home-slider__slide">I'm Slide 5</div></swiper-slide>
        <swiper-slide><div class="c-home-slider__slide">I'm Slide 6</div></swiper-slide>
        <swiper-slide><div class="c-home-slider__slide">I'm Slide 7</div></swiper-slide>

        <div class="swiper-button-prev swiper-button-white" slot="button-prev" v-if="false"></div>
        <div class="swiper-button-next swiper-button-white" slot="button-next" v-if="false"></div>
        <div class="swiper-pagination" slot="pagination"></div>

      </swiper>
    </div>


    <!-- Recent Projects -->
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



    <!-- Contact Form -->

  </page>
</template>

<script>
  import 'swiper/dist/css/swiper.css';
  import { swiper, swiperSlide } from 'vue-awesome-swiper';

  import Page from './../shared/Page';

  import {getPost} from './../../services';
  import {homeSlider} from './../../config/awesome-swiper-config';

  export default {
    name: 'TheHomePage',

    metaInfo: {
      title: 'My Awesome Webapp',
      titleTemplate: null
    },

    data() {
      return {
        swiperOption: homeSlider
      }
    },

    computed: {
      postsList() {
        return this.$store.state.post_summaries;
      }
    },

    methods: {
      loadPost: function(slug){
        getPost(slug);
      }
    },

    components: {
      Page,
      swiper,
      swiperSlide
    }
  };
</script>
