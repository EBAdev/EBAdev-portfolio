<template>
  <nav
    class="bg-white dark:bg-slate-900 text-black dark:text-white z-50 sticky top-0"
  >
    <div class="container flex items-center justify-between py-4">
      <div class="flex-none">EBAdev - logo</div>
      <div class="hidden sm:flex justify-end items-center md:gap-8 gap-[1rem]">
        <NavLink href="/" :active="$page.component.startsWith('HomePage')">
          Home
        </NavLink>
        <NavLink
          href="/posts"
          :active="$page.component.startsWith('PostsPage')"
        >
          Posts
        </NavLink>
        <NavLink
          href="/about"
          :active="$page.component.startsWith('AboutPage')"
        >
          About
        </NavLink>
        <NavLink
          href="/contact"
          :active="$page.component.startsWith('ContactPage')"
        >
          Contact
        </NavLink>

        <button
          type="button"
          class="bg-blue-600 text-white rounded-md px-7 py-3 uppercase"
        >
          Login
        </button>
      </div>
      <div class="flex sm:hidden flex-1 justify-end">
        <i class="text-2xl fas fa-bars"></i>
      </div>
    </div>
  </nav>
</template>

<script>
import NavLink from '@ui/AppNavLink'
export default {
  components: {
    NavLink,
  },
}
</script>
