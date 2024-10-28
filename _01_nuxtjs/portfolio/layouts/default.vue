<template>
    <div class="container mx-auto min-h-screen max-w-2xl">
        <header class="flex justify-between items-center py-4">
            <div>
                <NuxtLink to="/" class="text-2xl font-semibold p-2 hover:bg-gray-200">MyBlog</NuxtLink>
            </div>
            <nav class="font-mono">
                <ul class="flex space-x-4">
                    <li>
                        <NuxtLink to="/">Home</NuxtLink>
                    </li>
                    <li>
                        <NuxtLink to="/about">About</NuxtLink>
                    </li>
                </ul>
            </nav>
        </header>
        
        <main class="p-2">
            <slot />
        </main>
    </div>
</template>