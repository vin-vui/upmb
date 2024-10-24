<template>
<AppLayout title="Tableau de bord">
    <div class="rounded-3xl bg-white p-6 shadow-lg relative mt-8">
        <h3 class="modal-heading">Informations</h3>
        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
            <div v-for="information in filteredInformations" :key="information.id">
                <InputLabel :value="information.title" />
                <input v-model="information.label" class="input-accent" type="text" @input="saveInformation(information)" />
            </div>
        </div>
        <div v-for="information in plaquetteInformations" :key="information.id" class="mt-4">
            <InputLabel value="plaquette d'information" />
            <div class="flex items-center gap-4">
                <button type="button"
                    class="relative flex items-center gap-2 overflow-hidden focus:z-10 mt-1 cursor-pointer">
                    <span class="btn-primary cursor-pointer">Choisir un fichier PDF</span>
                    <input type="file" id="pdf-upload" accept=".pdf" @change="saveInformation(information, $event)" class="absolute left-0 top-0 h-full w-full opacity-0 cursor-pointer" />
                </button>
                <div v-if="information.label && information.label.includes('.pdf')" class="btn-accent-light">
                    <a :href="information.label" target="_blank" class="">Voir la plaquette</a>
                </div>
                <div v-else class="btn-accent-light cursor-not-allowed">Aucune plaquette</div>
            </div>
        </div>
        <div v-if="lastSaved || isSaving" class="absolute inset-x-0 -bottom-4 w-full flex justify-center">
            <div class="bg-accent rounded-full shadow-lg py-1 px-3 text-sm text-white flex items-center">
                <span v-if="lastSaved && !isSaving">Sauvegardé à {{ lastSavedTime }}</span>
                <span v-if="isSaving" class="loading loading-dots loading-xs"></span>
            </div>
        </div>
    </div>
</AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';

export default {
    components: {
        AppLayout,
        InputLabel,
    },
    props: {
        informations: {
            type: Array,
            required: true,
        },
    },
    data() {
        return {
            lastSaved: false,
            isSaving: false,
            lastSavedTime: null,
            debounceTimeout: null,
            uploadSuccess: false,
        };
    },
    computed: {
        filteredInformations() {
            return this.informations.filter(info => info.title !== 'plaquette');
        },
        plaquetteInformations() {
            return this.informations.filter(info => info.title === 'plaquette');
        }
    },
    methods: {
        saveInformation(information, event = null) {
            if (this.debounceTimeout) {
                clearTimeout(this.debounceTimeout);
            }

            this.isSaving = true;

            const formData = new FormData();
            if (event && event.target.files.length > 0) {
                const file = event.target.files[0];
                if (file && file.type === "application/pdf") {
                    formData.append('file', file);
                } else {
                    alert('Veuillez sélectionner un fichier PDF.');
                    this.isSaving = false;
                    return;
                }
            } else {
                formData.append('label', information.label);
            }

            this.debounceTimeout = setTimeout(() => {
                this.$inertia.post(route('informations.update', information.id), formData, {
                    preserveState: true,
                    forceFormData: true, // Forcer l'utilisation de FormData pour gérer fichier/texte
                    onSuccess: () => {
                        this.lastSaved = true;
                        this.lastSavedTime = new Date().toLocaleTimeString();
                        setTimeout(() => {
                            this.lastSaved = false;
                        }, 5000);
                    },
                    onError: (errors) => {
                        console.error("Erreur lors de la sauvegarde automatique", errors);
                    }
                });
                this.isSaving = false;
            }, 1000);
        },
    },
};
</script>
