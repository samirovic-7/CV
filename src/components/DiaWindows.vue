<template>
  <v-list class="cardWindows">
    <v-subheader>Some of the knowledge I have</v-subheader>
     <v-list-item
        v-for="tile in tiles"
        :key="tile.title"
        @click="sheet = false"
    >
      <v-list-item-avatar>
        <v-avatar
            size="32px"
            tile
        >
          <img
              :src="`https://cdn.vuetifyjs.com/images/bottom-sheets/inbox.png`"
              :alt="tile.title"
          >
        </v-avatar>
      </v-list-item-avatar>
      <v-list-item-title>{{ tile.title }}</v-list-item-title>
    </v-list-item>
  </v-list>
</template>
<script>
export default {

  // eslint-disable-next-line vue/multi-word-component-names
  name: 'DiaWindows',
    data: () => ({
      sheet: false,
      tiles: [
        {  title: 'Canvas.js' },
        {   title: 'PWA' },
        { title: 'MVC' },
        {  title: 'Rest Api' },
        {   title: 'Problem Solving' },
        {   title: 'GitHup' },
      ],
    }),
}
</script>
<style scoped>

.cardWindows{
  height: 550px;
  overflow: scroll;
  position: absolute;
  top: 24%;
  left: 0%;
}
@media only screen and (max-width: 600px) {
  .cardWindows{
    height: 500px;
    overflow: scroll;
    position: absolute;
    top:8.5%;
    left: 0%;

  }
}
.v-sheet.v-list {
  border-radius: 0;
  width: 30%;
}
</style>