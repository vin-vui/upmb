<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
</script>

<template>
    <GuestLayout title="Notre Équipe">
        <div id="section-one" class="relative text-3xl sm:text-6xl -mb-6 ml-4 mt-8 mr-3 font-averia">Une équipe<span class="bg-accent rounded-lg px-4 inline-block text-neutral-100">pluridisciplinaire</span></div>
        <div class="md:p-4 p-2 rounded-3xl border-2 border-accent">
            <div class="relative">
                <div class="relative bg-white rounded-2xl py-4 lg:py-10 px-4 lg:px-10">
                    <div class="flex flex-wrap">
                        <div class="w-full mt-4 lg:mt-0">
                            <img class="rounded-3xl" src="https://images.unsplash.com/photo-1624555130296-e551faf8969b?q=80&w=2021&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="team">
                        </div>
                        <div class="mt-4">
                            <p class="font-heading text-neutral-600 tracking-tight text-2xl font-semibold mb-8">
                                Pédopsychiatre, Psychologues, Sage-Femme, Puéricultrice, Infirmières, Psychomotricienne, Auxiliaire de puériculture, Cadre de santé, Secrétaire
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
