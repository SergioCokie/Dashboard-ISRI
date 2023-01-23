
<template>
    <div class="relative inline-flex">
        <button class="inline-flex justify-center items-center group" ref="trigger"
            @click.prevent="dropdownOpen = !dropdownOpen" :aria-expanded="dropdownOpen" aria-haspopup="true">

            <img class="w-8 h-8 rounded-full" src="http://localhost:5174/src/images/user-avatar-32.png" width="32"
                height="32" alt="User">
            <div class="flex items-center truncate">
                <span class="truncate ml-2 text-sm font-medium group-hover:text-slate-800">
                    {{ $page.props.auth.user.name }}
                </span>
                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" viewBox="0 0 12 12">
                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                </svg>
            </div>
        </button>

        <transition enter-active-class="transition ease-out duration-200 transform"
            enter-from-class="opacity-0 -translate-y-2" enter-to-class="opacity-100 translate-y-0"
            leave-active-class="transition ease-out duration-200" leave-from-class="opacity-100"
            leave-to-class="opacity-0">
            <div v-show="dropdownOpen"
                class="origin-top-right z-10 absolute top-full min-w-44 bg-white border border-slate-200 py-1.5 rounded shadow-lg  mt-1 right-0">
                <div class="pt-0.5 pb-2 px-3 mb-1 border-slate-200">
                    <div class="font-bold text-slate-800">{{ $page.props.auth.user.name }}</div>
                    <div class="text-xs text-slate-500 italic">Administrator</div>
                </div>
                <ul ref="dropdown" @focusin="dropdownOpen = true" @focusout="dropdownOpen = false">
                    <li>
                        <DropdownLink :href="route('profile.edit')"
                            class="font-bold text-sm text-indigo-500 flex items-center py-1 px-3">
                            Perfil
                        </DropdownLink>
                    </li>
                    <li>
                        <DropdownLink :href="route('logout')" method="post" as="a"
                            class="font-bold text-sm text-indigo-500 flex items-center py-1 px-3">
                            Logout
                        </DropdownLink>
                    </li>

                </ul>
            </div>

        </transition>

    </div>


</template>

<script>
import DropdownLink from '@/Components/DropdownLink.vue';
import { ref, onMounted, onUnmounted } from 'vue'

export default {

    /*  data() {
         return {
             dropdownOpen: false,
         }
     }, */
    components: { DropdownLink },
    setup() {

        const dropdownOpen = ref(false)
        const trigger = ref(null)

        const dropdown = ref(null)

        // close on click outside
        const clickHandler = ({ target }) => {
            if (!dropdownOpen.value || dropdown.value.contains(target) || trigger.value.contains(target)) return
            dropdownOpen.value = false
        }
        const keyHandler = ({ keyCode }) => {
            if (!dropdownOpen.value || keyCode !== 27) return
            dropdownOpen.value = false
        }
        onMounted(() => {
            document.addEventListener('click', clickHandler)
            document.addEventListener('keydown', keyHandler)
        })
        onUnmounted(() => {
            document.removeEventListener('click', clickHandler)
            document.removeEventListener('keydown', keyHandler)
        })

        return {
            dropdownOpen,
            trigger,
            dropdown,
        }
    },

}
</script>

<style>

</style>