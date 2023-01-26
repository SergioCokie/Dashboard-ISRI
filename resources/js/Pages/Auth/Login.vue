<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";


const form = useForm({
  nick_usuario: "",
  password: "",
});

const submit = () => {
  form.post(route("login"), {
    onFinish: () => form.reset("password"),
  });
};
</script>

<template>
  <Head title="Log in" />

  <!-- Example -->
  <div class="flex min-h-screen">
    <!-- Container -->
    <div class="flex flex-row w-full">
      <!-- Sidebar -->
      <div
        class="
          hidden
          lg:flex
          flex-col
          justify-between
          bg-[#202024]
          lg:p-8
          xl:p-12
          lg:max-w-sm
          xl:max-w-lg
        "
      >
        <div class="flex items-center justify-start space-x-3">
          <img
            style="width: 130px"
            src="https://www.presidencia.gob.sv/wp-content/uploads/2019/06/LogoPagina_Mesa-de-trabajo-1.png"
            alt="GOBIERNO DE EL SALVADOR"
          />
        </div>
        <div class="space-y-5">
          <h1
            class="
              lg:text-3xl
              xl:text-5xl xl:leading-snug
              font-extrabold
              text-white
            "
          >
            Enter your account and discover new experiences
          </h1>
        </div>
        <p class="font-medium text-gray-400">
          © 2023 ISRI - Gobierno de El Salvador
        </p>
      </div>

      <!-- Login -->
      <div
        class="flex flex-1 flex-col items-center justify-center px-10 relative"
      >
        <!-- Login box -->
        <form @submit.prevent="submit">
          <div class="flex flex-1 flex-col justify-center space-y-7 max-w-md">
            <div class="flex flex-col space-y-2 text-center">
              <h2 class="text-3xl md:text-4xl font-bold">Ingrese sus datos</h2>
              <p class="text-md md:text-xl">
                Lorem ipsum dolor sit, facere cumque repudiandae molestiae!!
              </p>
            </div>
            <div class="flex flex-col max-w-md space-y-5">
              <InputLabel for="nick_usuario" value="Nombre de Usuario" />
              <input
                placeholder="Usuario"
                id="nick_usuario"
                type="text"
                v-model="form.nick_usuario"
                autofocus
                autocomplete="username"
                class="
                  flex
                  px-3
                  py-2
                  md:px-4 md:py-3
                  border-2 border-black
                  rounded-lg
                  font-medium
                  placeholder:font-normal
                "
              />
              <InputError class="mt-2" :message="form.errors.nick_usuario" />

              <InputLabel for="password" value="Contraseña" />
              <input
                type="password"
                placeholder="Contraseña"
                id="password"
                v-model="form.password"
                autocomplete="current-password"
                class="
                  flex
                  px-3
                  py-2
                  md:px-4 md:py-3
                  border-2 border-black
                  rounded-lg
                  font-medium
                  placeholder:font-normal
                "
              />
              <InputError class="mt-2" :message="form.errors.password" />

              <button
                class="
                  flex
                  items-center
                  justify-center
                  flex-none
                  px-3
                  py-2
                  md:px-4 md:py-3
                  border-2
                  rounded-lg
                  font-medium
                  border-black
                  bg-black
                  text-white
                "
              >
                ENTRAR
              </button>
              <div class="flex justify-center items-center">
                <span class="w-full border border-black"></span>
                <span class="px-4">ISRI</span>
                <span class="w-full border border-black"></span>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Example -->
</template>

<script>
export default {};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");

html,
body {
  font-family: "Roboto", sans-serif;
}

.break-inside {
  -moz-column-break-inside: avoid;
  break-inside: avoid;
}

body {
  display: flex;
  justify-content: space-between;
  flex-direction: column;
  min-height: 100vh;
  line-height: 1.5;
}
</style>
