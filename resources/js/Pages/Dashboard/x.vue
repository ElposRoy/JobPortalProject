<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import { Head } from '@inertiajs/vue3';


</script>



<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Admin Dashboard</h2>
        </template>

        <!-- v-if="$page.props.auth.userRoles.includes('admin')"  -->

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in! Welcome Administrator</div>
                    <div class="p-6 text-gray-900" v-if="$page.props.auth.userRoles.includes('admin')" >TEST TEXT </div>
                   
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
