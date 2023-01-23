<template>
    <!-- Dashboard -->
    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 bg-slate-900"
        @click="StateFromModal ? stateToMenu = !stateToMenu : this.$emit('emitToShowSidebarFromModules')">
        <a class="block text-slate-200 hover:text-white truncate transition duration-150" href="#0">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                        <path class="fill-current text-slate-600 text-indigo-500"
                            d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z">
                        </path>
                        <path class="fill-current text-slate-400 text-indigo-300"
                            d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium ml-3 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                        Modulo
                    </span>
                </div><!-- Icon -->
                <div class="flex shrink-0 ml-2">
                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 rotate-180" viewBox="0 0 12 12">
                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                    </svg>
                </div>
            </div>
        </a>
        <div class="lg:sidebar-expanded:block 2xl:block">
            <ul class="pl-9 mt-1" :class="stateToMenu ? 'hidden' : ''">
                <LinksSidebar />
            </ul>
        </div>
    </li>
</template>

<script>
import LinksSidebar from './LinksSidebar.vue'
export default {
    components: { LinksSidebar },
    props: ["StateFromModal"],
    data: function () {
        return {
            stateToMenu: true
        }
    }
}
</script>

<style>

</style>