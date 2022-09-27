import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    firstname: 'John',
    lastname: 'Jayson',
  },

  actions: {
    testAction(context, payload) {
      context.commit('SET_FIRSTNAME', response.data.name)
      context.commit('SET_LASTNAME', response.data.lastname)
    },
  },

  getters: {
    getFullName(state) {
      return state.firstname + ' ' + state.lastname;
    },
  },

  mutations: {
    SET_FIRSTNAME(state, payload) {
      state.firstname = payload;
    },
    SET_LASTNAME(state, payload) {
        state.lastname = payload;
    },
  },
})
