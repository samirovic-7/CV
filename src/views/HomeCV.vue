<template>


  <div   @click.meta="alertTo()" >
<div class="img_home"></div>

    <div class="folder" >

      <v-sheet
          class="folders"
          rounded
          :style="stil"
          @dblclick="dialog=true"
      >

        <v-icon style="font-size: 100px;">mdi-folder </v-icon>
        <div style="text-align: center">Skills</div>

      </v-sheet>

      <v-sheet
          class="folders"
          rounded
          @dblclick="dialogOne=true"
               >

        <v-icon style="font-size: 100px;"   >mdi-folder </v-icon>
        <div style="text-align: center">Certifications</div>
      </v-sheet>
      <v-sheet
          class="folders"
          rounded
          @dblclick="dialogTwo=true"
      >

        <v-icon style="font-size: 100px;">mdi-folder </v-icon>
        <div style="text-align: center">projects</div>
      </v-sheet>
      <v-sheet
          class="folders"
          rounded
          @dblclick="dialogThree=true"
              >

        <v-icon style="font-size: 100px;">mdi-folder </v-icon>
        <div style="text-align: center">profile</div>
      </v-sheet>
      <v-sheet
          class="folders"
          rounded
          @dblclick="dialogFour=true"
                >

        <v-icon style="font-size: 100px;">mdi-folder </v-icon>
        <div style="text-align: center">contact us</div>
      </v-sheet>
    </div>
    <div class="button-admin">
      <v-btn
          plain
          to="login"
          style="color: #f0f0f0"
      >
        <v-icon
            left
        >
          mdi-cog-outline
        </v-icon>Admin
      </v-btn>
    </div>
    <v-bottom-navigation
        shift
        fixed
        horizontal
        style="justify-content: flex-start;position: fixed;bottom: 0;overflow: scroll;z-index: 999"
        dark
        width="100%"
    >
      <div>

<!--        Windows-->

        <v-dialog
            v-model="dialogWindows"
            width="100px"

            dark
            open-delay="7"

        >
          <template v-slot:activator="{ on, attrs }">
            <v-btn
                v-bind="attrs"
                v-on="on"
                style="text-align: center"
                width="70"
                height="55"
            >
              <span>Windows</span>



              <v-icon>mdi-microsoft-windows</v-icon>
            </v-btn>
          </template>

          <DiaWindows />
        </v-dialog>

<!--        skills-->

        <v-dialog
            v-model="dialog"
            origin="bottom left"
            fullscreen
        >
          <template v-slot:activator="{ on, attrs }">
            <v-btn
                v-bind="attrs"
                v-on="on"
                style="text-align: center"
                width="70"
                height="55"
            >
              <span>Skills</span>

              <v-icon>mdi-database-check</v-icon>
            </v-btn>
          </template>
          <v-card>
            <div class="head">
              <div class="buttons">
                <div class="button -red"></div>
                <div class="button -yellow"></div>
                <div class="button -green"></div>
              </div>
              <div class="tabs-group">
                <draggable :list="$data.tabs"   >
                  <transition-group class="tabs" name="list-complete">
                    <template v-for="tab in $data.tabs">
                      <div
                          :class="[active(tab.id), 'tab']"
                          :key="tab.id"

                      >

                        <p  style="font-size: 140%; margin: auto 0%" >skills</p>

                        <v-btn
                            class="close-button"
                            icon

                            @click="dialog = false"

                        >
                          <v-icon >mdi-close</v-icon>
                        </v-btn>

                      </div>
                    </template>
                  </transition-group>
                </draggable>
              </div>


              <v-btn
                  icon
                  @click="dialog = false"
                  class="close_tab"
                  style="color: white"
              >
                <v-icon >mdi-close</v-icon>
              </v-btn>


            </div>

            <DiaSkills />
          </v-card>
        </v-dialog>

<!--        Certifications-->

        <v-dialog
            v-model="dialogOne"
            fullscreen
            hide-overlay
            origin="bottom left"
        >
          <template v-slot:activator="{ on, attrs }" >
            <v-btn
                v-bind="attrs"
                v-on="on"
                class=""
                style="text-align: center"
                width="105"
                height="55"
            >
              <span>Certifications</span>

              <v-icon>mdi-certificate</v-icon>
            </v-btn>
          </template>
          <v-card >
            <div class="head">
              <div class="buttons">
                <div class="button -red"></div>
                <div class="button -yellow"></div>
                <div class="button -green"></div>
              </div>
              <div class="tabs-group">
                <draggable :list="$data.tabs"   >
                  <transition-group class="tabs" name="list-complete">
                    <template v-for="tab in $data.tabs">
                      <div
                          :class="[active(tab.id), 'tab']"
                          :key="tab.id"

                      >

                        <p  style="font-size: 140%; margin: auto 0%" >certifications</p>

                        <v-btn
                            class="close-button"
                            icon

                            @click="dialogOne = false"

                        >
                          <v-icon >mdi-close</v-icon>
                        </v-btn>

                      </div>
                    </template>
                  </transition-group>
                </draggable>
              </div>


              <v-btn
                  icon
                  @click="dialogOne = false"
                  class="close_tab"
                  style="color: white"
              >
                <v-icon >mdi-close</v-icon>
              </v-btn>


            </div>
            <DiaCer />
          </v-card>
        </v-dialog>

<!--        projects-->

        <v-dialog
            v-model="dialogTwo"
            fullscreen
            hide-overlay
            origin="bottom left"
        >
          <template v-slot:activator="{ on, attrs }">
            <v-btn
                v-bind="attrs"
                v-on="on"
                class=""
                style="text-align: center"
                width="80"
                height="55"
            >
              <span>Projects</span>

              <v-icon>mdi-language-xaml</v-icon>
            </v-btn>
          </template>
          <v-card>
            <div class="head">
              <div class="buttons">
                <div class="button -red"></div>
                <div class="button -yellow"></div>
                <div class="button -green"></div>
              </div>
              <div class="tabs-group">
                <draggable :list="$data.tabs"   >
                  <transition-group class="tabs" name="list-complete">
                    <template v-for="tab in $data.tabs">
                      <div
                          :class="[active(tab.id), 'tab']"
                          :key="tab.id"

                      >

                        <p  style="font-size: 140%; margin: auto 0%">projects</p>

                        <v-btn
                            class="close-button"
                            icon

                            @click="dialogTwo = false"

                        >
                          <v-icon >mdi-close</v-icon>
                        </v-btn>

                      </div>
                    </template>
                  </transition-group>
                </draggable>
              </div>


              <v-btn
                  icon
                  @click="dialogTwo = false"
                  class="close_tab"
                  style="color: white"
              >
                <v-icon >mdi-close</v-icon>
              </v-btn>


            </div>

            <DiaProjects />
          </v-card>
        </v-dialog>

<!--        profile-->

        <v-dialog
            v-model="dialogThree"
            fullscreen
            hide-overlay
            origin="bottom left"
        >
          <template v-slot:activator="{ on, attrs }">
            <v-btn
                v-bind="attrs"
                v-on="on"
                class=""
                style="text-align: center;"
                width="80"
                height="55"

            >
              <span>Profile</span>

              <v-icon >mdi-account-eye-outline</v-icon>
            </v-btn>
          </template>
          <v-card>
            <div class="head">
              <div class="buttons">
                <div class="button -red"></div>
                <div class="button -yellow"></div>
                <div class="button -green"></div>
              </div>
              <div class="tabs-group">
                <draggable :list="$data.tabs"   >
                  <transition-group class="tabs" name="list-complete">
                    <template v-for="tab in $data.tabs">
                      <div
                          :class="[active(tab.id), 'tab']"
                          :key="tab.id"

                      >

                        <p  style="font-size: 140%; margin: auto 0%" >profile</p>

                        <v-btn
                            class="close-button"
                            icon

                            @click="dialogThree = false"

                        >
                          <v-icon >mdi-close</v-icon>
                        </v-btn>

                      </div>
                    </template>
                  </transition-group>
                </draggable>
              </div>


              <v-btn
                  icon
                  @click="dialogThree = false"
                  class="close_tab"
                  style="color: white"
              >
                <v-icon >mdi-close</v-icon>
              </v-btn>


            </div>
            <DiaProfile />
          </v-card>
        </v-dialog>

<!--        contact us-->

        <v-dialog
            v-model="dialogFour"
            fullscreen
            hide-overlay
            origin="bottom left"
        >
          <template v-slot:activator="{ on, attrs }">
            <v-btn
                v-bind="attrs"
                v-on="on"
                class=""
                style="text-align: center;"
                width="70"
                height="55"

            >
              <span>Contact</span>

              <v-icon >mdi-card-account-phone</v-icon>
            </v-btn>
          </template>
          <v-card>


            <div class="head">
              <div class="buttons">
                <div class="button -red"></div>
                <div class="button -yellow"></div>
                <div class="button -green"></div>
              </div>
              <div class="tabs-group">
                <draggable :list="$data.tabs"   >
                  <transition-group class="tabs" name="list-complete">
                    <template v-for="tab in $data.tabs">
                      <div
                          :class="[active(tab.id), 'tab']"
                          :key="tab.id"

                      >

                        <p  style="font-size: 140%; margin: auto 0%" >contact</p>

                        <v-btn
                            class="close-button"
                            icon

                            @click="dialogFour = false"

                        >
                          <v-icon >mdi-close</v-icon>
                        </v-btn>

                      </div>
                    </template>
                  </transition-group>
                </draggable>
              </div>


              <v-btn
                  icon
                  @click="dialogFour = false"
                  class="close_tab"
                  style="color: white"
              >
                <v-icon >mdi-close</v-icon>
              </v-btn>


            </div>

            <DiaContact />
          </v-card>
        </v-dialog>


      </div>
      <v-spacer></v-spacer>
      <div class="DateTime">
        <div class="time">12:28 PM</div>
        <div class="date">15/4/1998</div>
      </div>
    </v-bottom-navigation>
  </div>

</template>

<script>

import DiaSkills from '../components/DiaSkills';
import DiaWindows from "@/components/DiaWindows";
import DiaCer from "@/components/DiaCer";
import DiaProjects from "@/components/DiaProjects";
import DiaProfile from "@/components/DiaProfile";
import DiaContact from "@/components/DiaContact";


 export default {
   data() {

    return {
      stil:{
        left:0,
        top:0,
        right:0
      },
      dialog: false,
      dialogOne: false,
      dialogTwo: false,
      dialogThree: false,
      dialogFour: false,
      dialogFive: false,

      dialogWindows:false,
      time: '11:15',
      timeStep: '10:10',
      currentTabId: 1,
       tabs: [
        {
          id: 1,
         },

      ]
    };


  },
  computed: {
    active() {
      return (id) => id === this.$data.currentTabId && "-active";
    },


  },

  methods: {


    alertTo:  function () {
       this.dialogWindows = true;
     }

  },

  components: {
    DiaWindows,
    DiaSkills,
    DiaCer,
    DiaProjects,
    DiaProfile,
    DiaContact,
   },
};
</script>
<style scoped lang="scss">
html{
  font-size: 16px;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  z-index: 100;
  filter: blur(0px);

}
.img_home{
  position: absolute;
   width: 100%;
  height: 680px;
  background-image: url("../assets/gif/7.gif");
  background-size: contain;
   background-repeat: no-repeat;
  background-position: center  ;
  z-index: 5;
  filter: blur(0px);
  margin: auto;
 }
@media only screen and (max-width: 600px){
  .img_home{
    position: absolute;
    width: 100%;
    height: 500px;
    background-image: url("../assets/gif/7.gif");
    background-size:contain;
    background-repeat: no-repeat;
    background-position: right   ;
    z-index: 5;
    filter: blur(0px);
    margin: auto;
  }}
.v-dialog {
  border-radius: 4px;
  overflow : hidden;
  pointer-events: auto;
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  width: 100%;
  z-index: -1;
  outline: none;
  box-shadow: 0px 11px 15px -7px rgb(0 0 0 / 20%), 0px 24px 38px 3px rgb(0 0 0 / 14%), 0px 9px 46px 8px rgb(0 0 0 / 12%);
}
.v-dialog__content {
  align-items: center;
  display: flex;
  height: 103%;
  justify-content: center;
  left: 0;
  pointer-events: none;
  position: fixed;
  top: -38px;
  transition: 0.2s cubic-bezier(0.25, 0.8, 0.25, 1), z-index 1ms;
  z-index: 6;
}
.v-application--is-ltr .v-toolbar__content > .v-btn.v-btn--icon:last-child, .v-application--is-ltr .v-toolbar__extension > .v-btn.v-btn--icon:last-child {
  margin-right: -12px;
  position: fixed;
  right: 2%;
}
.v-item-group.v-bottom-navigation--horizontal .v-btn > .v-btn__content > .v-icon {
  margin-bottom: 0;
  margin-right: 3px;
}
.theme--dark.v-btn.v-btn--has-bg {
  background-color: #2E2E2E;
  width: 23%;
}
.DateTime{
  width: 8%;
  height: 100%;
  display: flex;
  flex-wrap: wrap;
  align-content: space-between;
  cursor: pointer;
  font-size: 90%;
  z-index: 100;
  filter: blur(0px);
}
.DateTime:hover{
  background:black;
}
.time{
  width: 100%;
  height: 40%;
  text-align: center;
  padding: 2px 0 0 0;
}
.date{
  width: 100%;
  height: 55%;
  text-align: center;
}
.folder{
  position: absolute;
  width:100%;
  height: 700px;
  z-index: 100;
 }
.folders{
  cursor: pointer;
  width: 100px;
  height: 120px;
  margin:1% 0 ;
   top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: none;
  z-index: 100;

}
@media only screen and (max-width: 600px){
  .folder{
    position: relative;
    width:45%;
    height: 500px;
     display: flex;
    flex-wrap: wrap;
    align-content: space-around;
  }
  .folders{
    cursor: pointer;
    //width: 100px;
    font-size: 100%;
    margin: 0% 2% 3.5% 1%;
    position: relative;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
   }
}
@media only screen and (max-width: 600px){
  .DateTime{
    width: 20%;
  }
}

/* CSS */
.button-admin {
  all: unset;
  width: 100px;
  height: 30px;
  font-size: 18px;
  background: transparent;
  border: none;
  color: #f0f0f0;
  cursor: pointer;
   padding: 10px 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  white-space: nowrap;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  position: absolute;
  right: -.5%;
  top: 10%;
  z-index: 100;
}

.button-admin::after,
.button-admin::before {
  content: '';
  position: absolute;
  bottom: 0;
  right: 0;
  z-index: -99999;
  transition: all .4s;
}

.button-admin::before {
  transform: translate(0%, 0%);
  width: 100%;
  height: 100%;
  background: #28282d;
  border-radius: 10px;
}

.button-admin::after {
  transform: translate(33px,10px);
  width: 35px;
  height: 35px;
  background: #ffffff15;
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  border-radius: 50px;
}

.button-admin:hover::before {
  transform: translate(5%, 20%);
  width: 110%;
  height: 110%;
}

.button-admin:hover::after {
  border-radius: 10px;
  transform: translate(0, 0);
  width: 100%;
  height: 100%;
}

.button-admin:active::after {
  transition: 0s;
  transform: translate(0, 5%);
}
.theme--light.v-btn.v-btn--has-bg[data-v-35ba3b4c] {
  background: transparent;
  color: aliceblue;
}
.v-btn:not(.v-btn--round).v-size--default {
  height: 0px;
  min-width: 0px;
  padding: 20px;
}
v-card > *:first-child:not(.v-btn):not(.v-chip):not(.v-avatar), .v-card > .v-card__progress + *:not(.v-btn):not(.v-chip):not(.v-avatar) {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
  width: 100%;
}

.head {
  background-color: black;
  display: flex;
  overflow: hidden;
.buttons {
  display: flex;
  align-items: center;
  padding: 0 4px 0 12px;

> .button {
  width: 12px;
  height: 12px;
  border-radius: 100%;

&:not(:last-child) {
   margin-right: 6px;
 }

&.-red {
   background-color: #fb5a59;
 }

&.-yellow {
   background-color: #ffc139;
 }

&.-green {
   background-color: #60d045;
 }
}
}
}

.tabs {
  display: inline-flex;
  align-items: flex-end;
  box-sizing: border-box;
  padding: 1.5px 5px 0px;
  line-height: 1;
  position: relative;
  z-index: 1;
  user-select: none;
  width: 100%;

}

.tab {
  position: relative;
  background-color: transparent;
   border-radius: 10px 10px 0 0;
  font-size: 12px;
  display: block;
  width: 230px;
  transition: background-color 0.2s;
  cursor: default;
   margin-right: -1px;
  white-space: nowrap;
  flex: 1;
  overflow: hidden;
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 50px;
  padding: 5% 8%;

  &:hover {
    background-color: #dee1e6;

    &::before {
      background-color: #dee1e6;
      right: 0;
    }
  }

  &.-active {
    background-color: white;

    &::before {
      background-color: white;
      right: 0;
    }
  }

  &.-dragging {
    opacity: 0;
  }

  &::after {
    content: "";
    display: block;
    height: 20px;
    width: 1px;
    background-color: #888;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 0;
    z-index: -1;
  }

  &::before {
    content: "";
    display: block;
    height: 20px;
    width: 30px;
    position: absolute;
    right: 1px;
    background-color: #dee1e6;
    transition: background-color 0.2s;

  }

  > .close-button {
    width: 10px;
    height: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
     border-radius: 100%;
    padding: 4px;
    position: absolute;
    right: 15px;

  }
}
.close_tab{
  position: relative;
  top: 5px;
  left: 77.5%;
}

@media only screen and (max-width: 600px){
  .close_tab{
    left: 33%;
  }
}


body {
  font-family: 'Verdana', sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;

}

</style>