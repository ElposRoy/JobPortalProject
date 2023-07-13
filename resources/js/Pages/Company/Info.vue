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

<script>
    export default {
        data () {
            return ({
                baseurl: location.origin
            })
        },
    }

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
        <!-- <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
            <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
        <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
      </svg>
        </div> -->
    </div>
        <!-- Horizontal Line -->

        <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">ABOUT THE COMPANY</h5>

        <!-- FirstContainer -->
        <div class="mt-6">
            <div class="grid grid-rows-4 grid-flow-col gap-4">

                <div class="row-span-4 col-span-1">
                
                        <div class="p-1 flex justify-center  ...">
                            <img class="object-contain rounded h-42 w-52 border-solid border-2 border-sky-500"  :src="baseurl+'/storage/images/Pfp.jpeg' ">
                          </div>
                    
                </div>
            
                <!-- CEO CARD -->
                <div class="row-span-2 col-span-2"> 
                    <div class="w-full max-w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">CEO - Chief Executive Officer</h5>
                        <p class="font-normal text-2xl text-white ">Dixon J. Lorse</p>
                        <div class="flex items-center space-x-3 mt-3">
                            <svg class="w-8 h-8 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                       
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 65%"> 65%</div>
                </div>

                            
                            
                        </div>
                        <p class="font-normal text-white ">approve of Dixon J. Lorse performance</p>
                    </div>
                </div>
                <!-- CEO CARD -->

                <!-- Revenue Card -->
                <div class="row-span-2 col-span-1">
                    <div class="row-span-2 col-span-1">
                        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                            <h5 class="mb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Revenue</h5>
                            <span class="bg-blue-100 text-blue-800 text-lg font-medium mr-2 px-2.5 py-0.5 
                            rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Pittsford, NY</span>
                        </div>
                    </div>
                </div>
                <!-- Revenue Card -->

                <!-- Founded Card -->
                <div class="row-span-2 col-span-1">
                    <div class="row-span-2 col-span-1">
                        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                            <h5 class="mb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Industry</h5>
                            <span class="bg-blue-100 text-blue-800 text-lg font-medium mr-2 px-2.5 py-0.5 
                            rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Pittsford, NY</span>
                        </div>
                    </div>
                </div>
                <!-- Founded Card -->

                <!-- Industry Card -->
                <div class="row-span-2 col-span-1">
                    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-10  text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Founded</h5>
                        <span class="bg-blue-100 text-blue-800 text-lg font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">2001</span>
                    </div>
                </div>
                <!-- Industry Card -->

                <!-- Company Size -->
                <div class="row-span-2 col-span-1">
                    <div class="row-span-2 col-span-1">
                        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                            <h5 class="mb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Headquarters</h5>
                            <span class="bg-blue-100 text-blue-800 text-lg font-medium mr-2 px-2.5 py-0.5 
                            rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Pittsford, NY</span>
                        </div>
                    </div>
                </div>
                <!-- Company Size -->

                <!-- HQ Card -->
                <div class="row-span-2 col-span-1">
                    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Headquarters</h5>
                        <span class="bg-blue-100 text-blue-800 text-lg font-medium mr-2 px-2.5 py-0.5 
                        rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Pittsford, NY</span>
                    </div>
                </div>
                <!-- HQ Card -->


                <div class="row-span-2 col-span-1">
                    <div class="row-span-2 col-span-1">
                        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                            <h5 class="mb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Headquarters</h5>
                            <span class="bg-blue-100 text-blue-800 text-lg font-medium mr-2 px-2.5 py-0.5 
                            rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Pittsford, NY</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- FirstContainer -->


        
<!-- Second Container (Description) -->
    <div class="ml-20 text-justify text-white">

    <p class="mb-3">Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p>
   

    <button type="button" class="mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
    focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 
    dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Learn more</button>
    </div>
    <!-- Second Container -->

 <!-- Horizontal Line -->
    <div class="inline-flex items-center justify-center w-full">
        <hr class="w-full h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
        <!-- <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
            <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
        <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
      </svg>
        </div> -->
    </div>
        <!-- Horizontal Line -->


         <!-- Third Container -->
        <div>
            <h5 class=" text-3xl font-bold tracking-tight text-gray-900 dark:text-white">JOBS</h5>
            <p class="mt-3 text-justify text-white">You’re seeing all 57 jobs at Cognizant Technology Solutions because we can’t find any available jobs at Cognizant Technology Solutions close to Cebu City at the moment.</p>
         
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="flex justify-between">
                            <div class="w-1/3 p-2">
                                <!-- Card 1 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 1 content goes here -->
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <!-- Card 2 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 2 content goes here -->
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <!-- Card 3 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 3 content goes here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="flex justify-between">
                            <div class="w-1/3 p-2">
                                <!-- Card 4 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 4 content goes here -->
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <!-- Card 5 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 5 content goes here -->
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <!-- Card 6 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 6 content goes here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="flex justify-between">
                            <div class="w-1/3 p-2">
                                <!-- Card 7 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 7 content goes here -->
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <!-- Card 8 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 8 content goes here -->
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <!-- Card 9 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 9 content goes here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="flex justify-between">
                            <div class="w-1/3 p-2">
                                <!-- Card 10 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 10 content goes here -->
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <!-- Card 11 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 11 content goes here -->
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <!-- Card 12 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 12 content goes here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="flex justify-between">
                            <div class="w-1/3 p-2">
                                <!-- Card 13 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 13 content goes here -->
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <!-- Card 14 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 14 content goes here -->
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <!-- Card 15 content -->
                                <div class="bg-white rounded-lg p-4 shadow">
                                    <!-- Card 15 content goes here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            
        </div>
        <!-- Third Container -->

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
