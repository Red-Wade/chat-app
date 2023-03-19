<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});
</script>

<template>
    <div>
        <Link id="inicio" to="/" href="/">
        <ApplicationLogo class=" fill-current text-gray-500" />
        </Link>
    </div>
</template>