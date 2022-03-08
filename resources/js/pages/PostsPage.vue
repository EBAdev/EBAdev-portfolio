<template lang="">
  <Head title="EBAdev - Posts" />

  <div class="text-xl">This is a Posts page</div>
  <p v-for="post in posts" :key="post.id" v-text="post.title"></p>
</template>

<script>
import Layout from "../components/layout/AppLayout";
export default {
  layout: Layout,
  props: { posts: Array },
};
</script>
