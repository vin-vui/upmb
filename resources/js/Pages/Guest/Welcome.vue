<template>
<GuestLayout title="Accueil">

    <Hero :title=heroSection.title :content=heroSection.paragraph :image=heroSection.image />

    <ShapeTopWhite />

    <!-- Nos Missions -->
    <section class="mt-12 mb-32 pb-24 px-4 container mx-auto relative isolate">
        <div class="flex flex-wrap justify-between items-center">
            <div class="w-full lg:w-1/2 rounded-3xl">
                <div class="relative font-semibold font-heading">
                    <h2 class="h2 text-accent">{{ missionsSection.title }}</h2>
                    <p v-html=missionsSection.paragraph></p>
                </div>
                <img class="rounded-3xl shadow-xl shadow-accent/60 -rotate-2 object-cover aspect-square h-[40rem] mt-8"
                    :src=missionsSection.image
                    alt="Illustration d'une docteure qui prend soin d'une mère et son enfant">
            </div>
            <div class="w-full lg:max-w-xl lg:w-1/2 grid grid-cols-1 md:grid-cols-1 gap-4 cursor-default">
                <div v-for="mission in missionsSection.items" class="bordered-card">
                    <div class="bg-white rounded-3xl py-8 px-4 flex items-center h-full text-neutral-600 tracking-tight text-lg font-medium gap-4">
                        <div class="w-6">
                            <svg class="size-6 text-primary" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7t-.7-.275t-.7.275zM12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22"/></svg>
                        </div>
                        {{ mission.content }}
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-16 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl" aria-hidden="true">
            <div class="aspect-[1318/752] w-[82.375rem] flex-none bg-gradient-to-r from-primary to-secondary opacity-25" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)" />
        </div>
    </section>

    <ShapeTopPrimaryLight />

    <!-- Notre Historique -->
    <section class="bg-primary/30 pb-24">
        <div class="pt-18 sm:pt-24 pb-24 sm:pb-32 container mx-auto">
            <div class="mx-auto max-w-2xl lg:text-center mb-12">
                <h2 class="h2">{{ historySection.title }}</h2>
                <p v-html="historySection.paragraph"></p>
            </div>
            <div class="flex flex-wrap items-center justify-between">
                <div class="bordered-card md:w-2/3">
                    <div class="bg-white flex flex-col md:flex-row gap-4 p-10 rounded-3xl">
                        <div class="w-full xl:w-1/3">
                            <div class="flex flex-col mb-5 gap-2">
                                <div class="flex items-center justify-center w-16 h-16 bg-primary rounded-full">
                                    <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor">
                                            <circle cx="12" cy="8" r="6" />
                                            <path d="M16.874 12A6.5 6.5 0 0 1 18 15.684c0 .818-.148 1.599-.416 2.316M7.126 12A6.5 6.5 0 0 0 6 15.684C6 19.172 8.686 22 12 22c2.537 0 4.706-1.658 5.584-4m0 0c-2.733-1.2-5.528-3.167-6.584-4m1-12c-.994 0-1.8.784-1.8 1.75S11.006 5.5 12 5.5c.461 0 .882-.168 1.2-.446M10 8h.008M14 8h.008" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="text-2xl font-medium font-averia tracking-tight font-heading">{{ historySection.items[0].content }}</div>
                            </div>
                            <div class="text-neutral-600 font-medium tracking-tight text-balance">
                                {{ historySection.items[1].content }}
                            </div>
                        </div>
                        <div class="w-full xl:w-1/3">
                            <div class="flex flex-col mb-5 gap-2">
                                <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-full">
                                    <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M445.057 345.134L464 274.1V232c-8.136-93.993-87.933-168-184-168h-32v168H132.158l-17.844-78.768A32.155 32.155 0 0 0 83.038 128H16v32h67.038l40.475 178.67A80 80 0 1 0 224 416q0-4.05-.4-8h104.8q-.395 3.948-.4 8a80 80 0 1 0 117.057-70.866M280 96c78.411 0 143.145 59.678 151.164 136H280ZM144 464a48 48 0 1 1 48-48a48.055 48.055 0 0 1-48 48m194.763-88H213.237a80.166 80.166 0 0 0-57.316-39.108L139.408 264H432v5.9l-17.7 66.368a80.592 80.592 0 0 0-6.3-.271A80.026 80.026 0 0 0 338.763 376M408 464a48 48 0 1 1 48-48a48.055 48.055 0 0 1-48 48" />
                                    </svg>
                                </div>
                                <div class="text-2xl font-medium font-averia tracking-tight font-heading">{{ historySection.items[2].content }}</div>
                            </div>
                            <div class="text-neutral-600 font-medium tracking-tight text-balance">
                                {{ historySection.items[3].content }}
                            </div>
                        </div>
                        <div class="w-full xl:w-1/3">
                            <div class="flex flex-col mb-5 gap-2">
                                <div class="flex items-center justify-center w-16 h-16 bg-accent rounded-full">
                                    <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 14 14">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.5 6.5v6a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-6m0 0v-2a1 1 0 0 0-1-1a1 1 0 0 1-1-1V2a1.5 1.5 0 0 0-3 0v.5a1 1 0 0 1-1 1a1 1 0 0 0-1 1v2m-1 0h9m-4 3h3" />
                                    </svg>
                                </div>
                                <div class="text-2xl font-medium font-averia tracking-tight font-heading">
                                    {{ historySection.items[4].content }}
                                </div>
                            </div>
                            <div class="text-neutral-600 font-medium tracking-tight text-balance">
                                {{ historySection.items[5].content }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 pl-10">
                    <div class="h-full">
                        <h3 class="font-heading text-5xl tracking-tight font-semibold mb-7 max-w-xs cursor-default">
                            Il est <span class="bg-accent font-averia rounded-lg px-4 inline-block text-neutral-100">ouvert</span>
                            aux familles de la
                            ville de Besançon mais aussi du Doubs et de la Région
                        </h3>
                        <ContactButton />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <ShapeTopWhite />

    <!-- Notre Offre de Soin -->
    <section class="relative isolate pt-24 pb-48 overflow-hidden ">
        <div class="relative z-10 container mx-auto px-4">
            <div class="md:max-w-3xl md:mx-auto">
                <h2 class="h2">{{ offerSection.title }}</h2>
                <p v-html="offerSection.paragraph"></p>
                <div class="flex flex-wrap -m-5 mt-8">
                    <div class="w-full md:w-1/2 md:relative md:top-12 p-5">
                        <div class="h-full p-9 transform hover:-translate-y-3 bg-primary rounded-2xl transition ease-out duration-1000 hover:shadow-2xl hover:shadow-accent/50 group cursor-pointer">
                            <p class="mb-4 font-heading text-base text-white text-opacity-70">Pour évoquer les préoccupations</p>
                            <h3 class="mb-20 font-heading font-bold text-white text-3xl text-balance">Les Groupes de Parole</h3>
                            <span class="font-heading font-averia text-white text-opacity-70 group-hover:text-opacity-100 tracking-tight text-xl font-semibold flex items-center gap-2 transition ease-out duration-1000">
                                <div class="size-6 bg-white group-hover:bg-opacity-100 bg-opacity-70 rounded-full flex items-center justify-center transition ease-out duration-1000 group-hover:translate-x-1">
                                    <svg class="text-gray-900" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                                <span class="link link-primary link-animated">je découvre</span>
                            </span>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 p-5">
                        <div class="flex flex-col justify-between p-9 h-full transform hover:-translate-y-3 overflow-hidden bg-accent rounded-2xl transition ease-out duration-1000 hover:shadow-2xl hover:shadow-accent/50 group cursor-pointer">
                            <p class="mb-4 font-heading text-base text-white text-opacity-70">Pour la mère et son enfant</p>
                            <h3 class="mb-20 font-heading font-bold text-white text-3xl text-balance">L’hôpital de jour Mère-Bébé</h3>
                            <span class="font-heading font-averia text-white text-opacity-70 group-hover:text-opacity-100 tracking-tight text-xl font-semibold flex items-center gap-2 transition ease-out duration-1000">
                                <div class="size-6 bg-white group-hover:bg-opacity-100 bg-opacity-70 rounded-full flex items-center justify-center transition ease-out duration-1000 group-hover:translate-x-1">
                                    <svg class="text-gray-900" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                                <span class="link link-primary link-animated">je découvre</span>
                            </span>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 md:relative md:top-12 p-5">
                        <div class="h-full p-9 transform hover:-translate-y-3 bg-secondary rounded-2xl transition ease-out duration-1000 hover:shadow-2xl hover:shadow-accent/50 group cursor-pointer">
                            <p class="mb-4 font-heading text-base text-white text-opacity-70">Un espace d'écoute</p>
                            <h3 class="mb-20 font-heading font-bold text-white text-3xl text-balance">Les consultations périnatales</h3>
                            <img class="mx-auto" src="gradia-assets/images/features/card.png" alt="">
                            <span class="font-heading font-averia text-white text-opacity-70 group-hover:text-opacity-100 tracking-tight text-xl font-semibold flex items-center gap-2 transition ease-out duration-1000">
                                <div class="size-6 bg-white group-hover:bg-opacity-100 bg-opacity-70 rounded-full flex items-center justify-center transition ease-out duration-1000 group-hover:translate-x-1">
                                    <svg class="text-gray-900" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                                <span class="link link-primary link-animated">je découvre</span>
                            </span>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 p-5">
                        <div class="bordered-card group cursor-pointer">
                            <div class="bg-white p-9 rounded-3xl">
                                <p class="mb-4 font-heading text-base text-opacity-70">Accueille les futurs parent</p>
                                <h3 class="mb-20 font-heading font-bold text-3xl text-balance">Accueil Parents-Bébé</h3>
                                <img class="mx-auto" src="gradia-assets/images/features/comments.png" alt="">
                                <span class="font-heading font-averia text-gray-900 text-opacity-70 group-hover:text-opacity-100 tracking-tight text-xl font-semibold flex items-center gap-2 transition ease-out duration-1000">
                                    <div class="size-6 bg-gray-900 group-hover:bg-opacity-100 bg-opacity-70 rounded-full flex items-center justify-center transition ease-out duration-1000 group-hover:translate-x-1">
                                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <span class="link link-primary link-animated">je découvre</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-24 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl" aria-hidden="true">
            <div class="aspect-[1318/752] w-[82.375rem] flex-none bg-gradient-to-r from-accent to-primary opacity-25"
                style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)" />
        </div>
    </section>

    <ShapeTopSecondary />

    <!-- Témoignage Vidéo -->
    <section class="overflow-hidden bg-secondary pt-24 pb-48">
        <div class="mx-auto container md:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:grid-cols-2 lg:items-start">
                <div class="px-6 lg:px-0 lg:pr-4 lg:pt-4">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-lg">
                        <h2 class="h2 text-white">{{ testimonySection.title }}</h2>
                        <p class="text-neutral-100" v-html="testimonySection.paragraph"></p>
                    </div>
                </div>
                <div class="sm:px-6 lg:px-0">
                    <div class="relative isolate overflow-hidden bg-accent px-6 pt-8 sm:mx-auto sm:max-w-2xl sm:rounded-3xl sm:pl-16 sm:pr-0 sm:pt-16 lg:mx-0 lg:max-w-none shadow-xl shadow-accent/50">
                        <div class="absolute -inset-y-px -left-3 -z-10 w-full origin-bottom-left skew-x-[-30deg] bg-indigo-100 opacity-20 ring-1 ring-inset ring-white" aria-hidden="true" />
                        <div class="mx-auto max-w-2xl sm:mx-0 sm:max-w-none">
                            <video class="w-full rounded-tl-3xl" controls >
                                <source src="/videos/test.mp4" type="video/mp4">
                                Votre navigateur ne supporte pas la balise vidéo.
                            </video>
                        </div>
                        <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 sm:rounded-3xl" aria-hidden="true" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <ShapeTopPrimaryLight />

    <!-- Partenaires -->
    <section class="bg-primary/30 pt-24 pb-48">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center -m-6">
                <div class="w-full md:w-1/2 p-6">
                    <h2 class="h2">{{ partnersSection.title }}</h2>
                    <p v-html="partnersSection.paragraph"></p>
                </div>
                <div class="w-full md:w-1/2 p-6">
                    <div class="flex flex-wrap gap-4 justify-center md:justify-start -m-5">
                        <div v-for="partner in partners" class="w-auto bordered-card">
                            <img class="h-36 p-4 bg-white rounded-3xl" :src=partner.url alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</GuestLayout>
</template>

<script setup>
import ContactButton from '@/Components/ContactButton.vue';
import ShapeTopPrimaryLight from '@/Components/ShapeTopPrimaryLight.vue';
import ShapeTopSecondary from '@/Components/ShapeTopSecondary.vue';
import ShapeTopWhite from '@/Components/ShapeTopWhite.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Hero from '@/Pages/Guest/_Hero.vue';
import { computed } from 'vue';

const props = defineProps({
    partners: Object,
    sections: Array,
});

const filterSection = (identifier) => {
    return props.sections.find(section => section.identifier === identifier);
};
const heroSection       = computed(() => filterSection("HERO"));
const missionsSection   = computed(() => filterSection("MISSIONS"));
const historySection    = computed(() => filterSection("HISTORY"));
const offerSection      = computed(() => filterSection("OFFER"));
const testimonySection  = computed(() => filterSection("TESTIMONY"));
const partnersSection   = computed(() => filterSection("PARTNERS"));
</script>
