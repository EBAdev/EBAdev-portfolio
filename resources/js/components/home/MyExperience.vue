<template>
  <div class="scroll-mt-14 pt-4 pb-8 dark:bg-slate-800">
    <div id="my-work" class="container">
      <h1
        class="mt-10 mb-4 text-center font-moonliteSolid text-6xl text-slate-800 underline decoration-blue-600 decoration-4 underline-offset-4 dark:text-slate-100"
      >
        Technologies i use
      </h1>
      <p
        class="mb-10 text-center font-sans text-xl text-slate-800 dark:text-slate-100"
      >
        When programming you get to use a lot of different technologies,
        languages and framworks. Which is why i have listed some of them here,
        which are the ones i have used most.
      </p>
      <div class="my-4 flex flex-row flex-wrap content-center justify-center">
        <WorkExperience
          img-path="/images/technologies/Laravel.jpeg"
          work-title="Laravel"
        />
        <WorkExperience
          img-path="/images/technologies/vue.png"
          work-title="Vue.js"
        />
        <WorkExperience
          img-path="/images/technologies/Tailwind.png"
          work-title="TailwindCSS"
        />
        <WorkExperience
          img-path="/images/technologies/DB.jpeg"
          work-title="DB design"
        />
        <WorkExperience
          img-path="/images/technologies/mysql.svg"
          work-title="MySQL"
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
