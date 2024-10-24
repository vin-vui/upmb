<script setup>
defineProps({
    value: String,
});
</script>

<template>
    <label class="block font-bold text-base text-gray-700 capitalize font-annie">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
