<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'inline-flex items-center px-3 pt-1 border-b-4 border-accent leading-5 focus:outline-none focus:border-accent transition duration-150 ease-in-out capitalize font-annie font-bold bg-accent text-neutral-100 text-xl'
        : 'inline-flex items-center px-3 pt-1 border-b-4 border-transparent font-bold leading-5 text-gray-500 hover:text-gray-700 capitalize hover:border-gray-300 focus:outline-none font-annie focus:text-gray-700 text-xl focus:border-gray-300 transition duration-150 ease-in-out';
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
