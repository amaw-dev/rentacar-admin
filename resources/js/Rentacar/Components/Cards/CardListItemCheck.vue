<template>
    <div class="flex-1 min-w-0">
        <p
            class="text-xs font-medium truncate text-gray-900"
            v-text="label"
        ></p>
    </div>
    <div class="text-xs inline-flex items-end">
        <VueFeather v-if="value" type="check-square" size="14" />
        <VueFeather v-else type="square" size="14" />
    </div>
</template>

<script setup>
import VueFeather from "vue-feather";

const props = defineProps({
    label: {
        required: true,
        type: String,
    },
    value: {
        required: false,
        type: [Number, Boolean],
    },
});
</script>
