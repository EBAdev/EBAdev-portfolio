<template>
  <div
    class="my-4 md:p-0 p-4 mx-auto prose prose-a:no-underline prose-h3:m-0 prose-img:m-0 prose-h4:text-[#4b5563]"
  >
    <div class="flex flex-row w-full items-center justify-center">
      <img
        src="/assets/images/posts/firefighter.jpg"
        alt="profile picture"
        class="rounded-full object-cover aspect-square h-20"
      />

      <div class="flex flex-col sm:w-full text-center pl-4 sm:text-left">
        <div class="flex sm:flex-row flex-col-reverse">
          <h3 class="hidden sm:block sm:w-full">
            Written by&nbsp;<Link href="#">{{ post.author }},</Link>
          </h3>

          <h3 class="sm:hidden block">
            By&nbsp;<Link href="#">{{ post.author }},</Link>
          </h3>

          <CategoryButton
            v-bind:category_color="post.category_color"
            v-bind:href="'categories/' + post.category"
            :text_large="true"
            class=""
          >
            {{ post.category }}
          </CategoryButton>
        </div>
        <h4 class="sm:ml-6 mt-0">posted&nbsp;{{ post.date }}&nbsp;</h4>
      </div>
    </div>
  </div>
</template>

<script>
import CategoryButton from '@ui/AppCategoryButton'
export default {
  props: {
    post: Object,
  },
  components: {
    CategoryButton,
  },
}
</script>
