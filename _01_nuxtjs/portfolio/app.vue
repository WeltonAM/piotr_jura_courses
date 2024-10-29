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

<style>
.page-enter-active,
.page-leave-active {
  transition: all 0.1s;
}
.page-enter-from,
.page-leave-to {
  opacity: 0.5;
  filter: grayscale(1);
}
</style>