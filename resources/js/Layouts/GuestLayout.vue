<template>
    <div class="overflow-x-hidden">
        <Head :title="title" />
        <div class="min-h-screen">

            <header class="">
                <nav class="mx-auto flex items-center justify-between p-6 lg:py-0 lg:px-8" aria-label="Global">
                    <a href="#" class="flex items-center gap-2">
                        <img class="xl:h-24 h-12" src="/images/logo.png" alt="Logo de l'unité père mère bébé">
                        <span class="font-annie font-bold xl:text-5xl md:text-3xl text-xl">Unité Père Mère Bébé</span>
                    </a>
                    <div class="flex lg:hidden">
                        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" @click="mobileMenuOpen = true">
                            <span class="sr-only">Open main menu</span>
                            <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:flex lg:gap-x-12">
                        <a v-for="item in navigation" :key="item.name" :href="item.href"
                            :class="{ 'bg-accent text-neutral-100 rotate-2': item.current }"
                            class="font-averia inline-flex justify-center items-center text-center p-2 font-semibold tracking-tight text-lg focus:text-neutral-900 border border-transparent rounded-lg focus:ring-4 focus:ring-transparent transition duration-200">{{ item.name }}</a>
                        <ContactButton />
                    </div>
                </nav>
                <Dialog class="lg:hidden" @close="mobileMenuOpen = false" :open="mobileMenuOpen">
                    <div class="fixed inset-0 z-10" />
                    <DialogPanel class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm ">
                        <div class="flex items-center justify-between">
                            <a href="#" class="flex items-center gap-2">
                                <img class="xl:h-24 h-12" src="/images/logo.png" alt="Logo de l'unité père mère bébé">
                                <span class="sr-only">Unité Père Mère Bébé</span>
                            </a>
                            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="mobileMenuOpen = false">
                                <span class="sr-only">Close menu</span>
                                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 15 15"><path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27"/></svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-500/10">
                                <div class="space-y-2 py-6 grid grid-cols-1">
                                    <a v-for="item in navigation" :key="item.name" :href="item.href"
                                        :class="{ 'bg-accent text-neutral-100': item.current }"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-gray-900 hover:bg-gray-50 font-averia font-semibold tracking-tight text-lg">{{ item.name }}</a>
                                </div>
                                <div class="py-6">
                                    <ContactButton />
                                </div>
                            </div>
                        </div>
                    </DialogPanel>
                </Dialog>
            </header>

            <main class="">
                <slot />
            </main>

            <Footer />

            <Notice />

            <button v-if="showScrollButton" @click="scrollToTop" class="fixed lg:bottom-12 lg:right-12 bottom-4 right-4 btn-primary transition-all duration-1000 hover:-translate-y-2 shadow-2xl shadow-primary hover:shadow-secondary md:size-16 md:p-4 p-2 rounded-full z-50">
                <svg class="md:size-8 size-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M10.586 3L4 9.586a2 2 0 0 0-.434 2.18l.068.145A2 2 0 0 0 5.414 13H8v2a1 1 0 0 0 1 1h6l.117-.007A1 1 0 0 0 16 15l-.001-2h2.587A2 2 0 0 0 20 9.586L13.414 3a2 2 0 0 0-2.828 0M15 20a1 1 0 0 1 .117 1.993L15 22H9a1 1 0 0 1-.117-1.993L9 20zm0-3a1 1 0 0 1 .117 1.993L15 19H9a1 1 0 0 1-.117-1.993L9 17z"/></svg>
            </button>
        </div>
    </div>
</template>

<script setup>
    import { ref, onMounted, onUnmounted } from 'vue';
    import { Head } from '@inertiajs/vue3';
    import ContactButton from '@/Components/ContactButton.vue';
    import Footer from '@/Pages/Guest/_Footer.vue';
    import Notice from '@/Pages/Guest/_Notice.vue';
    import { Dialog, DialogPanel } from '@headlessui/vue'

    defineProps({
        title: String,
    });

    const showScrollButton = ref(false);
    const mobileMenuOpen = ref(false)
    const navigation = [
        { name: 'Accueil',          href: route('welcome'), current: route().current('welcome') },
        { name: 'Offre de soins',   href: route('offer'),   current: route().current('offer') },
        { name: 'FAQ',              href: route('faq'),     current: route().current('faq') },
    ]

    const handleScroll = () => {
        showScrollButton.value = window.scrollY > 300;
    };
    const scrollToTop = () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth',
        });
    };
    onMounted(() => {
        window.addEventListener('scroll', handleScroll);
    });
    onUnmounted(() => {
        window.removeEventListener('scroll', handleScroll);
    });
</script>
