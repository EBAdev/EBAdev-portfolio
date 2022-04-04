<template lang="">
  <Head title="EBAdev - Home" />
  <HeroSection />
  <FeaturedPosts :posts="posts" />
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
  props: { posts: { type: Object, required: true }  },
}
</script>
