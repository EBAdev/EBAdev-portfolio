<template>
  <div class="my-4 w-full">
    <div
      class="mx-auto prose prose-img:rounded-xl prose-a:text-blue-500"
      v-html="post.title"
    />

    <PostAuthorSection v-bind:post="post" />

    <article
      class="mx-auto prose prose-img:rounded-xl prose-a:text-blue-500"
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
