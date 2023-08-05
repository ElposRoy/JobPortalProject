<script setup>

import { router } from '@inertiajs/vue3'
import { useForm, Head } from '@inertiajs/vue3';


// Components

import Footer from '@/Layouts/Footer.vue';
import Sidebar from '@/Layouts/Sidebar.vue';


</script>


<template>
    <Head title="Dashboard-Announcements" />
  
    <Sidebar>

        <div class="p-4 sm:ml-64">


         
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

                <div class="relative isolate overflow-hidden bg-gray-900 py-18 sm:py-20 rounded-md mb-4">
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
                        <h2 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">ANNOUNCEMENTS</h2>
                        <p class="mt-3 text-md leading-8 text-gray-300 justify-normal">Stay informed with our News Page! Get the latest updates on current events, 
                            breaking news, and trending stories from around the world. Stay ahead of the curve and be in the know. Visit our News Page now!</p>
                      </div>
        
        
        
                    </div>
        
                    
                  </div>
             

          

                 <!-- 5 row  -->
                 <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     News / Announcement  Cards
                  </p>
               </div>
               <!-- 5 row  -->
               
                <!-- 5 row  -->
                <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                      Announcement Preview here
                    </p>
                 </div>
                 <!-- 5 row  -->
            </div>
         </div>
    </Sidebar>

    
    
</template>
<style>
  .input-background-color input {
    border-radius: 10%;
    background-color: rgb(236, 236, 236);
    color: rgb(0, 0, 0);
  }
</style>
