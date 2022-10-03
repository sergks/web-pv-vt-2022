<template>
  <footer>
    <div class="container">
      <div>&copy; БГТУ, 2022</div>
      <div>+7(000)000-00-00</div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer"
}
</script>

<style>
  footer {
    background-color: rgb(42, 63, 108);
    padding: 15px;
    color: #fff;
    height: 100px;
    margin-top: -100px;
  }

  footer .container {
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
</style>