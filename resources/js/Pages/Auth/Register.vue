<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

import { ref } from 'vue';



const form = useForm({
    role : '',
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

const roleText = ref('Please Select Role');
const roleName = ref('Name');


const selectJobseeker = (role) => {

    form.role = role;

    if (role === 'Jobseeker') {
    roleText.value = 'JOBSEEKER ';
    roleName.value = 'Jobseeker Name';
  } else if (role === 'Employer') {
    roleText.value = 'EMPLOYER';
    roleName.value = 'Employer Name';
  }

};

</script>


<script>
</script>


<template>
    <GuestLayout>
        <Head title="Register" />

        <div  class="block max-w-sm p-6 bg-white border
         border-gray-200 rounded-lg shadow 
         dark:bg-gray-800 dark:border-gray-700">


        <form @submit.prevent="submit">
          
        <div class="flex justify-center ">
           
            <button @click="selectJobseeker('Jobseeker')" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 
            overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 
            group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white "
          
            >
                <span class="flex items-center relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20" class="me-2">
                        <path fill="currentColor" d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg>
                        
                        Jobseeker
                </span>
              </button>
              <button @click="selectJobseeker('Employer')" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                <span class="flex items-center relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><mask id="ipSUserBusiness0"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><circle cx="24" cy="12" r="8" fill="#fff"/><path d="M42 44c0-9.941-8.059-18-18-18S6 34.059 6 44"/><path fill="#fff" d="m24 44l4-5l-4-13l-4 13l4 5Z"/></g></mask><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSUserBusiness0)"/></svg>
                    Employer
                </span>
              </button>
        </div>
       
        <div class="text-center text-white text-2xl mt-5 mb-5">
            <h5>{{ roleText }} </h5>
        </div>
        
        <hr class="h-px h-1 my-4 bg-gray-200 border-0 rounded dark:bg-gray-700">
        
            <div>
                <InputLabel class="text-white" for="name" :value="`${roleName}`"/>

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2 text-white" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel class="text-white" for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2 text-white" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel class="text-white" for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2 text-white" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel class="text-white" for="password_confirmation" value="Confirm Password" />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2 text-white" :message="form.errors.password_confirmation" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-400 hover:text-sky-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Already registered?
                </Link>

                <PrimaryButton class="ml-4 bg-sky-900" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </div>
    </GuestLayout>
</template>
