import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeCV from '../views/HomeCV.vue'
import Dashboard_Admin from '../views/Dashboard_Admin.vue'
import login_admin from '../views/login_admin.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'HomeCV',
    component: HomeCV
  },
  {
    path: '/login',
    name: 'login',
    component: login_admin
  },
  {
    path: '/Dashboard',
    name: 'Dashboard',
    component: Dashboard_Admin
  },

]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
