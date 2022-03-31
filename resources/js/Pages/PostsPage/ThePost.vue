<template>
  <div class="my-4 w-full">
    <div
      class="mx-auto prose prose-img:rounded-xl prose-a:text-blue-500"
      v-html="post.title"
    />
    <div
      class="my-4 pr-6 prose prose-a:no-underline prose-h3:m-0 prose-img:m-0 prose-h4:text-[#4b5563] mx-auto flex flex-row items-center justify-between"
    >
      <div class="flex flex-row items-center">
        <img
          src="/assets/images/posts/firefighter.jpg"
          alt="profile picture"
          class="rounded-full object-cover aspect-square h-20"
        />

        <div class="flex flex-col ml-4">
          <h3>
            Written by <Link href="#">{{ post.author }},</Link>
          </h3>
          <h4 class="ml-4">posted&nbsp;{{ post.date }}&nbsp;</h4>
        </div>
      </div>

      <CategoryButton
        v-bind:category_color="post.category_color"
        v-bind:href="'categories/' + post.category"
        :text_large="true"
        class="mr-20 pt-0"
      >
        {{ post.category }}
      </CategoryButton>
    </div>

    <article
      class="mx-auto prose prose-img:rounded-xl prose-a:text-blue-500"
      v-html="post.body"
    />
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

<style></style>
