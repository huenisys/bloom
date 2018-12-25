<template>
  <div>
    <div id="app-navi" class="navi-slider bg-info text-light border-top border-primary" :class="{slidUp: !naviVisible}">
      <div class="container">
        <div class="d-flex">
          <div class="mr-auto py-2">
            <router-link to="/" class="text-light">Home</router-link>
          </div>
          <div class="py-2">
            <router-link to="/terms" class="text-light">Terms</router-link>
          </div>
        </div>
      </div>
    </div>
    <div id="navi-button-container" class="container mb-4" :class="{foreverVisible: togglerForeverVisible}">
      <div id="navi-button" class="border border-primary" :class="{center: isNaviButtonAligned('center')}" @click="toggleNaviVis()">
        <span id="navi-button-text">{{naviVisible ? '-' : '+'}}</span>
      </div>
    </div>
  </div>
</template>

<style>
#app-navi {
  border-top-width:3px !important;
}

/* navi-slider */
.navi-slider {
  overflow-y: hidden;
  max-height: 100px; /* approximate max height */

  transition-property: all;
  transition-duration: .5s;
  transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
}

#navi-button-container {
  text-align: center;
  position: relative;
}

#navi-button {
  cursor: pointer;
  font-size: 1rem;
  width: 3rem;
  height: 3rem;
  border-radius: 1.5rem;
  border-width: 2px !important;
  background: pink;
  display: inline-block;
  top: -1.5rem;
  position: absolute;
}

#navi-button-text {
  font-size: 1.5rem;
}

#navi-button.center {
  left: 50%;
  margin-left: -1.5rem;
}

#navi-button.visible-logo {
  background-image: url('/favicon/logo.png');
  background-size: 100%;
}

#navi-button.visible-logo #navi-button-text {
  display: none;
}

.navi-slider + #navi-button-container{
  display:none;
}

.navi-slider.slidUp {
    max-height: 0;
}

.navi-slider.slidUp + #navi-button-container{
  display:block;
}

#navi-button-container.foreverVisible{
  display:block;
}
</style>



<script>
export default {

  data() {
    return {
      naviVisible: true,
      togglerForeverVisible: false,
      naviButtonAlignment: 'center'
    }
  },

  computed: {
    isNaviButtonAligned() {
      return (alignment) => this.naviButtonAlignment === alignment;
    }
  },

  methods: {
    toggleNaviVis() {
      this.naviVisible = !this.naviVisible;
    },

    hideNavi() {
      this.naviVisible = false;
      this.togglerForeverVisible = true;
    }
  },

  created() {
    setTimeout(this.hideNavi, 1000);
  }
}
</script>

