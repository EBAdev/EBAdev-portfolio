<template>
  <Link
    class="font-medium uppercase dark:hover:text-blue-400 hover:text-blue-600"
    :class="{
      ' text-blue-500 dark:hover:text-blue-500 hover:text-blue-500': active,
    }"
  >
    <slot />
  </Link>
</template>

<script>
export default {
  props: {
    active: Boolean,
  },
}
</script>
