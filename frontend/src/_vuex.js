import page from './vuex/page'

export default {
  strict: true,

  modules: {
    page,
  },

  state: {
    spinning: false,
  },

  mutations: {
    startLoading: (s) => s.spinning = true,
    endLoading: (s) => s.spinning = false,
    setSpinning: (s, p) => s.spinning = p,
  },

  getters: {
    // shortcuts
    // debug: (s, g, rS, rG) => (rG['variables/settings']['env.APP_DEBUG'] == true || rG['variables/settings']['env.APP_DEBUG'] == 1 || rG['variables/settings']['env.APP_DEBUG'] == 'true') ? true : false,
    spinning: (s) => s.spinning,
  },

  actions: {

  }
}
