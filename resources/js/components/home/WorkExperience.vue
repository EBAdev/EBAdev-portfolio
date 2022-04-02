<template>
  <div class="flex sm:flex-row flex-col items-center p-4">
    <img :src="img_path" class="aspect-square h-20 overflow-hidden" />
    <h1
      class="font-moonliteSolid pl-4 text-slate-800 dark:text-slate-100 text-6xl tracking-wider"
    >
      {{ title }}
    </h1>
  </div>
</template>

<script>
export default {
  props: {
    img_path: String,
    title: String,
  },
}
</script>
