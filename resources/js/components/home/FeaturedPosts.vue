<template>
  <!-- Featured section-->

  <div class="bg-slate-100 dark:bg-slate-900">
    <div class="container">
      <h1
        class="mb-4 pt-10 text-center font-moonliteSolid text-6xl text-slate-800 underline decoration-blue-600 decoration-4 underline-offset-4 dark:text-white dark:decoration-blue-500"
      >
        Featured Blog Posts
      </h1>
      <p
        class="mb-10 text-center font-sans text-xl text-slate-800 dark:text-white"
      >
        I write a blog now and then, you should definitly read some of my posts!
        Hope theres something of your liking.
      </p>
    </div>

    <PostsHorizontal :posts="posts" />

    <!-- Newsletter  Component-->
    <NewsletterSignup />
  </div>
</template>
<script>
import PostsHorizontal from '@homeComponents/PostsHorizontal'
import NewsletterSignup from '@homeComponents/NewsletterSignup'
export default {
  components: { PostsHorizontal, NewsletterSignup },
  props: { posts: { type: Object, required: true } },
}
</script>

