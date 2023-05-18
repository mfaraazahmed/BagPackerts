<template>
<NavbarComponent/>
  <div class="auth-wrapper">
    <div class="inner-auth">
    <router-view></router-view>
    </div>
  </div>
  
</template>

<script>

import NavbarComponent from './components/NavbarComponent.vue'


export default {
  name: 'App',
  components: {
    NavbarComponent,
  }
}
</script>

<style>

</style>
