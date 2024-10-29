<template>
<section class="-mt-32 bg-[radial-gradient(ellipse_at_bottom_right,_var(--tw-gradient-stops))] from-accent/30 to-primary/40 background-animate overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center -m-6 pt-64 pb-36">
            <div class="w-full lg:w-1/2 p-6">
                <div class="lg:max-w-xl">
                    <h1 class="h1 -rotate-1">Unité d’Accueil Père-Mère-Bébé</h1>
                    <p class="mb-9 text-gray-600">
                        Un lieu d'échange et de parole <strong>avec ou sans rendez-vous</strong>, pour les futurs
                        parents et les parents, de la grossesse jusqu’aux <strong>24 mois</strong> de l’enfant.
                    </p>
                    <ContactButton />
                </div>
            </div>
            <div class="w-full lg:w-1/2 p-6 rounded-3xl">
                <img class="block mx-auto rounded-3xl rotate-2 shadow-accent/80 shadow-2xl" src="/images/illu_1.webp" alt="Illustration d'un téléphone jouet">
            </div>
        </div>
    </div>
</section>
</template>

<script setup>
import ContactButton from '@/Components/ContactButton.vue';

// no script setup here
</script>
