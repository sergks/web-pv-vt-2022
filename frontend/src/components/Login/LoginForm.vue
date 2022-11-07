<template>
  <form class="mt-4" method="post" @submit="login">
    <div class="mb-4">
      <div><label>Email</label></div>
      <div><input type="email" class="w-100" name="email" required v-model="email"></div>
      <div class="errors">{{ errors.email }}</div>
    </div>
    <div class="mb-4">
      <div><label>Пароль</label></div>
      <div><input type="password" class="w-100" name="password" required v-model="password"></div>
      <div class="errors">{{ errors.password }}</div>
    </div>
    <div class="mb-4">
      <button type="submit" class="btn btn-yellow">Войти</button>
    </div>
  </form>
</template>

<script>
export default {
  name: "LoginForm",
  data() {
    return {
      email: '',
      password: '',
      errors: {
        email: '',
        password: ''
      }
    }
  },
  methods: {
    login(event) {
        this.$http.post('/user/login', {email: this.email, password: this.password})
            .then((response) => {
                localStorage.setItem("user", JSON.stringify(response.data))
                this.$router.push({name: "home"})
            })
            .catch((response) => {
                this.errors.password = "Неверный логин или пароль."
            })

      event.preventDefault()
    },

    validate() {
      for (let errorsKey in this.errors) {
        this.errors[errorsKey] = ''
      }

      if (this.email.trim().length === 0) {
        this.errors.email = 'Заполните Email.'
      }

      if (this.password.trim().length === 0) {
        this.errors.password = 'Заполните Пароль.'
      }
    }
  }
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
