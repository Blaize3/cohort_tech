<template>
  <div id="app">
    <nav>
      <router-link to="/logged-user">Home</router-link>
      <router-link to="/document"></router-link>
    </nav>

    <router-view />
  </div>
</template>

<script>
import LoggedUser from './loggedUser/index.vue'
import Document from './document/index.vue'

export default {
  name: 'app',
  components: {
    LoggedUser,
    Document
  }
}
</script>

