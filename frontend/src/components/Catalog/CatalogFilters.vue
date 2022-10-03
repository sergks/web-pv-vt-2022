<template>
  <ul class="list-unstyled filters">
    <li>
      <div>Бренд</div>
      <ul class="list-unstyled">
        <li>
          <input type="checkbox"> Cannondale
        </li>
        <li>
          <input type="checkbox"> Corratec
        </li>
        <li>
          <input type="checkbox"> GT
        </li>
        <li>
          <input type="checkbox"> Jamis
        </li>
      </ul>
    </li>
    <li>
      <div>Возраст</div>
      <ul class="list-unstyled">
        <li>
          <input type="checkbox"> для взрослых
        </li>
        <li>
          <input type="checkbox"> для подростков
        </li>
      </ul>
    </li>
    <li>
      <div>Сезон</div>
      <ul class="list-unstyled">
        <li>
          <input type="checkbox"> 2022
        </li>
        <li>
          <input type="checkbox"> 2021
        </li>
        <li>
          <input type="checkbox"> 2020
        </li>
      </ul>
    </li>
    <li>Тип</li>
    <li>Назначение</li>
  </ul>
</template>

<script>
export default {
  name: "CatalogFilters"
}
</script>

<style>
  .filters li {
    padding: 10px 0;
    border-top: 1px solid #ddd;
    font-weight: bold;
    transition: 0.5s;
  }

  .filters li:first-child {
    border-top: none;
    padding-top: 0;
  }

  .filters li ul {
    margin-top: 5px;
  }

  .filters li ul li {
    font-weight: normal;
    border-top: none;
    padding: 2px 0;
  }
</style>