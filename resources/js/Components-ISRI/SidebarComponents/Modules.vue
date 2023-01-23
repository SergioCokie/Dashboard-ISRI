<template>
    <!-- Dashboard -->
    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 bg-slate-900">
        <a class="block text-slate-200 hover:text-white truncate transition duration-150" href="#0">
            <div class="flex items-center justify-between">
                <div class="flex items-center"><svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                        <path class="fill-current text-slate-400 !text-indigo-500"
                            d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z"></path>
                        <path class="fill-current text-slate-600 text-indigo-600"
                            d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z"></path>
                        <path class="fill-current text-slate-400 text-indigo-200"
                            d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium ml-3 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                        Dashboard
                    </span>
                </div><!-- Icon -->
                <div class="flex shrink-0 ml-2"><svg
                        class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 rotate-180" viewBox="0 0 12 12">
                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                    </svg></div>
            </div>
        </a>
        <div class=" lg:sidebar-expanded:block 2xl:block">
            <ul class="pl-9 mt-1">
                <li class="mb-1 last:mb-0 hover:scale-110 transform transition-all duration-500">
                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" href="/">
                        <span class="text-sm font-medium  lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                            A
                        </span>
                    </a>
                </li>
                <li class="mb-1 last:mb-0 hover:scale-110 transform transition-all duration-500">
                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" href="/">
                        <span class="text-sm font-medium  lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                            B
                        </span>
                    </a>
                </li>
                <li class="mb-1 last:mb-0 hover:scale-110 transform transition-all duration-500">
                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" href="/">
                        <span class="text-sm font-medium  lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                            C
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
</template>

<script>
export default {

}
</script>

<style>

</style>