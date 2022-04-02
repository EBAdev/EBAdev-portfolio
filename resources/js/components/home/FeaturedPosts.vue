<template>
  <!-- Featured section-->

  <div class="bg-slate-100 dark:bg-slate-900">
    <div class="container">
      <h1
        class="font-moonliteSolid pt-10 mb-4 underline decoration-blue-600 dark:decoration-blue-500 decoration-4 underline-offset-4 text-center text-slate-800 dark:text-white text-6xl"
      >
        Featured Blog Posts
      </h1>
      <p
        class="font-sans mb-10 text-center text-slate-800 dark:text-white text-xl"
      >
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
import PostsHorizontal from '@homeComponents/PostsHorizontal'
import NewsletterSignup from '@homeComponents/NewsletterSignup'
export default {
  components: { PostsHorizontal, NewsletterSignup },
}
</script>
<style lang=""></style>
