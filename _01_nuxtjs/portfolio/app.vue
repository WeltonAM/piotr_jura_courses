<template>
  <NuxtLayout>
    <NuxtPage />
  </NuxtLayout>
</template>

<script setup lang="ts">
useSeoMeta({
  title: 'My Blog',
  ogTitle: 'My Blog',
  description: 'This is blog project practicing Nuxt.js',
  ogDescription: 'This is blog project practicing Nuxt.js',
  ogImage: 'https://nuxt.com/og-image.png',
  twitterCard: 'summary_large_image',
})
</script>