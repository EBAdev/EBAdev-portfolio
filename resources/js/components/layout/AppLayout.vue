<template>
  <Head title="EBAdev" />
  <div>
    <TheHeader />

    <slot />
  </div>
</template>

<script>
import TheHeader from './TheHeader'
export default {
  components: {
    TheHeader,
  },
}
</script>
