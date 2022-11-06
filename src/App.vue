<template>
  <v-app>

    <v-main>
      <router-view/>

    </v-main>
  </v-app>
</template>

<script>

import DiaSkills from '@/components/DiaSkills';
import DiaWindows from "@/components/DiaWindows";
import DiaCer from "@/components/DiaCer";
import DiaProjects from "@/components/DiaProjects";
import DiaProfile from "@/components/DiaProfile";
import DiaContact from "@/components/DiaContact";

export default {
  name: 'App',




    data () {
      return {
        dialog: false,
        dialogOne: false,
        dialogTwo: false,
        dialogThree: false,
        dialogFour: false,
        dialogFive: false,
        dialogWindows:false
      }
    },

    components: {
      // eslint-disable-next-line vue/no-unused-components
      DiaWindows,
      // eslint-disable-next-line vue/no-unused-components
      DiaSkills,
      // eslint-disable-next-line vue/no-unused-components
      DiaCer,
      // eslint-disable-next-line vue/no-unused-components
      DiaProjects,
      // eslint-disable-next-line vue/no-unused-components
      DiaProfile,
      // eslint-disable-next-line vue/no-unused-components
      DiaContact,
    },

  methods:{

    someMethod(event) {
      let x = event.pageX;
      let y = event.pageY;
      let z = event.screenX;
      let C = event.screenY;
      let V = event.clientX;
      let B = event.clientY;
      console.log(x +" "+ y+" "+ z +" "+ C+" "+ V+" "+ B);
    }
  }
};
</script>
<style scoped></style>