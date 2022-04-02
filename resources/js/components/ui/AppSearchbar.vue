<template>
  <div class="relative rounded-md shadow-sm mt-1 mx-4 w-full">
    <input
      v-model="search"
      type="text"
      name="query"
      class="peer focus:ring-indigo-500 focus:border-indigo-500 hover:placeholder:text-black dark:hover:placeholder:text-white pr-8 w-full border-slate-300 dark:border-slate-600 rounded-md dark:bg-slate-900 dark:text-white"
      placeholder="Search?"
    />
    <div
      class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-slate-500 peer-focus:text-indigo-500"
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

let props = defineProps({ search: String })

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
