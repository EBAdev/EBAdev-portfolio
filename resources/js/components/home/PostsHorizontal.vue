<template lang="">
  <div
    class="snap-x snap-mandatory flex flex-row overflow-x-auto pb-8 space-x-4"
  >
    <!-- Posts card Components-->
    <AppPostCard
      v-for="post in posts"
      :key="post.id"
      :category="post.category"
      :category_color="post.category_color"
      :title="post.title"
      :author="post.author"
      :date="post.date"
      :slug="post.slug"
      imgURL="/assets/images/posts/study.jpg"
      >{{ post.excerpt }}</AppPostCard
    >
  </div>
</template>
<script>
import AppPostCard from '@ui/AppPostCard'
export default {
  props: { posts: Array },
  components: { AppPostCard },
}
</script>
