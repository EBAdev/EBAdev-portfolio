<template>
  <div class="flex flex-col items-center p-4 sm:flex-row">
    <img :src="imgPath" class="aspect-square h-20 overflow-hidden" />
    <h1
      class="pl-4 font-moonliteSolid text-6xl tracking-wider text-slate-800 dark:text-slate-100"
    >
      {{ workTitle }}
    </h1>
  </div>
</template>

<script>
export default {
  props: { imgPath: { type: String, required:true }, workTitle: { type: String, required:true }},
}
</script>
