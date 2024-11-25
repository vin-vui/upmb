<template>

    <div v-if="!isContactPage">
        <Contact />
    </div>

    <ShapeTopAccent />

    <footer class="bg-accent">
        <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
            <div class="xl:grid xl:grid-cols-2 xl:gap-8">
                <div class="space-y-8">
                    <div class="flex items-center gap-2">
                        <img class="md:size-24 size-16 object-contain bg-white rounded-full" src="/images/logo.png" alt="">
                        <span class="text-gray-50 font-annie font-bold md:text-3xl text-xl">Unité Père Mère Bébé</span>
                    </div>
                </div>
                <div class="mt-16 grid grid-cols-2 gap-8 xl:mt-0">
                    <div>
                        <h3 class="text-sm/6 font-semibold text-white">Plan du site</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li v-for="item in solutions" :key="item.name">
                                <a :href="item.href" class="text-sm/6 text-gray-50 hover:text-white link link-animated">{{ item.name }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="">
                        <h3 class="text-sm/6 font-semibold text-white">Liens utiles</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li v-for="item in links" :key="item.label">
                                <a :href="item.url" class="text-sm/6 text-gray-50 hover:text-white link link-animated">{{ item.label }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-16 mb-24 border-t border-white/10 pt-8 sm:mt-20 lg:mt-24 md:flex items-center justify-between">
                <p class="text-sm/6 text-gray-50">&copy; 2025 Unité Père Mère Bébé, CH Novillars, Tous droits réservés.</p>
                <p class="text-sm/6 text-gray-50">Conçu et développé avec ❤️ par Vinvui</p>
            </div>
        </div>
    </footer>
</template>

<script>
import Contact from '@/Pages/Guest/_Contact.vue';
import ShapeTopAccent from '@/Components/ShapeTopAccent.vue';

export default {
    components: {
        Contact,
        ShapeTopAccent,
    },
    data() {
        return {
            links: [],
            solutions: [
                { name: 'Accueil', href: route('welcome') },
                { name: 'Offre de soins', href: route('offer') },
                // { name: 'Pour qui ?', href: route('who') },
                // { name: 'Notre équipe', href:route('team') },
                { name: 'FAQ', href: route('faq') },
                { name: 'Nous contacter', href: route('contact') },
                { name: 'Mentions légales', href: '#' },
            ],
        };
    },
    computed: {
        isContactPage() {
            return route().current('contact');
        },
    },
    async mounted() {
        try {
            const response = await axios.get('/get-links');
            this.links = response.data;
        } catch (error) {
            console.error('Erreur lors du chargement des liens :', error);
        };
    },
};
</script>
