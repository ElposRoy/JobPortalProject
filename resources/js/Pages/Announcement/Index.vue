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
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-lighter bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-800 selection:bg-blue-700 selection:text-white"
>

  <!-- max-auto removed here -->
    <div class="max-w-8xl p-6 lg:p-5">
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32 rounded-md">
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
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">ANNOUNCEMENTS</h2>
                <p class="mt-3 text-lg leading-8 text-gray-300 justify-normal">Stay informed with our News Page! Get the latest updates on current events, 
                    breaking news, and trending stories from around the world. Stay ahead of the curve and be in the know. Visit our News Page now!</p>
              </div>



            </div>

            
          </div>


<!-- Second Container -->
        <div class="mt-14">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
               
                <!-- NEWS -->
                <div
                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
                    dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
                >
                    <div>
                    
                        <h2 class="text-4xl font-bold tracking-tight text-white sm:text-3xl">ANNOUNCEMENTS FROM (MOIXIE)</h2>
                        <p class="mt-4 text-gray-200 dark:text-gray-200 text-md leading-relaxed"> Stay informed with industry news, hiring trends, job market analysis, expert advice, and more. Empower your success as an employer or job seeker with our comprehensive coverage.</p>
                        
                       
                    <nav aria-label="  Page navigation example">
                        <ul class=" mt-5 inline-flex -space-x-px">
                        <li>
                            <a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                        </ul>
                    </nav>

                <!-- News Modal use v-for-->
                    <div
                    class="mt-7 scale-100 p-6 bg-white dark:bg-red-500/30 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
                    dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 border-2  border-l-red-500"
                >
                    <div>
                    
                     
                        <div class="flex flex-col divide-y divide-y">
                      
                            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-3xl">HEADLINES</h2>
                     
                            <div>
                                <p class="mt-4 text-gray-200 dark:text-gray-200 text-md leading-relaxed">Discover a world of opportunities and take your career to new heights by registering as a job seeker on our innovative and user-friendly job portal website.</p>
                            </div>
                           
                            <button class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                Register as Jobseeker
                              </button>
                          </div>
                     
                    </div>
                    
                </div>
                <!-- News Modal --> 


                    </div>
                    
                </div>
                <!-- NEWS -->


                <!-- LATEST JOBS POSTED -->
                <div
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
                dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
            >
                <div>
                
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-3xl">PREVIEW</h2>
                   
                    
                        <div
                        class="mt-7 scale-100 p-6 bg-white dark:bg-sky-200/30 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
                        dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
                    >
                        <div>
                        
                         
                            <div class="flex flex-col divide-y divide-y">
                          
                                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-3xl">HEADLINE</h2>
                         
                                <div>
                                    <p class="mt-4 text-gray-200 dark:text-gray-200 text-md leading-relaxed">Discover a world of opportunities and take your career to new heights by registering as a job seeker on our innovative and user-friendly job portal website.</p>
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
