<template>
  <div id="app">
    <div class="wrapper">
      <Header></Header>
      <main class="container">
        <router-view/>
      </main>
    </div>

    <Footer></Footer>
  </div>
</template>

<script>
import Header from "@/components/Main/Header";
import Footer from "@/components/Main/Footer";

export default {
  components: {Footer, Header}
}
</script>

<style>
  html, body {
    padding: 0;
    margin: 0;
    font-family: 'Open Sans', sans-serif;
  }

  .wrapper {
    min-height: 100vh;
    padding-bottom: 75px;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
  }

  main {
    padding-top: 15px;
  }
</style>