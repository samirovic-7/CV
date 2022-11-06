<template>
  <div class="projectsCOnt">
    <v-row no-gutters>

      <!--graduation project-->

      <v-col

          cols="12"
          lg="4"
          sm="12"
          md="6"
          class="projectCart"
      >

        <v-card
            class="mx-auto my-16"
            max-width="374"
        >
          <div></div>


          <v-img
              height="250"

              src="https://cdn.vuetifyjs.com/images/cards/cooking.png"
          ></v-img>

          <v-card-title>Missing</v-card-title>
          <v-card-text>
            <v-row
                align="center"
                class="mx-0 "
            >
              <v-rating
                  :value="5"
                  color="amber"
                  dense
                  half-increments
                  readonly
                  size="14"

              ></v-rating>
            </v-row>


            <div class="my-3">Graduation Project.</div>
          </v-card-text>


          <v-divider v-for="n in 6" :key="n"></v-divider>

          <v-card-title>Tools used for this project</v-card-title>

          <v-card-text>
            <v-chip-group
                active-class="deep-purple accent-4 white--text"
                column

            >
              <v-chip>Html</v-chip>

              <v-chip>Html5</v-chip>

              <v-chip>Css</v-chip>

              <v-chip>Css3</v-chip>

              <v-chip>Js</v-chip>

              <v-chip>jQuery</v-chip>

              <v-chip>Bootstrap</v-chip>

              <v-chip>Ajax</v-chip>

              <v-chip>Php</v-chip>

              <v-chip>mysql</v-chip>

            </v-chip-group>
          </v-card-text>

          <v-card-actions>
            <v-row justify="space-around">


              <v-chip-group class="chip_group">

                <a class="links_icon" href="https://www.google.com" target="_blank" ><v-icon style="font-size: 150%;margin-bottom: 4%">mdi-github</v-icon> GitHup</a>

              </v-chip-group>


            </v-row>
            <v-btn
                text
                class="button-visit"

            >
              <a class="links_projects">visit</a>
            </v-btn>

          </v-card-actions>
        </v-card>
      </v-col>

<!--      courses project-->

      <v-col

          cols="12"
          lg="4"
          sm="12"
          md="6"
          class="projectCart"
      >

        <v-card
             class="mx-auto my-16"
            max-width="374"
        >
             <div></div>


          <v-img
              height="250"

              src="https://cdn.vuetifyjs.com/images/cards/cooking.png"
          ></v-img>

          <v-card-title>Courses Project</v-card-title>
          <v-card-text>
            <v-row
                align="center"
                class="mx-0 "
            >
              <v-rating
                  :value="3"
                  color="amber"
                  dense
                  half-increments
                  readonly
                  size="14"

              ></v-rating>
            </v-row>


            <div class="my-3">Freelace Project.</div>
          </v-card-text>


          <v-divider v-for="n in 6" :key="n"></v-divider>

          <v-card-title>Tools used for this project</v-card-title>

          <v-card-text>
            <v-chip-group
                 active-class="deep-purple accent-4 white--text"
                column

            >
              <v-chip>Html</v-chip>

              <v-chip>Html5</v-chip>

              <v-chip>Css</v-chip>

              <v-chip>Css3</v-chip>

              <v-chip>Js</v-chip>

              <v-chip>jQuery</v-chip>

              <v-chip>Bootstrap</v-chip>

              <v-chip>php</v-chip>

              <v-chip>mysql</v-chip>


            </v-chip-group>
          </v-card-text>

          <v-card-actions>
            <v-row justify="space-around">


              <v-chip-group class="chip_group">

                <a class="links_icon" href="https://www.google.com" target="_blank" ><v-icon style="font-size: 150%;margin-bottom: 4%">mdi-github</v-icon> GitHup</a>

              </v-chip-group>


            </v-row>
            <v-btn
                text
                class="button-visit"

            >
              <a class="links_projects">visit</a>
            </v-btn>

          </v-card-actions>
        </v-card>
      </v-col>

<!--airplane project-->

      <v-col

          cols="12"
          lg="4"
          sm="12"
          md="6"
          class="projectCart"
      >

        <v-card
            class="mx-auto my-16"
            max-width="374"
        >
          <div></div>


          <v-img
              height="250"

              src="https://cdn.vuetifyjs.com/images/cards/cooking.png"
          ></v-img>

          <v-card-title>Airplane Project.</v-card-title>
          <v-card-text>
            <v-row
                align="center"
                class="mx-0 "
            >
              <v-rating
                  :value="4"
                  color="amber"
                  dense
                  half-increments
                  readonly
                  size="14"

              ></v-rating>
            </v-row>


            <div class="my-3">Front-end Freelace Project.</div>

          </v-card-text>


          <v-divider v-for="n in 6" :key="n"></v-divider>

          <v-card-title>Tools used for this project</v-card-title>

          <v-card-text>
            <v-chip-group
                active-class="deep-purple accent-4 white--text"
                column

            >
              <v-chip>Html</v-chip>

              <v-chip>Css</v-chip>

              <v-chip>Js</v-chip>

              <v-chip>Vue.js</v-chip>

              <v-chip>vuetify</v-chip>

            </v-chip-group>
          </v-card-text>

          <v-card-actions>
            <v-row justify="space-around">


              <v-chip-group class="chip_group">

                <a class="links_icon" href="https://www.google.com" target="_blank" ><v-icon style="font-size: 150%;margin-bottom: 4%">mdi-github</v-icon> GitHup</a>

              </v-chip-group>


            </v-row>
            <v-btn
                text
                class="button-visit"

            >
              <a class="links_projects">visit</a>
            </v-btn>

          </v-card-actions>
        </v-card>
      </v-col>

<!--      Shopping project-->

      <v-col

          cols="12"
          lg="4"
          sm="12"
          md="6"
          class="projectCart"
      >

        <v-card
            class="mx-auto my-16"
            max-width="374"
        >
          <div></div>


          <v-img
              height="250"

              src="https://cdn.vuetifyjs.com/images/cards/cooking.png"
          ></v-img>

          <v-card-title>Shopping Project</v-card-title>
          <v-card-text>
            <v-row
                align="center"
                class="mx-0 "
            >
              <v-rating
                  :value="4.5"
                  color="amber"
                  dense
                  half-increments
                  readonly
                  size="14"

              ></v-rating>
            </v-row>


            <div class="my-3">Front-end Freelace Project.</div>
          </v-card-text>


          <v-divider v-for="n in 6" :key="n"></v-divider>

          <v-card-title>Tools used for this project</v-card-title>

          <v-card-text>
            <v-chip-group
                active-class="deep-purple accent-4 white--text"
                column

            >
              <v-chip>Html</v-chip>

              <v-chip>Css</v-chip>

              <v-chip>Js</v-chip>

              <v-chip>Vue.js</v-chip>

              <v-chip>vuetify</v-chip>

            </v-chip-group>
          </v-card-text>

          <v-card-actions>
            <v-row justify="space-around">


              <v-chip-group class="chip_group">

                <a class="links_icon" href="https://www.google.com" target="_blank" ><v-icon style="font-size: 150%;margin-bottom: 4%">mdi-github</v-icon> GitHup</a>

              </v-chip-group>


            </v-row>
            <v-btn
                text
                class="button-visit"
             >
              <a class="links_projects">visit</a>
            </v-btn>

          </v-card-actions>
        </v-card>
      </v-col>

<!--      Resturant project-->

      <v-col

          cols="12"
          lg="4"
          sm="12"
          md="6"
          class="projectCart"
      >

        <v-card
            class="mx-auto my-16"
            max-width="374"
        >
          <div></div>


          <v-img
              height="250"

              src="https://cdn.vuetifyjs.com/images/cards/cooking.png"
          ></v-img>

          <v-card-title> Resturant Project</v-card-title>
          <v-card-text>
            <v-row
                align="center"
                class="mx-0 "
            >
              <v-rating
                  :value="4"
                  color="amber"
                  dense
                  half-increments
                  readonly
                  size="14"

              ></v-rating>
            </v-row>


            <div class="my-3">Front-end Freelace Project.</div>
          </v-card-text>


          <v-divider v-for="n in 6" :key="n"></v-divider>

          <v-card-title>Tools used for this project</v-card-title>

          <v-card-text>
            <v-chip-group
                active-class="deep-purple accent-4 white--text"
                column

            >
              <v-chip>Html</v-chip>

              <v-chip>Html5</v-chip>

              <v-chip>Css</v-chip>

              <v-chip>Css3</v-chip>

              <v-chip>Js</v-chip>

              <v-chip>jQuery</v-chip>

              <v-chip>Bootstrap</v-chip>

            </v-chip-group>
          </v-card-text>

          <v-card-actions>
            <v-row justify="space-around">


              <v-chip-group class="chip_group">

                <a class="links_icon" href="https://github.com/samirovic-7/Resturant" target="_blank" ><v-icon style="font-size: 150%;margin-bottom: 4%">mdi-github</v-icon> GitHup</a>

              </v-chip-group>


            </v-row>
            <v-btn
                text
                class="button-visit"
            >
              <a class="links_projects">visit</a>
            </v-btn>

          </v-card-actions>
        </v-card>
      </v-col>

<!--      programing language -->

      <v-col

          cols="12"
          lg="4"
          sm="12"
          md="6"
          class="projectCart"
      >

        <v-card
            class="mx-auto my-16"
            max-width="374"
        >
          <div></div>


          <v-img
              height="250"

              src="https://cdn.vuetifyjs.com/images/cards/cooking.png"
          ></v-img>

          <v-card-title>Programing Project</v-card-title>
          <v-card-text>
            <v-row
                align="center"
                class="mx-0 "
            >
              <v-rating
                  :value="2.5"
                  color="amber"
                  dense
                  half-increments
                  readonly
                  size="14"

              ></v-rating>
            </v-row>


            <div class="my-3">My Project.</div>
          </v-card-text>


          <v-divider v-for="n in 6" :key="n"></v-divider>

          <v-card-title>Tools used for this project</v-card-title>

          <v-card-text>
            <v-chip-group
                active-class="deep-purple accent-4 white--text"
                column

            >
              <v-chip>Html</v-chip>

              <v-chip>Html5</v-chip>

              <v-chip>Css</v-chip>

              <v-chip>Css3</v-chip>

              <v-chip>Js</v-chip>

              <v-chip>jQuery</v-chip>

              <v-chip>Bootstrap</v-chip>

            </v-chip-group>
          </v-card-text>

          <v-card-actions>
            <v-row justify="space-around">


              <v-chip-group class="chip_group">

                <a class="links_icon" href="https://github.com/samirovic-7/Programming_language" target="_blank" ><v-icon style="font-size: 150%;margin-bottom: 4%">mdi-github</v-icon> GitHup</a>

              </v-chip-group>


            </v-row>
            <v-btn
                text
                class="button-visit"
            >
              <a class="links_projects" >visit</a>
            </v-btn>

          </v-card-actions>
        </v-card>
      </v-col>

<!--      e-commerce project-->

      <v-col

          cols="12"
          lg="4"
          sm="12"
          md="6"
          class="projectCart"
      >

        <v-card
            class="mx-auto my-16"
            max-width="374"
        >
          <div></div>


          <v-img
              height="250"

              src="https://cdn.vuetifyjs.com/images/cards/cooking.png"
          ></v-img>

          <v-card-title>E-Commerce Project</v-card-title>
          <v-card-text>
            <v-row
                align="center"
                class="mx-0 "
            >
              <v-rating
                  :value="4"
                  color="amber"
                  dense
                  half-increments
                  readonly
                  size="14"

              ></v-rating>
            </v-row>


            <div class="my-3">My Project.</div>
          </v-card-text>


          <v-divider v-for="n in 6" :key="n"></v-divider>

          <v-card-title>Tools used for this project</v-card-title>

          <v-card-text>
            <v-chip-group
                active-class="deep-purple accent-4 white--text"
                column

            >
              <v-chip>Html</v-chip>

              <v-chip>Css</v-chip>

              <v-chip>Js</v-chip>

              <v-chip>php</v-chip>

              <v-chip>mysql</v-chip>

            </v-chip-group>
          </v-card-text>

          <v-card-actions>
            <v-row justify="space-around">


              <v-chip-group class="chip_group">

                <a class="links_icon" href="https://github.com/samirovic-7/e-commerce" target="_blank" ><v-icon style="font-size: 150%;margin-bottom: 4%">mdi-github</v-icon> GitHup</a>

              </v-chip-group>


            </v-row>
            <v-btn
                text
                class="button-visit"
            >
              <a class="links_projects" >visit</a>
            </v-btn>

          </v-card-actions>
        </v-card>
      </v-col>

<!--      Pharmacy Project-->

      <v-col

          cols="12"
          lg="4"
          sm="12"
          md="6"
          class="projectCart"
      >

        <v-card
            class="mx-auto my-16"
            max-width="374"
        >
          <div></div>


          <v-img
              height="250"

              src="https://cdn.vuetifyjs.com/images/cards/cooking.png"
          ></v-img>

          <v-card-title>Pharmacy Project</v-card-title>
          <v-card-text>
            <v-row
                align="center"
                class="mx-0 "
            >
              <v-rating
                  :value="4.5"
                  color="amber"
                  dense
                  half-increments
                  readonly
                  size="14"

              ></v-rating>
            </v-row>


            <div class="my-3">My Project.</div>
          </v-card-text>


          <v-divider v-for="n in 6" :key="n"></v-divider>

          <v-card-title>Tools used for this project</v-card-title>

          <v-card-text>
            <v-chip-group
                active-class="deep-purple accent-4 white--text"
                column

            >
              <v-chip>Html</v-chip>

              <v-chip>Css</v-chip>

              <v-chip>Js</v-chip>

              <v-chip>jQuery</v-chip>

              <v-chip>Ajax</v-chip>

              <v-chip>php</v-chip>

              <v-chip>mysql</v-chip>

            </v-chip-group>
          </v-card-text>

          <v-card-actions>
            <v-row justify="space-around">


              <v-chip-group class="chip_group">

                <a class="links_icon" href="https://www.google.com" target="_blank" ><v-icon style="font-size: 150%;margin-bottom: 4%">mdi-github</v-icon> GitHup</a>

              </v-chip-group>


            </v-row>
            <v-btn
                text
                class="button-visit"
            >
              <a class="links_projects">visit</a>
            </v-btn>

          </v-card-actions>
        </v-card>
      </v-col>

<!--      portfolio project-->

      <v-col

          cols="12"
          lg="4"
          sm="12"
          md="6"
          class="projectCart"
      >

        <v-card
            class="mx-auto my-16"
            max-width="374"
        >
          <div></div>


          <v-img
              height="250"

              src="https://cdn.vuetifyjs.com/images/cards/cooking.png"
          ></v-img>

          <v-card-title>Portfolio Project</v-card-title>
          <v-card-text>
            <v-row
                align="center"
                class="mx-0 "
            >
              <v-rating
                  :value="5"
                  color="amber"
                  dense
                  half-increments
                  readonly
                  size="14"

              ></v-rating>
            </v-row>


            <div class="my-3">Project For Training.</div>
          </v-card-text>


          <v-divider v-for="n in 6" :key="n"></v-divider>

          <v-card-title>Tools used for this project</v-card-title>

          <v-card-text>
            <v-chip-group
                active-class="deep-purple accent-4 white--text"
                column

            >
              <v-chip>Html</v-chip>

              <v-chip>Css</v-chip>

              <v-chip>Js</v-chip>

              <v-chip>jQuery</v-chip>

              <v-chip>Bootstrap</v-chip>


            </v-chip-group>
          </v-card-text>

          <v-card-actions>
            <v-row justify="space-around">


              <v-chip-group class="chip_group">

                <a class="links_icon" href="https://github.com/samirovic-7/X-Project" target="_blank" ><v-icon style="font-size: 150%;margin-bottom: 4%">mdi-github</v-icon> GitHup</a>

              </v-chip-group>


            </v-row>
            <v-btn
                text
                class="button-visit"
            >
              <a class="links_projects">visit</a>
            </v-btn>

          </v-card-actions>
        </v-card>
      </v-col>


      <!--      Doctor project-->

      <v-col

          cols="12"
          lg="4"
          sm="12"
          md="6"
          class="projectCart"
      >

        <v-card
            class="mx-auto my-16"
            max-width="374"
        >
          <div></div>


          <v-img
              height="250"

              src="https://cdn.vuetifyjs.com/images/cards/cooking.png"
          ></v-img>

          <v-card-title>Doctor Project</v-card-title>
          <v-card-text>
            <v-row
                align="center"
                class="mx-0 "
            >
              <v-rating
                  :value="5"
                  color="amber"
                  dense
                  half-increments
                  readonly
                  size="14"

              ></v-rating>
            </v-row>


            <div class="my-3">My Project.</div>
          </v-card-text>


          <v-divider v-for="n in 6" :key="n"></v-divider>

          <v-card-title>Tools used for this project</v-card-title>

          <v-card-text>
            <v-chip-group
                active-class="deep-purple accent-4 white--text"
                column

            >
              <v-chip>Html</v-chip>

              <v-chip>Css</v-chip>

              <v-chip>Js</v-chip>

              <v-chip>jQuery</v-chip>

              <v-chip>Bootstrap</v-chip>


            </v-chip-group>
          </v-card-text>

          <v-card-actions>
            <v-row justify="space-around">


              <v-chip-group class="chip_group">

                <a class="links_icon" href="https://github.com/samirovic-7/doctor" target="_blank" ><v-icon style="font-size: 150%;margin-bottom: 4%">mdi-github</v-icon> GitHup</a>

              </v-chip-group>


            </v-row>
            <v-btn
                text
                class="button-visit"
            >
              <a class="links_projects">visit</a>
            </v-btn>

          </v-card-actions>
        </v-card>
      </v-col>


      <!--      single page project-->

      <v-col

          cols="12"
          lg="4"
          sm="12"
          md="6"
          class="projectCart"
      >

        <v-card
            class="mx-auto my-16"
            max-width="374"
        >
          <div></div>


          <v-img
              height="250"

              src="https://cdn.vuetifyjs.com/images/cards/cooking.png"
          ></v-img>

          <v-card-title>single page trying</v-card-title>
          <v-card-text>
            <v-row
                align="center"
                class="mx-0 "
            >
              <v-rating
                  :value="2"
                  color="amber"
                  dense
                  half-increments
                  readonly
                  size="14"

              ></v-rating>
            </v-row>


            <div class="my-3">My Project.</div>
          </v-card-text>


          <v-divider v-for="n in 6" :key="n"></v-divider>

          <v-card-title>Tools used for this project</v-card-title>

          <v-card-text>
            <v-chip-group
                active-class="deep-purple accent-4 white--text"
                column

            >
              <v-chip>Html</v-chip>

              <v-chip>Css</v-chip>

              <v-chip>Bootstrap</v-chip>


            </v-chip-group>
          </v-card-text>

          <v-card-actions>
            <v-row justify="space-around">


              <v-chip-group class="chip_group">

                <a class="links_icon" href="https://github.com/samirovic-7/single-page-trying" target="_blank" >

                  <v-icon style="font-size: 150%;margin-bottom: 4%">mdi-github</v-icon> GitHup</a>

              </v-chip-group>


            </v-row>
            <v-btn
                text
                class="button-visit"
            >
              <a class="links_projects">visit</a>
            </v-btn>

          </v-card-actions>
        </v-card>
      </v-col>






    </v-row>
  </div>
</template>
<script>
export default {

  // eslint-disable-next-line vue/multi-word-component-names
  name: 'DiaProjects',
  data: () => ({


  }),

}
</script>
<style scoped>
.projectsCOnt{
   width: 100%;
}
.projectCart{
  margin-top: -2%;
}
/* CSS */
.button-visit{
  align-self: center;
  background-color: #fff;
  background-image: none;
  background-position: 0 90%;
  background-repeat: repeat no-repeat;
  background-size: 4px 3px;
  border-radius: 15px 225px 255px 15px 15px 255px 225px 15px;
  border-style: solid;
  border-width: 2px;
  box-shadow: rgba(0, 0, 0, .2) 15px 28px 25px -18px;
  box-sizing: border-box;
  color: #41403e;
  cursor: pointer;
  display: inline-block;
  font-family: Neucha, sans-serif;
  font-size: 1rem;
  line-height: 23px;
  outline: none;
  padding: .75rem;
  text-decoration: none;
  transition: all 235ms ease-in-out;
  border-bottom-left-radius: 15px 255px;
  border-bottom-right-radius: 225px 15px;
  border-top-left-radius: 255px 15px;
  border-top-right-radius: 15px 225px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  text-transform: lowercase;
}

.button-visit:hover {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 8px -5px;
  transform: translate3d(0, 2px, 0);
}

.button-visit:focus {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
}
.v-card > *:last-child:not(.v-btn):not(.v-chip):not(.v-avatar) {
  border-bottom-left-radius: inherit;
  border-bottom-right-radius: inherit;
  justify-content: flex-end;
}
.links_projects{
  text-decoration: none;
  color: black;
}
.links_icon{
  text-decoration: none;
  color: black;


 }
.chip_group{
  position: relative;
  right: 33%;
 }
.links_icon:hover{
  box-shadow:  rgba(0, 0, 0, .4) -2px 9px 8px -6px;
}
</style>

