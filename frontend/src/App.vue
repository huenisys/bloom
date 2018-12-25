<template>
  <div id="app-wrapper">
    <div id="app-content">
      <div class="sticky-top">
        <navbar></navbar>
        <navi></navi>
      </div>
      <middle>
        <router-view />
      </middle>
    </div>
    <bottombar></bottombar>
  </div>
</template>

<script>
import Navbar from './partials/Navbar.vue'
import Navi from './partials/Navi.vue'
import Middle from './partials/Middle.vue'
import Bottombar from './partials/Bottombar.vue'

export default {
  components: { Navbar, Navi, Middle, Bottombar}
}
</script>
