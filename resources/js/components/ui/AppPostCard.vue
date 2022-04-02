<template>
  <div
    class="mx-4 mt-6 mb-10 shrink-0 dark:text-slate-100 bg-blue-50 dark:bg-slate-800 max-w-[45rem] h-80 shadow-md transition-all duration-700 hover:shadow-xl dark:hover:shadow-lg hover:shadow-blue-600/30 dark:hover:shadow-blue-600/50 rounded-md snap-center"
  >
    <div class="flex w-full">
      <div class="flex w-1/3 m-3 h-72 items-center">
        <img
          class="rounded-full object-cover aspect-square h-30"
          :src="imgURL"
          alt="a picture of a firefighter"
        />
      </div>
      <div class="flex flex-col h-72 ml-4 w-2/3">
        <div class="flex space-x-4 pb-2 justify-start mt-4">
          <CategoryButton
            v-bind:category_color="category_color"
            v-bind:href="'categories/' + category"
            :text_large="false"
          >
            {{ category }}
          </CategoryButton>
        </div>
        <Link
          v-bind:href="'posts/' + slug"
          class="font-serif capitalize font-bold text-2xl mb-2 mr-4 text-slate-800 dark:text-slate-100 tracking-widest"
        >
          {{ title }}
        </Link>
        <div class="flex mb-2 font-serif whitespace-pre-wrap">
          <p class="font-light text-gray-700 dark:text-slate-200">By&nbsp;</p>
          <Link
            href="#"
            class="font-semibold text-md text-slate-700 dark:text-slate-200 hover:text-blue-600"
          >
            {{ author }}
          </Link>
          <p class="font-light text-gray-700 dark:text-slate-200">
            ,&nbsp;Posted&nbsp;{{ date }}
          </p>
        </div>
        <p
          class="font-serif text-ellipsis overflow-hidden break-words mb-4 whitespace-pre-wrap mr-4 leading-8"
        >
          <slot />
        </p>
        <div class="flex justify-end mr-8">
          <Link
            v-bind:href="'posts/' + slug"
            class="text-blue-500 hover:text-blue-600 tracking-wider"
          >
            Continue Reading
            <i class="fas fa-arrow-right"></i>
          </Link>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
//TODO ADD responsive design to mobile and featured views. Make links work
import CategoryButton from './AppCategoryButton'
export default {
  components: {
    CategoryButton,
  },
  props: {
    category: String,
    category_color: String,
    title: String,
    author: String,
    date: String,
    imgURL: String,
    slug: String,
  },
}
</script>
