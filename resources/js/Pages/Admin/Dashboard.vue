<template>
    <AppLayout title="Dashboard">
        <div class="rounded-3xl bg-white p-6 shadow-lg relative mt-8">
            <iframe plausible-embed src="https://plausible.io/share/umpb-test.vinvui.com?auth=KCwYKmo14BdHKYP5w4Iv-&embed=true&theme=light&background=transparent" scrolling="no" frameborder="0" loading="lazy" style="width: 1px; min-width: 100%; height: 1600px;"></iframe>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { onMounted } from 'vue';

onMounted(() => {
    if (!document.querySelector('script[src="https://plausible.io/js/embed.host.js"]')) {
        const script = document.createElement('script');
        script.src = "https://plausible.io/js/embed.host.js";
        script.async = true;
        document.body.appendChild(script);
    }
});
</script>
