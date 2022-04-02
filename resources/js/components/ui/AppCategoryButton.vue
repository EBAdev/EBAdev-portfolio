<template>
  <Link
    class="font-medium"
    :class="[{ 'text-xl': text_large }, { 'text-sm': !text_large }]"
    :style="{ color: category_color }"
  >
    <slot />
  </Link>
</template>

<script>
//TODO: make color change by hover. Make text-size responsive to given space
export default {
  props: { category_color: String, text_large: Boolean },
}
</script>
