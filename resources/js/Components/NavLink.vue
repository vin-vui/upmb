<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'inline-flex items-center py-3 px-4 rounded-xl leading-3 focus:outline-none focus:border-accent transition duration-150 ease-in-out capitalize bg-accent text-neutral-100 text-sm/6 font-semibold'
        : 'inline-flex items-center py-3 px-4 rounded-xl leading-3 text-gray-500 hover:text-gray-700 capitalize hover:border-gray-300 focus:outline-none focus:text-gray-700 text-sm/6 font-semibold focus:border-gray-300 transition duration-150 ease-in-out';
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
