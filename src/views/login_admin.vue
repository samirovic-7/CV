<template>
<div class="all_dsfgds">
  <v-alert
      prominent
      type="error"
      border="bottom"
       elevation="9"
      class="alert"
      color="red"
   >
    <v-row align="center">
      <v-col class="grow">
        Sorry, the admin dashboard is currently disabled because it is under modification now <br><br> Modifications will expire  soooooooooon

      </v-col>
      <v-col class="shrink">
        <v-btn to="/" class="button_Back_home" light>Back</v-btn>
      </v-col>
    </v-row>
  </v-alert>
 <v-card   class="card_login">

  <v-card-title>
    <span style="display: block" class="text-h6" >Login To Admin Pannal</span>
  </v-card-title>
  <br>
  <v-card-text>
    <v-container>
      <v-row>


        <v-col cols="12">
          <v-text-field
              label="email"
              type="text"
              required

          ></v-text-field>
        </v-col>

        <v-col cols="12">
          <v-text-field
              label="password"
              type="password"
              required

          ></v-text-field>
        </v-col>

      </v-row>
    </v-container>
  </v-card-text>
  <v-card-actions>

    <v-btn
          to="/"
        class="button_Back_home"
     >
      Back To Home
    </v-btn>
    <v-spacer></v-spacer>
    <v-btn
        color="black darken-1"
        text
        disabled
        class="button-Back"
    >
      login
    </v-btn>
  </v-card-actions>
</v-card>
  </div>
</template>

<script>

export default {
  }
</script>
<style scoped>

.alert{
  position: relative;
    }
.card_login{
    width:55%;
  position: relative;
   margin:10% auto;
 }

.button-Back {
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
  line-height: 213px;
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
}

.button-Back:hover {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 8px -5px;
  transform: translate3d(0, 2px, 0);
}

.button-Back:focus {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
}
.v-btn:not(.v-btn--round).v-size--default {
  height: 51px;
  min-width: 130px;
  padding: 0 16px;
}

.button_Back_home {
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
   font-family: Neucha, sans-serif;
  font-size: 1rem;
  line-height: 13px;
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
 }

.button_Back_home:hover {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 8px -5px;
  transform: translate3d(0, 2px, 0);
}

.button_Back_home:focus {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
}
.v-btn:not(.v-btn--round).v-size--default {
  height: 51px;
  min-width: 130px;
  padding: 0 16px;
}
</style>