<template>
    <Link href="/">Home</Link>&nbsp;
    <Link href="/show">Show</Link>
    <slot />
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'

const timer = ref(0)
setInterval(() => {
    timer.value += 1
}, 1000)
</script>
