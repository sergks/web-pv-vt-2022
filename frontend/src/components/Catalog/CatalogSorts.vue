<template>
  <div class="sorts d-flex justify-content-between">
    <div>
      <select>
        <option>Сортировать</option>
        <option>по названию</option>
        <option>по бренду</option>
        <option>по сезону</option>
      </select>
    </div>
    <div class="sorts-checkbox">
      <div class="sorts-item">
        <label>
          <input type="checkbox"> в наличии
        </label>
      </div>
      <div class="sorts-item">
        <label>
          <input type="checkbox"> новинки
        </label>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CatalogSorts"
}
</script>

<style>
  .sorts {
    padding-bottom: 20px;
  }

  .sorts .sorts-checkbox {
    display: flex;
  }

  .sorts .sorts-checkbox .sorts-item {
    margin-left: 15px;
  }

  .sorts select {
    padding: 0 15px;
  }
</style>