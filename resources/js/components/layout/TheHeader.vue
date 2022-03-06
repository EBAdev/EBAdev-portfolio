<template>
  <nav class="bg-white z-50 sticky top-0">
    <div name="nav" class="container flex items-center py-4">
      <div class="mb-3 shrink-0">Logo</div>
      <div class="hidden sm:flex flex-1 justify-end items-center gap-8">
        <AppNavLink href="/" :active="$page.component === 'HomePage/Index'">
          Home
        </AppNavLink>
        <AppNavLink href="/posts" :active="$page.component === 'PostsPage'"
          >Posts
        </AppNavLink>
        <AppNavLink href="/about" :active="$page.component === 'AboutPage'"
          >About
        </AppNavLink>
        <AppNavLink href="/contact" :active="$page.component === 'ContactPage'"
          >Contact
        </AppNavLink>

        <button
          type="button"
          class="bg-blue-600 text-white rounded-md px-7 py-3 uppercase"
        >
          Login
        </button>
      </div>
      <div name="side-nav" class="flex sm:hidden flex-1 justify-end">
        <i class="text-2xl fas fa-bars"></i>
      </div>
    </div>
  </nav>
</template>

<script>
import AppNavLink from "../ui/AppNavLink";
export default {
  components: {
    AppNavLink,
  },
};
</script>
