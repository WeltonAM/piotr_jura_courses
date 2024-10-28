<template>
    <header class="flex justify-between items-center py-4">
        <div>
            <NuxtLink to="/" class="text-2xl font-semibold p-2 hover:bg-gray-200">MyBlog</NuxtLink>
        </div>

        <nav class="font-mono">
            <ul class="flex space-x-4">
                <li>
                    <NuxtLink to="/" class="link">Home</NuxtLink>
                </li>
                
                <li>
                    <NuxtLink to="/about" class="link">About</NuxtLink>
                </li>

                <li>
                    <NuxtLink to="/projects" class="link">Projects</NuxtLink>
                </li>
            </ul>
        </nav>
    </header>
</template>

<style scoped>
    .link {
        @apply p-1 hover:bg-gray-200;
    }
</style>