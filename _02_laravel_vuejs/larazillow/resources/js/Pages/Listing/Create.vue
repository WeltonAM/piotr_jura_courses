<template>
    <form @submit.prevent="create">
        <div>
            <div>
                <label>Beds</label>
                <input type="number" v-model.number="form.beds" />
                <div v-if="form.errors.beds" class="text-red-500 rounded-sm bg-red-100">{{ form.errors.beds }}</div>
            </div>

            <div>
                <label>Baths</label>
                <input type="number" v-model="form.baths" />
                <div v-if="form.errors.baths" class="text-red-500 rounded-sm bg-red-100">{{ form.errors.baths }}</div>
            </div>

            <div>
                <label>Area</label>
                <input type="number" v-model="form.area" />
                <div v-if="form.errors.area" class="text-red-500 rounded-sm bg-red-100">{{ form.errors.area }}</div>
            </div>

            <div>
                <label>City</label>
                <input type="text" v-model="form.city" />
                <div v-if="form.errors.city" class="text-red-500 rounded-sm bg-red-100">{{ form.errors.city }}</div>
            </div>

            <div>
                <label>Post Code</label>
                <input type="text" v-model="form.post_code" />
                <div v-if="form.errors.post_code" class="text-red-500 rounded-sm bg-red-100">{{ form.errors.post_code }}</div>
            </div>

            <div>
                <label>Street</label>
                <input type="text" v-model="form.street" />
                <div v-if="form.errors.street" class="text-red-500 rounded-sm bg-red-100">{{ form.errors.street }}</div>
            </div>

            <div>
                <label>Street Nr</label>
                <input type="text" v-model="form.street_nr" />
                <div v-if="form.errors.street_nr" class="text-red-500 rounded-sm bg-red-100">{{ form.errors.street_nr }}</div>
            </div>

            <div>
                <label>Price</label>
                <input type="text" v-model="form.price" />
                <div v-if="form.errors.price" class="text-red-500 rounded-sm bg-red-100">{{ form.errors.price }}</div>
            </div>

            <div>
                <button type="submit">Create</button>
            </div>
        </div>
    </form>
</template>

<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px
}

input {
    border: 1px solid black;
    padding: 2px;
}
</style>

<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    beds: 0,
    baths: 0,
    area: 0,
    city: null,
    post_code: null,
    street: null,
    street_nr: null,
    price: 0,
});

const create = () => {
    form.post('/listing');
};
</script>
