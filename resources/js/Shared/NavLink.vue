<template>
  <Link class="font-medium uppercase" :class="{ ' text-blue-500': active }">
    <slot />
  </Link>
</template>

<script>
export default {
  props: {
    active: Boolean,
  },
};
</script>
