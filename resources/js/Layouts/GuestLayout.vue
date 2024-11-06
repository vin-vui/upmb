<template>
    <div class="overflow-x-hidden">
        <Head :title="title" />
        <div class="min-h-screen">
            <header class="px-10 lg:px-10">
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
                                class="font-averia inline-flex justify-center items-center text-center p-2 font-semibold tracking-tight text-lg focus:text-neutral-900 border border-transparent rounded-lg focus:ring-4 focus:ring-transparent transition duration-200">Accueil</a>
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
                            <ContactButton />
                        </div>
                    </div>
                </nav>
            </header>
            <main class="">
                <slot />
            </main>
            <Footer />
            <Notice />
            <button
                v-if="showScrollButton"
                @click="scrollToTop"
                class="fixed bottom-12 right-12 btn-primary transition-all duration-1000 hover:-translate-y-2 shadow-2xl shadow-primary hover:shadow-secondary size-16 p-4 rounded-full z-50"
            >
            <svg class="size-8" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M10.586 3L4 9.586a2 2 0 0 0-.434 2.18l.068.145A2 2 0 0 0 5.414 13H8v2a1 1 0 0 0 1 1h6l.117-.007A1 1 0 0 0 16 15l-.001-2h2.587A2 2 0 0 0 20 9.586L13.414 3a2 2 0 0 0-2.828 0M15 20a1 1 0 0 1 .117 1.993L15 22H9a1 1 0 0 1-.117-1.993L9 20zm0-3a1 1 0 0 1 .117 1.993L15 19H9a1 1 0 0 1-.117-1.993L9 17z"/></svg>
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

    defineProps({
        title: String,
    });

    const showScrollButton = ref(false);
    const showingNavigationDropdown = ref(false);

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
