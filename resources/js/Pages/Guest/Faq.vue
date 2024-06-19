<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
const faqs = [
    {
        question: 'Que devrais-je payer ?',
        answer: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.',
    },
    {
        question: 'Dois-je venir avec mon bébé ?',
        answer: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.',
    },
    {
        question: 'Est ce que je peux venir avec mon ou ma conjointe ?',
        answer: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.',
    },
    {
        question: 'Est ce que je peux venir avec mes autres enfants ?',
        answer: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.',
    },
    {
        question: 'Quelle pièce fournir lors du premier RDV ?',
        answer: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.',
    },
]
</script>


<template>
    <GuestLayout title="FAQ">
        <div class="bg-white rounded-2xl p-10">
            <div class="grid grid-cols-3 gap-8">
                <div class="">
                    <h2 class="font-averia text-2xl font-bold leading-10 tracking-tight text-gray-900">Foire aux Questions</h2>
                    <p class="text-neutral-600 tracking-tight text-lg font-medium max-w-xs my-6">
                        Vous ne trouvez pas la réponse que vous cherchez ? Contactez notre équipe.
                    </p>
                    <a :href="route('contact')" class="font-averia inline-flex justify-center items-center text-center h-16 p-5 font-semibold tracking-tight text-xl hover:text-white focus:text-white bg-transparent hover:bg-neutral-900 focus:bg-neutral-900 border border-neutral-900 rounded-lg focus:ring-4 focus:ring-neutral-400 transition duration-200">Nous contacter</a>
                </div>
                <div class="col-span-2">
                    <dl class="flex flex-col gap-8">
                        <div v-for="faq in faqs" :key="faq.question">
                            <dt class="font-averia text-xl font-bold leading-10 tracking-tight text-gray-900">{{ faq.question }}</dt>
                            <dd class="mt-2 text-neutral-600 tracking-tight text-lg font-medium">{{ faq.answer }}</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
