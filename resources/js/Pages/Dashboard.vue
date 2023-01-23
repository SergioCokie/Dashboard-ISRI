<script setup>
import Targets from '@/Components-ISRI/Targets.vue';
import HeaderVue from '@/Layouts/Header.vue';
import { Head } from '@inertiajs/vue3';
import aa from '@/Layouts/AuthenticatedLayout.vue';
</script>

<template>

    <Head title="Dashboard" />

    <div class="flex h-screen overflow-hidden">
        <!--         <aa></aa>
 -->
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <HeaderVue />

            <main class="bg-gray-100/50 h-full">
                <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                    <div class="flex items-center justify-center">
                        <Targets />
                    </div>
                </div>
            </main>
        </div>
    </div>



</template>


<script>
export default {
    methods: {

    },

}
</script>


