<template>
    <AppLayout title="Membres de l'équipe" :openModal="openModal" button="ajouter un membre à l'équipe">
        <!-- List -->
        <dl class="grid grid-cols-3 gap-y-8 gap-x-4">
            <div v-for="member in members" :key="member.id" :data-id="member.id" @click="openModal(member)"
                class="rounded-3xl border-l-4 py-6 px-4 bg-white hover:shadow-lg hover:scale-105 cursor-pointer flex items-center justify-between group transition-all duration-200 border-secondary">
                <div class=" w-2/3">
                    <dt class="">
                        <img :src="member.image" class="object-contain h-16 rounded-3xl" />
                    </dt>
                    <dd class="font-averia text-xl font-bold leading-10 tracking-tight text-gray-900 truncate">{{ member.name }} {{ member.lastname }}</dd>
                </div>
                <div class="flex items-center">
                    <div class="hidden group-hover:block btn-accent mr-2">modifier</div>
                </div>
            </div>
        </dl>
        <!-- Modal -->
        <div v-if="showModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50">
            <div class="bg-white p-6 rounded-xl shadow-lg w-2/3">
                <h3 class="modal-heading">{{ isEditing ? 'Modifier le membre' : 'Ajouter un membre' }}</h3>
                <form @submit.prevent="submitForm" class="flex flex-col gap-4">
                    <div class="">
                        <InputLabel value="Nom" />
                        <input v-model="form.name" class="input-accent" type="text">
                        <InputError :message="form.errors.name" />
                    </div>
                    <div class="">
                        <InputLabel value="Prénom" />
                        <input v-model="form.lastname" class="input-accent" type="text">
                        <InputError :message="form.errors.lastname" />
                    </div>
                    <div class="">
                        <InputLabel value="Fonction" />
                        <input v-model="form.function" class="input-accent" type="text">
                        <InputError :message="form.errors.function" />
                    </div>
                    <div class="">
                        <InputLabel value="Description" />
                        <input v-model="form.description" class="input-accent" type="text">
                        <InputError :message="form.errors.description" />
                    </div>
                    <div class="">
                        <InputLabel value="Photo" />
                        <div class="flex items-center gap-4">
                            <button type="button" class="relative flex items-center gap-2 focus:z-10 mt-1 cursor-pointer">
                                <span class="btn-primary cursor-pointer">Choisir une photo</span>
                                <input type="file" id="img-upload" accept="image/*" ref="photo" @change="previewImage" class="absolute left-0 top-0 h-full w-full opacity-0 cursor-pointer" />
                            </button>
                            <img v-if="preview" :src="preview" class="object-contain h-32 border w-full rounded-3xl" />
                            <div v-else class="btn-accent-light cursor-not-allowed">Aucune photo</div>
                        </div>
                        <InputError :message="form.errors.image" />
                    </div>
                    <div class="flex justify-between mt-4">
                        <button v-if="isEditing" type="button" @click="deletePartner" class="btn-accent-light">supprimer</button>
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
        members: {
            type: Object,
            required: true,
        },
    },
    data() {
        return {
            showModal: false,
            isEditing: false,
            preview: '',
            form: this.$inertia.form({
                id: null,
                image: '',
                name: '',
                lastname: '',
                function: '',
                description: '',
            }),
        };
    },
    methods: {
        openModal(member = null) {
            if (member && typeof member === 'object' && 'id' in member) {
                this.isEditing = true;
                this.form.id = member.id;
                this.form.image = member.image;
                this.form.name = member.name;
                this.form.lastname = member.lastname;
                this.form.function = member.function;
                this.form.description = member.description;
                this.preview = member.image;
            } else {
                this.isEditing = false;
                this.id = null;
                this.preview = null;
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
            if (this.$refs.photo) {
                if (this.$refs.photo.files[0] !== undefined) {
                    this.form.image = this.$refs.photo.files[0];
                }
            }
            this.form.post(route('members.store'), {
                preserveState: (page) => Object.keys(page.props.errors).length,
                onSuccess: () => {
                    this.closeModal();
                    this.$inertia.reload({ only: ['members'] });
                },
                onError: (errors) => {
                    console.error('Validation errors:', errors);
                }
            });
        },
        deletePartner() {
            if (confirm('Êtes-vous sûr de vouloir supprimer ce membre ?')) {
                this.form.delete(route('members.destroy', this.form.id), {
                    preserveState: (page) => Object.keys(page.props.errors).length,
                    onSuccess: () => {
                        this.closeModal();
                        this.$inertia.reload({ only: ['members'] });
                    },
                });
            }
        },
        previewImage(e) {
            const file = e.target.files[0];
            if (file.size > 2048 * 1024) { // 2 Mo
                alert("Le fichier est trop volumineux. La taille maximale est de 2 Mo.");
                e.target.value = "";
                return;
            }
            this.preview = URL.createObjectURL(file);
        },
    },
};
</script>
