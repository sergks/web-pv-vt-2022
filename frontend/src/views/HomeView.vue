<template>
    <div class="home">

        <SliderList></SliderList>

        <section class="products-list row">
            <div class="col-md-6 col-lg-3 mb-5" v-for="product in products">
                <ProductCard :item="product"></ProductCard>
            </div>
        </section>
    </div>
</template>

<script>

import ProductCard from "@/components/Product/ProductCard";
import SliderList from "@/components/Slider/SliderList";

export default {
    name: 'HomeView',
    components: {SliderList, ProductCard},
    data() {
        return {
            products: []
        }
    },
    created() {
        this.$http.get('/products/list')
            .then((response) => this.products = response.data)
    }
}
</script>

