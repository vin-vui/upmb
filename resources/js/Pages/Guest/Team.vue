<template>
    <GuestLayout title="Notre Équipe">
        <section class="-mt-32 pb-32 bg-[radial-gradient(ellipse_at_bottom_right,_var(--tw-gradient-stops))] from-accent/30 to-primary/40 background-animate overflow-hidden">
            <div class="container mx-auto px-4 pt-36 md:pt-64 pb-36">
                <h1 class="h2 text-center">{{ section.title }}</h1>
                <p class="text-center mb-20" v-html=section.paragraph></p>
                <div class="flex flex-wrap max-w-6xl mx-auto">
                    <div v-for="member in members" class="w-full md:w-1/2 xl:w-1/3 p-7">
                        <div class="p-1 bordered-card transform hover:-translate-y-3 transition ease-out duration-1000">
                            <div class="p-16 bg-white rounded-3xl ">
                                <img class="mb-11 mx-auto rounded-3xl" :src=member.image alt="">
                                <h3 class="text-center mb-1 font-heading font-bold text-gray-900 text-lg">{{ member.name + ' ' + member.lastname }}</h3>
                                <p class="text-center text-sm text-gray-500">{{ member.function }}</p>
                                <p v-if=member.description class="text-base mt-8">{{ member.description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';

const props = defineProps({
    members: Object,
    section: Object,
});
</script>
