<template lang="">
  <Head title="EBAdev - Home" />

  <HeroSection />
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
import Layout from "../../components/layout/AppLayout";
import HeroSection from "./HeroSection";
import FeaturedPosts from "./FeaturedPosts";
import MyExperience from "./MyExperience";
export default {
  layout: Layout,
  components: {
    HeroSection,
    FeaturedPosts,
    MyExperience,
  },
};
</script>
