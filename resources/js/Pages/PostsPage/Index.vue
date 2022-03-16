<template>
  <Head title="EBAdev - Posts" />
  <div class="flex flex-row justify-center w-full">
    <AppSearchbar class="max-w-[45rem]" :search="filters.search" />
  </div>
  <div class="flex flex-col items-center">
    <AppPostCard
      v-for="post in posts.data"
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

    <AppPaginator :links="posts.links" />
  </div>
</template>

<script>
import AppPostCard from '@ui/AppPostCard'
import AppSearchbar from '@ui/AppSearchbar'
import AppPaginator from '@ui/AppPaginator'

export default {
  components: {
    AppPostCard,
    AppPaginator,
    AppSearchbar,
  },
  props: { posts: Object, filters: Object },
}
</script>
