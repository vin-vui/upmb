<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
</script>

<template>
    <GuestLayout title="Accueil">
        <!-- Section 1 -->
        <div class="bg-white rounded-2xl py-4 lg:py-10 px-4 lg:px-10">
            <div class="flex flex-wrap -m-4">
                <div class="w-full md:w-2/3 p-4">
                    <div class="h-full py-18 lg:py-32 pl-4 lg:pl-18 pr-4 lg:pr-16">
                        <h1 class="font-heading font-averia mb-12 font-semibold text-6xl sm:text-9xl xl:text-11xl max-w-7xl text-balance">
                            <span class="relative z-10">Accueil Parents-</span>
                            <span class="bg-accent rounded-lg px-4 inline-block text-neutral-100">Bébé</span>
                        </h1>
                        <p class="font-heading text-neutral-600 tracking-tight text-2xl font-semibold mb-8">
                            L’Accueil Parents-Bébé répond aux besoins de continuité et d’accompagnements médicaux et
                            psychologiques pendant la grossesse et/ou dès la sortie de maternité. Elle accueille les
                            futurs parents, les mères, les pères et leur bébé jusqu’aux 2 ans de leur enfant :
                        </p>
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
                                            Soit
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium max-w-xs">
                                            parce qu’elles se sentent seules, isolées, démunies, vulnérables devant un
                                            bébé qu’elles ont du mal à comprendre
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 p-2">
                                <div class="rounded-3xl border-2 border-accent border-opacity-50 h-full p-8">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <span
                                            class="font-heading font-averia tracking-tight text-3xl font-semibold flex items-center gap-2">
                                            <div
                                                class="w-6 h-6 bg-secondary rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z"
                                                        fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Soit
                                        </span>
                                        <p class="text-neutral-600 tracking-tight text-lg font-medium max-w-xs">
                                            parce que le bébé, lui-même présente des difficultés, ce qui rend la
                                            relation difficile
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <div class="relative h-56 md:h-full">
                        <img class="absolute inset-0 rounded-3xl w-full h-full object-cover"
                            src="https://images.unsplash.com/photo-1590527548172-295fdcb1bab0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bW90aGVyJTIwZmF0aGVyJTIwYmFieXxlbnwwfDF8MHx8fDA%3D"
                            alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="my-4">
            <div class="flex flex-wrap -m-2">
                <div class="w-full md:w-1/3 p-2">
                    <div class="rounded-3xl p-8 bg-accent h-full relative overflow-hidden">
                        <div class="flex flex-col items-start justify-between gap-6 h-full relative z-20">
                            <div class="font-heading text-2xl tracking-tight font-semibold max-w-xs text-neutral-100 text-balance">
                                L’Accueil Parents-Bébé, dès son ouverture, a bénéficié du financement et du soutien du
                                <span class="font-averia text-neutral-900">Conseil Général</span>,
                                de la <span class="font-averia text-neutral-900">Mutualité de Franche-Comté</span>,
                                de la <span class="font-averia text-neutral-900">Ville de Besançon</span>,
                                de l’<span class="font-averia text-neutral-900">Etat</span>,
                                du <span class="font-averia text-neutral-900">Centre Hospitalier de Novillars</span>
                                avant d’être pérennisée en 2013 par l’<span class="font-averia text-neutral-900">Agence Régional de Santé</span>
                            </div>
                            <a class="group inline-flex justify-center items-center text-center tracking-tight gap-3"
                                href="https://www.ars.sante.fr/" target="_blank">
                                <span class="text-neutral-100 underline tracking-tight font-semibold group-hover:text-neutral-900 transition duration-200">
                                    Site de l'ARS
                                </span>
                                <div
                                    class="w-6 h-6 bg-white rounded-full border border-accent group-hover:border-neutral-200 transition duration-200 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z"
                                            fill="#19191B"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <img class="absolute h-32 sm:h-52 object-cover bottom-0 right-0 z-10"
                            src="mirga-assets/images/hero/woman-picture1.png" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-2">
                    <div class="rounded-3xl border-2 border-accent border-opacity-50 h-full p-8 relative overflow-hidden">
                        <div class="flex items-center justify-between flex-wrap -m-2">
                            <div class="w-full p-2">
                                <h2 class="font-heading font-averia tracking-tight text-3xl font-semibold mb-4">L’Accueil Parents-Bébé</h2>
                                <p class="text-neutral-900 tracking-tight text-lg font-medium max-w-xs">
                                    a bénéficié du soutien de la Ville de Besançon et de la Fondation des Hôpitaux de
                                    France (Pièces jaunes) pour l’aménagement de son espace et l'achat d’un véhicule
                                </p>
                            </div>
                        </div>
                        <img src="/images/baby_2.png" class="absolute h-32 sm:h-52 object-cover bottom-0 right-0 z-10" />
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-2">
                    <div class="p-8 h-full">
                        <h2 class="font-heading text-5xl tracking-tight font-semibold mb-7 max-w-xs">
                            Il est <span class="bg-accent font-averia rounded-lg px-4 inline-block text-neutral-100">ouvert</span> aux familles de la
                            ville de Besançon mais aussi du Doubs et de la Région
                        </h2>
                        <a :href="route('contact')" class="font-averia inline-flex justify-center items-center text-center h-16 p-5 font-semibold tracking-tight text-xl hover:text-white focus:text-white bg-transparent hover:bg-neutral-900 focus:bg-neutral-900 border border-neutral-900 rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="flex flex-col md:flex-row gap-4 mb-6 p-10 bg-white rounded-3xl">
            <div class="w-full xl:w-1/3">
                <div class="flex items-center -m-3 mb-5 gap-2">
                    <div class="flex items-center justify-center w-16 h-16 bg-primary rounded-full">
                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor"><circle cx="12" cy="8" r="6"/><path d="M16.874 12A6.5 6.5 0 0 1 18 15.684c0 .818-.148 1.599-.416 2.316M7.126 12A6.5 6.5 0 0 0 6 15.684C6 19.172 8.686 22 12 22c2.537 0 4.706-1.658 5.584-4m0 0c-2.733-1.2-5.528-3.167-6.584-4m1-12c-.994 0-1.8.784-1.8 1.75S11.006 5.5 12 5.5c.461 0 .882-.168 1.2-.446M10 8h.008M14 8h.008"/></g></svg>
                    </div>
                    <div class="text-4xl font-medium font-averia tracking-tight font-heading">L’Accueil Parents-Bébé</div>
                </div>
                <div class="text-neutral-600 font-medium tracking-tight">
                    fait l’objet d’une convention entre deux établissements : le Centre Hospitalier de Novillars, le Centre Hospitalier Universitaire. Il fait partie du Pôle de Psychiatrie de l’Enfant et l’Adolescent du Centre Hospitalier de Novillars.
                </div>
            </div>
            <div class="w-full xl:w-1/3">
                <div class="flex items-center -m-3 mb-5 gap-2">
                    <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-full">
                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path fill="currentColor" d="M445.057 345.134L464 274.1V232c-8.136-93.993-87.933-168-184-168h-32v168H132.158l-17.844-78.768A32.155 32.155 0 0 0 83.038 128H16v32h67.038l40.475 178.67A80 80 0 1 0 224 416q0-4.05-.4-8h104.8q-.395 3.948-.4 8a80 80 0 1 0 117.057-70.866M280 96c78.411 0 143.145 59.678 151.164 136H280ZM144 464a48 48 0 1 1 48-48a48.055 48.055 0 0 1-48 48m194.763-88H213.237a80.166 80.166 0 0 0-57.316-39.108L139.408 264H432v5.9l-17.7 66.368a80.592 80.592 0 0 0-6.3-.271A80.026 80.026 0 0 0 338.763 376M408 464a48 48 0 1 1 48-48a48.055 48.055 0 0 1-48 48"/></svg>
                    </div>
                    <div class="text-4xl font-medium font-averia tracking-tight font-heading">Cette structure est née</div>
                </div>
                <div class="text-neutral-600 font-medium tracking-tight">
                    en 2007 à l’initiative de professionnelle du soin de la petite enfance ayant souhaité proposer un lieu d’accueil et d’accompagnement pouvant permettre en cas de besoin un lien entre la sortie de la maternité et l’accès aux soins de l’enfance.
                </div>
            </div>
            <div class="w-full xl:w-1/3">
                <div class="flex items-center -m-3 mb-5 gap-2">
                    <div class="flex items-center justify-center w-16 h-16 bg-accent rounded-full">
                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 14 14"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.5 6.5v6a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-6m0 0v-2a1 1 0 0 0-1-1a1 1 0 0 1-1-1V2a1.5 1.5 0 0 0-3 0v.5a1 1 0 0 1-1 1a1 1 0 0 0-1 1v2m-1 0h9m-4 3h3"/></svg>                    </div>
                    <div class="text-4xl font-medium font-averia tracking-tight font-heading">Il semblait par ailleurs</div>
                </div>
                <div class="text-neutral-600 font-medium tracking-tight">
                    primordial de soutenir cette étape de vie qui est celle de devenir parents ainsi que toute la période de périnatalité, moment de grande vulnérabilité tant pour les parents du fait des remaniements physiologiques, psychiques que pour l’enfant en plein développement.
                </div>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="my-8">
            <div class="relative font-semibold font-heading">
                <div class="text-xl sm:text-3xl mr-3">Aussi nous pouvons nommer de la façon suivantes</div>
                <div class="text-3xl sm:text-6xl mr-3 font-averia">les <span class="bg-accent rounded-lg px-4 inline-block text-neutral-100">missions</span> dévolues à cette structure</div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 grid-flow-col gap-4 mt-4">
                <div class="row-span-2 rounded-3xl">
                    <img class="rounded-3xl object-cover h-full" src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=1775&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                <div class="bg-white rounded-3xl p-8 flex items-center h-44 text-neutral-600 tracking-tight text-lg font-medium">
                    Soutenir l’accès à la fonction de mère ou de père
                </div>
                <div class="bg-white rounded-3xl p-8 flex items-center h-44 text-neutral-600 tracking-tight text-lg font-medium">
                    Prévenir et/ou soigner les troubles psychopathologiques chez les parents
                </div>
                <div class="bg-white rounded-3xl p-8 flex items-center h-44 text-neutral-600 tracking-tight text-lg font-medium">
                    Prévenir et/ou soigner les troubles des interactions précoces mères-enfants ou parents-enfants
                </div>
                <div class="rounded-3xl border-2 border-accent relative">
                    <img class="rounded-3xl absolute h-32 sm:h-52 object-cover bottom-0 left-0 z-10" src="/images/baby_1.png" alt="">
                </div>
                <div class="bg-white rounded-3xl p-8 flex items-center h-44 text-neutral-600 tracking-tight text-lg font-medium">
                    Prévenir les risques de maltraitance précoce
                </div>
                <div class="bg-white rounded-3xl p-8 flex items-center h-44 text-neutral-600 tracking-tight text-lg font-medium">
                    Prévenir l'installation et/ou soigner les troubles psychopathologiques ou les troubles du développement chez le nourrisson et le jeune enfant
                </div>
            </div>
            <div class="w-full flex justify-center mt-16">
                <a :href="route('offer')" class="font-averia inline-flex justify-center items-center text-center h-20 p-5 font-semibold tracking-tight text-2xl text-white bg-neutral-900 hover:bg-neutral-800 focus:bg-neutral-800 rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200">
                    Découvrir notre offre de soins
                </a>
            </div>
        </div>
    </GuestLayout>
</template>
