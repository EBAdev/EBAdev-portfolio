<template lang="">
  <Head title="EBAdev - Home" />
  <HeroSection />
  <FeaturedPosts />
  <MyExperience />
</template>

<script>
import HeroSection from "./HeroSection";
import FeaturedPosts from "./FeaturedPosts";
import MyExperience from "./MyExperience";
export default {
  components: {
    HeroSection,
    FeaturedPosts,
    MyExperience,
  },
};
</script>
