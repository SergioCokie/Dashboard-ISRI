<script setup>
import HeaderVue from '@/Layouts/Header.vue';
import Sidebar from '@/Layouts/Sidebar.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Sistema 1" />
    <div class="flex h-screen overflow-hidden">
        <Sidebar :propToChangeStateSidebar="cambiandostate"/>
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <HeaderVue @OpenOrCloseModal="cambiandostate = !cambiandostate"/>

            <main class="bg-gray-100/50 h-full">
                <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                    SISTEMA 1
                </div>
            </main>
        </div>
    </div>



</template>


<script>

export default {
    data:function(){
        return{
            cambiandostate:false,
        }
    },
    /* methods: {
        alerta(){
            alert("aa")
        },
    }, */

}
</script>



