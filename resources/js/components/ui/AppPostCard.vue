<template lang="">
  <div
    class="mx-4 mt-6 mb-10 shrink-0 bg-blue-50 w-40 sm:w-80 md:w-96 lg:w-[45rem] h-80 shadow-md transition-all duration-700 hover:shadow-xl hover:shadow-blue-600/30 rounded-md snap-center"
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
          <CategoryButton :category_color="category_color" href="">
            {{ category }}
          </CategoryButton>
        </div>
        <a
          href=""
          class="font-serif capitalize font-bold text-2xl mb-2 mr-4 text-neutral-800 tracking-widest"
        >
          {{ title }}</a
        >
        <div class="flex mb-2 font-serif whitespace-pre-wrap">
          <p class="font-light text-gray-700">By&nbsp;</p>
          <a class="font-semibold text-md text-gray-700 hover:text-blue-600">
            {{ author }}</a
          >
          <p class="font-light text-gray-700">, Posted {{ date }}</p>
        </div>
        <p
          class="font-serif text-ellipsis overflow-hidden break-words mb-4 whitespace-pre-wrap mr-4 leading-8"
        >
          <slot />
        </p>
        <div class="flex justify-end mr-8">
          <a href="" class="text-blue-500 hover:text-blue-600 tracking-wider">
            Continue Reading <i class="fas fa-arrow-right"></i
          ></a>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
//TODO ADD responsive design to mobile and featured views.
import CategoryButton from "./AppCategoryButton";
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
  },
};
</script>
