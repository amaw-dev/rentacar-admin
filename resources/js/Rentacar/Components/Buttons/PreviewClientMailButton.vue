<template>
    <a :href="action" target="_blank" rel="noopener noreferrer">
        <VueFeather type="book-open" />
    </a>
</template>

<script setup>
import VueFeather from "vue-feather";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    action: String,
});
</script>

<style lang="scss" scoped></style>
