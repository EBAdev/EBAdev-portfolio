<template lang="">
  <Head title="EBAdev - Home" />
  <HeroSection />
  <FeaturedPosts />
  <MyExperience />
</template>

<script>
import HeroSection from "@homepage/HeroSection.vue";
import FeaturedPosts from "@homepage/FeaturedPosts";
import MyExperience from "@homepage/MyExperience";
export default {
  components: {
    HeroSection,
    FeaturedPosts,
    MyExperience,
  },
};
</script>
