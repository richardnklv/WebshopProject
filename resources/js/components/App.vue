<template>
    <div>
<!--        app structure-->
        <product-display product-id=""></product-display>
        <router-view></router-view> <!-- This is where your router-view will be injected -->
    </div>
</template>

<script>
import ProductDisplay from "./ProductDisplay.vue";

export default {
    name: 'App',
    // components that App.vue uses
    components: {
       ProductDisplay
    }
}
</script>

<style>
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}
</style>
