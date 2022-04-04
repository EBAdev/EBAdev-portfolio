<template>
  <Head title="EBAdev - Posts" />
  <div class="flex w-full flex-row justify-center">
    <AppSearchbar class="max-w-[45rem]" :search="filters.search" />
  </div>
  <div class="flex flex-col items-center space-y-8 pt-4">
    <AppPostCard v-for="post in posts.data" :key="post.id" :post="post" />

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
  props: {
    posts: { type: Object, required: true },
    filters: { type: Object, required: true },
  },
}
</script>
