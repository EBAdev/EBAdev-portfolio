<template lang="">
  <Head title="EBAdev - Home" />

  <Hero />
  <FeaturedPosts />
  <!-- My Experience -->
  <div id="my-work" class="container scroll-mt-14">
    <h1
      class="font-moonliteSolid mt-10 mb-4 underline decoration-blue-600 decoration-4 underline-offset-4 text-center text-neutral-800 text-6xl"
    >
      My past work
    </h1>
    <p class="font-sans mb-10 text-center text-neutral-800 text-xl">
      Read more about my past projects, languges that im proficient in, and much
      more.
    </p>
  </div>
</template>

<script>
import Layout from "../Shared/Layout";
import Hero from "./Components/Hero";
import FeaturedPosts from "./Components/FeaturedPosts";
import MyExperience from "./Components/MyExperience";
export default {
  layout: Layout,
  components: {
    Hero,
    FeaturedPosts,
    MyExperience,
  },
};
</script>
