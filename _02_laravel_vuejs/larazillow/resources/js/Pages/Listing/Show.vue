<template>
    <table>
        <tr>
            <th>Code</th>
            <th>Street</th>
            <th>Street Nr</th>
            <th>City</th>
            <th>Area</th>
            <th>Beds</th>
            <th>Baths</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>{{ listing.code }}</td>
            <td>{{ listing.street }}</td>
            <td>{{ listing.street_nr }}</td>
            <td>{{ listing.city }}</td>
            <td>{{ listing.area }}</td>
            <td>{{ listing.beds }}</td>
            <td>{{ listing.baths }}</td>
            <td>{{ listing.price }}</td>
        </tr>
    </table>
</template>

<script setup>
const props = defineProps({
    listing: {
        type: Object,
        required: true,
    },
});
</script>
