<template>
  <Head title="EBAdev - Posts" />
  <div class="flex flex-col items-center">
    <AppPostCard
      v-for="post in posts.data"
      :key="post.id"
      :category="post.category"
      :category_color="post.category_color"
      :title="post.title"
      :author="post.author"
      :date="post.date"
      imgURL="/assets/images/posts/study.jpg"
      >{{ post.excerpt }}</AppPostCard
    >

    <AppPaginator :links="posts.links" />
  </div>
</template>

<script>
import AppPostCard from '@ui/AppPostCard'
import AppPaginator from '@ui/AppPaginator'

export default {
  components: {
    AppPostCard,
    AppPaginator,
  },
  props: { posts: Object },
}
</script>
