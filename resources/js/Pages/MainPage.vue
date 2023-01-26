<script setup>
import Modal from '@/Components/Modal.vue';
import HeaderVue from '@/Layouts/Header.vue';
import Sidebar from '@/Layouts/Sidebar.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title= "ISRI"/>
    <div class="flex h-screen overflow-hidden">
        <Sidebar :propToChangeStateSidebar="changeState" />
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <HeaderVue @OpenOrCloseModal="changeState = !changeState" />

            <main class="bg-gray-100/50 h-full">
                <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">


                    <div class="flex flex-wrap items-center -m-1.5">

                        <button @click="changeStateFromModal"
                            class="flex items-center py-2 h-9 px-3 m-2  text-indigo-100 transition-colors duration-150 bg-[#313945] rounded-md hover:bg-[#313945]/90">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-sm font-medium mr-1">Agregar</span>
                        </button>

                        <button @click="changeStateFromModal"
                            class="flex items-center py-2 h-9 px-3 m-2  text-indigo-100 transition-colors duration-150 bg-[#111e60] rounded-md hover:bg-[#111e60]/90">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>

                            <span class="text-sm font-medium mr-1">Editar</span>
                        </button>

                        <button @click="changeStateFromModal"
                            class="flex items-center py-2 h-9 px-3 m-2  text-indigo-100 transition-colors duration-150 bg-[#ff4000] rounded-md hover:bg-[#ff4000]/90">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                            </svg>

                            <span class="text-sm font-medium mr-1">Eliminar</span>
                        </button>

                        <button @click="changeStateFromModal"
                            class="flex items-center py-2 h-9 px-3 m-2  text-indigo-100 transition-colors duration-150 bg-[#3d642d] rounded-md hover:bg-[#3d642d]/90">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                            <span class="text-sm font-medium mr-1">Ver</span>
                        </button>



                        <Modal :show="showModal" @close="changeStateFromModal" maxWidth="xl">

                            <div class="bg-white rounded shadow-lg overflow-auto w-full max-h-full">
                                <div class="px-5 py-3 border-b border-slate-200">
                                    <div class="flex justify-between items-center">
                                        <div class="font-bold text-slate-800">Send Feedback</div>
                                        <button class="text-slate-400 hover:text-slate-500"
                                            @click="changeStateFromModal">
                                            <div class="sr-only">Close</div><svg class="w-4 h-4 fill-current">
                                                <path
                                                    d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="px-5 py-4">
                                    <div class="text-sm">
                                        <div class="font-semibold text-slate-800 mb-3">Let us know what you think 💡
                                        </div>
                                    </div>
                                    <div class="space-y-3">
                                        <div>
                                            <label for="text" class="block mb-1 font-semibold text-sm">Input
                                                text<span class="ml-1 text-rose-500">*</span>
                                            </label>
                                            <input type="text" id="text"
                                                class="w-full max-w-lg h-8 text-sm rounded-md border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring " />

                                        </div>
                                        <div>
                                            <label for="text" class="block mb-1 font-semibold text-sm">Select
                                                Option<span class="ml-1 text-rose-500">*</span>
                                            </label>
                                            <select id="small"
                                                class="w-full max-w-lg h-8 text-sm rounded-md border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring">
                                                <option selected>Choose a option</option>
                                                <option value="1">Options 1</option>
                                                <option value="2">Options 2</option>
                                                <option value="3">Options 3</option>
                                                <option value="4">Options 4</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="text" class="block mb-1 font-semibold text-sm">Message<span
                                                    class="ml-1 text-rose-500">*</span>
                                            </label>
                                            <textarea id="message" rows="4"
                                                class="w-full max-w-lg text-sm rounded-md border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring"
                                                placeholder="Write your thoughts here..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-5 py-4 border-t border-slate-200">
                                    <div class="flex flex-wrap justify-end space-x-2">
                                        <button
                                            class="h-9 px-5 m-2 text-slate-600 transition-colors duration-150 border-slate-200 bg-indigo-100 rounded-md hover:border-slate-300">Cancel</button>
                                        <button
                                            class="h-9 px-5 m-2 text-white transition-colors duration-150 bg-indigo-500 rounded-md hover:bg-indigo-600">Send</button>
                                    </div>
                                </div>
                            </div>

                        </Modal>




                    </div>
                </div>
            </main>
        </div>
    </div>
</template>


<script>

export default {
    data: function () {
        return {
            changeState: false,
            showModal: false
        };
    },
    components: { Modal },
    methods: {
        changeStateFromModal() {
            this.showModal = !this.showModal
        }
    }
}
</script>



