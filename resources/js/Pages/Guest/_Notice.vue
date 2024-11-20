<template>
<div v-if="this.notices.length > 0" class="fixed lg:bottom-12 lg:left-12 bottom-4 left-4 z-50">
    <div class="dropdown relative inline-flex [--placement:top-start]" id="dropdown">
        <button id="dropdown-dropup-start" type="button" class="dropdown-toggle btn-accent text-accent bg-white shadow-2xl shadow-accent md:size-16 md:p-4 p-2" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
            <svg class="dropdown-open:hidden md:size-8 size-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M9.63 17.531c.612.611.211 1.658-.652 1.706a4 4 0 0 1-3.05-1.166a4 4 0 0 1-1.165-3.049c.046-.826 1.005-1.228 1.624-.726l.082.074zM20.071 3.929c.96.96 1.134 2.41.52 3.547l-.09.153l-.024.036a8.01 8.01 0 0 1-1.446 7.137l-.183.223l-.191.218l-2.073 2.072l-.08.112a3 3 0 0 0-.499 2.113l.035.201l.045.185c.264.952-.853 1.645-1.585 1.051l-.086-.078L3.101 9.586c-.727-.727-.017-1.945.973-1.671a3 3 0 0 0 2.5-.418l.116-.086l2.101-2.1a8 8 0 0 1 7.265-1.86l.278.071l.037-.023a3 3 0 0 1 3.432.192l.14.117z"/></svg>
            <svg class="dropdown-open:block md:size-8 size-6 hidden" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M20 20L4 4m16 0L4 20"/></svg>
        </button>
        <div class="dropdown-menu dropdown-open:opacity-100 hidden max-w-md dropdown-open:flex dropdown-open:flex-col gap-4" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-dropup-start">
           <div v-for="notice in notices" class="bg-accent px-4 py-6 rounded-r-3xl rounded-tl-3xl shadow-xl shadow-accent">
                <h4 class=" text-white/50 text-sm font-semibold">{{ notice.title }}</h4>
                <p class="text-white font-averia text-lg mt-2 font-medium">{{ notice.description }}</p>
           </div>
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            notices: [],
        };
    },
    mounted() {
        axios.get('/get-notices')
            .then(response => {
                this.notices = response.data;
            })
            .catch(error => {
                console.error('Erreur lors du chargement des notifications :', error);
            });
    },
    updated() {
        const dropdownElement = document.querySelector('#dropdown');
        if (dropdownElement) {
            window.HSStaticMethods.autoInit();
            HSDropdown.open(dropdownElement);
        } else {
            console.warn("L'élément #dropdown n'a pas été trouvé dans le DOM.");
        }
    }
};
</script>
