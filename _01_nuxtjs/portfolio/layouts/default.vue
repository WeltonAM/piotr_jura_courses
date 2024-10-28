<template>
    <div class="container mx-auto min-h-screen max-w-2xl">
        <SharedMenu />
        
        <main class="p-2 mt-10">
            <slot />
        </main>
    </div>
</template>

<script setup>
    useHead({
        titleTemplate: '%s - WeltonMatosDev',
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