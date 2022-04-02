<template>
  <nav class="bg-white z-50 sticky top-0">
    <div class="container flex items-center justify-between py-4">
      <div class="flex-none">EBAdev - logo</div>
      <div class="hidden sm:flex justify-end items-center md:gap-8 gap-[1rem]">
        <NavLink href="/" :active="$page.component === 'HomePage/Index'">
          Home
        </NavLink>
        <NavLink href="/posts" :active="$page.component === 'PostsPage'"
          >Posts
        </NavLink>
        <NavLink href="/about" :active="$page.component === 'AboutPage'"
          >About
        </NavLink>
        <NavLink href="/contact" :active="$page.component === 'ContactPage'"
          >Contact
        </NavLink>

        <button
          class="px-4 py-2 text-gray-400/50 hover:text-gray-600 hover:bg-gray-400/50 rounded-2xl"
        >
          <i class="text-2xl fa-solid fa-moon"></i>
          <i class="text-2xl fa-regular fa-sun hidden"></i>
        </button>

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
