<template lang="">
  <div
    class="flex snap-x snap-mandatory flex-row space-x-4 overflow-x-auto pb-8"
  >
    <AppPostCard v-for="p in posts" :key="p.id" :post="p" />
  </div>
</template>
<script>
import AppPostCard from '@ui/AppPostCard'
export default {
  components: { AppPostCard },
  props: {
    posts: {
      type: Object,
      required: true,
    },
  },
}
</script>
