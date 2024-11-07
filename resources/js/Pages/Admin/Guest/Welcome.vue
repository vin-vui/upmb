<template>
    <AppLayout title="Page - Accueil">
        <div class="mt-6 grid grid-cols-1 gap-4">
            <div v-for="(section, index) in sections" :key="index" class="">
                <button type="button" class="collapse-toggle modal-heading w-full collapse-open:bg-white collapse-open:text-gray-900 hover:bg-white hover:text-gray-900 transition-all duration-200" :id="'basic-collapse-' + index" aria-expanded="false" :aria-controls="'basic-collapse-heading' + index" :data-collapse="'#basic-collapse-heading' + index">
                    {{ section.title }}
                    <span class="icon-[tabler--chevron-down] collapse-open:rotate-180 size-4"></span>
                </button>
                <div :id="'basic-collapse-heading' + index" class="-mt-12 mb-8 collapse hidden w-full overflow-hidden transition-[height] duration-300 rounded-3xl p-8 bg-white" aria-labelledby="basic-collapse">
                    <div class="flex gap-8">
                        <div class="w-2/3">
                            <InputLabel value="Titre" :for="'title-' + index" />
                            <input
                                :id="'title-' + index"
                                v-model="section.title"
                                type="text"
                                class="input-accent mb-4"
                                @input="debouncedSave(section)"
                            />
                            <div class="flex items-center justify-between">
                                <InputLabel value="Paragraphe" :for="'paragraph-' + index" />
                                <span class="text-neutral-600 text-sm">Utilisez **mot** pour mettre en gras</span>
                            </div>
                            <textarea
                                :id="'paragraph-' + index"
                                v-model="section.paragraph"
                                class="input-accent"
                                rows="5"
                                @input="debouncedSave(section)"
                            ></textarea>
                        </div>
                        <div class="w-1/3">
                            <div v-if="section.image">
                                <button type="button" class="relative flex flex-col justify-start items-start overflow-hidden focus:z-10">
                                    <input
                                        :id="'image-' + index"
                                        type="file"
                                        accept="image/*"
                                        class="absolute left-0 top-0 h-full w-full opacity-0 cursor-pointer"
                                        @change="previewImage($event, section)"
                                    />
                                    <span class="btn-primary">Choisir une nouvelle image</span>
                                    <div class="mt-1 rounded-3xl relative">
                                        <img :src="section.preview || section.image" :alt="section.title" class="w-full h-auto rounded-3xl shadow-md" />
                                    </div>
                                </button>
                            </div>
                            <div v-else class="flex flex-col items-center justify-center h-full rounded-3xl border border-dashed">
                                <span class="font-bold text-base text-gray-500 font-annie mb-4">Cette section ne comprend pas d'image</span>
                                <svg class="text-gray-400 size-12" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M5 21q-.825 0-1.413-.588T3 19V5.825L1.4 4.2q-.275-.275-.288-.688T1.4 2.8q.275-.275.7-.275t.7.275l18.4 18.4q.3.3.288.7t-.313.7q-.3.275-.7.288t-.7-.288l-1.6-1.6H5Zm2-4h7.175l-2.325-2.325l-.85 1.05l-1.6-2.175q-.15-.2-.4-.2t-.4.2l-2 2.65q-.2.25-.05.525T7 17Zm14 1.175L5.825 3H19q.825 0 1.413.588T21 5v13.175Z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div v-if="section.items && section.items.length > 0" class=" mt-3">
                        <div v-for="item in section.items" :key="index" class="flex items-center justify-between gap-6">
                            <div class="w-full">
                                <InputLabel value="Item" :for="'item-' + index" />
                                <input
                                    :id="'item-' + index"
                                    v-model="item.content"
                                    type="text"
                                    class="input-accent mb-4"
                                    @input="debouncedSaveItem(item)"
                                />
                            </div>
                            <button v-if="!section.fixed_item_number" @click="deleteItem(item)" type="button" class="btn-accent rounded-full size-12 mt-2">
                                <span class="icon-[tabler--trash]"></span>
                            </button>
                        </div>
                        <button v-if="!section.fixed_item_number" @click="addItem(section)" type="button" class="btn-primary mt-4">Ajouter un item</button>
                    </div>
                </div>
            </div>
            <div v-if="lastSaved || isSaving" class="fixed inset-x-0 bottom-4 w-full flex justify-center">
                <div class="bg-accent rounded-full shadow-lg py-1 px-3 text-sm text-white flex items-center">
                    <span v-if="lastSaved && !isSaving">Sauvegardé à {{ lastSavedTime }}</span>
                    <span v-if="isSaving" class="loading loading-dots loading-xs"></span>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'
import InputLabel from '@/Components/InputLabel.vue';

export default {
    components: {
        AppLayout, InputLabel
    },
    props: {
        sections: {
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
    mounted() {
        window.HSStaticMethods.autoInit();
        this.sections.forEach(section => {
            this.convertStrongToAsterisks(section);
        });
    },
    watch: {
        sections: {
            handler(newSections) {
                newSections.forEach(section => {
                    this.convertStrongToAsterisks(section);
                });
            },
            deep: true,
        },
    },
    methods: {
        formatContent(paragraph) {
            return paragraph.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
        },
        convertStrongToAsterisks(section) {
            section.paragraph = section.paragraph.replace(/<strong>(.*?)<\/strong>/g, '**$1**');
        },
        debouncedSave(section) {
            this.isSaving = true;
            if (this.debounceTimeout) {
                clearTimeout(this.debounceTimeout);
            }
            this.debounceTimeout = setTimeout(() => {
                this.saveSection(section);
            }, 1000);
        },
        debouncedSaveItem(item) {
            this.isSaving = true;
            if (this.debounceTimeout) {
                clearTimeout(this.debounceTimeout);
            }
            this.debounceTimeout = setTimeout(() => {
                this.saveItem(item);
            }, 1000);
        },
        previewImage(event, section) {
            const file = event.target.files[0];
            if (file) {
                section.imageFile = file;
                section.preview = URL.createObjectURL(file);
                this.debouncedSave(section);
            }
        },
        async saveSection(section) {

            const formattedParagraph = this.formatContent(section.paragraph);

            const formData = new FormData();
            formData.append('title', section.title);
            formData.append('paragraph', formattedParagraph);

            if (section.imageFile) {
                formData.append('image', section.imageFile);
            } else {
                formData.append('image', section.image);
            }

            this.$inertia.post(route('sections.update', section.id), formData, {
                preserveState: true,
                forceFormData: true,
                preserveScroll: true,
                onSuccess: () => {
                    this.lastSaved = true;
                    this.lastSavedTime = new Date().toLocaleTimeString();
                    section.preview = null;
                    setTimeout(() => {
                        this.lastSaved = false;
                    }, 5000);
                },
                onError: (errors) => {
                    console.error("Erreur lors de la sauvegarde automatique", errors);
                }
            });

            this.isSaving = false;
        },
        async saveItem(item) {
            console.log('item', item);
            const formData = new FormData();
            formData.append('content', item.content);

            this.$inertia.post(route('items.update', item.id ), formData, {
                preserveState: true,
                forceFormData: true,
                preserveScroll: true,
                onSuccess: () => {
                    this.lastSaved = true;
                    this.lastSavedTime = new Date().toLocaleTimeString();
                    setTimeout(() => {
                        this.lastSaved = false;
                    }, 5000);
                },
                onError: (errors) => {
                    console.error("Erreur lors de la sauvegarde de l'item", errors);
                }
            });

            this.isSaving = false;
        },
        async addItem(section) {
            const newItem = {
                id: Date.now(),
                content: 'nouvel item',
                section_identifier: section.identifier,
            };

            section.items.push(newItem);

            const formData = new FormData();
            formData.append('content', newItem.content);
            formData.append('section_identifier', section.identifier);

            this.$inertia.post(route('items.store'), formData, {
                preserveState: true,
                forceFormData: true,
                preserveScroll: true,
                onSuccess: (page) => {
                    const savedItem = page.props.sections.find(s => s.identifier === section.identifier).items.find(i => i.id === newItem.id);
                    if (savedItem) newItem.id = savedItem.id;
                },
                onError: (errors) => {
                    console.error("Erreur lors de la création de l'item", errors);
                }
            });
        },
        async deleteItem(item) {
            if (confirm("Êtes-vous sûr de vouloir supprimer cet item ?")) {
                this.$inertia.delete(route('items.destroy', item.id), {
                    onSuccess: () => {
                        this.$inertia.reload({ preserveScroll: true, preserveState: true });
                    },
                    onError: (errors) => {
                        console.error("Erreur lors de la suppression de l'item", errors);
                    }
                });
            }
        },
    }
}
</script>
