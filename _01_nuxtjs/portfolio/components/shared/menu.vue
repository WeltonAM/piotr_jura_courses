<template>
    <header class="flex justify-between items-start md:items-center mt-5">
        <div class="flex items-center md:space-x-12">
            <div class="hidden md:block">
                <NuxtLink to="/" class="text-2xl font-semibold link">MyBlog</NuxtLink>
            </div>
            
            <nav class="font-mono">
                <ul class="flex flex-col md:flex-row md:space-x-4">
                    <li>
                        <NuxtLink to="/" class="link">Home</NuxtLink>
                    </li>
                    
                    <li>
                        <NuxtLink to="/about" class="link">About</NuxtLink>
                    </li>
                    
                    <li>
                        <NuxtLink to="/projects" class="link">Projects</NuxtLink>
                    </li>
                    
                    <li>
                        <NuxtLink to="/blog" class="link">Blog</NuxtLink>
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