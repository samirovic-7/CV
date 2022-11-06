<template>
  <v-app id="inspire">


    <v-main class="grey lighten-3 mt-1">
      <div class="ContDiv">
        <v-row>
          <v-col
              cols="12"
              sm="2"
          >
            <v-sheet
                rounded="lg"
                min-height="368"
                class="pa-2"
            >

                <v-avatar
                    class="mb-4"
                     size="200"
                    style="border-radius: 10px"
                 >

         <img src="../assets/my_photo/24.jpg"   class="img_prof"></v-avatar>

              <v-divider  v-for="divider in 6" :key="divider"></v-divider>
              <div class="name1">Mohamed</div>
              <div class="name2">Samir</div>
              <div class="name3">Farag</div>
              <br><br>
              <v-divider  v-for="divider in 6" :key="divider"></v-divider>
              <div class="name4">

                <v-icon
                  icon="mdi-school"
                  color="black"
              >
                mdi-laptop
              </v-icon> Full-Stack Developer</div>
            </v-sheet>

          </v-col>

          <v-col
              cols="12"
              sm="8"
          >
            <v-sheet
                min-height="88vh"
                rounded="lg"
            >

              <v-banner two-line>

                  <v-avatar
                      slot="icon"
                      color="black accent-4"
                      size="60"
                  >
                    <v-icon
                        icon="mdi-school"
                        color="white"
                    >
                      mdi-school
                    </v-icon>
                  </v-avatar>
                A Fresh graduate of the year 2022 from the College of Computers, Information and Artificial Intelligence, Department of Information Systems

                </v-banner>

              <v-banner two-line>
                  <v-avatar
                      slot="icon"
                        color="black accent-4"
                      size="60"
                  >
                    <v-icon
                        icon="mdi-laptop"
                        color="white"
                    >
                      mdi-school
                    </v-icon>
                  </v-avatar>

                  Received an honors grade in the graduation project and was ranked among the best and most valuable projects in the entire department


                </v-banner>

              <v-banner two-line>
                <v-avatar
                    slot="icon"
                    color="black accent-4"

                    size="60"
                >
                  <v-icon
                      icon="mdi-lock"
                      color="white"
                  >
                    mdi-arrow-projectile
                  </v-icon>
                </v-avatar>

                I have a very good skill in the field of front-end design and website development, and I have a high potential in the database section, which helped me direct these skills to the service of building a site with a new idea and a very tight system

              </v-banner>

              <v-banner two-line>
                <v-avatar
                    slot="icon"
                    color="black accent-4"

                    size="60"
                >
                  <v-icon
                      icon="mdi-lock"
                      color="white"
                  >
                    mdi-arrow-projectile
                  </v-icon>
                </v-avatar>

                These skills were such as research, learning and application for more than 3 years, whether from the YouTube platform, from learning courses, or from training courses in companies.
              </v-banner>

              <v-banner two-line>
                <v-avatar
                    slot="icon"
                    color="black accent-4"

                    size="60"
                >
                  <v-icon
                      icon="mdi-lock"
                      color="white"
                  >
                    mdi-coffee
                  </v-icon>
                </v-avatar>

                This resulted in working through freelance platforms, which gave me confidence and strength in using my skills and submitting them to my service while building websites.
              </v-banner>

              <v-banner two-line>
                <v-avatar
                    slot="icon"
                    color="black accent-4"

                    size="60"
                >
                  <v-icon
                      icon="mdi-lock"
                      color="white"
                  >
                    mdi-arrow-projectile
                  </v-icon>
                </v-avatar>

                I am also skilled in making the code well-written, editable and maintainable in a smooth manner, based on my skills in oop, SOLID Princible and Design Pattern
              </v-banner>

              <v-banner two-line>
                <v-avatar
                    slot="icon"
                    color="black accent-4"

                    size="60"
                >
                  <v-icon
                      icon="mdi-lock"
                      color="white"
                  >
                    mdi-certificate
                  </v-icon>
                </v-avatar>

                I got many certificates of appreciation, whether it was completing courses or training, or participating in the learning of other people
              </v-banner>


              <v-banner two-line>
                <v-avatar
                    slot="icon"
                    color="black accent-4"

                    size="60"
                >
                  <v-icon
                      icon="mdi-lock"
                      color="white"
                  >
                    mdi-ammunition
                  </v-icon>
                </v-avatar>

                This is because of my participation in the IEEE Student Organization and I participated as a teacher for many students in the field of Front-end and I did well and then I continued to explain the part of the back-end but I did not last long in this part because of the overlapping of the exams and I had to make time to study college
              </v-banner>


              <v-banner two-line>
                <v-avatar
                    slot="icon"
                    color="black accent-4"

                    size="60"
                >
                  <v-icon
                      icon="mdi-lock"
                      color="white"
                  >
                    mdi-briefcase
                  </v-icon>
                </v-avatar>

                My current job title is a full stack programmer, always striving to improve without stopping
              </v-banner>
            </v-sheet>
          </v-col>

          <v-col
              cols="12"
              sm="2"
          >
            <v-sheet
                rounded="lg"
                min-height="268"
                class="pa-2"
            >                 

              <span class="pdf-icon"></span>
              <br>
              <v-divider  v-for="divider in 6" :key="divider"></v-divider>


              <v-dialog
                  v-model="DiaPdf"
                  width="1100px"
                  dark
                  open-delay="7"

              >
                <template v-slot:activator="{ on, attrs }">

                    <v-icon
                        v-bind="attrs"
                        v-on="on"
                        icon="mdi-eye"
                        color="black"
                        class="icon_cv"
                        alt="alt"
                    >
                      mdi-eye-outline
                    </v-icon>

                </template>
                <v-card>

                  <v-btn
                      @click="DiaPdf = false"
                      style="float: right;background: white;color: #2E2E2E"

                  >
                    <v-icon  dark>mdi-close</v-icon>
                  </v-btn>

                   <DiaPdf />
                </v-card>
              </v-dialog>
            </v-sheet>
          </v-col>
        </v-row>
      </div>
    </v-main>
  </v-app>
</template>

<script>
import DiaPdf from "@/components/pdf";

export default {

  data () {
    return {
      DiaPdf:false,
    }
  },
  components: {
    DiaPdf,
  }
}
</script>
<style scoped>
.ContDiv{
  overflow: hidden;
  width: 90%;
  margin:2% auto 0%
}
.v-sheet:not(.v-sheet--outlined) {
  box-shadow: 0px 0px 0px 0px rgb(0 0 0 / 20%), 0px 0px 0px 0px rgb(0 0 0 / 14%), 0px 0px 0px 0px rgb(0 0 0 / 12%);
  text-align: center;

}
.name1{
  margin-top: 5%;
    float: left;
  font-family:"Segoe UI Black";
  text-shadow: 0px 0px 5px black;
}
.name2{
  margin-top: 19%;
  text-align: center;
  margin-left: 15%;
  font-family:"Segoe UI Black";
  text-shadow: 0px 0px 5px black;
}
.name3{
  margin-top: 2%;
    float: right;
  font-family:"Segoe UI Black";
  text-shadow: 0px 0px 5px black;
}
.name4{
  margin-top: 2%;
  text-align: center;
  font-family:"Segoe UI Black";
  font-size: 90%;
}
.pdf-icon {
  font-size: 120%;
  box-sizing: border-box;
  display: block;
  position: relative;
  width: 6em;
  height: 8.5em;
  background-color: #eee;
  background-image: url("https://i.imgur.com/lZ5SgDE.png");
  background-repeat: no-repeat;
  background-size: 85% auto;
  background-position: center 2em;
  border-radius: 1px 2em 1px 1px;
  border: 1px solid #ddd;
  margin: auto;
}
.pdf-icon:after {
  content: 'PDF';
  font-family: Arial;
  font-weight: bold;
  font-size: 1.2em;
  text-align: center;
  padding: 0.2em 0 0.1em;
  color: #fff;
  display: block;
  position: absolute;
  top: 0.7em;
  left: -1.5em;
  width: 3.4em;
  height: auto;
  background: #da2525;
  border-radius: 2px;
}
.icon_cv{
  position: relative;
  top: 10px;
  font-size: 250%;
  cursor: pointer;
  border-radius: 50%;
}
.icon_cv:hover{
  box-shadow: 0px 7px 0px 0px darkgrey;
}
.v-application--is-ltr .v-toolbar__content > .v-btn.v-btn--icon:last-child, .v-application--is-ltr .v-toolbar__extension > .v-btn.v-btn--icon:last-child {
  margin-right: -12px;
  position: fixed;
  right: 2%;
}
.img_prof{
  background-position: left;
 }
</style>