<template>
<GuestLayout title="Notre offre de soins">

    <!-- Offre de soins -->
    <section class="-mt-32 bg-[radial-gradient(ellipse_at_bottom_right,_var(--tw-gradient-stops))] from-accent/30 to-primary/40 background-animate overflow-hidden">
        <div class="container mx-auto px-4">
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
                        <div class="grid grid-cols-2 gap-4 my-16">
                            <a href="#section-one"
                                class="font-averia inline-flex justify-center items-center text-center h-16 p-5 font-semibold tracking-tight text-xl hover:text-white focus:text-white bg-transparent hover:bg-accent focus:bg-accent border border-accent rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200">
                                Accueil Parents-Bébé
                            </a>
                            <a href="#section-two"
                                class="font-averia inline-flex justify-center items-center text-center h-16 p-5 font-semibold tracking-tight text-xl hover:text-white focus:text-white bg-transparent hover:bg-secondary focus:bg-secondary border border-secondary rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200">
                                Les groupes de parole
                            </a>
                            <a href="#section-three"
                                class="font-averia inline-flex justify-center items-center text-center h-16 p-5 font-semibold tracking-tight text-xl hover:text-white focus:text-white bg-transparent hover:bg-primary focus:bg-primary border border-primary rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200">
                                L’hôpital de jour Mère-Bébé
                            </a>
                            <a href="#section-four"
                                class="font-averia inline-flex justify-center items-center text-center h-16 p-5 font-semibold tracking-tight text-xl hover:text-white focus:text-white bg-transparent hover:bg-accent focus:bg-accent border border-accent rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200">
                                Les consultations périnatales
                            </a>
                        </div>
                        <div class="flex flex-wrap -m-2">
                            <div class="w-full p-2">
                                <div
                                    class="rounded-3xl p-8 bg-secondary shadow-xl h-full relative overflow-hidden rotate-1">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div
                                            class="font-heading font-averia text-3xl tracking-tight font-semibold max-w-xs flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z"
                                                        fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            {{ offersSection.items[0].content }}
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium"
                                            v-html=offersSection.items[1].content></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <ShapeTopWhite />

    <!-- Accueil Parents-Bébé -->
    <section id="section-one" class="pt-24 lg:py-10 px-4 lg:px-10 container mx-auto">
        <div class="flex flex-wrap -m-4">
            <div class="w-full md:w-2/3 p-4">
                <div class="h-full py-18 lg:py-32 pl-4 lg:pl-18 pr-4 lg:pr-16">
                    <h1 class="h2">{{ offerPBSection.title }}</h1>
                    <p class="mb-8" v-html=offerPBSection.paragraph></p>
                    <div class="flex flex-wrap -m-2">
                        <div class="w-full md:w-1/2 p-2">
                            <div class="rounded-3xl p-8 bg-secondary h-full relative overflow-hidden">
                                <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                    <div
                                        class="font-heading font-averia text-3xl tracking-tight font-semibold max-w-xs flex items-center gap-2">
                                        <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewbox="0 0 12 12" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z"
                                                    fill="#19191B"></path>
                                            </svg>
                                        </div>
                                        {{ offerPBSection.items[0].content }}
                                    </div>
                                    <p class="text-neutral-100 tracking-tight text-lg font-medium max-w-xs"
                                        v-html=offerPBSection.items[1].content></p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 p-2">
                            <div class="bordered-card">
                                <div
                                    class="flex flex-col items-start justify-between gap-4 h-full relative z-20 bg-white rounded-3xl p-8">
                                    <span
                                        class="font-heading font-averia tracking-tight text-3xl font-semibold flex items-center gap-2">
                                        <div class="w-6 h-6 bg-secondary rounded-full flex items-center justify-center">
                                            <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="12"
                                                height="12" viewbox="0 0 12 12" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        {{ offerPBSection.items[2].content }}
                                    </span>
                                    <p class="text-neutral-600 tracking-tight text-lg font-medium max-w-xs"
                                        v-html=offerPBSection.items[3].content></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-4">
                <div class="relative h-56 md:h-full rounded-3xl border border-accent/50">
                    <img class="absolute inset-0 rounded-3xl w-full h-full object-cover rotate-2 shadow-accent/80 shadow-2xl"
                        :src=offerPBSection.image alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Les groupes de parole -->
    <div id="section-two" class="pt-24 lg:py-10 px-4 lg:px-10 container mx-auto">
        <h2 class="h2 p-4">{{ offerGPSection.title }}</h2>
        <div class="relative p-4">
            <!-- Femmes enceintes -->
            <div class="relative py-4">
                <div class="flex flex-wrap">
                    <div class="relative font-semibold font-heading">
                        <div class="text-lg sm:text-xl bg-accent inline-flex text-white py-2 px-4 rounded-3xl">{{
                            offerGPSection.items[0].content }}</div>
                        <div class="text-xl sm:text-3xl font-averia pl-6">{{ offerGPSection.items[1].content }}</div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                            <div class="rounded-3xl border border-accent/50">
                                <img class="rounded-3xl w-full h-full object-cover -rotate-2 shadow-accent/80 shadow-2xl"
                                    :src=offerGPSection.image alt="">
                            </div>
                            <div class="md:col-span-2 content-center">
                                <p class="mb-8" v-html=offerGPSection.paragraph></p>
                                <div class="md:col-span-4 flex items-center p-8 rounded-3xl bg-secondary shadow-xl">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div
                                            class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z"
                                                        fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            {{ offerGPSection.items[2].content }}
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium text-balance"
                                            v-html=offerGPSection.items[3].content></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Futurs pères -->
            <div class="relative py-4 mt-16">
                <div class="flex flex-wrap">
                    <div class="relative font-semibold font-heading">
                        <div class="text-lg sm:text-xl bg-primary inline-flex text-white py-2 px-4 rounded-3xl">{{ offerGPPSection.items[0].content }}</div>
                        <div class="text-xl sm:text-3xl font-averia pl-6">{{ offerGPPSection.items[1].content }}</div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                            <div class="md:col-span-2 content-center">
                                <p class="mb-8" v-html=offerGPPSection.paragraph></p>
                                <div class="flex items-center p-8 rounded-3xl bg-secondary">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            {{ offerGPPSection.items[2].content }}
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium" v-html=offerGPPSection.items[3].content></p>
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
    </div>

    <!-- L’hôpital de jour Mère-Bébé -->
    <!-- <div id="section-two" class="relative text-3xl sm:text-6xl -mb-6 ml-4 mt-8 mr-3 font-averia">L’hôpital de jour<span class="bg-primary rounded-lg px-4 inline-block">Mère-Bébé</span></div>
    <div class="md:p-4 p-2 rounded-3xl border-2 border-primary">
        <div class="bg-white p-8 rounded-3xl grid grid-cols-3 gap-4">
            <div class="row-span-2 rounded-3xl border max-h-[29rem] -rotate-1">
                <img class="rounded-3xl w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1581998392741-67879e0ef04a?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="">
            </div>
            <div class="col-span-2 border-2 border-accent p-8 rounded-3xl flex items-center">
                <p class="text-neutral-600 tracking-tight text-lg font-medium">
                    Ce temps d’accueil permet de travailler les interactions, le lien et la séparation mère-bébé à
                    travers différents temps :
                    un étayage des soins quotidiens ( bains, change, repas, portage…),
                    des médiations thérapeutiques centrées sur l’instauration des premiers jeux,
                    des médiations suscitant la créativité des mères,
                    des ateliers d’éveils corporels ou sensoriels avec le bébé, des séances de travail corporel avec les
                    mères, des temps individuels avec la mère et /ou le bébé.
                </p>
            </div>
            <div class="col-span-2 flex items-center p-8 rounded-3xl bg-secondary shadow-xl rotate-1">
                <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                    <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                        <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z"
                                    fill="#19191B"></path>
                            </svg>
                        </div>
                        Accueil sur indication médicale
                    </div>
                    <p class="text-neutral-100 tracking-tight text-lg font-medium">
                        Pour la mère et son enfant jusqu’au trois ans de ce dernier.
                        Hôpital de jour ouvert sur cinq demi-journées par semaine sur quatre heures comprenant un repas
                        thérapeutique.
                    </p>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Les consultations périnatales -->
    <!-- <div id="section-three" class="relative text-3xl sm:text-6xl -mb-6 ml-4 mt-8 mr-3 font-averia">Les consultations<span class="bg-secondary rounded-lg px-4 inline-block">périnatales</span></div>
    <div class="md:p-4 p-2 rounded-3xl border-2 border-secondary">
        <div class="bg-white p-8 rounded-3xl grid grid-cols-3 gap-4">
            <div class="col-span-2 border-2 border-accent p-8 rounded-3xl flex items-center">
                <p class="text-neutral-600 tracking-tight text-lg font-medium">
                    Les consultations périnatales auprès d’un pédopsychiatre ou psychologue offrent un espace d'écoute
                    et d'accompagnement pour les parents ou futurs parents qui traversent des moments difficiles autour
                    de la périnatalité. Ces consultations permettent de parler de diverses problématiques, telles que :
                    Les fausses couches, L'infertilité, La grossesse à risque, La dépression post-partum, Les
                    difficultés dans le lien parent-enfant.
                    Ces consultations permettent d’offrir un soutien adapté et bienveillant, favorisant un mieux-être
                    pour la famille et aidant à construire un environnement émotionnel sain pour l’enfant dès le début
                    de sa vie.
                </p>
            </div>
            <div class="row-span-2 rounded-3xl border max-h-[29rem] rotate-1">
                <img class="rounded-3xl w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1489760176169-fd3d32805239?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="">
            </div>
            <div class="col-span-2 flex items-center p-8 rounded-3xl bg-secondary shadow-xl -rotate-1">
                <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                    <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                        <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z"
                                    fill="#19191B"></path>
                            </svg>
                        </div>
                        Accueil sur indication médicale
                    </div>
                    <p class="text-neutral-100 tracking-tight text-lg font-medium">
                        Pour la mère et son enfant jusqu’au trois ans de ce dernier.
                        Hôpital de jour ouvert sur cinq demi-journées par semaine sur quatre heures comprenant un repas
                        thérapeutique.
                    </p>
                </div>
            </div>

        </div>
    </div> -->

</GuestLayout>
</template>

<script setup>
import ShapeTopWhite from '@/Components/ShapeTopWhite.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { computed } from 'vue';

const props = defineProps({
    sections: Array,
});

const filterSection = (identifier) => {
    return props.sections.find(section => section.identifier === identifier);
};
const offersSection = computed(() => filterSection("OFFERS"));
const offerPBSection = computed(() => filterSection("OFFER_PB"));
const offerGPSection = computed(() => filterSection("OFFER_GP"));
const offerGPPSection = computed(() => filterSection("OFFER_GPP"));
</script>
