<script setup>

import { router } from '@inertiajs/vue3'
import { useForm, Head } from '@inertiajs/vue3';


// Components
import HomeNav from '@/Layouts/HomeNav.vue';
import Footer from '@/Layouts/Footer.vue';


defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

</script>


<template>
    <Head title="Announcements" />
  
    <HomeNav
    :can-login="canLogin" 
    :can-register="canRegister" 
    :laravel-version="laravelVersion" 
    :php-version="phpVersion"
    >
    <div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-lighter bg-center bg-gray-100 
    dark:bg-dots-lighter dark:bg-gray-800 selection:bg-blue-700 selection:text-white"
>

  <!-- max-auto removed here -->
    <div class="max-w-8xl p-6 lg:p-5">
        <div class="relative isolate overflow-hidden bg-gray-900 py-20 sm:py-26 rounded-md">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center" />
            <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
              <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
            </div>
            <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
              <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
            </div>
            <!-- max-auto removed here -->
            <div class=" max-w-7xl px-6 lg:px-8">
                  <!-- max-auto removed here -->
              <div class=" max-w-1xl lg:mx-0">
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">COMPANY NAME</h2>
                <p class="mt-3 text-lg leading-8 text-gray-300 justify-normal">Company Short Intro here</p>
              </div>


            </div>

            
          </div>
          
<div class="container">
    
   <!-- LINKS -->
   <div>
    <dl class="grid grid-cols-1 gap-8 sm:mt-8 sm:grid-cols-5 lg:grid-cols-5 text-center text-2xl">
    
        <a href="#" class="block max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-sky-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-sky-700">
            <h5 class=" text-2md font-bold tracking-tight text-gray-900 dark:text-white">Why Join Us</h5>
           
        </a>

        <a href="#" class="block max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-sky-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-sky-700">
            <h5 class=" text-2md font-bold tracking-tight text-gray-900 dark:text-white">Jobs</h5>
            
        </a>
        
        <a href="#" class="block max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-sky-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-sky-700">
            <h5 class=" text-2md font-bold tracking-tight text-gray-900 dark:text-white">Reviews</h5>
            
        </a>

        <a href="#" class="block max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-sky-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-sky-700">
            <h5 class=" text-2md font-bold tracking-tight text-gray-900 dark:text-white">Interviews</h5>
            
        </a>
        
        <a href="#" class="block max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-sky-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-sky-700">
            <h5 class=" text-2md font-bold tracking-tight text-gray-900 dark:text-white">Photos</h5>
            
        </a>
     </dl>
 </div>
    <!-- LINKS-->

    <!-- Horizontal Line -->
    <div class="inline-flex items-center justify-center w-full">
        <hr class="w-full h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
        <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
            <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
        <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
      </svg>
        </div>
    </div>
        <!-- Horizontal Line -->

<!-- Second Container -->
        <div class="mt-14">
            <div class="grid grid-rows-4 grid-flow-col gap-4">

                <div class="row-span-4 col-span-1">
                    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">1</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            Here are the biggest enterprise technology acquisitions of 2021 so far, 
                            in reverse chronological order.asdasdas
                            Here are the biggest enterprise technology acquisitions of 2021 so far, 
                            in reverse chronological order.asdasdas
                            Here are the biggest enterprise technology acquisitions of 2021 so far, 
                            in reverse chronological order.asdasdas
                        </p>
                    </a>
                </div>
            
                <!-- CEO CARD -->
                <div class="row-span-2 col-span-2"> 
                    <a href="#" class="block max-w- p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">CEO</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology</p>
                    </a>
                </div>
                <!-- CEO CARD -->

                <!-- Revenue Card -->
                <div class="row-span-2 col-span-1">
                    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Revenue</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology</p>
                    </a>
                </div>
                <!-- Revenue Card -->

                <!-- Founded Card -->
                <div class="row-span-2 col-span-1">
                    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Founded</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology</p>
                    </a>
                </div>
                <!-- Founded Card -->

                <!-- Industry Card -->
                <div class="row-span-2 col-span-1">
                    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Industry</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology</p>
                    </a>
                </div>
                <!-- Industry Card -->

                <!-- Company Size -->
                <div class="row-span-2 col-span-1">
                    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Company Size</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology</p>
                    </a>
                </div>
                <!-- Company Size -->

                <!-- HQ Card -->
                <div class="row-span-2 col-span-1">
                    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Headquarters</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology</p>
                    </a>
                </div>
                <!-- HQ Card -->


                <div class="row-span-2 col-span-1">
                    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Link</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology</p>
                    </a>
                </div>
            </div>
            
        </div>
<!-- Second Container -->



</div>


    <!-- Footer -->
       <Footer>
        
       </Footer>
    <!-- Footer -->


    </div>
    <!-- Main End -->
    
</div>
</HomeNav>
    
    
</template>
<style>
  .input-background-color input {
    border-radius: 10%;
    background-color: rgb(236, 236, 236);
    color: rgb(0, 0, 0);
  }
</style>
