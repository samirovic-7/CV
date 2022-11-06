<template>

  <v-list class="cardPdf" >





        <v-card-text>
          <img class="image_pdf_dialog" src="../assets/my_photo/cv.png">
        </v-card-text>


   </v-list>
</template>
<script>
export default {

  // eslint-disable-next-line vue/multi-word-component-names
  name: 'DiaPdf',
    data: () => ({
      sheet: false,

    }),
}
</script>
<style scoped>


@media only screen and (max-width: 600px) {



  .cardPdf{
    height: 500px;
    overflow: scroll;

   }
}
.image_pdf_dialog{
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
  width: 100%;
  margin-top: .5%;
  height: 630px;
  border-radius: 5px;
}
</style>


