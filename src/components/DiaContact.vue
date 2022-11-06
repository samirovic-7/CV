<template>
  <v-app id="inspire">


    <v-main class="grey lighten-3  ">
      <div  class="ContDiv">
        <v-row>
          <v-col cols="2">
            <v-sheet rounded="lg" min-height="50vh">
              <v-list color="transparent">
                <v-list-item
                    v-for="links in socialLinks"
                    :key="links"
                    link
                >
                  <v-list-item-content>
                    <a :href="links.links" target="_blank" class="a">     <v-list-item-title >
                            <v-icon>{{links.icon}} </v-icon>
                            {{ links.name }}
                             </v-list-item-title>
                    </a>
                  </v-list-item-content>
                </v-list-item>

                 <v-divider  v-for="divider in 6" :key="divider"></v-divider>
                <v-list-item
                    link
                    color="grey lighten-4">

                    <v-list-item-title>
                      <v-icon>mdi-book-open-blank-variant </v-icon>  social media links
                    </v-list-item-title>

                </v-list-item>

                <v-divider  v-for="divider in 5" :key="divider"></v-divider>

              </v-list>
            </v-sheet>
          </v-col>

          <v-col>
            <v-sheet
                min-height="65vh"
                rounded="lg"
            >
              <form class="text-center">
                <v-col
                    cols="12"
                    md="12"
                >
                <v-text-field
                    label="Name"
                    required
                ></v-text-field>
                </v-col>
                  <v-col
                      cols="12"
                      md="12"
                  >
                    <v-text-field
                    label="E-mail"
                    required
                ></v-text-field>
                  </v-col>
                <v-col
                    cols="12"
                    md="12"
                >
                  <v-textarea
                      name="input-7-1"
                      label="Contact With Mohamed"
                      hint="Hint text"
                  ></v-textarea>
                </v-col>

                <v-col
                    cols="12"
                    md="12"
                >
                <v-btn          class="button-contact">
                  Send
                </v-btn>
                </v-col>
              </form>
            </v-sheet>
          </v-col>
        </v-row>
      </div>
    </v-main>
    
  </v-app>
</template>

<script>
export default {
  name: 'DiaContact',

  data: () => ({

      socialLinks: [
        {name:'linkedin', links:'https://www.linkedin.com/in/mohamed-samir-068a891bb/?fbclid=IwAR0uddzzpyESyjnxcjAGT1vDFVoFFKnlI3nAvMS-T0Jl6MbtTL-XIWHRfJ4',icon:'mdi-linkedin'},
        {name:'gmail', links:'https://mail.google.com/mail/u/0/#inbox',icon:'mdi-gmail'},
        {name:'01159839072', icon:'mdi-whatsapp'},
        {name:'01062328062', icon:'mdi-cellphone'},
        {name:'githup', links:'https://github.com/samirovic-7?tab=repositories',icon:'mdi-github'},
        {name:'satckoverflow', links:'https://stackoverflow.com/users/15395972/samirovic',icon:'mdi-stack-overflow'},
        {name:'codepen', links:'https://codepen.io/samirovic/pens/public?cursor=ZD0wJm89MSZwPTEmdj0zODU2OTI5MA==',icon:'mdi-codepen'},
        {name:'facebook', links:'https://www.facebook.com/profile.php?id=100007309939085',icon:'mdi-facebook'},
        {name:'twitter', links:'https://twitter.com/Samiriovic?fbclid=IwAR1nVz98DUfSNmSEvJtnC3HjC4Esz7Rva9XT5mJTUOI3nJRWfhVqBtcHGJQ',icon:'mdi-twitter'},
        {name:'instagram', links:'https://www.instagram.com/mohamedsamirovic/?fbclid=IwAR30UsJbTlXww6YcSS3lYx2vaeZiPhLbCC0Kkrf7knI0BESZ81avfm4BaAM',icon:'mdi-instagram'},
   ],
  }),
}
</script>
<style scoped>
.ContDiv{
  overflow: hidden;
  width: 90%;
  margin:2% auto 0%;

}
.a{
  text-decoration: none;
  color: #2E2E2E;
}

.button-contact {
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
}

.button-contact:hover {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 8px -5px;
  transform: translate3d(0, 2px, 0);
}

.button-contact:focus {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
}
.v-btn:not(.v-btn--round).v-size--default {
   height: 51px;
   min-width: 130px;
   padding: 0 16px;
 }
</style>