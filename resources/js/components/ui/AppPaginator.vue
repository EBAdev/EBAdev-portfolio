<template>
  <div
    class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
    aria-label="Pagination"
  >
    <Component
      :is="link.url ? 'Link' : 'span'"
      v-for="link in links"
      :key="link.id"
      :href="link.url"
      v-html="link.label"
      class="relative inline-flex px-4 py-2 items-center border font-medium text-sm"
      :class="{
        //TODO 'rounded-l-md': (key = 0), and add ... block in the middel
        hidden: !link.url,
        'z-10 bg-indigo-50 border-indigo-500 text-indigo-600': link.active,
        'border-gray-300 bg-white text-gray-500 hover:bg-gray-50': !link.active,
      }"
    />
  </div>
</template>

<script>
export default {
  props: { links: Array },
}
</script>
