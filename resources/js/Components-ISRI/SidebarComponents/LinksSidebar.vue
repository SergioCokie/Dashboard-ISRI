<template>
    <li class="mb-1 last:mb-0 hover:scale-110 transform transition-all duration-500">
        <DropdownLink :href="route('sistema1')" method="get" as="a"
            class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate">
            <span class="text-sm font-medium  lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                RRHH
            </span>
        </DropdownLink>
    </li>
</template>

<script>
import DropdownLink from '@/Components/DropdownLink.vue';

export default {
    components: { DropdownLink }
}
</script>

<style>

</style>