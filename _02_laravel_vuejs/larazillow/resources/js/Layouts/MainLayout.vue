<template>
    <div class="container flex flex-col min-h-screen">
        <nav class="navbar flex justify-end items-center gap-4 p-3">
            <Link href="/listing">Listing</Link>
            <Link href="/listing/create">New Listing</Link>
        </nav>

        <div class="mx-auto w-full max-w-screen-md">
            <slot />
        </div>

        <div v-if="flashSuccess" class="alert alert-success bg-green-100 text-green-800">
            {{ flashSuccess }}
        </div>
    </div>
</template>

<script setup>
import { computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

const page = usePage();
const flashSuccess = computed(() => page.props.flash.success);
</script>
