<template>
<GuestLayout title="Nous Contacter">
    <section class="overflow-hidden pt-12 md:pt-24 pb-48 mx-auto container px-4 md:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <div class="col-span-2">
                <h2 class="h2">Nous Contacter</h2>
                <p class="mt-6 text-gray-900" v-html=cta.paragraph></p>
                <div class="flex flex-wrap -m-5 mt-8">
                    <!-- ADDRESS -->
                    <div class="w-full md:w-1/2 md:relative md:top-12 p-5">
                        <a :href=linkMap target="_blank">
                            <div class="flex flex-col justify-between h-full p-9 transform hover:-translate-y-3 bg-primary rounded-2xl transition ease-out duration-1000 hover:shadow-2xl hover:shadow-accent/50 group cursor-pointer">
                                <div class="mb-20">
                                    <p class="mb-4 font-heading text-base text-white text-opacity-70">Venir nous voir</p>
                                    <h3 class="mb-8 font-heading font-bold text-white text-xl md:text-3xl text-balance whitespace-pre-wrap">{{ address }}</h3>
                                    <div class="">
                                        <p class="mb-4 font-heading text-base text-white text-opacity-70">Venir en bus</p>
                                        <p class="text-white text-opacity-90 text-lg">{{ bus_1 }}</p>
                                        <p class="text-white text-opacity-90 text-lg">{{ bus_2 }}</p>
                                    </div>
                                </div>
                                <span class="font-heading font-averia text-white text-opacity-70 group-hover:text-opacity-100 tracking-tight text-xl font-semibold flex items-center gap-2 transition ease-out duration-1000">
                                    <div class="size-6 bg-white group-hover:bg-opacity-100 bg-opacity-70 rounded-full flex items-center justify-center transition ease-out duration-1000 group-hover:translate-x-1">
                                        <svg class="text-gray-900" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <span class="link link-primary link-animated">j'y vais</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <!-- EMAIL / PHONE -->
                    <div class="w-full md:w-1/2 p-5">
                        <a :href="'mailto:' + email" target="_blank">
                            <div class="p-9 transform hover:-translate-y-3 overflow-hidden bg-accent rounded-2xl transition ease-out duration-1000 hover:shadow-2xl hover:shadow-accent/50 group cursor-pointer">
                                <p class="mb-4 font-heading text-base text-white text-opacity-70">Nous écrire</p>
                                <h3 class="mb-8 font-heading font-bold text-white text-xl lg:text-3xl">{{ email }}</h3>
                                <span class="font-heading font-averia text-white text-opacity-70 group-hover:text-opacity-100 tracking-tight text-xl font-semibold flex items-center gap-2 transition ease-out duration-1000">
                                    <div class="size-6 bg-white group-hover:bg-opacity-100 bg-opacity-70 rounded-full flex items-center justify-center transition ease-out duration-1000 group-hover:translate-x-1">
                                        <svg class="text-gray-900" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <span class="link link-primary link-animated">j'envoie un email</span>
                                </span>
                            </div>
                        </a>
                        <a :href="'tel:' + phone" target="_blank">
                            <div class="mt-4 p-9 transform hover:-translate-y-3 overflow-hidden bg-accent rounded-2xl transition ease-out duration-1000 hover:shadow-2xl hover:shadow-accent/50 group cursor-pointer">
                                <p class="mb-4 font-heading text-base text-white text-opacity-70">Nous appeler</p>
                                <h3 class="mb-8 font-heading font-bold text-white text-xl md:text-3xl text-balance">{{ phone }}</h3>
                                <span class="font-heading font-averia text-white text-opacity-70 group-hover:text-opacity-100 tracking-tight text-xl font-semibold flex items-center gap-2 transition ease-out duration-1000">
                                    <div class="size-6 bg-white group-hover:bg-opacity-100 bg-opacity-70 rounded-full flex items-center justify-center transition ease-out duration-1000 group-hover:translate-x-1">
                                        <svg class="text-gray-900" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <span class="link link-primary link-animated">j'appelle</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <!-- FB -->
                    <div class="w-full md:w-1/2 md:relative md:top-12 p-5">
                        <a :href=fb target="_blank">
                            <div class="h-full p-9 transform hover:-translate-y-3 bg-secondary rounded-2xl transition ease-out duration-1000 hover:shadow-2xl hover:shadow-accent/50 group cursor-pointer">
                                <p class="mb-4 font-heading text-base text-white text-opacity-70">Notre page Facebook</p>
                                <svg class="mb-8 text-white size-24" fill="currentColor" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg>
                                <span class="font-heading font-averia text-white text-opacity-70 group-hover:text-opacity-100 tracking-tight text-xl font-semibold flex items-center gap-2 transition ease-out duration-1000">
                                    <div class="size-6 bg-white group-hover:bg-opacity-100 bg-opacity-70 rounded-full flex items-center justify-center transition ease-out duration-1000 group-hover:translate-x-1">
                                        <svg class="text-gray-900" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <span class="link link-primary link-animated">je visite</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <!-- DOC -->
                    <div class="w-full md:w-1/2 p-5">
                        <a :href=doc download>
                            <div class="bordered-card group cursor-pointer">
                                <div class="bg-white p-9 rounded-3xl">
                                    <p class="mb-4 font-heading text-base text-opacity-70">Info pratique</p>
                                    <h3 class="mb-20 font-heading font-bold text-3xl text-balance">Notre plaquette</h3>
                                    <span class="font-heading font-averia text-gray-900 text-opacity-70 group-hover:text-opacity-100 tracking-tight text-xl font-semibold flex items-center gap-2 transition ease-out duration-1000">
                                        <div class="size-6 bg-gray-900 group-hover:bg-opacity-100 bg-opacity-70 rounded-full flex items-center justify-center transition ease-out duration-1000 group-hover:translate-x-1">
                                            <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        <span class="link link-primary link-animated">je télécharge</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex items-center justify-center w-full">
                <img class="w-full flex-none rounded-2xl object-cover aspect-square h-auto max-w-sm shadow-xl shadow-accent/50 rotate-2" :src=cta.image alt="Image d'illustration pour le contact" />
            </div>
        </div>
    </section>
</GuestLayout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';

import { computed } from 'vue';

const props = defineProps({
    informations: Array,
    cta: Object,
});

const filterInformation = (identifier) => {
    return props.informations.find(information => information.identifier === identifier).label;
};

const mapsLink = (address) => {
    const baseUrl = "https://www.google.com/maps/search/?api=1&query=";
    return `${baseUrl}${encodeURIComponent(address)}`;
};

const address = computed(() => filterInformation("ADDRESS").replace(/, /g, '\n'));
const email = computed(() => filterInformation("EMAIL"));
const phone = computed(() => filterInformation("PHONE"));
const bus_1 = computed(() => filterInformation("BUS_1"));
const bus_2 = computed(() => filterInformation("BUS_2"));
const fb = computed(() => filterInformation("FB"));
const doc = computed(() => filterInformation("DOC"));
const linkMap = computed(() => mapsLink(filterInformation("ADDRESS")));
</script>
