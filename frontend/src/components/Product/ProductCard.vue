<template>
  <div class="product">
    <div>
      <img src="https://trial-sport.ru/images/catalog/500/1v3a5841_2642979.jpg" />
    </div>
    <div class="product-title"><b>Горный велосипед Outleap RIOT EXPERT</b></div>
    <br>
    <div>Бренд: Outleap</div>
    <div>Сезон: 2022</div>
    <br>
    <div>
      <span class="price">45 890 ₽</span>
      <span class="discount">22 945 ₽</span>
    </div>
    <div class="triangle"></div>
    <div class="discount-percent">50%</div>
    <br>
    <button class="btn btn-cart">В корзину</button>
  </div>
</template>

<script>
export default {
  name: "ProductCard"
}
</script>

<style>
  .product {
    position: relative;
    border: 1px solid #ddd;
    padding: 15px;
  }

  .product .product-title {
    font-size: 16px;
  }

  .product img {
    width: 100%;
  }

  .price {
    font-size: 18px;
  }

  .discount {
    background-color: #f8dc07;
    color: #333;
    padding: 5px;
    font-size: 18px;
    margin-left: 15px;
  }

  .triangle {
    position: absolute;
    left: 0;
    top: 0;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 70px 70px 0 0;
    border-color: red transparent transparent transparent;
  }

  .discount-percent {
    position: absolute;
    top: 10px;
    left: 5px;
    color: #fff;
    font-size: 16px;
  }

  .btn-cart {
    width: 100%;
    background-color: rgb(42, 63, 108);
    color: #fff;
    border-radius: 4px;
  }

  .btn.btn-cart:hover {
    background-color: rgb(19, 24, 47);
    color: #fff;
  }
</style>