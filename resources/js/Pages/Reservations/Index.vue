<template>
    <AppLayout title="Reservas">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Reservas
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="mb-2">
                    <CreateButton
                        :action="route('reservations.create')"
                    ></CreateButton>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <DataTable :headers="headers" :items="items">
                        <template #expand="item">
                            <Expand :item="item" />
                        </template>
                    </DataTable>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import DataTable from "@/Components/Rentacar/DataTable.vue";
import CreateButton from "@/Components/Rentacar/CreateButton.vue";
import Expand from "@/Pages/Reservations/Expand.vue";

const props = defineProps({
    headers: Array,
    items: Array,
});
</script>

<style lang="scss" scoped></style>
