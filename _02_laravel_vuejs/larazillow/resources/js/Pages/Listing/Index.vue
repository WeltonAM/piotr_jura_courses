<template>
  <div>
    <h1>Listings</h1>
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
            <th>Actions</th>
        </tr>
        <tr v-for="listing in listings" :key="listing.id">
            <td>{{ listing.code }}</td>
            <td>{{ listing.street }}</td>
            <td>{{ listing.street_nr }}</td>
            <td>{{ listing.city }}</td>
            <td>{{ listing.area }}</td>
            <td>{{ listing.beds }}</td>
            <td>{{ listing.baths }}</td>
            <td>{{ listing.price }}</td>
            <td>
                <Link :href="`/listing/${listing.id}/edit`">Edit</Link>
                <Link :href="`/listing/${listing.id}`" method="delete">Delete</Link>
            </td>
        </tr>
    </table>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import ListinAdress from '../../Components/ListingAdress.vue';

const props = defineProps({
    listings: {
        type: Array,
        required: true,
    },
});

</script>
