<template>
  <article
    class="prose prose-img:rounded-xl prose-a:text-indigo-500 mx-auto w-full"
    v-html="post.title + post.body"
  />
</template>

<script>
export default {
  props: {
    post: Object,
  },
}
</script>

<style></style>
