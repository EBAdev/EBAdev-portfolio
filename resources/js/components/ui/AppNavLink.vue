<template>
  <Link
    as="a"
    class="font-medium uppercase hover:text-blue-600 dark:hover:text-blue-400"
    :class="{
      ' text-blue-500 hover:text-blue-500 dark:hover:text-blue-500': active,
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
