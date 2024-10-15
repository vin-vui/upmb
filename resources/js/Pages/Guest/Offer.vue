<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
</script>

<template>
    <GuestLayout title="Notre offre de soins">

        <!-- Offre de soins -->
        <div class="bg-white rounded-2xl py-4 lg:py-10 px-4 lg:px-10">
            <div class="flex flex-wrap -m-4">
                <div class="w-full md:w-1/3 p-4">
                    <div class="relative h-56 md:h-full">
                        <img class="absolute inset-0 rounded-3xl w-full h-full object-cover"
                            src="https://images.unsplash.com/photo-1582045559104-e176d91c6dbf?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                </div>
                <div class="w-full md:w-2/3 p-4">
                    <div class="h-full py-18 lg:py-32 pl-4 lg:pl-18 pr-4 lg:pr-16">
                        <h1 class="font-heading font-averia mb-12 font-semibold text-6xl sm:text-9xl xl:text-11xl max-w-7xl">
                            <span class="relative z-10">Offre de</span>
                            <span class="bg-primary rounded-lg px-4 inline-block">soins</span>
                        </h1>
                        <p class="font-heading text-neutral-600 tracking-tight text-2xl font-semibold mb-8">
                            L’accueil parents bébé est ouvert aux parents et à leur bébé, dès la sortie de la maternité ou de néonatologie. Dans ce lieu il est possible de parler des questions ou des inquiétudes qui peuvent surgir à la naissance d’un enfant ou dans les mois qui suivent (allaitement, sevrage, pleurs, problèmes de sommeil, difficultés d’alimentation, fatigue, tristesse…)
                        </p>
                        <div class="flex justify-around mb-12">
                            <div class="">
                                <a href="#section-one" class="font-averia inline-flex justify-center items-center text-center h-16 p-5 font-semibold tracking-tight text-xl hover:text-white focus:text-white bg-transparent hover:bg-accent focus:bg-accent border border-accent rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200">
                                    Les groupes de parole
                                </a>
                            </div>
                            <div class="">
                                <a href="#section-two" class="font-averia inline-flex justify-center items-center text-center h-16 p-5 font-semibold tracking-tight text-xl hover:text-white focus:text-white bg-transparent hover:bg-primary focus:bg-primary border border-primary rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200">
                                    L’hôpital de jour Mère-Bébé
                                </a>
                            </div>
                            <div class="">
                                <a href="#section-three" class="font-averia inline-flex justify-center items-center text-center h-16 p-5 font-semibold tracking-tight text-xl hover:text-white focus:text-white bg-transparent hover:bg-secondary focus:bg-secondary border border-secondary rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200">
                                    Les consultations périnatales
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-2">
                            <div class="w-full p-2">
                                <div class="rounded-3xl p-8 bg-secondary shadow-xl h-full relative overflow-hidden rotate-1">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold max-w-xs flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z"
                                                        fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Horaires d’ouverture
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium">
                                            Mardi, jeudi, vendredi de 9 à 11h, le mercredi de 14 à 16 h.
                                            Accueil avec ou sans rendez-vous (mais il préférable de prévenir de votre venue particulièrement si vous venez pour la première fois).
                                            A la demande spontané d’un parent ou sur orientation professionnel, pour les parents et les enfants jusqu’à deux ans.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Les groupes de parole -->
        <div id="section-one" class="relative text-3xl sm:text-6xl -mb-6 ml-4 mt-16 mr-3 font-averia">Les groupes de<span class="bg-accent rounded-lg px-4 inline-block text-neutral-100">parole</span></div>
        <div class="md:p-4 p-2 rounded-3xl border-2 border-accent">
            <div class="relative">
                <!-- Femmes enceintes -->
                <div class="relative bg-white rounded-2xl py-4 lg:py-10 px-4 lg:px-10">
                    <div class="flex flex-wrap">
                        <div class="relative font-semibold font-heading">
                            <div class="text-lg sm:text-xl mr-3">Pour les femmes enceintes</div>
                            <div class="text-xl sm:text-3xl mr-3 font-averia">Pour<span class="bg-primary rounded-lg px-4 inline-block">parler</span>de la grossesse et de ses préoccupations</div>
                            <div class="grid grid-cols-1 md:grid-cols-6 gap-4 mt-8">
                                <div class="md:col-span-2 row-span-3 rounded-3xl border">
                                    <img class="rounded-3xl w-full h-full object-cover" src="https://images.unsplash.com/photo-1585010873004-923f9a54e54e?q=80&w=1769&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                </div>
                                <div class="flex items-center md:col-span-3 p-8 rounded-3xl border-2 border-secondary -rotate-1">
                                    <p class="text-neutral-600 tracking-tight text-lg font-medium text-balance">
                                        Modifications du corps, questions sur l’accouchement, la douleur, la césarienne, la péridurale, modes d’alimentation, développement du bébé
                                    </p>
                                </div>
                                <div class="flex items-center p-8 rounded-3xl border-2 border-accent rotate-1">
                                    <p class="text-neutral-600 tracking-tight text-lg font-medium text-balance">
                                        Difficultés psychiques, décalage entre idéal et vécu de la grossesse, anxiété, dépression
                                    </p>
                                </div>
                                <div class="md:col-span-2 flex items-center p-8 rounded-3xl border-2 border-accent rotate-1">
                                    <p class="text-neutral-600 tracking-tight text-lg font-medium text-balance">
                                        Événements inattendus (deuil, séparation, maladie)
                                    </p>
                                </div>
                                <div class="md:col-span-2 flex items-center p-8 rounded-3xl border-2 border-primary">
                                    <p class="text-neutral-600 tracking-tight text-lg font-medium text-balance">
                                        Contexte singulier (solitude, problèmes  médicaux, PMA, problèmes de couple…)
                                    </p>
                                </div>
                                <div class="md:col-span-4 flex items-center p-8 rounded-3xl bg-secondary shadow-xl">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z"
                                                        fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Accueil avec ou sans rendez-vous
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium text-balance">
                                        Lundi de 15h30 à 16h 30 <br>
                                        Jeudi de 13 à 14h <br>
                                        En petit groupe, accessible directement ou sur les conseils d’un professionnel <br>
                                        (sage- femme, gynécologue, généraliste, PMI, pédiatre, psychologie, psychiatre, crèche…)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Futurs pères -->
                <div class="relative bg-white rounded-2xl py-4 lg:py-10 px-4 lg:px-10 mt-8">
                    <div class="flex flex-wrap">
                        <div class="relative font-semibold font-heading">
                            <div class="text-lg sm:text-xl mr-3">Pour les pères et futurs pères</div>
                            <div class="text-xl sm:text-3xl mr-3 font-averia">Pour<span class="bg-primary rounded-lg px-4 inline-block">évoquer</span>les préoccupations qui accompagnent leur rôle de père</div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                                <div class="flex items-start p-8 rounded-3xl border-2 border-primary">
                                    <p class="text-neutral-600 tracking-tight text-lg font-medium">
                                        Une psychologue et une infirmière  de l’équipe accueillent les pères ou futurs pères du début de la grossesse de leur conjointe, jusqu’aux deux ans de l’enfant, pour évoquer les préoccupations qui accompagnent leur rôle et préoccupations de père : <br>
                                        • difficultés psychiques (décalage entre le vécu imaginaire et la réalité de l’arrivée de l’enfant) <br>
                                        • événements inattendus (deuil, séparation,, maladie…) <br>
                                        • contexte singulier de la grossesse (solitude, problèmes médicaux, problèmes de couple, PMA…)
                                    </p>
                                </div>
                                <div class="flex items-start p-8 rounded-3xl border-2 border-accent">
                                    <p class="text-neutral-600 tracking-tight text-lg font-medium">
                                        C’est un temps collectif où les hommes peuvent partager leurs expériences et leurs inquiétudes à un moment commun de leur vie. Toutes les pères, peuvent participer à cet accueil, à leur initiative ou sur les conseils d’un professionnel (sage-femme, gynécologue, généraliste, PMI, pédiatres, psychologues, psychiatres, crèches…
                                    </p>
                                </div>
                                <div class="row-span-2 rounded-3xl border h-full rotate-2 bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1549068294-04a001ee0638?q=80&w=1877&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')]">
                                    &nbsp;
                                </div>
                                <div class="md:col-span-2 flex items-center p-8 rounded-3xl bg-secondary shadow-xl -rotate-1">
                                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewbox="0 0 12 12" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z"
                                                        fill="#19191B"></path>
                                                </svg>
                                            </div>
                                            Accueil avec ou sans rendez-vous
                                        </div>
                                        <p class="text-neutral-100 tracking-tight text-lg font-medium">
                                            Un lundi par mois de 18 à 19H. <br>
                                            Dates nous contacter
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- L’hôpital de jour Mère-Bébé -->
        <div id="section-two" class="relative text-3xl sm:text-6xl -mb-6 ml-4 mt-8 mr-3 font-averia">L’hôpital de jour<span class="bg-primary rounded-lg px-4 inline-block">Mère-Bébé</span></div>
        <div class="md:p-4 p-2 rounded-3xl border-2 border-primary">
            <div class="bg-white p-8 rounded-3xl grid grid-cols-3 gap-4">
                <div class="row-span-2 rounded-3xl border max-h-[29rem] -rotate-1">
                    <img class="rounded-3xl w-full h-full object-cover" src="https://images.unsplash.com/photo-1581998392741-67879e0ef04a?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                <div class="col-span-2 border-2 border-accent p-8 rounded-3xl flex items-center">
                    <p class="text-neutral-600 tracking-tight text-lg font-medium">
                        Ce temps d’accueil permet de travailler les interactions, le lien et la séparation mère-bébé à travers différents temps :
                        un étayage des soins quotidiens ( bains, change, repas, portage…),
                        des médiations thérapeutiques centrées sur l’instauration  des premiers jeux,
                        des médiations suscitant la créativité des mères,
                        des ateliers d’éveils corporels ou sensoriels avec le bébé, des séances de travail corporel avec les mères, des temps individuels avec la mère et /ou le bébé.
                    </p>
                </div>
                <div class="col-span-2 flex items-center p-8 rounded-3xl bg-secondary shadow-xl rotate-1">
                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                </svg>
                            </div>
                            Accueil sur indication médicale
                        </div>
                        <p class="text-neutral-100 tracking-tight text-lg font-medium">
                            Pour la mère et son enfant jusqu’au trois ans de ce dernier.
                            Hôpital de jour ouvert sur cinq demi-journées par semaine sur quatre heures comprenant un repas thérapeutique.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Les consultations périnatales -->
        <div id="section-three" class="relative text-3xl sm:text-6xl -mb-6 ml-4 mt-8 mr-3 font-averia">Les consultations<span class="bg-secondary rounded-lg px-4 inline-block">périnatales</span></div>
        <div class="md:p-4 p-2 rounded-3xl border-2 border-secondary">
            <div class="bg-white p-8 rounded-3xl grid grid-cols-3 gap-4">
                <div class="col-span-2 border-2 border-accent p-8 rounded-3xl flex items-center">
                    <p class="text-neutral-600 tracking-tight text-lg font-medium">
                        Les consultations périnatales auprès d’un pédopsychiatre ou psychologue offrent un espace d'écoute et d'accompagnement pour les parents ou futurs parents qui traversent des moments difficiles autour de la périnatalité. Ces consultations permettent de parler de diverses problématiques, telles que :
                        Les fausses couches, L'infertilité, La grossesse à risque, La dépression post-partum, Les difficultés dans le lien parent-enfant.
                        Ces consultations permettent d’offrir un soutien adapté et bienveillant, favorisant un mieux-être pour la famille et aidant à construire un environnement émotionnel sain pour l’enfant dès le début de sa vie.
                    </p>
                </div>
                <div class="row-span-2 rounded-3xl border max-h-[29rem] rotate-1">
                    <img class="rounded-3xl w-full h-full object-cover" src="https://images.unsplash.com/photo-1489760176169-fd3d32805239?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                <div class="col-span-2 flex items-center p-8 rounded-3xl bg-secondary shadow-xl -rotate-1">
                    <div class="flex flex-col items-start justify-between gap-4 h-full relative z-20">
                        <div class="font-heading font-averia text-3xl tracking-tight font-semibold flex items-center gap-2">
                            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1L5.2825 1.6965L9.086 5.5H1V6.5H9.086L5.293 10.293L6 11L11 6L6 1Z" fill="#19191B"></path>
                                </svg>
                            </div>
                            Accueil sur indication médicale
                        </div>
                        <p class="text-neutral-100 tracking-tight text-lg font-medium">
                            Pour la mère et son enfant jusqu’au trois ans de ce dernier.
                            Hôpital de jour ouvert sur cinq demi-journées par semaine sur quatre heures comprenant un repas thérapeutique.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </GuestLayout>
</template>
