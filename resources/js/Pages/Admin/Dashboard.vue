<template>
    <AppLayout title="Tableau de bord">
        <div class="rounded-3xl bg-white p-8 shadow-lg">
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
            <!-- Message de dernière sauvegarde -->
            <div v-if="lastSaved" class="text-sm text-green-600 mt-4">
                Dernière sauvegarde à {{ lastSavedTime }}
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
            lastSavedTime: null,
            debounceTimeout: null,
        };
    },
    methods: {
        autoSave(information) {
            if (this.debounceTimeout) {
                clearTimeout(this.debounceTimeout);
            }
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
            }, 1000);
        },
    },
};
</script>


