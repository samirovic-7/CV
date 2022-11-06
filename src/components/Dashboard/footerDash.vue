<template>
  <v-footer
      class="footer"
      app
      color="transparent"
      height="72"
      inset

  >
    <div class="button-logout">
      <v-btn
          to="/"
          style="color: #f0f0f0"
      >
        <v-icon
            left
        >
          mdi-logout
        </v-icon>loguot
      </v-btn>
    </div>
    <v-text-field
        background-color="grey lighten-1"
        dense
        flat
        hide-details
        rounded
        solo
        disabled

    ></v-text-field>
  </v-footer>
</template>
<script>
export default {

  // eslint-disable-next-line vue/multi-word-component-names
  name: 'footerDash',
}
</script>
<style scoped>

.footer{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
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
}

/* CSS */
.button-logout{
  all: unset;
  width: 100px;
  height: 30px;
  font-size: 18px;
  background: transparent;
  border: none;
  color: #f0f0f0;
  cursor: pointer;
  z-index: 1;
  padding: 10px 10px;
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
}

.button-logout::after,
.button-logout::before {
  content: '';
  position: absolute;
  bottom: 0;
  right: 0;
  z-index: -99999;
  transition: all .4s;
}

.button-logout::before {
  transform: translate(0%, 0%);
  width: 100%;
  height: 100%;
  background: #28282d;
  border-radius: 10px;
}

.button-logout::after {
  transform: translate(33px,10px);
  width: 35px;
  height: 35px;
  background: #ffffff15;
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  border-radius: 50px;
}

.button-logout:hover::before {
  transform: translate(5%, 20%);
  width: 110%;
  height: 110%;
}

.button-logout:hover::after {
  border-radius: 10px;
  transform: translate(0, 0);
  width: 100%;
  height: 100%;
}

.button-logout:active::after {
  transition: 0s;
  transform: translate(0, 5%);
}
.theme--light.v-btn.v-btn--has-bg[data-v-35ba3b4c] {
  background: transparent;
  color: aliceblue;
  box-shadow: none;
}
.v-btn:not(.v-btn--round).v-size--default {
  height: 0px;
  min-width: 0px;
  padding: 0px;
}
.v-application--is-ltr .v-btn__content .v-icon--left {
  margin-left: -4px;
  margin-right: 8px;
  color: white;
}
</style>