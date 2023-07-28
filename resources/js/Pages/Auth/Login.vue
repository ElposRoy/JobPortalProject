<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';


defineProps({
   
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
    
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};


</script>

<template>
    


    
    <GuestLayout>
        <Head title="Log in" />

        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center lg:py-0">
               
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        
                        <h1 class="text-center text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Sign in to your account
                        </h1>
                        
        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
                      

                        <form @submit.prevent="submit" class="space-y-4 md:space-y-6" action="#">

                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>   <InputError  :message="form.errors.email" />
                                <input 
                                type="email"
                                id="email"
                                 v-model="form.email"
                                 placeholder="name@company.com" 
                                  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
                                  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 
                                  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 
                                  dark:focus:border-blue-500"
                                  autocomplete="username">
                             
                            </div>
                         

                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <InputError class="mt-2" :message="form.errors.password" />
                                <input 
                                type="password"
                                 name="password"  id="password"
                                 v-model="form.password"
                                  placeholder="••••••••" 
                                  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
                                  focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 
                                  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 
                                  dark:focus:border-blue-500"
                             
                                  autocomplete="current-password">
                            </div>
                       

                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <Checkbox class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"  name="remember" v-model:checked="form.remember" />
                                    </div>
                                    <div class="ml-3 text-sm">
                                      <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                    </div>
                                </div>

                                <Link
                                v-if="canResetPassword"
                                :href="route('password.request')"
                                class="underline text-sm text-gray-400 hover:text-sky-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            >
                                Forgot your password?
                            </Link>

                            </div>
                           
                            <div class="flex justify-center ">
                                <button type="submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing" 
                                class="w-full text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 
                                hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg 
                                shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center
                                 mr-2 mb-2 ">Sign in</button>
                              
                            </div>


                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Don’t have an account yet?   
                                <Link
                                :href="route('register')"
                                class="underline text-sm text-red-600 hover:text-red-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            >
                                Sign up
                            </Link>
                            
                            </p>
                            
                        </form>
                    </div>
                </div>
            </div>
          </section>
          
      
          <!-- <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div> -->
        
        <!-- <form >
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form> -->
    </GuestLayout>

      
</template>
