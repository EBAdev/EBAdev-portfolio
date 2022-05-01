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
          class="rounded-md px-6 py-2 font-medium uppercase ring ring-slate-100 hover:bg-blue-600 hover:text-white hover:ring-0 dark:text-white dark:ring-slate-800"
        >
          Sign Up
        </button>
      </div>
      <!--- Mobile nav-->
      <div class="flex flex-1 justify-end sm:hidden">
        <i
          :class="
            !isOpen
              ? 'fas fa-bars text-black focus:text-blue-400 dark:text-white dark:focus:text-blue-600'
              : 'fa-solid fa-xmark text-blue-600 hover:text-blue-400 dark:text-blue-400 dark:hover:text-blue-600'
          "
          class="text-2xl"
          @click="isOpen = !isOpen"
        />
      </div>
      <MobileNav
        v-show="isOpen"
        :show="isOpen"
        class="z-40 block sm:hidden"
        @close-nav="isOpen = false"
      />
    </div>
  </nav>
</template>

<script>
import NavLink from '@ui/AppNavLink'
import MobileNav from '@layout/MobileNav'
export default {
  components: {
    NavLink,
    MobileNav,
  },
  data() {
    return {
      isOpen: false,
    }
  },
}
</script>
