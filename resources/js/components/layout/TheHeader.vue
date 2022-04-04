<template>
  <nav
    class="sticky top-0 z-50 bg-white text-black dark:bg-slate-900 dark:text-white"
  >
    <div class="container flex items-center justify-between py-4">
      <a href="/" class="flex-none">
        <i class="fa-solid fa-laptop mr-4 text-2xl"></i>
        <span
          class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white"
        >
          EBAdev
        </span>
      </a>
      <div class="hidden items-center justify-end gap-[1rem] sm:flex md:gap-8">
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
          class="rounded-md px-6 py-2 font-medium uppercase ring ring-slate-100 hover:bg-blue-600 hover:text-white hover:ring-0 dark:text-white dark:ring-slate-800"
        >
          Sign Up
        </button>
      </div>
      <div class="flex flex-1 justify-end sm:hidden">
        <i class="fas fa-bars text-2xl"></i>
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
