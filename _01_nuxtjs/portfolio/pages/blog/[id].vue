<template>
    <div>
        <h1>
            This is blog post {{ route.params.id }}
        </h1>
    </div>
</template>

<script setup>
    const route = useRoute()
</script>