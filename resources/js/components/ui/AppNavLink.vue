<template>
  <Link
    class="font-medium uppercase"
    :class="{ ' text-blue-500 dark:text-blue-600': active }"
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
