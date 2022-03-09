<template>
  <Link
    class="text-sm font-medium text-center py-1"
    :style="{ color: category_color }"
  >
    <slot />
  </Link>
</template>

<script>
//TODO: make color change by hover.
export default {
  props: { category_color: String },
};
</script>
