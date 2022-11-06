<template>
  <v-timeline style=" text-align: center;" >
    <v-timeline-item
        v-for="(year, i) in years"
        :key="i"
        :color="year.color"
         small
    >
      <template v-slot:opposite>
        <span
            :class="`headline font-weight-bold ${year.color}--text`"
            v-text="year.year"
        ></span>
      </template>
      <div class="py-12" >

        <div class="skills_contact" v-text="year.contain">
         </div>
      </div>
    </v-timeline-item>
  </v-timeline>
</template>
<script>
export default {

  // eslint-disable-next-line vue/multi-word-component-names
  name: 'DiaSkills',
  data: () => ({
    years: [
      {
        color: 'deep-purple',
        year: 'HTML & HTML5',
        contain: 'The main knowledge source was from YouTube and the courses I attended and made many applications on them',
      },
      {
        color: 'pink',
        year: 'CSS & CSS3',
        contain: 'The main knowledge source was from YouTube and the courses I attended and made many applications on the codepen site',

      },
      {
        color: 'teal',
        year: 'Javascript',
        contain: 'The main knowledge source was from YouTube and the courses I attended and made many applications on them',

      },
      {
        color: 'brown',
        year: 'Bootstrap',
        contain: 'The main knowledge source was from YouTube and the courses I attended and made many applications on them',

      },  {
        color: 'blue-grey',
        year: 'Vue.js',
        contain: 'The main knowledge source was from YouTube and I did many applications on it',

      },
      {
        color: 'black',
        year: 'Front-end',
        contain: 'I have created several design projects on freelance platforms and delivered them ahead of schedule',

      },
      {
        color: 'grey',
        year: 'PHP',
        contain: 'The main knowledge source was from YouTube and the courses I attended and made many applications on them',

      },
      {
        color: 'green',
        year: 'OOP',
        contain: 'The main source of knowledge was from YouTube and I applied its principles in my projects',

      },
      {
        color: 'deep-orange',
        year: 'SOLID Principles',
        contain: 'The main source of knowledge was from YouTube and I applied its principles in my projects',

      },
      {
        color: 'indigo',
        year: 'Design Patterns',
        contain: 'The main source of knowledge was from YouTube and I applied its principles in my projects',

      },
      {
        color: 'deep-orange',
        year: 'DataBase',
        contain: 'The main source of knowledge was from ITI courses and YouTube, and I solved many problems on the Sql Hacker website',

      },
      {
        color: 'orange',
        year: 'Laravel',
        contain: 'The main knowledge source was from YouTube and I did many applications on it',

      },
      {
        color: 'black',
        year: 'Back-end',
        contain: 'I have created several projects on freelance platforms and delivered them ahead of schedule',

      },
      {
        color: 'black',
        year: 'Full-Stack',
        contain: 'I have created several design projects on freelance platforms and delivered them ahead of schedule',

      },

    ],
  }),
}
</script>
<style scoped>

.v-card > *:first-child:not(.v-btn):not(.v-chip):not(.v-avatar), .v-card > .v-card__progress + *:not(.v-btn):not(.v-chip):not(.v-avatar) {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
  position: fixed;
  width: 100%;
  z-index: 10;
}
 .skills_contact {
   padding: 4% 1%;
  margin: auto 4%;
   font-size: 105%;
   font-family: cursive;
   border-radius: 20px;
   box-shadow: 0px 8px 16px 4px #9E9E9E;
}
</style>