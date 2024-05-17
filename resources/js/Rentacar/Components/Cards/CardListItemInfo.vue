<template>
    <div class="flex-1 min-w-0">
        <p
            class="text-sm font-medium truncate text-gray-900"
            v-text="label"
        ></p>
    </div>
    <div
        class="text-sm inline-flex items-center font-semibold text-gray-900"
        v-text="value"
    ></div>
</template>

<script setup>
const props = defineProps({
    label: {
        required: true,
        type: String,
    },
    value: {
        required: true,
        type: [String, Number],
    },
});
</script>
