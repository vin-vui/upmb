<template>
<GuestLayout title="Notre offre de soins">

    <!-- Offre de soins -->
    <section class="-mt-32 bg-[radial-gradient(ellipse_at_bottom_right,_var(--tw-gradient-stops))] from-accent/30 to-primary/40 background-animate overflow-hidden">
        <div class="container mx-auto px-4 lg:px-10">
            <div class="flex flex-wrap -m-6 pt-44 lg:pt-64 pb-36">
                <div class="w-full md:w-1/3 p-4">
                    <div class="relative h-56 md:h-full rounded-3xl border border-accent/50">
                        <img class="absolute inset-0 rounded-3xl w-full h-full object-cover -rotate-2 shadow-accent/80 shadow-2xl"
                            :src=offersSection.image alt="Image illustrant l'accueil des parents et de leur bébé">
                    </div>
                </div>
                <div class="w-full md:w-2/3 p-4">
                    <div class="h-full py-18 lg:py-32 pl-4 lg:pl-18 pr-4 lg:pr-16">
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
    <section :id="'section-' + offerPBSection.id" class="pt-24 lg:py-10 px-4 lg:px-10 container mx-auto">
        <div class="relative p-4">
            <div class="relative py-4">
                <div class="flex flex-wrap">
                    <div class="relative font-semibold font-heading">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                            <div class="md:col-span-2 content-center py-12">
                                <h2 class="h2 text-accent">{{ offerPBSection.title }}</h2>
                                <p class="mb-8" v-html=offerPBSection.paragraph></p>
                                <div class="md:col-span-4 flex items-center p-8 rounded-3xl bg-secondary mr-16">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Modalités d'accueil
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium text-balance" v-html=offerPBSection.items[0].content></p>
                                    </div>
                                </div>
                                <div class="md:col-span-4 bordered-card mt-8 ml-16">
                                    <div class="bg-white rounded-3xl p-8 flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
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
                            <div class="rounded-3xl border border-accent/50">
                                <img class="rounded-3xl w-full h-full object-cover rotate-2 shadow-accent/80 shadow-2xl" :src=offerPBSection.image alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Les groupes de parole femmes enceintes -->
    <section :id="'section-' + offerGPSection.id" class="pt-24 lg:py-10 px-4 lg:px-10 container mx-auto">
        <div class="relative p-4">
            <div class="relative py-4">
                <div class="flex flex-wrap">
                    <div class="relative font-semibold font-heading">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                            <div class="rounded-3xl border border-accent/50">
                                <img class="rounded-3xl w-full h-full object-cover -rotate-2 shadow-accent/80 shadow-2xl" :src=offerGPSection.image alt="">
                            </div>
                            <div class="md:col-span-2 content-center py-24">
                                <h2 class="h2">{{ offerGPSection.title }}</h2>
                                <p class="mb-8" v-html=offerGPSection.paragraph></p>
                                <div class="md:col-span-4 flex items-center p-8 rounded-3xl bg-secondary ml-16">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Modalités d'accueil
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium text-balance" v-html=offerGPSection.items[0].content></p>
                                    </div>
                                </div>
                                <div class="md:col-span-4 bordered-card mt-8 mr-16">
                                    <div class="bg-white rounded-3xl p-8 flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Les groupes de parole pères -->
    <section :id="'section-' + offerGPPSection.id" class="pt-24 lg:py-10 px-4 lg:px-10 container mx-auto">
        <div class="relative p-4">
            <div class="relative py-4">
                <div class="flex flex-wrap">
                    <div class="relative font-semibold font-heading">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                            <div class="md:col-span-2 content-center py-12">
                                <h2 class="h2 text-accent">{{ offerGPPSection.title }}</h2>
                                <p class="mb-8" v-html=offerGPPSection.paragraph></p>
                                <div class="md:col-span-4 flex items-center p-8 rounded-3xl bg-secondary mr-16">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Modalités d'accueil
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium text-balance" v-html=offerGPPSection.items[0].content></p>
                                    </div>
                                </div>
                                <div class="md:col-span-4 bordered-card mt-8 ml-16">
                                    <div class="bg-white rounded-3xl p-8 flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
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
                            <div class="rounded-3xl border border-accent/50">
                                <img class="rounded-3xl w-full h-full object-cover rotate-2 shadow-accent/80 shadow-2xl" :src=offerGPPSection.image alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Les consultations périnatales -->
    <section :id="'section-' + offerCPSection.id" class="pt-24 lg:py-10 px-4 lg:px-10 container mx-auto">
        <div class="relative p-4">
            <div class="relative py-4">
                <div class="flex flex-wrap">
                    <div class="relative font-semibold font-heading">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                            <div class="rounded-3xl border border-accent/50">
                                <img class="rounded-3xl w-full h-full object-cover -rotate-2 shadow-accent/80 shadow-2xl" :src=offerCPSection.image alt="">
                            </div>
                            <div class="md:col-span-2 content-center py-24">
                                <h2 class="h2">{{ offerCPSection.title }}</h2>
                                <p class="mb-8" v-html=offerCPSection.paragraph></p>
                                <div class="md:col-span-4 flex items-center p-8 rounded-3xl bg-secondary ml-16">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Modalités d'accueil
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium text-balance" v-html=offerCPSection.items[0].content></p>
                                    </div>
                                </div>
                                <div class="md:col-span-4 bordered-card mt-8 mr-16">
                                    <div class="bg-white rounded-3xl p-8 flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
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
    <section :id="'section-' + offerHJMBSection.id" class="pt-24 lg:py-10 px-4 lg:px-10 container mx-auto">
        <div class="relative p-4">
            <div class="relative py-4">
                <div class="flex flex-wrap">
                    <div class="relative font-semibold font-heading">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                            <div class="md:col-span-2 content-center py-12">
                                <h2 class="h2 text-accent">{{ offerHJMBSection.title }}</h2>
                                <p class="mb-8" v-html=offerHJMBSection.paragraph></p>
                                <div class="md:col-span-4 flex items-center p-8 rounded-3xl bg-secondary mr-16">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Modalités d'accueil
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium text-balance" v-html=offerHJMBSection.items[0].content></p>
                                    </div>
                                </div>
                                <div class="md:col-span-4 bordered-card mt-8 ml-16">
                                    <div class="bg-white rounded-3xl p-8 flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
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
                                <img class="rounded-3xl w-full h-full object-cover rotate-2 shadow-accent/80 shadow-2xl" :src=offerHJMBSection.image alt="">
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
