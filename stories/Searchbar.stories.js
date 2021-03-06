// YourComponent.stories.js

import AppSearchbar from '../resources/js/components/ui/AppSearchbar.vue'

//π This default export determines where your story goes in the story list
export default {
  /* π The title prop is optional.
   * See https://storybook.js.org/docs/vue/configure/overview#configure-story-loading
   * to learn how to generate automatic titles
   */
  title: 'Design System/Searchbar',
  component: AppSearchbar,
}

//π We create a βtemplateβ of how args map to rendering
const Template = (args) => ({
  components: { AppSearchbar },
  setup() {
    //π The args will now be passed down to the template
    return { args }
  },
  template: '<AppSearchbar v-bind="args"/>',
})

export const NavSearch = Template.bind({})

NavSearch.args = {
  /* π The args you need here will depend on your component */
}
