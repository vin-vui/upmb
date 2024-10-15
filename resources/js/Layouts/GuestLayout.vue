<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';
import Hero from '@/Pages/Guest/_Hero.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <Head :title="title" />
        <!-- <Hero /> -->
        <div class="min-h-screen bg-gradient-to-br from-primary to-secondary px-4 pt-6 pb-6 lg:px-20">
            <header class="bg-white px-10 lg:px-10 py-7 lg:py-4 rounded-2xl">
                <nav class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <img class="h-24" src="/images/logo.png" alt="">
                        <span class="font-annie font-bold text-5xl">Unité Père Mère Bébé</span>
                    </div>
                    <div class="">
                        <button @click="showingNavigationDropdown = !showingNavigationDropdown" class="lg:hidden">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </button>
                        <div :class="{ 'hidden': !showingNavigationDropdown }" class="lg:flex lg:items-center lg:space-x-6">
                            <a :href="route('welcome')"
                                :class="{ 'bg-accent text-neutral-100 rotate-2': route().current('welcome') }"
                                class="font-averia inline-flex justify-center items-center text-center p-2 font-semibold tracking-tight text-lg focus:text-neutral-900 border border-transparent rounded-lg focus:ring-4 focus:ring-transparent transition duration-200">Accueil Parents-Bébé</a>
                            <a :href="route('offer')"
                                :class="{ 'bg-accent text-neutral-100 rotate-2': route().current('offer') }"
                                class="font-averia inline-flex justify-center items-center text-center p-2 font-semibold tracking-tight text-lg focus:text-neutral-900 border border-transparent rounded-lg focus:ring-4 focus:ring-transparent transition duration-200">Offre de soins</a>
                            <a :href="route('who')"
                                :class="{ 'bg-accent text-neutral-100 rotate-2': route().current('who') }"
                                class="font-averia inline-flex justify-center items-center text-center p-2 font-semibold tracking-tight text-lg focus:text-neutral-900 border border-transparent rounded-lg focus:ring-4 focus:ring-transparent transition duration-200">Pour Qui ?</a>
                            <a :href="route('team')"
                                :class="{ 'bg-accent text-neutral-100 rotate-2': route().current('team') }"
                                class="font-averia inline-flex justify-center items-center text-center p-2 font-semibold tracking-tight text-lg focus:text-neutral-900 border border-transparent rounded-lg focus:ring-4 focus:ring-transparent transition duration-200">Notre équipe</a>
                            <a :href="route('faq')"
                                :class="{ 'bg-accent text-neutral-100 rotate-2': route().current('faq') }"
                                class="font-averia inline-flex justify-center items-center text-center p-2 font-semibold tracking-tight text-lg focus:text-neutral-900 border border-transparent rounded-lg focus:ring-4 focus:ring-transparent transition duration-200">FAQ</a>
                            <a :href="route('contact')" class="font-averia inline-flex justify-center items-center text-center h-16 p-5 font-semibold tracking-tight text-xl hover:text-white focus:text-white bg-transparent hover:bg-neutral-900 focus:bg-neutral-900 border border-neutral-900 rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200">Nous contacter</a>
                        </div>

                    </div>
                </nav>
            </header>
            <main class="flex flex-col gap-6 my-6">
                <slot />
            </main>
            <footer class="">
                <div class="relative bg-white px-10 py-8 lg:py-4 rounded-2xl">
                    <p>&copy; 2024 Unité Père Mère Bébé, CH Novillars</p>
                </div>
            </footer>
        </div>
    </div>
</template>
