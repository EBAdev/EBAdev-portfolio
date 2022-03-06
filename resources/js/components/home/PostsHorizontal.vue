<template lang="">
  <div class="flex snap-x snap-mandatory overflow-x-auto">
    <!-- Posts card Components-->
    <AppPostCard
      theme="Firefighting"
      title="My life in the DEMA"
      author="Emil Beck Aagaard"
      date="today"
      imgURL="/assets/images/posts/firefighter.jpg"
    >
      This is a quick summary
    </AppPostCard>
    <AppPostCard
      theme="Project development"
      title="Brainstorming"
      author="Emil Beck Aagaard"
      date="last wednesday"
      imgURL="/assets/images/posts/idea.jpg"
    >
      This is a quick summary
    </AppPostCard>
    <AppPostCard
      theme="Finance"
      title="Investing in indexfunds"
      author="Emil Beck Aagaard"
      date="last monday"
      imgURL="/assets/images/posts/investing.jpg"
    >
      This is a quick summary
    </AppPostCard>
    <AppPostCard
      theme="Programming"
      title="The VITL tech stack"
      author="Emil Beck Aagaard"
      date="1 hour ago"
      imgURL="/assets/images/posts/programming.jpg"
    >
      This is a quick summary
    </AppPostCard>
    <AppPostCard
      theme="Studying"
      title="How to learn fast"
      author="Emil Beck Aagaard"
      date="08/06/2021"
      imgURL="/assets/images/posts/study.jpg"
    >
      This is a quick summary
    </AppPostCard>
  </div>
</template>
<script>
import AppPostCard from "../ui/AppPostCard";
export default {
  components: { AppPostCard },
};
</script>
