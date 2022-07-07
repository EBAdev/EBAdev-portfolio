// YourComponent.stories.js

import AppPaginator from '../resources/js/components/ui/AppPaginator.vue'

//👇 This default export determines where your story goes in the story list
export default {
  /* 👇 The title prop is optional.
   * See https://storybook.js.org/docs/vue/configure/overview#configure-story-loading
   * to learn how to generate automatic titles
   */
  title: 'Design System/Paginator',
  component: AppPaginator,
}

//👇 We create a “template” of how args map to rendering
const Template = (args) => ({
  components: { AppPaginator },
  setup() {
    //👇 The args will now be passed down to the template
    return { args }
  },
  template: '<AppPaginator v-bind="args"/>',
})

export const PostsPaginator = Template.bind({})

PostsPaginator.args = {
  /* 👇 The args you need here will depend on your component */
  links: [
    { url: null, label: '&laquo; Previous', active: false },
    { url: 'http://blog.test/posts?page=1', label: '1', active: true },
    { url: 'http://blog.test/posts?page=2', label: '2', active: false },
    { url: 'http://blog.test/posts?page=3', label: '3', active: false },
    { url: 'http://blog.test/posts?page=4', label: '4', active: false },
    { url: 'http://blog.test/posts?page=5', label: '5', active: false },
    { url: 'http://blog.test/posts?page=6', label: '6', active: false },
    { url: 'http://blog.test/posts?page=7', label: '7', active: false },
    { url: 'http://blog.test/posts?page=8', label: '8', active: false },
    { url: 'http://blog.test/posts?page=9', label: '9', active: false },
    {
      url: 'http://blog.test/posts?page=2',
      label: 'Next &raquo;',
      active: false,
    },
  ],
}
