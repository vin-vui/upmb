<template>
<AppLayout title="FAQ" :openModal="openModal" button="ajouter un lien utile">
    <!-- List -->
    <dl class="flex flex-col gap-4" ref="linksList">
        <div v-for="link in links" :key="link.id" :data-id="link.id" @click="openModal(link)"
            class="rounded-3xl border-l-4 border-secondary py-6 px-4 bg-white hover:shadow-lg hover:scale-105 cursor-pointer flex items-center justify-between group transition-all duration-200">
            <div>
                <dt class="font-averia text-xl font-bold leading-10 tracking-tight text-gray-900">{{ link.label }}</dt>
                <dd v-if="link.url" class="flex items-center gap-1 ml-2 mt-5">
                    <svg class="text-accent size-3" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 3h-6.75M21 3v6.75M21 3l-8.25 8.25M9.4 3c-2.24 0-3.36 0-4.216.436a4 4 0 0 0-1.748 1.748C3 6.04 3 7.16 3 9.4v5.2c0 2.24 0 3.36.436 4.216a4 4 0 0 0 1.748 1.748C6.04 21 7.16 21 9.4 21h5.2c2.24 0 3.36 0 4.216-.436a4 4 0 0 0 1.748-1.748C21 17.96 21 16.84 21 14.6v-1.1"/></svg>
                    <a :href="link.url" target="_blank" class="text-accent underline">{{ link.url }}</a>
                </dd>
            </div>
            <div class="flex items-center">
                <div class="hidden group-hover:block btn-accent mr-8">modifier</div>
                <svg class="hidden group-hover:block text-gray-300 cursor-move" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="2"><circle cx="8" cy="4" r="1" transform="rotate(90 8 4)"/><circle cx="16" cy="4" r="1" transform="rotate(90 16 4)"/><circle cx="8" cy="12" r="1" transform="rotate(90 8 12)"/><circle cx="16" cy="12" r="1" transform="rotate(90 16 12)"/><circle cx="8" cy="20" r="1" transform="rotate(90 8 20)"/><circle cx="16" cy="20" r="1" transform="rotate(90 16 20)"/></g></svg>
            </div>
        </div>
    </dl>
    <!-- Modal -->
    <div v-if="showModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50">
        <div class="bg-white p-6 rounded-xl shadow-lg w-2/3">
            <h3 class="modal-heading">{{ isEditing ? 'Modifier le lien utile' : 'Ajouter un lien utile' }}</h3>
            <form @submit.prevent="submitForm" class="flex flex-col gap-4">
                <div class="">
                    <InputLabel value="Label" />
                    <input v-model="form.label" class="input-accent" type="text">
                    <InputError :message="form.errors.label" />
                </div>
                <div class="">
                    <InputLabel value="Lien" />
                    <input v-model="form.url" class="input-accent" type="url">
                    <InputError :message="form.errors.url" />
                </div>
                <div class="flex justify-between mt-4">
                    <button v-if="isEditing" type="button" @click="deleteLink" class="btn-accent-light">supprimer</button>
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
        links: {
            type: Array,
            required: true,
        },
    },
    data() {
        return {
            showModal: false,
            isEditing: false,
            editingLinkId: null,
            form: this.$inertia.form({
                label: '',
                url: '',
            }),
        };
    },
    mounted() {
        this.sortable = Sortable.create(this.$refs.linksList, {
            animation: 200,
            ghostClass: 'ghost',
            onEnd: this.onDragEnd,
        });
    },
    beforeDestroy() {
        if (this.sortable) {
            this.sortable.destroy();
        }
    },
    methods: {
        openModal(link = null) {
            if (link && typeof link === 'object' && 'id' in link) {
                this.isEditing = true;
                this.editingLinkId = link.id;
                this.form.label = link.label;
                this.form.url = link.url;
            } else {
                this.isEditing = false;
                this.editingLinkId = null;
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
                this.form.put(route('links.update', this.editingLinkId), {
                    preserveState: (page) => Object.keys(page.props.errors).length,
                    onSuccess: () => {
                        this.closeModal();
                        this.$inertia.reload({ only: ['links'] });
                    },
                });
            } else {
                this.form.post(route('links.store'), {
                    preserveState: (page) => Object.keys(page.props.errors).length,
                    onSuccess: () => {
                        this.closeModal();
                        this.$inertia.reload({ only: ['links'] });
                    },
                });
            }
        },
        deleteLink() {
            if (confirm('Êtes-vous sûr de vouloir supprimer ce lien ?')) {
                this.form.delete(route('links.destroy', this.editingLinkId), {
                    preserveState: (page) => Object.keys(page.props.errors).length,
                    onSuccess: () => {
                        this.closeModal();
                        this.$inertia.reload({ only: ['links'] });
                    },
                });
            }
        },
        onDragEnd() {
            const orderedIds = Array.from(this.$refs.linksList.children).map((el, index) => {
                const id = el.getAttribute('data-id');
                return {
                    id: parseInt(id),
                    order: index + 1,
                };
            });
            this.links.sort((a, b) => {
                const indexA = orderedIds.findIndex(item => item.id === a.id);
                const indexB = orderedIds.findIndex(item => item.id === b.id);
                return indexA - indexB;
            });
            this.$inertia.post(route('links.reorder'), { orderedIds }, {
                preserveState: true,
                preserveScroll: true,
            });
        },
    },
};
</script>
