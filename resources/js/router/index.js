import { createRouter, createWebHistory} from "vue-router";

import OptionSelector from "../components/OptionSelector.vue";

const routes = [
    {
        path: '/',
        name: 'Option Selector',
        components: OptionSelector
    }
]


const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
