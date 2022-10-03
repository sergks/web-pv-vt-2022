<template>
  <div class="home">

    <SliderList></SliderList>

    <section class="products-list row">
      <div class="col-md-6 col-lg-3 mb-5">
        <ProductCard></ProductCard>
      </div>
      <div class="col-md-6 col-lg-3 mb-5">
        <ProductCard></ProductCard>
      </div>
      <div class="col-md-6 col-lg-3 mb-5">
        <ProductCard></ProductCard>
      </div>
      <div class="col-md-6 col-lg-3 mb-5">
        <ProductCard></ProductCard>
      </div>
    </section>
  </div>
</template>

<script>

import ProductCard from "@/components/Product/ProductCard";
import SliderList from "@/components/Slider/SliderList";
export default {
  name: 'HomeView',
  components: {SliderList, ProductCard}
}
</script>

