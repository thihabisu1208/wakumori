require("./bootstrap");

import VueRouter from "vue-router";
import Vuex from "vuex";
import router from "./routes";

window.Vue = require("vue");

Vue.use(VueRouter);
Vue.use(Vuex);

Vue.component(
    "modal-component",
    require("./components/ModalComponent.vue").default
);

const app = new Vue({
    el: "#app",
    router,
    data: {
        loginModal: false,
        loginModal2: false,
         game1Modal: false,
    }
});
