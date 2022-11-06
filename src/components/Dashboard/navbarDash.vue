<template>
  <div>
  <v-app-bar
      app
      height="75"
  >

    <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

    <v-spacer></v-spacer>

    <v-responsive max-width="250">
      <v-text-field
          dense
          flat
          hide-details
          rounded
          solo-inverted
          disabled
      ></v-text-field>
    </v-responsive>
  </v-app-bar>
  <v-navigation-drawer
      v-model="drawer"
      app
      width="180"
      style="z-index: 100;"
  >
    <template>
      <v-list-item>
        <v-list-item-content>
          <v-list-item-title class="text-h6">
            Application
          </v-list-item-title>
          <v-list-item-subtitle>
            subtext
          </v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>
      <v-list
          dense
          rounded
      >
        <v-list-item
            v-for="item in items"
            :key="item.title"
            link
            :to="item.page"
        >
          <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </template>
  </v-navigation-drawer>
  </div>
</template>
<script>
export default {

  name: 'navbarDash',
  data () {
    return {
      drawer:null,
      items: [
        { title: 'Home', icon: 'mdi-view-dashboard' ,page:'Dashboard'},
        { title: 'Skills', icon: 'mdi-forum' ,page:'Skills'},
        { title: 'Projects', icon: 'mdi-home' ,page:'Projects'},
        { title: 'Profile', icon: 'mdi-book' ,page:'Profile'},
        { title: 'Certifications', icon: 'mdi-receipt-text-remove-outline' ,page:'Certification'},
        { title: 'Contacts', icon: 'mdi-card-account-mail' ,page:'Contact'},
      ],
    }

  }

}
</script>
<style scoped>

.footer{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.logout{
  position: absolute;
  right: -.5%;
  top: 20%;
  font-size: 100%;
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
</style>