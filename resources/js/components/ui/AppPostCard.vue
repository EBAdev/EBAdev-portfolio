<template>
  <Link
    class="z-10 flex shrink-0 snap-center snap-always justify-center p-4 px-4 text-center sm:text-left"
    :href="'/posts/' + post.slug"
  >
    <div
      class="flex max-w-xs flex-col rounded-lg bg-white shadow-xl transition-shadow duration-500 hover:shadow-blue-700/30 dark:bg-slate-800 sm:max-w-md md:max-w-2xl md:flex-row"
    >
      <img
        class="h-52 rounded-t-lg object-cover md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
        src="/images/firefighter.jpg"
        alt=""
      />
      <div class="flex flex-col justify-start px-4 pt-2 pb-4 sm:p-6">
        <CategoryButton
          :category-color="post.category_color"
          :href="'/categories/' + post.category_slug"
          :text-large="false"
          class="block text-center sm:hidden"
        >
          {{ post.category }}
        </CategoryButton>
        <h5 class="mb-2 text-xl font-medium text-slate-900 dark:text-white">
          {{ post.title }}
        </h5>
        <div class="flex flex-col justify-between sm:flex-row">
          <p class="text-base text-slate-700 dark:text-slate-200 sm:mb-4">
            Written by
            <Link
              class="hover:text-blue-500"
              :href="'/authors/' + post.author_username"
            >
              {{ post.author }}
            </Link>
          </p>
          <CategoryButton
            :category-color="post.category_color"
            :href="'/categories/' + post.category_slug"
            :text-large="false"
            class="hidden text-left sm:block sm:pr-4"
          >
            {{ post.category }}
          </CategoryButton>
        </div>
        <p class="mb-4 text-left text-base text-slate-700 dark:text-slate-200">
          {{ post.excerpt }}
        </p>
        <div class="flex flex-row-reverse items-center justify-between">
          <div class="flex items-center justify-end text-blue-500">
            Read more
            <i class="fas fa-arrow-right ml-2"></i>
          </div>
          <p class="text-xs text-slate-600 dark:text-slate-300">
            Last updated {{ post.date }}
          </p>
        </div>
      </div>
    </div>
  </Link>
</template>
<script>
import CategoryButton from './AppCategoryButton'
export default {
  components: {
    CategoryButton,
  },
  props: {
    post: {
      type: Object,
      required: true,
    },
  },
}
</script>
