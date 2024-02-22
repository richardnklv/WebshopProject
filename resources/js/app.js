import { createApp } from 'vue';
import HelloWorld from "./components/HelloWorld.vue";

const app = createApp({
    data() {
        return {
            HelloWorld,
            message: 'Hello from App root'
        };
    },
    template: '<h1>{{ message }}</h1>'
});

app.mount('#app');
