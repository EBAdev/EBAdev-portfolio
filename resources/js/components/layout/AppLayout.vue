<template>
  <Head title="EBAdev" />

  <TheHeader />

  <slot />
</template>

<script>
import TheHeader from "./TheHeader";
export default {
  components: {
    TheHeader,
  },
};
</script>
