<template>
<AppLayout title="Annonces" :openModal="openModal" button="ajouter une annonce">
    <!-- List -->
    <dl class="flex flex-col gap-4" ref="noticesList">
        <div v-for="notice in notices" :key="notice.id" :data-id="notice.id" @click="openModal(notice)"
            class="rounded-3xl border-l-4 py-6 px-4 bg-white hover:shadow-lg hover:scale-105 cursor-pointer flex items-center justify-between group transition-all duration-200" :class="notice.display ? 'border-secondary' : 'border-accent'">
            <div>
                <dt class="font-averia text-xl font-bold leading-10 tracking-tight text-gray-900">{{ notice.title }}</dt>
                <dd class="">
                    <p class="text-neutral-600 tracking-tight">{{ notice.description }}</p>
                </dd>
            </div>
            <div class="flex items-center">
                <div class="hidden group-hover:block btn-accent mr-8">modifier</div>
            </div>
        </div>
    </dl>

    <!-- Modal -->
    <div v-if="showModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50">
        <div class="bg-white p-6 rounded-xl shadow-lg w-1/3">
            <h3 class="modal-heading">{{ isEditing ? 'Modifier l\'annonce' : 'Ajouter une annonce' }}</h3>
            <form @submit.prevent="submitForm" class="flex flex-col gap-4">
                <div class="">
                    <InputLabel value="Titre" />
                    <input v-model="form.title" class="input-accent" type="text">
                    <InputError :message="form.errors.title" />
                </div>
                <div class="">
                    <InputLabel value="Description" />
                    <textarea v-model="form.description" class="input-accent" rows="5"></textarea>
                    <InputError :message="form.errors.description" class="-mt-2" />
                </div>
                <div class="space-x-2 flex items-center">
                    <InputLabel for="display" value="Publier ?" />
                    <button id="display" type="button"
                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                        :class="form.display ? 'bg-primary' : 'bg-gray-200'" @click="toggleSwitch" role="switch"
                        :aria-checked="!!form.display">
                        <span
                            class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                            :class="form.display ? 'translate-x-5' : 'translate-x-0'">
                            <span
                                class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                :class="form.display ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200'">
                                <svg class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 12 12">
                                    <path d="M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <span
                                class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                :class="form.display ? 'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100'">
                                <svg class="h-3 w-3 text-primary" fill="currentColor" viewBox="0 0 12 12">
                                    <path d="M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z"></path>
                                </svg>
                            </span>
                        </span>
                    </button>
                </div>
                <div class="flex justify-between mt-4">
                    <button v-if="isEditing" type="button" @click="deleteNotice"
                        class="btn-accent-light">supprimer</button>
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

export default {
    components: {
        AppLayout,
        InputError,
        InputLabel,
    },
    props: {
        notices: {
            type: Array,
            required: true,
        },
    },
    data() {
        return {
            showModal: false,
            isEditing: false,
            editingNoticeId: null,
            form: this.$inertia.form({
                title: '',
                description: '',
                display: false,
            }),
        };
    },
    methods: {
        openModal(notice = null) {
            if (notice && typeof notice === 'object' && 'id' in notice) {
                this.isEditing = true;
                this.editingNoticeId = notice.id;
                this.form.title = notice.title;
                this.form.description = notice.description;
                this.form.display = notice.display;
            } else {
                this.isEditing = false;
                this.editingNoticeId = null;
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
            if (this.isEditing) {
                this.form.put(route('notices.update', this.editingNoticeId), {
                    preserveState: (page) => Object.keys(page.props.errors).length,
                    onSuccess: () => {
                        this.closeModal();
                        this.$inertia.reload({ only: ['notices'] });
                    },
                });
            } else {
                this.form.post(route('notices.store'), {
                    preserveState: (page) => Object.keys(page.props.errors).length,
                    onSuccess: () => {
                        this.closeModal();
                        this.$inertia.reload({ only: ['notices'] });
                    },
                });
            }
        },
        deleteNotice() {
            if (confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?')) {
                this.form.delete(route('notices.destroy', this.editingNoticeId), {
                    preserveState: (page) => Object.keys(page.props.errors).length,
                    onSuccess: () => {
                        this.closeModal();
                        this.$inertia.reload({ only: ['notices'] });
                    },
                });
            }
        },
        toggleSwitch() {
            this.form.display = !this.form.display;
        },
    },
};
</script>
