<template>
<GuestLayout :title=offersSection.title>

    <!-- Offre de soins -->
    <section class="-mt-32 bg-[radial-gradient(ellipse_at_bottom_right,_var(--tw-gradient-stops))] from-accent/30 to-primary/40 background-animate overflow-hidden">
        <div class="container mx-auto px-4 xl:px-10">
            <div class="flex flex-wrap -m-6 pt-44 xl:pt-64 pb-36">
                <div class="w-full md:w-1/3 p-4">
                    <div class="relative h-56 md:h-full rounded-3xl border border-accent/50">
                        <img class="absolute inset-0 rounded-3xl w-full h-full object-cover -rotate-2 shadow-accent/80 shadow-2xl"
                            :src=offersSection.image alt="Image illustrant l'accueil des parents et de leur bébé">
                    </div>
                </div>
                <div class="w-full md:w-2/3 p-4">
                    <div class="h-full py-18 xl:py-32 pl-4 xl:pl-18 pr-4 xl:pr-16">
                        <h1 class="h2">{{ offersSection.title }}</h1>
                        <p v-html=offersSection.paragraph></p>
                        <div class="flex flex-wrap justify-between gap-4 my-16">
                            <a v-for="section in filteredSections" :href="'#section-' + section.id" :key="section.id"
                                class="font-averia flex-grow inline-flex justify-center items-center text-center h-16 p-5 font-semibold tracking-tight text-xl hover:text-white focus:text-white bg-transparent hover:bg-accent focus:bg-accent border border-accent rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200">
                                {{ section.title }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <ShapeTopWhite />

    <!-- Accueil Parents-Bébé -->
    <section :id="'section-' + offerPBSection.id" class="py-4 xl:py-10 px-4 xl:px-10 container mx-auto">
        <div class="relative p-4">
            <div class="relative py-4">
                <div class="flex flex-wrap">
                    <div class="relative font-semibold font-heading">
                        <div class="grid grid-cols-1 xl:grid-cols-3 gap-8 mt-8">
                            <div class="xl:col-span-2 content-center py-12 order-2 xl:order-1">
                                <h2 class="h2 text-accent">{{ offerPBSection.title }}</h2>
                                <p class="mb-8" v-html=offerPBSection.paragraph></p>
                                <div class="flex items-center p-8 rounded-3xl bg-secondary mr-8 xl:mr-16">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="shrink-0 size-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Modalités d'accueil
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium text-balance" v-html=offerPBSection.items[0].content></p>
                                    </div>
                                </div>
                                <div class="bordered-card mt-8 ml-8 xl:ml-16">
                                    <div class="bg-white rounded-3xl p-8 flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="shrink-0 size-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Horaires
                                        </div>
                                        <p class="text-lg" v-html=offerPBSection.items[1].content></p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-1 xl:order-2 rounded-3xl border border-accent/50">
                                <img class="rounded-3xl w-full xl:h-full h-96 object-cover rotate-2 shadow-accent/80 shadow-2xl" :src=offerPBSection.image alt="">
                            </div>
                            <div class="order-4 xl:px-8">
                                <div class="font-heading font-averia text-3xl tracking-tight font-semibold xl:justify-items-end xl:mt-8">
                                    <div class="shrink-0 size-6 bg-secondary rounded-full flex items-center justify-center">
                                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <div class="xl:text-right text-primary mt-2">Vidéo de présentation de l'Accueil Parents-Bébé</div>
                                </div>
                            </div>
                            <div class="xl:col-span-1 order-last relative isolate overflow-hidden bg-accent px-6 pt-8 -mx-8 sm:mx-auto sm:max-w-7xl sm:rounded-3xl sm:pl-8 sm:pr-0 sm:pt-8 xl:mx-0 shadow-xl shadow-accent/50">
                                <div class="absolute -inset-y-px -left-3 -z-10 w-full origin-bottom-left skew-x-[-30deg] bg-indigo-100 opacity-20 ring-1 ring-inset ring-white" aria-hidden="true" />
                                <div class="mx-auto max-w-7xl sm:mx-0 sm:max-w-none">
                                    <video class="w-full rounded-tl-3xl" controls poster="/images/illu_temoignages.webp" width="640" height="360">
                                        <source src="/videos/temoignages.mp4" type="video/mp4">
                                        Votre navigateur ne supporte pas la balise vidéo.
                                    </video>
                                </div>
                                <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 sm:rounded-3xl" aria-hidden="true" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Les groupes de parole femmes enceintes -->
    <section :id="'section-' + offerGPSection.id" class="py-4 xl:py-10 px-4 xl:px-10 container mx-auto">
        <div class="relative p-4">
            <div class="relative py-4">
                <div class="flex flex-wrap">
                    <div class="relative font-semibold font-heading">
                        <div class="grid grid-cols-1 xl:grid-cols-3 gap-8 mt-8">
                            <div class="rounded-3xl border border-accent/50">
                                <img class="rounded-3xl w-full xl:h-full h-96 object-cover -rotate-2 shadow-accent/80 shadow-2xl" :src=offerGPSection.image alt="">
                            </div>
                            <div class="xl:col-span-2 content-center py-12">
                                <h2 class="h2">{{ offerGPSection.title }}</h2>
                                <p class="mb-8" v-html=offerGPSection.paragraph></p>
                                <div class="flex items-center p-8 rounded-3xl bg-secondary ml-8 xl:ml-16">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="shrink-0 size-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Modalités d'accueil
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium text-balance" v-html=offerGPSection.items[0].content></p>
                                    </div>
                                </div>
                                <div class="bordered-card mt-8 mr-8 xl:mr-16">
                                    <div class="bg-white rounded-3xl p-8 flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="shrink-0 size-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Horaires
                                        </div>
                                        <p class="text-lg" v-html=offerGPSection.items[1].content></p>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-1 xl:col-start-2 order-last xl:order-4 relative isolate overflow-hidden bg-accent px-6 pt-8 -mx-8 sm:mx-auto sm:max-w-7xl sm:rounded-3xl sm:pl-8 sm:pr-0 sm:pt-8 xl:mx-0 shadow-xl shadow-accent/50">
                                <div class="absolute -inset-y-px -left-3 -z-10 w-full origin-bottom-left skew-x-[-30deg] bg-indigo-100 opacity-20 ring-1 ring-inset ring-white" aria-hidden="true" />
                                <div class="mx-auto max-w-7xl sm:mx-0 sm:max-w-none">
                                    <video class="w-full rounded-tl-3xl" controls poster="/images/illu_groupe.webp" width="640" height="360">
                                        <source src="/videos/groupe.mp4" type="video/mp4">
                                        Votre navigateur ne supporte pas la balise vidéo.
                                    </video>
                                </div>
                                <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 sm:rounded-3xl" aria-hidden="true" />
                            </div>
                            <div class="order-4 xl:order-last xl:px-8">
                                <div class="font-heading font-averia text-3xl tracking-tight font-semibold xl:justify-items-start xl:mt-8">
                                    <div class="shrink-0 size-6 bg-secondary rounded-full flex items-center justify-center xl:rotate-180">
                                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <div class="text-primary mt-2">Vidéo témoignage sur {{ offerGPSection.title }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Les groupes de parole pères -->
    <section :id="'section-' + offerGPPSection.id" class="py-4 xl:py-10 px-4 xl:px-10 container mx-auto">
        <div class="relative p-4">
            <div class="relative py-4">
                <div class="flex flex-wrap">
                    <div class="relative font-semibold font-heading">
                        <div class="grid grid-cols-1 xl:grid-cols-3 gap-8 mt-8">
                            <div class="xl:col-span-2 content-center py-12 order-2 xl:order-1">
                                <h2 class="h2 text-accent">{{ offerGPPSection.title }}</h2>
                                <p class="mb-8" v-html=offerGPPSection.paragraph></p>
                                <div class="flex items-center p-8 rounded-3xl bg-secondary mr-8 xl:mr-16">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="shrink-0 size-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Modalités d'accueil
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium text-balance" v-html=offerGPPSection.items[0].content></p>
                                    </div>
                                </div>
                                <div class="bordered-card mt-8 ml-8 xl:ml-16">
                                    <div class="bg-white rounded-3xl p-8 flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="shrink-0 size-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Horaires
                                        </div>
                                        <p class="text-lg" v-html=offerGPPSection.items[1].content></p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-1 xl:order-2 rounded-3xl border border-accent/50">
                                <img class="rounded-3xl w-full xl:h-full h-96 object-cover rotate-2 shadow-accent/80 shadow-2xl" :src=offerGPPSection.image alt="">
                            </div>
                            <div class="order-4 xl:px-8">
                                <div class="font-heading font-averia text-3xl tracking-tight font-semibold xl:justify-items-end xl:mt-8">
                                    <div class="shrink-0 size-6 bg-secondary rounded-full flex items-center justify-center">
                                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <div class="xl:text-right text-primary mt-2">Vidéo témoignage sur {{ offerGPPSection.title }}</div>
                                </div>
                            </div>
                            <div class="xl:col-span-1 order-last relative isolate overflow-hidden bg-accent px-6 pt-8 -mx-8 sm:mx-auto sm:max-w-7xl sm:rounded-3xl sm:pl-8 sm:pr-0 sm:pt-8 xl:mx-0 shadow-xl shadow-accent/50">
                                <div class="absolute -inset-y-px -left-3 -z-10 w-full origin-bottom-left skew-x-[-30deg] bg-indigo-100 opacity-20 ring-1 ring-inset ring-white" aria-hidden="true" />
                                <div class="mx-auto max-w-7xl sm:mx-0 sm:max-w-none">
                                    <video class="w-full rounded-tl-3xl" controls poster="/images/illu_papa.webp" width="640" height="360">
                                        <source src="/videos/les_peres.mp4" type="video/mp4">
                                        Votre navigateur ne supporte pas la balise vidéo.
                                    </video>
                                </div>
                                <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 sm:rounded-3xl" aria-hidden="true" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Les consultations périnatales -->
    <section :id="'section-' + offerCPSection.id" class="py-4 xl:py-10 px-4 xl:px-10 container mx-auto">
        <div class="relative p-4">
            <div class="relative py-4">
                <div class="flex flex-wrap">
                    <div class="relative font-semibold font-heading">
                        <div class="grid grid-cols-1 xl:grid-cols-3 gap-8 mt-8">
                            <div class="rounded-3xl border border-accent/50">
                                <img class="rounded-3xl w-full xl:h-full h-96 object-cover -rotate-2 shadow-accent/80 shadow-2xl" :src=offerCPSection.image alt="">
                            </div>
                            <div class="xl:col-span-2 content-center py-12">
                                <h2 class="h2">{{ offerCPSection.title }}</h2>
                                <p class="mb-8" v-html=offerCPSection.paragraph></p>
                                <div class="flex items-center p-8 rounded-3xl bg-secondary ml-8 xl:ml-16">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="shrink-0 size-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Modalités d'accueil
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium text-balance" v-html=offerCPSection.items[0].content></p>
                                    </div>
                                </div>
                                <div class="bordered-card mt-8 mr-8 xl:mr-16">
                                    <div class="bg-white rounded-3xl p-8 flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="shrink-0 size-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Horaires
                                        </div>
                                        <p class="text-lg" v-html=offerCPSection.items[1].content></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- L’hôpital de jour Mère-Bébé -->
    <section :id="'section-' + offerHJMBSection.id" class="py-4 xl:py-10 px-4 xl:px-10 container mx-auto">
        <div class="relative p-4">
            <div class="relative py-4">
                <div class="flex flex-wrap">
                    <div class="relative font-semibold font-heading">
                        <div class="grid grid-cols-1 xl:grid-cols-3 gap-8 mt-8">
                            <div class="xl:col-span-2 content-center py-12 order-last xl:order-first">
                                <h2 class="h2 text-accent">{{ offerHJMBSection.title }}</h2>
                                <p class="mb-8" v-html=offerHJMBSection.paragraph></p>
                                <div class="flex items-center p-8 rounded-3xl bg-secondary mr-8 xl:mr-16">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="shrink-0 size-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Modalités d'accueil
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium text-balance" v-html=offerHJMBSection.items[0].content></p>
                                    </div>
                                </div>
                                <div class="bordered-card mt-8 ml-8 xl:ml-16">
                                    <div class="bg-white rounded-3xl p-8 flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="shrink-0 size-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Horaires
                                        </div>
                                        <p class="text-lg" v-html=offerHJMBSection.items[1].content></p>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-3xl border border-accent/50">
                                <img class="rounded-3xl w-full xl:h-full h-96 object-cover rotate-2 shadow-accent/80 shadow-2xl" :src=offerHJMBSection.image alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</GuestLayout>
</template>

<script setup>
import ShapeTopWhite from '@/Components/ShapeTopWhite.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { computed } from 'vue';

const props = defineProps({
    sections: Array,
});
const filteredSections = computed(() => {
    return props.sections.filter(section => section.identifier !== 'OFFERS');
});
const filterSection = (identifier) => {
    return props.sections.find(section => section.identifier === identifier);
};
const offersSection = computed(() => filterSection("OFFERS"));
const offerPBSection = computed(() => filterSection("OFFER_PB"));
const offerGPSection = computed(() => filterSection("OFFER_GP"));
const offerGPPSection = computed(() => filterSection("OFFER_GPP"));
const offerHJMBSection = computed(() => filterSection("OFFER_HJMB"));
const offerCPSection = computed(() => filterSection("OFFER_CP"));
</script>
