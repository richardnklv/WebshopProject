<template></template>

<!--// product image-->

<!--// title, description-->

<!--// OptionSelector for each type of option-->

<!--// PriceDisplay to update on current options-->

<!--// OrderButton to add product to cart-->

<!--// LARAVEL API ENDPOINTS-->

<!--<template>-->
<!--    <div class="product-display" v-if="product">-->
<!--        <img :src="product.image_url" alt="Product image" />-->
<!--        <h1>{{ product.name }}</h1>-->
<!--        <p>{{ product.description }}</p>-->
<!--        <p>Base price: {{ product.base_price }}</p>-->

<!--        <price-display :base_price="product.base_price" :selectedOptions="selectedOptions" />-->
<!--        <option-selector-->
<!--            v-for-->
<!--                ="optionType in product.optionTypes"-->
<!--            :key="optionType.id"-->
<!--            :optionType="optionType"-->
<!--            @optionSelected="handleOptionSelected"-->
<!--        />-->
<!--        <order-button @addToCart="handleAddToCart" />-->

<!--    </div>-->
<!--</template>-->
<!--<script>-->
<!--import axios from 'axios';-->
<!--import OptionSelector from './OptionSelector.vue';-->
<!--import PriceDisplay from './PriceDisplay.vue';-->
<!--import OrderButton from './OrderButton.vue';-->

<!--export default {-->
<!--    components: {-->
<!--        OptionSelector,-->
<!--        PriceDisplay,-->
<!--        OrderButton-->
<!--    },-->
<!--    props: {-->
<!--        productId: {-->
<!--            type: [Number, String],-->
<!--            required: true-->
<!--        }-->
<!--    },-->
<!--    mounted() {-->
<!--        this.fetchProductData();-->
<!--    },-->
<!--    data() {-->
<!--        return {-->
<!--            selectedOptions: {}-->
<!--        };-->
<!--    },-->
<!--    methods: {-->
<!--        fetchProductData() {-->
<!--            axios.get(`/api/product/${this.productId}`)-->
<!--                .then(response => {-->
<!--                    this.product = response.data;-->
<!--                })-->
<!--                .catch(error => {-->
<!--                    console.error('Error fetching product data:', error);-->
<!--                });-->
<!--        },-->
<!--        handleOptionSelected(option) {-->
<!--            // Update selected options and price-->
<!--            this.selectedOptions[option.type] = option.value;-->
<!--        },-->
<!--        handleAddToCart() {-->
<!--            // Trigger add to cart-->
<!--            this.$emit('addToCart', {-->
<!--                product: this.product,-->
<!--                options: this.selectedOptions-->
<!--            });-->
<!--        }-->
<!--    }-->
<!--};-->
<!--</script>-->
<!--<style>-->
<!--</style>-->
