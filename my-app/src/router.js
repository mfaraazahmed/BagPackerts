import { createRouter, createWebHistory } from 'vue-router';
import Home from './components/Home.vue'
import LoginComponent from './components/LoginComponent.vue';

const routes = [
  {
    path: '/',
    component: Home, // Import and specify the component for the route
  },
  {
    path: '/login',
    component: LoginComponent,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;