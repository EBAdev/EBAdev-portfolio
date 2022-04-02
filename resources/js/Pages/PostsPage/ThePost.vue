<template>
  <div class="my-4 w-full">
    <div
      class="mx-auto text-center sm:text-left md:p-0 p-4 prose prose-slate dark:prose-invert prose-img:rounded-xl prose-a:text-blue-500"
      v-html="post.title"
    />

    <PostAuthorSection v-bind:post="post" />

    <article
      class="mx-auto md:p-0 p-6 prose prose-slate dark:prose-invert prose-img:rounded-xl prose-a:text-blue-500"
      v-html="post.body"
    />
  </div>
</template>

<script>
import PostAuthorSection from '@homeComponents/PostAuthorSection'
export default {
  props: {
    post: Object,
  },
  components: {
    PostAuthorSection,
  },
}
</script>

<style></style>
