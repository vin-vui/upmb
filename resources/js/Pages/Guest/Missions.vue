<template>
    <GuestLayout title="Nos missions">
        <section class="mt-12 mb-32 pb-24 px-4 container mx-auto relative isolate">
            <div class="flex flex-wrap justify-between items-center ">
                <div class="w-full lg:w-1/2 rounded-3xl">
                    <div class="relative font-semibold font-heading">
                        <h2 class="h2 text-accent">{{ mission.title }}</h2>
                        <p v-html=mission.paragraph></p>
                    </div>
                    <div class="rounded-3xl border border-accent/50 mt-8">
                        <img class="rounded-3xl shadow-xl shadow-accent/60 -rotate-2 object-cover aspect-square"
                            :src=mission.image
                            alt="Illustration d'une docteure qui prend soin d'une mère et son enfant">
                    </div>
                </div>
                <div class="pl-8 w-full lg:max-w-xl lg:w-1/2 grid grid-cols-1 md:grid-cols-1 gap-4 cursor-default mt-8">
                    <div v-for="mission in mission.items" class="bordered-card">
                        <div class="bg-white rounded-3xl md:py-8 py-4 md:px-4 px-2 flex items-center h-full  gap-4">
                            <div class="w-6">
                                <svg class="size-6 text-primary" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7t-.7-.275t-.7.275zM12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22"/></svg>
                            </div>
                            <p class="text-neutral-600 tracking-tight text-lg font-medium text-balance">{{ mission.content }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-16 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl" aria-hidden="true">
                <div class="aspect-[1318/752] w-[82.375rem] flex-none bg-gradient-to-r from-primary to-secondary opacity-25" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)" />
            </div>
        </section>
    </GuestLayout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';

const props = defineProps({
    mission: Array,
});
</script>
