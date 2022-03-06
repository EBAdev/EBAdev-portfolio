<template>
  <nav class="bg-white z-50 sticky top-0">
    <div name="nav" class="container flex items-center py-4">
      <div class="mb-3 shrink-0">Logo</div>
      <div class="hidden sm:flex flex-1 justify-end items-center gap-8">
        <nav-link href="/" :active="$page.component === 'Home'">
          Home
        </nav-link>
        <nav-link href="/posts" :active="$page.component === 'Posts'"
          >Posts
        </nav-link>
        <nav-link href="/about" :active="$page.component === 'About'"
          >About
        </nav-link>
        <nav-link href="/contact" :active="$page.component === 'Contact'"
          >Contact
        </nav-link>

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
import NavLink from "./NavLink";
export default {
  components: {
    NavLink,
  },
};
</script>
