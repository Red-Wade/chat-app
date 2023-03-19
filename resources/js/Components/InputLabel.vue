<script setup>
defineProps(['value']);
</script>

<template>
    <label class="text-gray-600 dark:text-gray-400 text-sm">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
