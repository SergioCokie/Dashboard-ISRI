<script setup>
import { Head } from '@inertiajs/vue3';
import MenuSidebarVue from '@/Components-ISRI/SidebarComponents/MenuSidebar.vue';
import DropdownLink from '@/Components/DropdownLink.vue';

</script>
<template>

    <div id="sidebar" :class="classToSidebar"
        class="sidebar-style-isri flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll  no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-[#1c1e4d] p-4 transition-all duration-200 ease-in-out -translate-x-64">
        <!-- Sidebar header -->
        <div class="flex justify-center mb-10 pr-3 sm:px-2">
            <!-- Close button -->
            <button @click="propToChangeStateSidebar = !propToChangeStateSidebar"
                class="lg:hidden text-slate-500 hover:text-slate-400" aria-controls="sidebar"
                aria-expanded="false"><span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                </svg>
            </button>
            <!-- Logo -->
            <DropdownLink :href="route('dashboard')" method="get" as="button" aria-current="page"
                class="router-link-active router-link-exact-active block">
                <img style="width:118px"
                    src="https://www.presidencia.gob.sv/wp-content/uploads/2019/06/LogoPagina_Mesa-de-trabajo-1.png"
                    alt="GOBIERNO DE EL SALVADOR">
            </DropdownLink>
        </div>

        <MenuSidebarVue :stateFromSidebarProp="stateFromSidebar" @emitToShowModalFromMenu="changeStateFromSidebar" />

        <!-- Expand / collapse button -->
        <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
            <div class="px-3 py-2">
                <button @click="changeStateFromSidebar">
                    <span class="sr-only">Expand / collapse sidebar</span>
                    <svg class="w-6 h-6 fill-current" :class="stateFromSidebar ? 'rotate-180' : 'rotate-360'"
                        viewBox="0 0 24 24">
                        <path class="text-slate-400"
                            d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z"></path>
                        <path class="text-slate-600" d="M3 23H1V1h2z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["propToChangeStateSidebar"],
    data: function () {
        return {
            classToSidebar: "",
            stateFromSidebar: false,
        }
    },
    methods: {
        changeStateFromSidebar() {
            this.classToSidebar = ""
            this.stateFromSidebar = !this.stateFromSidebar
            this.classToSidebar = this.stateFromSidebar ? 'lg:overflow-y-auto ' : ''
        },
        changeStateFromSidebarResponsive() {
            this.classToSidebar = ""
            this.classToSidebar = this.propToChangeStateSidebar ? '-translate-x-0' : ''
        },
    },
    watch: {
        propToChangeStateSidebar: function (newParam, oldParam) {
            this.changeStateFromSidebarResponsive()
        }
    }
}
</script>

<style>
@media (min-width: 1024px) {
    .lg\:overflow-y-auto {
        width: 16rem !important;
    }
}

.sidebar-style-isri {
    overflow: auto;
    scrollbar-width: none;
}

.sidebar-style-isri::-webkit-scrollbar {
    width: 0;
}
</style>