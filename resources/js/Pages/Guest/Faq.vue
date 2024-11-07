<template>
    <GuestLayout title="FAQ">
        <div class="-mt-32 bg-[radial-gradient(ellipse_at_bottom_right,_var(--tw-gradient-stops))] from-accent/30 to-primary/40 background-animate overflow-hidden">
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
                                class="accordion-item bg-white border accordion-item-active:scale-[1.05] accordion-item-active:mb-3 transition-transform ease-in duration-300"
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
        </div>
    </GuestLayout>
</template>

<script>
import ContactButton from '@/Components/ContactButton.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';

export default {
    components: {
        GuestLayout, ContactButton
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
