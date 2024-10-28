<template>
    <header class="flex justify-between items-center py-4">
        <div class="flex items-center space-x-12">
            <div>
                <NuxtLink to="/" class="text-2xl font-semibold link">MyBlog</NuxtLink>
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
        </div>

        <SharedColorModeSelector />
    </header>
</template>

<style scoped>
    .link {
        @apply py-1 px-2 hover:bg-gray-200 dark:hover:bg-gray-800;
    }
</style>