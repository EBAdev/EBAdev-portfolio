<template>
  <div
    class="prose prose-slate my-4 mx-auto p-4 prose-h3:m-0 prose-h4:text-[#475569] prose-a:no-underline prose-img:m-0 dark:prose-invert dark:prose-h4:text-[#94a3b8] md:p-0"
  >
    <div class="flex w-full flex-row items-center justify-center">
      <img
        src="/assets/images/posts/firefighter.jpg"
        alt="profile picture"
        class="aspect-square h-20 rounded-full object-cover"
      />

      <div class="flex flex-col pl-4 text-center sm:w-full sm:text-left">
        <div class="flex flex-col-reverse sm:flex-row">
          <h3 class="hidden sm:block sm:w-full">
            Written by&nbsp;<Link
              class="hover:text-blue-500"
              :href="'/authors/' + post.author_username"
              >{{ post.author }},</Link
            >
          </h3>

          <h3 class="block sm:hidden">
            By&nbsp;<Link
              class="hover:text-blue-500"
              :href="'/authors/' + post.author_username"
              >{{ post.author }},</Link
            >
          </h3>

          <CategoryButton
            :category-color="post.category_color"
            :href="'/categories/' + post.category_slug"
            :text-large="true"
          >
            {{ post.category }}
          </CategoryButton>
        </div>
        <h4 class="mt-0 sm:ml-6">posted&nbsp;{{ post.date }}&nbsp;</h4>
      </div>
    </div>
  </div>
</template>

<script>
import CategoryButton from '@ui/AppCategoryButton'
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
