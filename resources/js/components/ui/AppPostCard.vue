<template>
  <Link
    class="snap-center snap-always shrink-0 p-4 z-20 flex justify-center px-4 text-center sm:text-left"
    v-bind:href="'/posts/' + slug"
  >
    <div
      class="flex flex-col md:flex-row md:max-w-2xl sm:max-w-md max-w-xs rounded-lg bg-white dark:bg-slate-800 shadow-xl hover:shadow-blue-700/30 transition-shadow duration-500"
    >
      <img
        class="h-52 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg"
        src="/images/firefighter.jpg"
        alt=""
      />
      <div class="sm:p-6 pt-2 pb-4 px-4 flex flex-col justify-start">
        <CategoryButton
          v-bind:category_color="category_color"
          v-bind:href="'/categories/' + category_slug"
          :text_large="false"
          class="sm:hidden block text-center"
        >
          {{ category }}
        </CategoryButton>
        <h5 class="text-slate-900 dark:text-white text-xl font-medium mb-2">
          {{ title }}
        </h5>
        <div class="flex flex-col sm:flex-row justify-between">
          <p class="text-slate-700 dark:text-slate-200 text-base sm:mb-4">
            Written by {{ author }}
          </p>
          <CategoryButton
            v-bind:category_color="category_color"
            v-bind:href="'/categories/' + category_slug"
            :text_large="false"
            class="sm:pr-4 text-left hidden sm:block"
          >
            {{ category }}
          </CategoryButton>
        </div>
        <p class="text-slate-700 dark:text-slate-200 text-base mb-4 text-left">
          <slot />
        </p>
        <div class="flex flex-row-reverse justify-between items-center">
          <div class="text-blue-500 flex items-center justify-end">
            Read more
            <i class="ml-2 fas fa-arrow-right"></i>
          </div>
          <p class="text-slate-600 dark:text-slate-300 text-xs">
            Last updated {{ date }}
          </p>
        </div>
      </div>
    </div>
  </Link>
</template>
<script>
//TODO make links to categories and author work
import CategoryButton from './AppCategoryButton'
export default {
  components: {
    CategoryButton,
  },
  props: {
    category: String,
    category_color: String,
    category_slug: String,
    title: String,
    author: String,
    date: String,
    imgURL: String,
    slug: String,
  },
}
</script>
