<template>
  <Head title="EBAdev" />

  <TheHeader />

  <slot />

  <footer class="bg-gray-600 relative z-20">
    <div class="container">small footer</div>
  </footer>
</template>

<script>
import TheHeader from "./TheHeader";
export default {
  components: {
    TheHeader,
  },
};
</script>
