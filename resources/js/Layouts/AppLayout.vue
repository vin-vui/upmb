<template>
<div>

    <Head :title="title" />

    <Banner />

    <div class="min-h-screen bg-gradient-to-br from-primary to-secondary">
        <!-- Navigation -->
        <nav class="bg-white z-40 shadow-sm">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <Link :href="route('welcome')">
                            <img class="h-16" src="/images/logo.png" alt="">
                        </Link>
                    </div>
                    <!-- Navigation Links -->
                    <div class="flex space-x-4 sm:-my-px sm:ms-10">
                        <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Tableau de bord
                        </NavLink>
                        <NavLink :href="route('notices.index')" :active="route().current('notices.*')">
                            Annonces
                        </NavLink>
                        <NavLink :href="route('questions.index')" :active="route().current('questions.*')">
                            FAQ
                        </NavLink>
                        <NavLink :href="route('partners.index')" :active="route().current('partners.*')">
                            Partenaires
                        </NavLink>
                        <NavLink :href="route('links.index')" :active="route().current('links.*')">
                            Liens Utiles
                        </NavLink>
                        <Menu as="div" class="relative inline-block text-left z-50">
                            <div>
                                <MenuButton class="inline-flex items-center w-full justify-center py-2 px-4 border-b-2 border-transparent rounded-3xl font-bold leading-5 text-gray-500 hover:text-gray-700 capitalize hover:border-gray-300 focus:outline-none font-annie focus:text-gray-700 text-xl focus:border-gray-300 transition duration-150 ease-in-out">
                                    Sections du site
                                    <svg class="size-6 ml-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9l6 6l6-6"/></svg>
                                </MenuButton>
                            </div>
                            <transition enter-active-class="transition duration-100 ease-out" enter-from-class="transform scale-95 opacity-0" enter-to-class="transform scale-100 opacity-100" leave-active-class="transition duration-75 ease-in" leave-from-class="transform scale-100 opacity-100" leave-to-class="transform scale-95 opacity-0">
                                <MenuItems class="absolute right-0 mt-2 origin-top-right rounded-3xl bg-white shadow-lg ring-1 ring-accent focus:outline-none">
                                <div class="px-3 py-4">
                                    <MenuItem v-slot="{ active }">
                                        <NavLink class="w-full justify-center" :href="route('sections.welcome')" :active="route().current('sections.*')">
                                            accueil
                                        </NavLink>
                                    </MenuItem>
                                    <MenuItem v-slot="{ active }">
                                        <NavLink class="w-full justify-center" :href="route('sections.welcome')" :active="route().current('sections.*')">
                                            offre de soin
                                        </NavLink>
                                    </MenuItem>
                                    <MenuItem v-slot="{ active }">
                                        <NavLink class="w-full justify-center" :href="route('sections.welcome')" :active="route().current('sections.*')">
                                            pour qui ?
                                        </NavLink>
                                    </MenuItem>
                                    <MenuItem v-slot="{ active }">
                                        <NavLink class="w-full justify-center" :href="route('sections.welcome')" :active="route().current('sections.*')">
                                            notre équipe
                                        </NavLink>
                                    </MenuItem>
                                </div>
                                </MenuItems>
                            </transition>
                        </Menu>
                    </div>
                    <!-- Profile and Logout -->
                    <div class="flex items-center gap-4 border border-primary rounded-full">
                        <a class="btn-primary" :href="route('profile.show')">Profil</a>
                        <form class="rounded-full p-2 cursor-pointer hover:bg-accent hover:text-neutral-50 transition-all duration-200" @click="logout">
                            <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 12q-.425 0-.712-.288T11 11V3q0-.425.288-.712T12 2t.713.288T13 3v8q0 .425-.288.713T12 12m0 9q-1.875 0-3.512-.712t-2.85-1.925t-1.925-2.85T3 12q0-1.525.5-2.963T4.95 6.4q.275-.35.7-.337t.75.337q.275.275.25.675t-.275.75Q5.7 8.725 5.35 9.8T5 12q0 2.925 2.038 4.963T12 19t4.963-2.037T19 12q0-1.15-.337-2.238T17.6 7.775q-.25-.325-.275-.712t.25-.663q.3-.3.725-.312t.7.312q.975 1.2 1.488 2.625T21 12q0 1.875-.712 3.513t-1.925 2.85t-2.85 1.925T12 21" />
                            </svg>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        <div class="">
            <header class="bg-white shadow-xl sticky top-0 z-30 ">
                <div class="mx-auto max-w-7xl px-6 lg:px-8 py-2 flex h-16 items-center justify-between">
                    <h2 class="font-averia text-2xl font-bold capitalize leading-10 tracking-tight text-gray-900">{{ title }}</h2>
                    <button v-if="button" @click="openModal" class="btn-accent">
                        {{ button }}
                    </button>
                </div>
            </header>

            <!-- Page Content -->
            <main class="mx-auto max-w-7xl px-6 lg:px-8 py-24 sm:py-32 lg:py-8 z-30">
                <slot />
            </main>
        </div>
    </div>
</div>
</template>

<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import NavLink from '@/Components/NavLink.vue';
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'

defineProps({
    title: String,
    button: String,
    openModal: {
        type: Function,
        default: () => { },
    },
});

const logout = () => {
    router.post(route('logout'));
};
</script>
