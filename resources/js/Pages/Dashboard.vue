<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import HeaderVue from '@/Layouts/Header.vue';

import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Dashboard" />
    <div class="flex h-screen overflow-hidden">


        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <HeaderVue />

        </div>
    </div>



</template>


<script>
export default {
    methods: {

    },

}
</script>


