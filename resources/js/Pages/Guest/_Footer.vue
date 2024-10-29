<template>
    <div class=" py-24 sm:py-32">
        <div class="relative isolate">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="mx-auto flex max-w-2xl flex-col gap-16 bg-white/5 px-6 py-16 ring-1 ring-white/10 sm:rounded-3xl sm:p-8 lg:mx-0 lg:max-w-none lg:flex-row lg:items-center lg:py-20 xl:gap-x-20 xl:px-20">
                    <img class="h-96 w-full flex-none rounded-2xl object-cover lg:aspect-square lg:h-auto lg:max-w-sm shadow-xl shadow-accent/50 -rotate-2" src="/images/illu_2.webp" alt="" />
                    <div class="w-full flex-auto">
                        <h2 class="h2">Besoin d'un petit coup de fil ?</h2>
                        <p class="mt-6 text-gray-900">Envie de parler ou de venir nous voir ? Notre équipe est là pour vous écouter et répondre à toutes vos questions. Un simple appel peut faire toute la différence !</p>
                        <div class="mt-10 flex">
                            <ContactButton />
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 -top-16 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl" aria-hidden="true">
                <div class="aspect-[1318/752] w-[82.375rem] flex-none bg-gradient-to-r from-primary to-accent opacity-25" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)" />
            </div>
        </div>
    </div>
    <ShapeTopAccent />
    <footer class="bg-accent">
        <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="space-y-8">
                    <div class="flex items-center gap-2">
                        <img class="size-24 object-contain bg-white rounded-full" src="/images/logo.png" alt="">
                        <span class="text-gray-50 font-annie font-bold text-3xl">Unité Père Mère Bébé</span>
                    </div>
                </div>
                <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm/6 font-semibold text-white">Plan du site</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li v-for="item in navigation.solutions" :key="item.name">
                                    <a :href="item.href" class="text-sm/6 text-gray-50 hover:text-white">{{ item.name }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm/6 font-semibold text-white">Liens utiles</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li v-for="item in navigation.support" :key="item.name">
                                    <a :href="item.href" class="text-sm/6 text-gray-50 hover:text-white">{{ item.name }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm/6 font-semibold text-white">Nous contacter</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li v-for="item in navigation.company" :key="item.name">
                                    <a :href="item.href" class="text-sm/6 text-gray-50 hover:text-white">{{ item.name }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 lg:mt-24 flex items-center justify-between">
                <p class="text-sm/6 text-gray-50">&copy; 2025 Unité Père Mère Bébé, CH Novillars, Tous droits réservés.</p>
                <p class="text-sm/6 text-gray-50">Conçu et développé avec ❤️ par Vinvui</p>
            </div>
        </div>
    </footer>
  </template>

<script setup>
import ContactButton from '@/Components/ContactButton.vue';
import ShapeTopAccent from '@/Components/ShapeTopAccent.vue';
import { defineComponent, h } from 'vue'

const navigation = {
    solutions: [
        { name: 'Marketing', href: '#' },
        { name: 'Analytics', href: '#' },
        { name: 'Automation', href: '#' },
        { name: 'Commerce', href: '#' },
        { name: 'Insights', href: '#' },
    ],
    support: [
        { name: 'Submit ticket', href: '#' },
        { name: 'Documentation', href: '#' },
        { name: 'Guides', href: '#' },
    ],
    company: [
        { name: 'About', href: '#' },
        { name: 'Blog', href: '#' },
        { name: 'Jobs', href: '#' },
        { name: 'Press', href: '#' },
    ],
    legal: [
        { name: 'Terms of service', href: '#' },
        { name: 'Privacy policy', href: '#' },
        { name: 'License', href: '#' },
    ],
}
</script>
