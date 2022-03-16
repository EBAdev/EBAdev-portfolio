<template lang="">
  <Head title="EBAdev - Home" />
  <HeroSection />
  <FeaturedPosts />
  <MyExperience />
</template>

<script>
import HeroSection from '@homeComponents/HeroSection'
import FeaturedPosts from '@homeComponents/FeaturedPosts'
import MyExperience from '@homeComponents/MyExperience'
export default {
  components: {
    HeroSection,
    FeaturedPosts,
    MyExperience,
  },
}
</script>
