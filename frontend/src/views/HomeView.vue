<template>
  <div class="home">
    <ProductCard
        :product="item"
        v-for="item in items">
    </ProductCard>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'
import ProductCard from "@/components/Product/ProductCard";

export default {
  name: 'HomeView',
  data() {
    return {
      items: [
        {
          id: 1,
          name: 'Товар 1'
        },
        {
          id: 2,
          name: 'Товар 2'
        },
        {
          id: 3,
          name: 'Товар 3'
        }
      ]
    }
  },
  components: {
    HelloWorld,
    ProductCard
  },
  methods: {
    click() {

    }
  }
}
</script>

