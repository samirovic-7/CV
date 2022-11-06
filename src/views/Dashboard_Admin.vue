<template>

  <v-app>
   <navbarDash />


    <v-container fluid  >
      <v-row>
        <v-col cols="12" lg="6" >
          <v-card
              class="padCard"
              dark
           ></v-card>
          <v-card
              class="card mt-n12 mx-auto"
              elevation="12"
          >
            <v-card-text>This card has negative  </v-card-text>
          </v-card>
        </v-col>
        <v-col cols="12" lg="6" class="card">
          <v-card
              class="padCard"
              dark
          ></v-card>
          <v-card
              class="card mt-n12 mx-auto"
              elevation="12"
          >
            <v-card-text>This card has negative  </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
    <footerDash />
  </v-app>

</template>

<script>
import footerDash from "@/components/Dashboard/footerDash";
import navbarDash from "@/components/Dashboard/navbarDash";

export default {
  data () {
    return {
      drawer:null,
      items: [
        { title: 'Home', icon: 'mdi-view-dashboard' ,page:'Dashboard'},
        { title: 'About', icon: 'mdi-forum' ,page:'/Skills'},
      ],
    }
  },

  components: {
    footerDash,
    navbarDash,
  },
}
</script>
<style scoped>
.container--fluid {
  max-width: 100%;
  margin: auto;
}
.v-input {
  align-items: flex-start;
  display: flex;
  flex: 1 1 auto;
  font-size: 16px;
  letter-spacing: normal;
  max-width: 90%;
  text-align: left;
}
.card{
  height:250px;
  width: 400px;
}
.padCard{
  height:75px;
  max-width:200px;
  margin: auto;
}
@media only screen and (max-width: 600px){
  .v-input {
    align-items: flex-start;
    display: flex;
    flex: 1 1 auto;
    font-size: 16px;
    letter-spacing: normal;
    max-width: 75%;
    text-align: left;
  }
  .card{
    height:130px;
    width: 240px;
   }
  .padCard{
    height:68px;
    max-width:150px;
    margin: auto;
  }
}
</style>