<template>
    <GuestLayout title="FAQ">
        <section class="-mt-32 pb-32 bg-[radial-gradient(ellipse_at_bottom_right,_var(--tw-gradient-stops))] from-accent/30 to-primary/40 background-animate overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-3 gap-8 -m-6 pt-64 pb-36">
                    <div class="">
                        <h2 class="h2">Foire aux Questions</h2>
                        <p class="mb-8">Vous ne trouvez pas la réponse que vous cherchez ? Contactez notre équipe.</p>
                        <ContactButton />
                    </div>
                    <div class="col-span-2">
                        <div class="accordion accordion-shadow max-w-lg">
                            <div
                                v-for="(faq, index) in questions"
                                :key="index"
                                :id="'faq-popout-' + index"
                                class="accordion-item bg-white border accordion-item-active:scale-[1.05] accordion-item-active:mb-3 accordion-item-active:shadow-xl accordion-item-active:shadow-accent/50 transition-transform ease-in duration-300"
                                :class="{ 'active': index === 0 }"
                            >
                                <button
                                    class="accordion-toggle inline-flex items-center gap-x-4 px-5 py-4 font-averia text-xl font-bold leading-10 tracking-tight text-gray-900"
                                    :aria-controls="'faq-popout-collapse-' + index"
                                    :aria-expanded="index === 0"
                                >
                                    <span class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                                    <span class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                                    {{ faq.question }}
                                </button>
                                <div
                                    :id="'faq-popout-collapse-' + index"
                                    class="accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    :class="{ 'hidden': index !== 0 }"
                                    :aria-labelledby="'faq-popout-' + index"
                                    role="region"
                                >
                                    <div class="px-5 pb-4">
                                        <p class="text-neutral-600 tracking-tight text-lg font-medium text-balance" v-html="faq.answer"></p>
                                    </div>
                                    <div v-if="faq.link" class="flex items-center justify-center gap-1 mb-4">
                                        <svg class="text-accent size-3" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 3h-6.75M21 3v6.75M21 3l-8.25 8.25M9.4 3c-2.24 0-3.36 0-4.216.436a4 4 0 0 0-1.748 1.748C3 6.04 3 7.16 3 9.4v5.2c0 2.24 0 3.36.436 4.216a4 4 0 0 0 1.748 1.748C6.04 21 7.16 21 9.4 21h5.2c2.24 0 3.36 0 4.216-.436a4 4 0 0 0 1.748-1.748C21 17.96 21 16.84 21 14.6v-1.1"/>
                                        </svg>
                                        <a :href="faq.link" :target="linkTarget(faq.link)" class="text-accent underline">lien</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <ShapeTopSecondary />
        <section class="overflow-hidden bg-secondary pt-24 pb-48">
            <div class="mx-auto container md:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:grid-cols-3 lg:items-start">
                    <div class="px-6 lg:px-0 lg:pr-4 lg:pt-4">
                        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-lg">
                            <h2 class="h2 text-white">Toutes nos vidéos</h2>
                            <p class="text-neutral-100">
                                Découvrez notre collection de vidéos inspirantes, éducatives et informatives. Que vous cherchiez à en savoir plus sur nos services, à explorer des témoignages ou à approfondir des sujets spécifiques, cette section rassemble toutes nos vidéos en un seul endroit pour un accès facile.
                            </p>
                        </div>
                    </div>
                    <div class="sm:px-6 lg:px-0 lg:col-span-2">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="relative isolate overflow-hidden bg-accent px-6 pt-8 sm:mx-auto sm:max-w-2xl sm:rounded-3xl sm:pl-8 sm:pr-0 sm:pt-8 lg:mx-0 shadow-xl shadow-accent/50">
                                <div class="absolute -inset-y-px -left-3 -z-10 w-full origin-bottom-left skew-x-[-30deg] bg-indigo-100 opacity-20 ring-1 ring-inset ring-white" aria-hidden="true" />
                                <div class="mx-auto max-w-2xl sm:mx-0 sm:max-w-none">
                                    <video class="w-full rounded-tl-3xl" controls poster="/images/illu_unite.webp" width="640" height="360">
                                        <source src="/videos/presentation.mp4" type="video/mp4">
                                        Votre navigateur ne supporte pas la balise vidéo.
                                    </video>
                                </div>
                                <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 sm:rounded-3xl" aria-hidden="true" />
                            </div>
                            <div class="relative isolate overflow-hidden bg-accent px-6 pt-8 sm:mx-auto sm:max-w-2xl sm:rounded-3xl sm:pl-8 sm:pr-0 sm:pt-8 lg:mx-0 shadow-xl shadow-accent/50">
                                <div class="absolute -inset-y-px -left-3 -z-10 w-full origin-bottom-left skew-x-[-30deg] bg-indigo-100 opacity-20 ring-1 ring-inset ring-white" aria-hidden="true" />
                                <div class="mx-auto max-w-2xl sm:mx-0 sm:max-w-none">
                                    <video class="w-full rounded-tl-3xl" controls poster="/images/illu_papa.webp" width="640" height="360" >
                                        <source src="/videos/les_peres.mp4" type="video/mp4">
                                        Votre navigateur ne supporte pas la balise vidéo.
                                    </video>
                                </div>
                                <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 sm:rounded-3xl" aria-hidden="true" />
                            </div>
                            <div class="relative isolate overflow-hidden bg-accent px-6 pt-8 sm:mx-auto sm:max-w-2xl sm:rounded-3xl sm:pl-8 sm:pr-0 sm:pt-8 lg:mx-0 shadow-xl shadow-accent/50">
                                <div class="absolute -inset-y-px -left-3 -z-10 w-full origin-bottom-left skew-x-[-30deg] bg-indigo-100 opacity-20 ring-1 ring-inset ring-white" aria-hidden="true" />
                                <div class="mx-auto max-w-2xl sm:mx-0 sm:max-w-none">
                                    <video class="w-full rounded-tl-3xl" controls poster="/images/illu_groupe.webp" width="640" height="360">
                                        <source src="/videos/groupe.mp4" type="video/mp4">
                                        Votre navigateur ne supporte pas la balise vidéo.
                                    </video>
                                </div>
                                <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 sm:rounded-3xl" aria-hidden="true" />
                            </div>
                            <div class="relative isolate overflow-hidden bg-accent px-6 pt-8 sm:mx-auto sm:max-w-2xl sm:rounded-3xl sm:pl-8 sm:pr-0 sm:pt-8 lg:mx-0 shadow-xl shadow-accent/50">
                                <div class="absolute -inset-y-px -left-3 -z-10 w-full origin-bottom-left skew-x-[-30deg] bg-indigo-100 opacity-20 ring-1 ring-inset ring-white" aria-hidden="true" />
                                <div class="mx-auto max-w-2xl sm:mx-0 sm:max-w-none">
                                    <video class="w-full rounded-tl-3xl" controls poster="/images/illu_temoignages.webp" width="640" height="360">
                                        <source src="/videos/temoignages.mp4" type="video/mp4">
                                        Votre navigateur ne supporte pas la balise vidéo.
                                    </video>
                                </div>
                                <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 sm:rounded-3xl" aria-hidden="true" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>

<script>
import ContactButton from '@/Components/ContactButton.vue';
import ShapeTopSecondary from '@/Components/ShapeTopSecondary.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';

export default {
    components: {
        GuestLayout, ContactButton, ShapeTopSecondary
    },

    props: {
        questions: {
            type: Array,
            required: true,
        },
    },

    mounted() {
        window.HSStaticMethods.autoInit(["accordion"]);
    },

    methods: {
        linkTarget(url) {
            const isExternal = url.startsWith('https://upmb.test') ? false : true;
            return isExternal ? '_blank' : '_self';
        }
    }
}
</script>
