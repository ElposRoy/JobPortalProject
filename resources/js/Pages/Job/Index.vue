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
    data (){
        return({
            baseurl: location.origin
        })
    },
}
</script>

<template>
    <Head title="Job" />
  
    <HomeNav
    :can-login="canLogin" 
    :can-register="canRegister" 
    :laravel-version="laravelVersion" 
    :php-version="phpVersion"
    >
    <div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-lighter bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-800 selection:bg-blue-700 selection:text-white"
>

  <!-- max-auto removed here -->
    <div class="max-w-8xl p-6 lg:p-5">
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-12 rounded-md">
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
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">You can choose your dream job</h2>
                <p class="mt-3 text-lg leading-8 text-gray-300 justify-normal">Unlock Your Dream Job Today! With our vast selection of opportunities, we connect talented individuals like you with incredible career paths. Find the perfect job that aligns with your aspirations and takes your professional journey to new heights.</p>
              </div>


              <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">

                <!-- <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                  <a v-for="link in links" :key="link.name" :href="link.href">{{ link.name }} <span aria-hidden="true">&rarr;</span></a>
                </div> -->
                <h2 class="text-2xl font-bold tracking-tight text-white sm:text-2xl">SEARCH POSTED JOBS</h2>
                
                <dl class="mt-2 grid grid-cols-1 gap-8 sm:mt-2 sm:grid-cols-4 lg:grid-cols-4">
                   
            <label for="simple-search" class="sr-only">Job Position</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Job Position" required>
            </div>

            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by company" required>
            </div>


<label for="simple-search" class="sr-only">Search</label>
<div class="relative w-full">
    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
    </div>
    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by category" required>
</div>




<!-- Search Magnifying Button -->


<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px- rounded-full text-1xl">
    SEARCH
  </button>
<!-- Search Magnifying Button -->

<!-- <div v-for="stat in stats" :key="stat.name" class="flex flex-col-reverse">
    <dt class="text-base leading-7 text-gray-300">{{ stat.name }}</dt>
    <dd class="text-2xl font-bold leading-9 tracking-tight text-white">{{ stat.value }}</dd>
  </div>  --> 
                </dl>
              </div>
            </div>

          </div>

<!-- Second Container -->
        <div class="mt-14 grid grid-cols-2 md:grid-cols-3 gap-6 lg:gap-8 ">

         
            <!-- Left Grid Col -->
            <div>
                <div
                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
                    dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
                >
                    <div>
                    
                        <div
                        class="mt-2 scale-100 p-6 bg-white dark:bg-white-400/30 dark:bg-gradient-to-bl from-gray-400/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
                        dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
                    >
                        <div>
                        
                         
                            <div class="flex flex-col divide-y divide-y">
                       
                               
                                    <h4 class="text-2xl font-bold tracking-tight sm:text-2xl">HEADLINE | Detail </h4>

                                   
                            
                        
                                 <div>
                                     <p class="mt-4  text-md leading-relaxed">Discover a world of opportunities and take your career to new heights by registering as a job seeker on our innovative and user-friendly job portal website.</p>
                                 </div>
                                
                              
                               </div>
                           
                        </div>
                        
                    </div>
                    </div>
                    
                </div> 
            </div>
                <!-- Left Grid Col -->
            
             <!-- LATEST JOBS POSTED (col-span-2)-->
             <div
             class="col-span-2 scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
             dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
         >
             <div>
             
                 <!-- <h2 class="text-4xl font-bold tracking-tight text-white sm:text-2xl">JOB DETAILS</h2> -->
             
                 <div class="mt-2 scale-100 p-6 bg-white dark:bg-violet-400/30 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                      <div class="flex flex-col divide-y divide-y">
                        <div class="flex">
                            <img class="w-24 h-26" :src="baseurl+'/images/Logo.png'" alt="image description">
                          <div>
                            <h4 class="text-2xl font-bold tracking-tight text-white sm:text-2xl">HEADLINE</h4>
                            <p>asd</p>
                          </div>
                        </div>
                        <div>
                          <p class="mt-4 dark:text-gray-200 text-md leading-relaxed">Discover a world of opportunities and take your career to new heights by registering as a job seeker on our innovative and user-friendly job portal website.</p>
                        </div>
                        <button class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                          Register as Jobseeker
                        </button>
                      </div>
                    </div>
                  </div>

                
                
             </div>
             
         </div>
         <!-- LATEST JOBS POSTED -->
            
        </div>
<!-- Second Container -->





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
