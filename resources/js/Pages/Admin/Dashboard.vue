<template>
    <AppLayout title="Tableau de bord">
        <div class="rounded-3xl bg-white p-6 shadow-lg relative mt-8">
            <h3 class="modal-heading">Informations</h3>
            <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                <div v-for="information in informations" :key="information.id">
                    <InputLabel :value="information.title" />
                    <input
                        v-model="information.label"
                        class="input-accent"
                        type="text"
                        @input="autoSave(information)"
                    />
                </div>
            </div>
            <div v-if="lastSaved || isSaving" class="absolute inset-x-0 -bottom-4 w-full flex justify-center">
                <div class="bg-accent rounded-full shadow-lg py-1 px-3 text-sm text-white flex items-center">
                    <span v-if="lastSaved && !isSaving" >Sauvegardé à {{ lastSavedTime }}</span>
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
        };
    },
    methods: {
        autoSave(information) {
            if (this.debounceTimeout) {
                clearTimeout(this.debounceTimeout);
            }
            this.isSaving = true;
            this.debounceTimeout = setTimeout(() => {
                this.$inertia.put(route('informations.update', information.id), {
                    label: information.label,
                }, {
                    preserveState: true,
                    onSuccess: () => {
                        this.lastSaved = true;
                        this.lastSavedTime = new Date().toLocaleTimeString();
                        setTimeout(() => {
                            this.lastSaved = false;
                        }, 5000);
                    },
                    onError: (errors) => {
                        console.error("Erreur lors de la sauvegarde automatique", errors);
                    },
                });
                this.isSaving = false;
            }, 1000);
        },
    },
};
</script>


