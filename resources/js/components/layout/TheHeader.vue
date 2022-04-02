<template>
  <nav
    class="bg-white dark:bg-slate-900 text-black dark:text-white z-50 sticky top-0"
  >
    <div class="container flex items-center justify-between py-4">
      <a href="/" class="flex-none">
        <i class="text-2xl fa-solid fa-laptop mr-4"></i>
        <span
          class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
        >
          EBAdev
        </span>
      </a>
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
          class="hover:bg-blue-600 ring font-medium ring-slate-100 dark:ring-slate-800 hover:ring-0 dark:text-white hover:text-white rounded-md px-6 py-2 uppercase"
        >
          Sign Up
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
