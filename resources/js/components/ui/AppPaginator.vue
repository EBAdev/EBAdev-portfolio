<template>
  <!-- eslint-disable vue/no-v-html -->
  <div
    class="relative z-0 inline-flex -space-x-px rounded-md shadow-sm"
    aria-label="Pagination"
  >
    <Component
      :is="link.url ? 'Link' : 'span'"
      v-for="link in links"
      :key="link.id"
      :href="link.url"
      class="relative inline-flex items-center border px-4 py-2 text-sm font-medium"
      :class="{
        //TODO 'rounded-l-md': (key = 0), and add ... block in the middel
        hidden: !link.url,
        'z-10 border-indigo-500 bg-indigo-50 text-indigo-600 dark:bg-indigo-900 dark:text-indigo-300':
          link.active,
        'border-slate-300 bg-white text-slate-500 hover:bg-gray-50 dark:border-slate-600 dark:bg-slate-900 dark:text-slate-300 hover:dark:bg-indigo-900':
          !link.active,
      }"
      v-html="link.label"
    />
  </div>
</template>

<script>
export default {
  props: { links: { type: Array, required: true } },
}
</script>
