<template>
  <div class="dark:bg-slate-800 scroll-mt-14 pt-4 pb-8">
    <div id="my-work" class="container">
      <h1
        class="font-moonliteSolid mt-10 mb-4 underline decoration-blue-600 decoration-4 underline-offset-4 text-center text-slate-800 dark:text-slate-100 text-6xl"
      >
        Technologies i use
      </h1>
      <p
        class="font-sans mb-10 text-center text-slate-800 dark:text-slate-100 text-xl"
      >
        When programming you get to use a lot of different technologies,
        languages and framworks. Which is why i have listed some of them here,
        which are the ones i have used most.
      </p>
      <div class="flex flex-row flex-wrap content-center justify-center my-4">
        <WorkExperience
          img_path="/images/technologies/Laravel.jpeg"
          title="Laravel"
        />
        <WorkExperience
          img_path="/images/technologies/vue.png"
          title="Vue.js"
        />
        <WorkExperience
          img_path="/images/technologies/Tailwind.png"
          title="TailwindCSS"
        />
        <WorkExperience
          img_path="/images/technologies/DB.jpeg"
          title="DB design"
        />
        <WorkExperience
          img_path="/images/technologies/mysql.svg"
          title="MySQL"
        />
      </div>
    </div>
  </div>
</template>
<script>
import WorkExperience from '@homeComponents/WorkExperience'
export default {
  components: { WorkExperience },
}
</script>
