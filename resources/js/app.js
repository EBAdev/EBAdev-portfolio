/* eslint-disable no-undef */
import { createApp, h } from 'vue'
import { createInertiaApp, Link, Head } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import Layout from '@layout/AppLayout'

createInertiaApp({
  resolve: async (name) => {
    let page = (await import(`./Pages/${name}`)).default

    page.layout ??= Layout

    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component('Link', Link)
      .component('Head', Head)
      .mount(el)
  },
})

InertiaProgress.init()
