<template lang="">
  <!-- Featured section-->
  <div class="bg-gray-100">
    <div class="container">
      <h1
        class="font-moonliteSolid pt-10 mb-4 underline decoration-blue-600 decoration-4 underline-offset-4 text-center text-neutral-800 text-6xl"
      >
        Featured Blog Posts
      </h1>
      <p class="font-sans mb-10 text-center text-neutral-800 text-xl">
        I write a blog now and then, you should definitly read some of my posts!
        Hope theres something of your liking.
      </p>
    </div>

    <PostsHorizontal />

    <!-- Newsletter  Component-->
    <NewsletterSignup />
  </div>
</template>
<script>
import PostsHorizontal from "../../components/home/PostsHorizontal";
import NewsletterSignup from "../../components/home/NewsletterSignup";
export default {
  components: { PostsHorizontal, NewsletterSignup },
};
</script>
<style lang=""></style>
