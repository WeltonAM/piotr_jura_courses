<template>
    <div class="container mx-auto min-h-screen max-w-2xl">
        <Menu />
        
        <main class="p-2">
            <slot />
        </main>
    </div>
</template>

<script setup>
    useHead({
        title: '%s - WeltonMatosDev',
        link: [
            { rel: 'preconnect', href: 'https://fonts.googleapis.com' },
            { rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Roboto&display=swap' },
        ]
    })
</script>

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }
</style>