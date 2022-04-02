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
        'z-10 bg-indigo-50 dark:bg-indigo-900 border-indigo-500 text-indigo-600 dark:text-indigo-300':
          link.active,
        'border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-500 dark:text-slate-300 hover:bg-gray-50 hover:dark:bg-indigo-900':
          !link.active,
      }"
    />
  </div>
</template>

<script>
export default {
  props: { links: Array },
}
</script>
