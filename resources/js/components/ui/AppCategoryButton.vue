<template>
  <Link
    class="font-medium"
    :class="[{ 'text-xl': textLarge }, { 'text-base': !textLarge }]"
    :style="{ color: categoryColor }"
  >
    <slot />
  </Link>
</template>

<script>
//TODO: make color change by hover.
export default {
  props: {
    categoryColor: { type: String, required: true },
    textLarge: Boolean,
  },
}
</script>
