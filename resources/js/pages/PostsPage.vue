<template lang="">
  <Head title="EBAdev - Posts" />

  <div class="flex flex-col items-center">
    <AppPostCard
      v-for="post in posts"
      :key="post.id"
      :category="post.category_id"
      :title="post.title"
      :author="post.user_id"
      :date="post.created_at"
      imgURL="/assets/images/posts/study.jpg"
    />
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
