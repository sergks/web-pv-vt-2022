<template>
  <div>
    <h1> {{ product.name }} </h1>
    <button @click="addToCart">Добавить в корзину</button>
    <div v-if="inCart">Добавлен в корзину</div>
  </div>
</template>

<script>
export default {
  name: "ProductCard",
  props: ['product'],
  data() {
    return {
      inCart: false
    }
  },
  methods: {
    addToCart() {
      this.inCart = true
      setTimeout(() => {
        this.inCart = false
      }, 2000)
    }
  }
}
</script>

<style>

</style>