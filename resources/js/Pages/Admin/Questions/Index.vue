<template>
<AppLayout title="FAQ" :openModal="openModal" button="ajouter une question">
    <!-- List -->
    <dl class="flex flex-col gap-4" ref="questionsList">
        <div v-for="question in questions" :key="question.id" :data-id="question.id" @click="openModal(question)"
            class="rounded-3xl border-l-4 border-secondary py-6 px-4 bg-white hover:shadow-lg hover:scale-105 cursor-pointer flex items-center justify-between group transition-all duration-200">
            <div>
                <dt class="font-averia text-xl font-bold leading-10 tracking-tight text-gray-900">{{ question.question }}</dt>
                <dd class="mt-2 text-neutral-600 tracking-tight text-lg font-medium" v-html="question.answer"></dd>
                <div v-if="question.link" class="flex items-center gap-1 ml-2 mt-5">
                    <svg class="text-accent size-3" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 3h-6.75M21 3v6.75M21 3l-8.25 8.25M9.4 3c-2.24 0-3.36 0-4.216.436a4 4 0 0 0-1.748 1.748C3 6.04 3 7.16 3 9.4v5.2c0 2.24 0 3.36.436 4.216a4 4 0 0 0 1.748 1.748C6.04 21 7.16 21 9.4 21h5.2c2.24 0 3.36 0 4.216-.436a4 4 0 0 0 1.748-1.748C21 17.96 21 16.84 21 14.6v-1.1"/></svg>
                    <a :href="question.link" class="text-accent underline">lien</a>
                </div>
            </div>
            <div class="flex items-center">
                <div class="hidden group-hover:block btn-accent mr-8">modifier</div>
                <svg class="hidden group-hover:block text-gray-300 cursor-move" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="2"><circle cx="8" cy="4" r="1" transform="rotate(90 8 4)"/><circle cx="16" cy="4" r="1" transform="rotate(90 16 4)"/><circle cx="8" cy="12" r="1" transform="rotate(90 8 12)"/><circle cx="16" cy="12" r="1" transform="rotate(90 16 12)"/><circle cx="8" cy="20" r="1" transform="rotate(90 8 20)"/><circle cx="16" cy="20" r="1" transform="rotate(90 16 20)"/></g></svg>
            </div>
        </div>
    </dl>
    <!-- Modal -->
    <div v-if="showModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50">
        <div class="bg-white p-6 rounded-xl shadow-lg w-1/3">
            <h3 class="modal-heading">{{ isEditing ? 'Modifier la question' : 'Ajouter une question' }}</h3>
            <form @submit.prevent="submitForm" class="flex flex-col gap-4">
                <div class="">
                    <InputLabel value="Question" />
                    <input v-model="form.question" class="input-accent" type="text">
                    <InputError :message="form.errors.question" />
                </div>
                <div class="">
                    <div class="flex items-center justify-between">
                        <InputLabel value="Réponse" />
                        <span class="text-neutral-600 text-sm">Utilisez **mot** pour mettre en gras</span>
                    </div>
                    <textarea v-model="form.answer" class="input-accent" rows="5"></textarea>
                    <InputError :message="form.errors.answer" class="-mt-2" />
                </div>
                <div class="">
                    <InputLabel value="Lien" />
                    <input v-model="form.link" class="input-accent" type="url">
                    <InputError :message="form.errors.link" />
                </div>
                <div class="flex justify-between mt-4">
                    <button v-if="isEditing" type="button" @click="deleteQuestion" class="btn-accent-light">supprimer</button>
                    <div v-else>&nbsp;</div>
                    <div class="flex gap-4">
                        <button type="button" @click="closeModal" class="btn-secondary">annuler</button>
                        <button type="submit" class="btn-primary">{{ isEditing ? 'modifier' : 'ajouter' }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Sortable from 'sortablejs';

export default {
    components: {
        AppLayout,
        InputError,
        InputLabel,
    },
    props: {
        questions: {
            type: Array,
            required: true,
        },
    },
    data() {
        return {
            showModal: false,
            isEditing: false,
            editingQuestionId: null,
            form: this.$inertia.form({
                question: '',
                answer: '',
                link: '',
            }),
        };
    },
    mounted() {
        this.sortable = Sortable.create(this.$refs.questionsList, {
            animation: 200,
            ghostClass: 'ghost',
            onEnd: this.onDragEnd,
        });
        this.convertStrongToAsterisks();
    },
    beforeDestroy() {
        if (this.sortable) {
            this.sortable.destroy();
        }
    },
    methods: {
        formatContent() {
            this.form.answer = this.form.answer.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
        },
        convertStrongToAsterisks() {
            this.form.answer = this.form.answer.replace(/<strong>(.*?)<\/strong>/g, '**$1**');
        },
        openModal(question = null) {
            if (question && typeof question === 'object' && 'id' in question) {
                this.isEditing = true;
                this.editingQuestionId = question.id;
                this.form.question = question.question;
                this.form.answer = question.answer;
                this.form.link = question.link;
                this.convertStrongToAsterisks();
            } else {
                this.isEditing = false;
                this.editingQuestionId = null;
                this.form.reset();
            }
            this.showModal = true;
        },
        closeModal() {
            this.showModal = false;
            this.form.clearErrors();
            this.$emit('closeModal');
        },
        submitForm() {
            this.formatContent();
            if (this.isEditing) {
                this.form.put(route('questions.update', this.editingQuestionId), {
                    preserveState: (page) => Object.keys(page.props.errors).length,
                    onSuccess: () => {
                        this.closeModal();
                        this.$inertia.reload({ only: ['questions'] });
                    },
                });
            } else {
                this.form.post(route('questions.store'), {
                    preserveState: (page) => Object.keys(page.props.errors).length,
                    onSuccess: () => {
                        this.closeModal();
                        this.$inertia.reload({ only: ['questions'] });
                    },
                });
            }
        },
        deleteQuestion() {
            if (confirm('Êtes-vous sûr de vouloir supprimer cette question ?')) {
                this.form.delete(route('questions.destroy', this.editingQuestionId), {
                    preserveState: (page) => Object.keys(page.props.errors).length,
                    onSuccess: () => {
                        this.closeModal();
                        this.$inertia.reload({ only: ['questions'] });
                    },
                });
            }
        },
        onDragEnd(event) {
            // Get ordered ids
            const orderedIds = Array.from(this.$refs.questionsList.children).map((el, index) => {
                const id = el.getAttribute('data-id');
                return {
                    id: parseInt(id),
                    order: index + 1,
                };
            });

            // Update local questions order
            this.questions.sort((a, b) => {
                const indexA = orderedIds.findIndex(item => item.id === a.id);
                const indexB = orderedIds.findIndex(item => item.id === b.id);
                return indexA - indexB;
            });

            // Post new order
            this.$inertia.post(route('questions.reorder'), { orderedIds }, {
                preserveState: true,
            });
        },
    },
};
</script>
