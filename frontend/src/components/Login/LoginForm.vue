<template>
  <form class="mt-4" method="post">
    <div class="mb-4">
      <div><label>Email</label></div>
      <div><input type="email" class="w-100" name="email" required></div>
      <div class="errors">Заполните "Email"</div>
    </div>
    <div class="mb-4">
      <div><label>Пароль</label></div>
      <div><input type="password" class="w-100" name="password" required></div>
      <div class="errors">Заполните "Пароль"</div>
    </div>
    <div class="mb-4">
      <button type="submit" class="btn btn-yellow">Войти</button>
    </div>
  </form>
</template>

<script>
export default {
  name: "LoginForm"
}
</script>

<style>
  .login-form {
    max-width: 400px;
    margin: 25px auto;
    background-color: #f2f2f2;
    padding: 25px;
  }

  .login-form .errors {
    color: red;
  }

  .login-form input {
    border: 1px solid #ddd;
  }

  .btn-yellow {
    width: 100%;
    background-color: #ecce00;
    color: #333;
    transition: 2s;
  }
</style>