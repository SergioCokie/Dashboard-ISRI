<template>
  <!-- TODO:ARREGLAR MODAL SEARCH - NO ES DEL TODO REACTIVO VERIFICAR DOCUMENTACION Vite App -->

  <!-- Modal backdrop -->
  <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0"
    enter-to-class="opacity-100" leave-active-class="transition ease-out duration-100" leave-from-class="opacity-100"
    leave-to-class="opacity-0">
    <div @click="changeStateModalSearch" v-show="showModalSearch"
      class="fixed inset-0 bg-slate-900 bg-opacity-30 z-50 transition-opacity" aria-hidden="true">
    </div>
  </transition>
  <!--// Modal backdrop -->

  <!-- Modal Search -->
  <Transition enter-active-class="transition ease-in-out duration-200" enter-from-class="opacity-0 translate-y-4"
    enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in-out duration-200"
    leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-4">

    <div id="search-modal" v-if="showModalSearch"
      class="fixed inset-0 z-50 overflow-hidden flex items-start top-20 mb-4 justify-center px-4 sm:px-6" role="dialog"
      aria-modal="true" style="">

      <div class="bg-white overflow-auto max-w-2xl w-full max-h-full rounded shadow-lg">

        <button @click="changeStateModalSearch" class="p-2 top-0 right-0 text-slate-400 hover:text-slate-500">
          <div class="sr-only">Cerrar</div>
          <svg class="w-4 h-4 fill-current">
            <path
              d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
            </path>
          </svg>
        </button>

        <FormModalSearch /><!-- FORM PARA BUSCAR -->

        <Searches /><!-- DATOS BUSCADOS -->

      </div>

    </div>
  </Transition>
  <!--//Modal Search -->



</template>|

<script>
import FormModalSearch from './FormModalSearch.vue';
import Searches from './Searches.vue';


export default {
  props: ["stateToModalSearch"],
  data() {
    return {
      showModalSearch: false
    };
  },
  methods: {
    changeStateModalSearch() {
      this.showModalSearch = !this.showModalSearch;
    }
  },
  watch: {
    stateToModalSearch: function (newParam, oldParam) {
      this.changeStateModalSearch();
    }
  },
  components: { FormModalSearch, Searches }
}
</script>

