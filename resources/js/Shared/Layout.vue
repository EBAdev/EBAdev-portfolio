<template>
  <Head title="EBAdev" />

  <Nav />

  <slot />

  <footer class="bg-gray-600 relative z-20">
    <div class="container">small footer</div>
  </footer>
</template>

<script>
import Nav from "./Nav";
export default {
  components: {
    Nav,
  },
};
</script>
