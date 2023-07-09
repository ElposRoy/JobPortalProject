<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import HomeNav from '@/Layouts/HomeNav.vue';


</script>

<script>

</script>


<template>

 
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 bg-gray-50 dark:bg-gray-900">
        <div>
            <Link href="/">
                <ApplicationLogo class="w-32 h-32 fill-current text-gray-500" />
                <h1 class="text-center text-sm font-bold leading-tight tracking-tight text-gray-900 md:text-2sm dark:text-white">
                    HOME
                </h1>
            </Link>
            
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg "
        >
            <slot />
        </div>
    </div>

</template>
