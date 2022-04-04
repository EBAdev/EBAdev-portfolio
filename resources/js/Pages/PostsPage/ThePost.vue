<template>
  <!-- eslint-disable vue/no-v-html -->
  <div class="my-4 w-full">
    <div
      class="prose prose-slate mx-auto p-4 text-center prose-a:text-blue-500 prose-img:rounded-xl dark:prose-invert sm:text-left md:p-0"
      v-html="post.title"
    />

    <PostAuthorSection :post="post" />

    <article
      class="prose prose-slate mx-auto p-6 prose-a:text-blue-500 prose-img:rounded-xl dark:prose-invert md:p-0"
      v-html="post.body"
    />
  </div>
</template>

<script>
import PostAuthorSection from '@homeComponents/PostAuthorSection'
export default {
  components: {
    PostAuthorSection,
  },
  props: {
    post: {
      type: Object,
      required: true,
    },
  },
}
</script>

<style></style>
