<template>
  <Head title="EBAdev" />

  <TheHeader />

  <slot />

  <TheFooter />
</template>

<script>
import TheHeader from '@layout/TheHeader'
import TheFooter from '@layout/TheFooter'
export default {
  components: {
    TheHeader,
    TheFooter,
  },
}
</script>
