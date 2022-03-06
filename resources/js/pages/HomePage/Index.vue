<template lang="">
  <Head title="EBAdev - Home" />

  <HeroSection />
  <FeaturedPosts />
  <MyExperience />
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
