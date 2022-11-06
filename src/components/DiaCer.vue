<template>

  <v-item-group multiple class="item_group">
     <v-container fluid>
      <v-row>


        <v-col

            cols="12"
            lg="4"
            sm="12"
            md="6"
        >

          <v-item v-slot="{ active, toggle }">


            <v-card
                :color="active ? '' : ''"
                class="d-flex align-center"
                dark
                height="200"
                @click="toggle"
            >
              <v-scroll-y-transition>

                <div
                    v-if="active"
                    class="text-h2 flex-grow-1 text-center"
                >

                  <img class="image_cer" src="../assets/certification/web.jpeg">
                </div>

                <div
                    v-else
                    class="text-h2 flex-grow-1 text-center"
                >

                  Web course
                </div>


              </v-scroll-y-transition>
            </v-card>

          </v-item>
          <v-dialog
              v-model="dialog"
              width="1800px"

          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn


                  v-bind="attrs"
                  v-on="on"
                  width="100%"
              >
                <v-icon style="text-align: center;font-size: 150%;">mdi-eye</v-icon>
              </v-btn>
            </template>
            <v-card>
              <v-btn
                  @click="dialog = false"
                  style="float: right"
              >
                <v-icon style="font-size: 150%;margin-bottom: 4%">mdi-close</v-icon>
              </v-btn>
              <v-card-text>
                <img class="image_cer_dialog" src="../assets/certification/api.jpeg">
              </v-card-text>

            </v-card>
          </v-dialog>
        </v-col>

        <v-col

            cols="12"
            lg="4"
            sm="12"
            md="6"
        >

          <v-item v-slot="{ active, toggle }">


            <v-card
                :color="active ? '' : ''"
                class="d-flex align-center"
                dark
                height="200"
                @click="toggle"
            >
              <v-scroll-y-transition>

                <div
                    v-if="active"
                    class="text-h2 flex-grow-1 text-center"
                >

                  <img class="image_cer" src="../assets/certification/front_rms.jpeg">
                </div>

                <div
                    v-else
                    class="text-h2 flex-grow-1 text-center"
                >

                  Training
                </div>


              </v-scroll-y-transition>
            </v-card>

          </v-item>
          <v-dialog
              v-model="dialog1"
              width="1800px"

          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn


                  v-bind="attrs"
                  v-on="on"
                  width="100%"
              >
                <v-icon style="text-align: center;font-size: 150%;">mdi-eye</v-icon>
              </v-btn>
            </template>
            <v-card>
              <v-btn
                  @click="dialog1 = false"
                  style="float: right"
              >
                <v-icon style="font-size: 150%;margin-bottom: 4%">mdi-close</v-icon>
              </v-btn>
              <v-card-text>
                <img class="image_cer_dialog" src="../assets/certification/front_rms.jpeg">
              </v-card-text>

            </v-card>
          </v-dialog>
        </v-col>

        <v-col

            cols="12"
            lg="4"
            sm="12"
            md="6"
        >

          <v-item v-slot="{ active, toggle }">


            <v-card
                :color="active ? '' : ''"
                class="d-flex align-center"
                dark
                height="200"
                @click="toggle"
            >
              <v-scroll-y-transition>

                <div
                    v-if="active"
                    class="text-h2 flex-grow-1 text-center"
                >

                  <img class="image_cer" src="../assets/certification/back_rms.jpeg">
                </div>

                <div
                    v-else
                    class="text-h2 flex-grow-1 text-center"
                >

                  Training
                </div>


              </v-scroll-y-transition>
            </v-card>

          </v-item>
          <v-dialog
              v-model="dialog2"
              width="1800px"

          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn


                  v-bind="attrs"
                  v-on="on"
                  width="100%"
              >
                <v-icon style="text-align: center;font-size: 150%;">mdi-eye</v-icon>
              </v-btn>
            </template>
            <v-card>
              <v-btn
                  @click="dialog2 = false"
                  style="float: right"
              >
                <v-icon style="font-size: 150%;margin-bottom: 4%">mdi-close</v-icon>
              </v-btn>
              <v-card-text>
                <img class="image_cer_dialog" src="../assets/certification/back_rms.jpeg">
              </v-card-text>

            </v-card>
          </v-dialog>
        </v-col>

        <v-col

            cols="12"
            lg="4"
            sm="12"
            md="6"
        >

          <v-item v-slot="{ active, toggle }">


            <v-card
                :color="active ? '' : ''"
                class="d-flex align-center"
                dark
                height="200"
                @click="toggle"
            >
              <v-scroll-y-transition>

                <div
                    v-if="active"
                    class="text-h2 flex-grow-1 text-center"
                >

                  <img class="image_cer" src="../assets/certification/back_itrax.jpg">
                </div>

                <div
                    v-else
                    class="text-h2 flex-grow-1 text-center"
                >

                  Course
                </div>


              </v-scroll-y-transition>
            </v-card>

          </v-item>
          <v-dialog
              v-model="dialog3"
              width="1800px"

          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn


                  v-bind="attrs"
                  v-on="on"
                  width="100%"
              >
                <v-icon style="text-align: center;font-size: 150%;">mdi-eye</v-icon>
              </v-btn>
            </template>
            <v-card>
              <v-btn
                  @click="dialog3 = false"
                  style="float: right"
              >
                <v-icon style="font-size: 150%;margin-bottom: 4%">mdi-close</v-icon>
              </v-btn>
              <v-card-text>
                <img class="image_cer_dialog" src="../assets/certification/back_itrax.jpg">
              </v-card-text>

            </v-card>
          </v-dialog>
        </v-col>

        <v-col

            cols="12"
            lg="4"
            sm="12"
            md="6"
        >

          <v-item v-slot="{ active, toggle }">


            <v-card
                :color="active ? '' : ''"
                class="d-flex align-center"
                dark
                height="200"
                @click="toggle"
            >
              <v-scroll-y-transition>

                <div
                    v-if="active"
                    class="text-h2 flex-grow-1 text-center"
                >

                  <img class="image_cer" src="../assets/certification/DB.jpeg">
                </div>

                <div
                    v-else
                    class="text-h2 flex-grow-1 text-center"
                >

                  Course
                </div>


              </v-scroll-y-transition>
            </v-card>

          </v-item>
          <v-dialog
              v-model="dialog4"
              width="1800px"

          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn


                  v-bind="attrs"
                  v-on="on"
                  width="100%"
              >
                <v-icon style="text-align: center;font-size: 150%;">mdi-eye</v-icon>
              </v-btn>
            </template>
            <v-card>
              <v-btn
                  @click="dialog4 = false"
                  style="float: right"
              >
                <v-icon style="font-size: 150%;margin-bottom: 4%">mdi-close</v-icon>
              </v-btn>
              <v-card-text>
                <img class="image_cer_dialog" src="../assets/certification/DB.jpeg">
              </v-card-text>

            </v-card>
          </v-dialog>
        </v-col>

        <v-col

            cols="12"
            lg="4"
            sm="12"
            md="6"
        >

          <v-item v-slot="{ active, toggle }">


            <v-card
                :color="active ? '' : ''"
                class="d-flex align-center"
                dark
                height="200"
                @click="toggle"
            >
              <v-scroll-y-transition>

                <div
                    v-if="active"
                    class="text-h2 flex-grow-1 text-center"
                >

                  <img class="image_cer" src="../assets/certification/api.jpeg">
                </div>

                <div
                    v-else
                    class="text-h2 flex-grow-1 text-center"
                >

                  Course
                </div>


              </v-scroll-y-transition>
            </v-card>

          </v-item>
          <v-dialog
              v-model="dialog5"
              width="1800px"

          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn


                  v-bind="attrs"
                  v-on="on"
                  width="100%"
              >
                <v-icon style="text-align: center;font-size: 150%;">mdi-eye</v-icon>
              </v-btn>
            </template>
            <v-card>
              <v-btn
                  @click="dialog5 = false"
                  style="float: right"
              >
                <v-icon style="font-size: 150%;margin-bottom: 4%">mdi-close</v-icon>
              </v-btn>
              <v-card-text>
                <img class="image_cer_dialog" src="../assets/certification/api.jpeg">
              </v-card-text>

            </v-card>
          </v-dialog>
        </v-col>


        <v-col

            cols="12"
            lg="4"
            sm="12"
            md="6"
        >

          <v-item v-slot="{ active, toggle }">


            <v-card
                :color="active ? '' : ''"
                class="d-flex align-center"
                dark
                height="200"
                @click="toggle"
            >
              <v-scroll-y-transition>

                <div
                    v-if="active"
                    class="text-h2 flex-grow-1 text-center"
                >

                  <img class="image_cer" src="../assets/certification/google.jpeg">
                </div>

                <div
                    v-else
                    class="text-h2 flex-grow-1 text-center"
                >

                  Course
                </div>


              </v-scroll-y-transition>
            </v-card>

          </v-item>
          <v-dialog
              v-model="dialog6"
              width="1800px"

          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn


                  v-bind="attrs"
                  v-on="on"
                  width="100%"
              >
                <v-icon style="text-align: center;font-size: 150%;">mdi-eye</v-icon>
              </v-btn>
            </template>
            <v-card>
              <v-btn
                  @click="dialog6 = false"
                  style="float: right"
              >
                <v-icon style="font-size: 150%;margin-bottom: 4%">mdi-close</v-icon>
              </v-btn>
              <v-card-text>
                <img class="image_cer_dialog" src="../assets/certification/google.jpeg">
              </v-card-text>

            </v-card>
          </v-dialog>
        </v-col>


        <v-col

            cols="12"
            lg="4"
            sm="12"
            md="6"
        >

          <v-item v-slot="{ active, toggle }">


            <v-card
                :color="active ? '' : ''"
                class="d-flex align-center"
                dark
                height="200"
                @click="toggle"
            >
              <v-scroll-y-transition>

                <div
                    v-if="active"
                    class="text-h2 flex-grow-1 text-center"
                >

                  <img class="image_cer" src="../assets/certification/hult.jpeg">
                </div>

                <div
                    v-else
                    class="text-h2 flex-grow-1 text-center"
                >

                  volunter
                </div>


              </v-scroll-y-transition>
            </v-card>

          </v-item>
          <v-dialog
              v-model="dialog7"
              width="1800px"

          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn


                  v-bind="attrs"
                  v-on="on"
                  width="100%"
              >
                <v-icon style="text-align: center;font-size: 150%;">mdi-eye</v-icon>
              </v-btn>
            </template>
            <v-card>
              <v-btn
                  @click="dialog7 = false"
                  style="float: right"
              >
                <v-icon style="font-size: 150%;margin-bottom: 4%">mdi-close</v-icon>
              </v-btn>
              <v-card-text>
                <img class="image_cer_dialog" src="../assets/certification/hult.jpeg">
              </v-card-text>

            </v-card>
          </v-dialog>
        </v-col>



      </v-row>
    </v-container>
  </v-item-group>
</template>
<script>



export default {
   name: 'DiaCer',
  data () {
    return {

      dialog: false,
      dialog1: false,
      dialog2: false,
      dialog3: false,
      dialog4: false,
      dialog5: false,
      dialog6: false,
      dialog7: false,
    }
  },

  }

</script>


<style scoped >
.item_group{
  margin-top: 2%
}
.image_cer{
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;
  height: 210px;
  margin-top: 1.5%;
  border-radius: 5px;
}
.image_cer_dialog{
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
  width: 100%;
  height: 635px;
   border-radius: 5px;
}
</style>

