const page = {
  title: 'No title',
  content: 'Default content.',
};

export default {
  namespaced: true,

  state: {
    pageResource: page,
    loadedPage: page,
  },

  mutations: {
    setPageResource: (s, p) => s.pageResource = p,
  },

  getters: {
    pageResource: (s) => s.pageResource,
	},

  actions: {
    resetPageResource: ({commit}) => commit('setPageResource', page),
  }
}
