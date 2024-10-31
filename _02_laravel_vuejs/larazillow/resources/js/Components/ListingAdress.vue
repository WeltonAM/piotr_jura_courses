<template>
    <span v-for="listing in listings" :key="listing.id">
        {{ listing.street }} {{ listing.street_nr }}
    </span>
</template>

<script setup>
const props = defineProps({
    listings: {
        type: Object,
        required: true,
    },
});
</script>
