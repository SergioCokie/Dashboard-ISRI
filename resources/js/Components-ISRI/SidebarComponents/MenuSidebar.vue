<template>
    <div class="space-y-8">
        <div>
            <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                <span v-if="!stateFromSidebarProp"
                    class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6"
                    aria-hidden="true">•••</span>
                <span v-else class="lg:sidebar-expanded:block 2xl:block">Pages</span>
            </h3>
            <ul class="mt-3">
                <ModulesVue :StateFromModal="stateFromSidebarProp"
                    @emitToShowSidebarFromModules="this.$emit('emitToShowModalFromMenu')" />
            </ul>
        </div>
    </div>
</template>

<script>
import ModulesVue from './Modules.vue';

export default {
    props: ["stateFromSidebarProp"],
    components: { ModulesVue },
}
</script>

<style>

</style>