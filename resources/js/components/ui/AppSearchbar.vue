<template>
  <div class="relative mx-4 mt-1 w-full rounded-md shadow-sm">
    <input
      v-model="search"
      type="text"
      name="query"
      class="peer w-full rounded-md border-slate-300 pr-8 hover:placeholder:text-black focus:border-indigo-500 focus:ring-indigo-500 dark:border-slate-600 dark:bg-slate-900 dark:text-white dark:hover:placeholder:text-white"
      placeholder="Search?"
    />
    <div
      class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3 text-slate-500 peer-focus:text-indigo-500"
    >
      <span class="sm:text-sm">
        <i class="fa-solid fa-magnifying-glass"></i>
      </span>
    </div>
  </div>
</template>

<script setup>
/* eslint-disable no-undef */

import { ref, watch } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import debounce from 'lodash/debounce'

let props = defineProps({
  search: { type: String, required: false, default: null },
})

let search = ref(props.search)

watch(
  search,
  debounce(function (value) {
    Inertia.get(
      '/posts',
      { search: value },
      { preserveState: true, replace: true },
    )
  }, 300),
)
</script>
