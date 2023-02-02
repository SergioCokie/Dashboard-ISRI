<template>

    <!-- 1 card -->
    <DropdownLink :href="route('mainpage', this.modulo.id_rol)" method="get" as="button">
        <div
            class="relative cursor-pointer py-6 px-6 rounded-md w-64 my-4  bg-white  shadow-lg hover:scale-110 transform transition-all duration-500 hover:shadow-slate-600">
            <div
                class="text-white flex items-center absolute rounded-full py-2 px-2 shadow-xl bg-[#1c1e4d] left-4 -top-6">
                <svg class="shrink-0 h-8 w-8" viewBox="0 0 24 24">
                    <path class="fill-current text-indigo-50"
                        d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z">
                    </path>
                    <path class="fill-current text-indigo-50"
                        d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z">
                    </path>
                </svg>

            </div>
            <div class="mt-8">
                <p class="text-xl font-semibold my-2">{{ modulo.sistema }}</p>
                <div class="space-x-2 text-gray-400 text-sm pb-5">
                    <p>Modulo de {{ modulo.sistema }}</p>
                </div>
                <div class="border-t-2 border-[#1c1e4d]"></div>
                <div class="flex justify-center">

                    <div class="my-2">
                        <p class="font-semibold text-base mb-2">Dependencia</p>
                        <div class="text-base text-gray-400 font-semibold">
                            <p>ADMON</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </DropdownLink>

</template>

<script>
import DropdownLink from '@/Components/DropdownLink.vue';

export default {
    props: ["modulo"],
    components: { DropdownLink }

}
</script>

<style>

</style>