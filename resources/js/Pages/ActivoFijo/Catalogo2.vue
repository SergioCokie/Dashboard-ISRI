
<script setup>
import Modal from "@/Components/Modal.vue";
import { Head } from "@inertiajs/vue3";
import AppLayoutVue from '@/Layouts/AppLayout.vue';
</script>



<template>

  <Head title="Activo Fijo" />

  <AppLayoutVue>
    Soy el index de catalogo 2
  </AppLayoutVue>


</template>

<script>
export default {
  data: function () {
    return {
      changeState: false,
      showModal: false,
    };
  },
  components: { Modal },
  methods: {
    changeStateFromModal() {
      this.showModal = !this.showModal;
    },
  },
};
</script>

<style>

</style>
