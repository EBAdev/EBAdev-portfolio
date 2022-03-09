<template lang="">
  <Head title="EBAdev - Posts" />

  <div class="flex flex-col items-center">
    <AppPostCard
      v-for="post in posts"
      :key="post.id"
      :category="post.category"
      :category_color="post.category_color"
      :title="post.title"
      :author="post.author"
      :date="post.date"
      imgURL="/assets/images/posts/study.jpg"
      >{{ post.excerpt }}</AppPostCard
    >
  </div>
</template>

<script>
import AppPostCard from "../components/ui/AppPostCard";
export default {
  components: {
    AppPostCard,
  },
  props: { posts: Array },
};
</script>
