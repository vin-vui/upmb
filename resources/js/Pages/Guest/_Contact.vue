<template>
    <ShapeTopWhite />
    <div class="pt-24 pb-48">
        <div class="relative isolate">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="mx-auto flex max-w-2xl flex-col gap-16 bg-white/5 px-6 py-16 ring-1 ring-white/10 sm:rounded-3xl sm:p-8 lg:mx-0 lg:max-w-none lg:flex-row lg:items-center lg:py-20 xl:gap-x-20 xl:px-20">
                    <img class="h-96 w-full flex-none rounded-2xl object-cover lg:aspect-square lg:h-auto lg:max-w-sm shadow-xl shadow-accent/50 -rotate-2"
                        :src="cta.image" alt="" />
                    <div class="w-full flex-auto">
                        <h2 class="h2 text-accent">{{ cta.title }}</h2>
                        <p class="mt-6 text-gray-900" v-html="cta.paragraph"></p>

                        <!-- Informations de contact dynamiques avec rendu spécifique -->
                        <div
                            class="bordered-card max-w-lg bg-white rounded-3xl text-neutral-600 tracking-tight text-lg font-medium mx-auto mt-8">
                            <div class="bg-white py-6 px-4 rounded-3xl space-y-1">
                                <!-- Boucle pour afficher chaque information avec un rendu spécifique -->
                                <div v-for="info in informations" :key="info.id" class="flex justify-between w-full">
                                    <div class="flex items-center space-x-2">
                                        <div class="h-8 w-8 rounded-full"
                                            :class="getIconBackgroundClass(info.title) + ' flex items-center justify-center text-white'">
                                            <!-- Affichage de l'icône en fonction du titre -->
                                            <svg v-if="info.title === 'email'" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                                <path d="M3 7l9 6l9 -6" />
                                            </svg>

                                            <svg v-else-if="info.title === 'téléphone'"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                            </svg>


                                            <svg v-else-if="info.title === 'adresse'" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                <path
                                                    d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                            </svg>

                                            <svg v-else-if="info.title.startsWith('accès bus')"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M6 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                <path d="M18 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                <path d="M4 17h-2v-11a1 1 0 0 1 1 -1h14a5 7 0 0 1 5 7v5h-2m-4 0h-8" />
                                                <path d="M16 5l1.5 7l4.5 0" />
                                                <path d="M2 10l15 0" />
                                                <path d="M7 5l0 5" />
                                                <path d="M12 5l0 5" />
                                            </svg>



                                            <svg v-else-if="info.title === 'plaquette'"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-layout-collage">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                                <path d="M10 4l4 16" />
                                                <path d="M12 12l-8 2" />
                                            </svg>

                                            <svg v-else-if="info.title === 'facebook'"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                            </svg>
                                        </div>
                                        <span>{{ info.title }}</span>
                                    </div>

                                    <!-- Affichage conditionnel des liens -->
                                    <a v-if="info.title === 'email'" :href="'mailto:' + info.label"
                                        class="text-blue-500 hover:underline">{{ info.label }}</a>
                                    <a v-else-if="info.title === 'téléphone'" :href="'tel:' + info.label"
                                        class="text-blue-500 hover:underline">{{ info.label }}</a>
                                    <a v-else-if="info.title === 'adresse'"
                                        :href="'https://maps.google.com?q=' + info.label"
                                        class="text-blue-500 hover:underline">{{ info.label }}</a>
                                    <a v-else-if="info.title === 'facebook'" :href="info.label" target="_blank"
                                        class="text-blue-500 hover:underline">Page Facebook</a>
                                    <span v-else>{{ info.label }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="absolute inset-x-0 -top-16 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl"
                aria-hidden="true">
                <div class="aspect-[1318/752] w-[82.375rem] flex-none bg-gradient-to-r from-primary to-accent opacity-25"
                    style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ContactButton from '@/Components/ContactButton.vue';
import ShapeTopWhite from '@/Components/ShapeTopWhite.vue';
import axios from 'axios';

export default {
    components: {
        ContactButton, ShapeTopWhite,
    },
    data() {
        return {
            cta: {},
            informations: [], // Stocke les informations dynamiques
        };
    },
    async mounted() {
        try {
            const response = await axios.get('/get-cta');
            this.cta = response.data;
        } catch (error) {
            console.error('Erreur lors du chargement du CTA :', error);
        }

        try {
            const informationsResponse = await axios.get('/get-informations');
            this.informations = informationsResponse.data;
        } catch (error) {
            console.error('Erreur lors du chargement des informations :', error);
        }
    },
    methods: {
        getIconBackgroundClass(title) {
            if (title.startsWith("accès bus")) {
                return "bg-secondary";
            }
            if (title === "facebook") {
                return "bg-accent";
            }
            return "bg-primary";
        }
    }
};
</script>
