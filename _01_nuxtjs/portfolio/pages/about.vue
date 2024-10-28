<template>
    <div>
        <h1>This page is about me</h1>
        <slot />
        <div>
            <NuxtLink to="/blog/1">BLOG 1</NuxtLink>
        </div>
    </div>
</template>

<script setup>
    useHead({
        title: 'About',
    })
</script>