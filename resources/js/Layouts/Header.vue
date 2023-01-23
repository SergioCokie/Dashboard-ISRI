
<template>
    <header class="sticky top-0 bg-white border-b border-slate-200 z-30">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 -mb-px">

                <!-- Header: Left side -->
                <div class="flex">

                    <!-- Hamburger button -->
                    <button class="text-slate-500 hover:text-slate-600 lg:hidden" @click.stop="$emit('toggle-sidebar')"
                        aria-controls="sidebar" :aria-expanded="sidebarOpen">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="5" width="16" height="2" />
                            <rect x="4" y="11" width="16" height="2" />
                            <rect x="4" y="17" width="16" height="2" />
                        </svg>
                    </button>

                </div>

                <!-- Header: Right side -->
                <div class="flex items-center space-x-3">
                    <button
                        class="w-8 h-8 flex items-center justify-center bg-slate-100 hover:bg-slate-200 transition duration-150 rounded-full ml-3"
                        aria-controls="search-modal"><span class="sr-only">Search</span><svg class="w-4 h-4"
                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current text-slate-500"
                                d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z">
                            </path>
                            <path class="fill-current text-slate-400"
                                d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z">
                            </path>
                        </svg>
                    </button>

                    <div class="relative inline-flex">
                        <button
                            class="w-8 h-8 flex items-center justify-center bg-slate-100 hover:bg-slate-200 transition duration-150 rounded-full"
                            aria-haspopup="true" aria-expanded="false"><span class="sr-only">Notifications</span><svg
                                class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-current text-slate-500"
                                    d="M6.5 0C2.91 0 0 2.462 0 5.5c0 1.075.37 2.074 1 2.922V12l2.699-1.542A7.454 7.454 0 006.5 11c3.59 0 6.5-2.462 6.5-5.5S10.09 0 6.5 0z">
                                </path>
                                <path class="fill-current text-slate-400"
                                    d="M16 9.5c0-.987-.429-1.897-1.147-2.639C14.124 10.348 10.66 13 6.5 13c-.103 0-.202-.018-.305-.021C7.231 13.617 8.556 14 10 14c.449 0 .886-.04 1.307-.11L15 16v-4h-.012C15.627 11.285 16 10.425 16 9.5z">
                                </path>
                            </svg>
                            <div
                                class="absolute top-0 right-0 w-2.5 h-2.5 bg-rose-500 border-2 border-white rounded-full">
                            </div>
                        </button>


                    </div>

                    <div class="relative inline-flex">
                        <button
                            class="w-8 h-8 flex items-center justify-center bg-slate-100 hover:bg-slate-200 transition duration-150 rounded-full"
                            aria-haspopup="true" aria-expanded="false"><span class="sr-only">Info</span><svg
                                class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-current text-slate-500"
                                    d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z">
                                </path>
                            </svg>
                        </button>

                    </div>

                    <!-- Divider -->
                    <hr class="w-px h-6 bg-slate-200">
                    <UserMenuVue />
                </div>
            </div>
        </div>
        <SearchModal />
    </header>
</template>

<script>
import { ref } from 'vue'

import SearchModal from '@/Components-ISRI/HeaderComponents/ModalSearch.vue'
import UserMenuVue from '@/Components-ISRI/HeaderComponents/UserMenu.vue'
/* import Notifications from '../components/DropdownNotifications.vue'
import Help from '../components/DropdownHelp.vue'
import UserMenu from '../components/DropdownProfile.vue' */

export default {
    name: 'Header',
    props: ['sidebarOpen'],
    components: {
        SearchModal,
        UserMenuVue,
        /*         Notifications,
                Help,
                UserMenu, */
    },

}
</script>