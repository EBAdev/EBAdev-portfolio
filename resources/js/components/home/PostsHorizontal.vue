<template lang="">
  <div class="flex snap-x snap-mandatory overflow-x-auto">
    <!-- Posts card Components-->
    <PostCard
      theme="Firefighting"
      title="My life in the DEMA"
      author="Emil Beck Aagaard"
      date=", Posted Last monday"
      imgURL="/assets/images/posts/firefighter.jpg"
    >
      This is a quick summary
    </PostCard>
    <PostCard
      theme="Project development"
      title="Brainstorming"
      author="Emil Beck Aagaard"
      date=", Posted Last monday"
      imgURL="/assets/images/posts/idea.jpg"
    >
      This is a quick summary
    </PostCard>
    <PostCard
      theme="Finance"
      title="Investing in indexfunds"
      author="Emil Beck Aagaard"
      date=", Posted Last monday"
      imgURL="/assets/images/posts/investing.jpg"
    >
      This is a quick summary
    </PostCard>
    <PostCard
      theme="Programming"
      title="The VITL tech stack"
      author="Emil Beck Aagaard"
      date=", Posted Last monday"
      imgURL="/assets/images/posts/programming.jpg"
    >
      This is a quick summary
    </PostCard>
    <PostCard
      theme="Studying"
      title="How to learn fast"
      author="Emil Beck Aagaard"
      date=", Posted Last monday"
      imgURL="/assets/images/posts/study.jpg"
    >
      This is a quick summary
    </PostCard>
  </div>
</template>
<script>
import PostCard from "./AppPostCard.vue";
export default {
  components: { PostCard },
};
</script>
