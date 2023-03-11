
<template>
  <main class="container">
    <section class="container-left">
      <article class="logo-img">
        <img
          src="@/assets/logo_login.png"
          alt="Clube Full-Stack"
        >
      </article>

      <article class="logo-text">
        <h3>Seja bem vindo ao</h3>
        <h1>Clube Full-Stack</h1>
      </article>
    </section>

    <section class="container-right">
      <h1>Faça seu login</h1>

      <template v-if="loading">
        <span class="alert-warning">
          Aguarde, estamos fazendo o login...
        </span>
      </template>

      <template v-if="error">
        <span class="alert-error">
          Erro ao tentar fazer login!
        </span>
      </template>

      <form
        class="form-login"
        @submit.prevent="login"
      >
        <div>
          <label>Usuário:</label>
          <input
            v-model="email"
            type="text"
            name="email"
            placeholder="Ex.: usuarioteste"
            class="input input-dark"
          >
        </div>
        <div id="passwordContainer">
          <label>Senha:</label>
          <input
            id="password"
            v-model="password"
            name="password"
            type="password"
            placeholder="Ex.: senhateste"
            class="input input-dark"
          >
          <i
            data-feather="eye-off"
            class="iconFeather"
          />
        </div>
        <button class="btn btn-login">
          Entrar
        </button>
      </form>
    </section>
  </main>
</template>

<script setup>
import http from "@/services/http";
import { ref } from "vue";
import { useRouter } from "vue-router";

const router = useRouter();

const email = ref("jorge@contato.com.br");
const password = ref("1234");
const loading = ref(false);
const error = ref(false);

async function login() {
  
  try {
    loading.value = true;
    error.value = false;

    const { data } = await http.post("/login", {
      email: email.value,
      password: password.value,
    });

    setTimeout(()=>{

      if (data === "LoggedIn") {
        router.push("/admin");
      }
    },2000);

  } catch (failed) {
    loading.value = false;
    error.value = true;
  }
}
</script>

<style>
  @import "@/assets/global.css";
</style>