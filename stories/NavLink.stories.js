// YourComponent.stories.js

import NavLink from '../resources/js/components/ui/AppNavLink.vue'
import { Link } from '../node_modules/@inertiajs/inertia-vue3/'
//π This default export determines where your story goes in the story list
export default {
  /* π The title prop is optional.
   * See https://storybook.js.org/docs/vue/configure/overview#configure-story-loading
   * to learn how to generate automatic titles
   */
  title: 'Design System/Navbar link',
  component: NavLink,
  subcomponents: { Link },
}

//π We create a βtemplateβ of how args map to rendering
const Template = (args) => ({
  components: { NavLink, Link },
  setup() {
    //π The args will now be passed down to the template
    return { args }
  },
  template: ' <NavLink href=/ > Posts </NavLink>',
})

export const Default = Template.bind({})

Default.args = {
  /* π The args you need here will depend on your component */
}
