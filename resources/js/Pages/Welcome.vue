<script setup>
import { Head, Link } from '@inertiajs/vue3';
import HomeNav from '@/Layouts/HomeNav.vue';
import Footer from '@/Layouts/Footer.vue';
const links = [


  { name: 'Open roles', href: '#' },
  { name: 'Internship program', href: '#' },
  { name: 'Our values', href: '#' },
  { name: 'Meet our leadership', href: '#' },
]
const stats = [


  { name: 'Offices worldwide', value: '12' },
  { name: 'Full-time colleagues', value: '300+' },
  { name: 'Hours per week', value: '40' },
  { name: 'Paid time off', value: 'Unlimited' },
]

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
        return ({
            baseurl: location.origin
        })
    }
}
</script>
<template>
    <Head title="Welcome" />

    <!-- First Page to Visit for Job Portal (Welcome Page) -->
   
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
            <img :src="baseurl+'/images/CityHall.jpg'" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center" />
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
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Work with us</h2>
                <p class="mt-3 text-lg leading-8 text-gray-300 justify-normal">Unlock Your Dream Job Today! With our vast selection of opportunities, we connect talented individuals like you with incredible career paths. Find the perfect job that aligns with your aspirations and takes your professional journey to new heights.</p>
              </div>


              <!-- How it Work Part -->
             <div>
                <dl class="grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-4 lg:grid-cols-4">
                
                    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">CREATE ACCOUNT</h5>
                        <p class="font-normal text-red-700 dark:text-red-400 ">REGISTER IN OUR JOB PORTAL</p>
                    </a>

                    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BUILD PROFILE</h5>
                        <p class="font-normal text-red-700 dark:text-red-400 ">Create or Upload your Resume</p>
                    </a>
                    
                    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">FIND YOUR JOB</h5>
                        <p class="font-normal text-red-700 dark:text-red-400 ">Browse for your dream job</p>
                    </a>

                    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SAVE AND APPLY</h5>
                        <p class="font-normal text-red-700 dark:text-red-400 ">REGISTER IN OUR JOB PORTAL</p>
                    </a>
                    
                 </dl>
             </div>
                <!-- How it work -->


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
        <div class="mt-14">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
               

                <div
                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
                    dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
                >
                    <div>
                    
                        <h2 class="text-4xl font-bold tracking-tight text-white sm:text-3xl">REGISTER</h2>
                        <p class="mt-4 text-gray-200 dark:text-gray-200 text-md leading-relaxed">Discover a world of opportunities and take your career to new heights by registering as a job seeker on our innovative and user-friendly job portal website.</p>
                        
                        <button class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                            Register as Jobseeker
                          </button>
                    </div>
                    
                </div>
                <div
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
                dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
            >
                <div>
                
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-3xl">EMPLOYER REGISTER</h2>
                    <p class="mt-4 text-gray-200 dark:text-gray-200 text-md leading-relaxed">Unlock the power to find the perfect candidates for your organization's success by registering as an employer on our cutting-edge job portal website. 
                        Streamline your hiring process and connect with top talent like never before.</p>
                    
                    <button class="mt-5 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
                        Register as Employer
                      </button>
                </div>
                
            </div>
            
            </div>
        </div>
<!-- Second Container -->

<!-- Third Container -->
        <div class="mt-14">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
               
                <!-- NEWS -->
                <div
                    class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
                    dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
                >
                    <div>
                    
                        <h2 class="text-4xl font-bold tracking-tight text-white sm:text-3xl">NEWS FROM (MOIXIE)</h2>
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
                    class="mt-7 scale-100 p-6 bg-white dark:bg-sky-500/30 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
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
                
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-3xl">5 LATEST JOBS POSTED</h2>
                    <p class="mt-4 text-gray-200 dark:text-gray-200 text-md leading-relaxed">Discover the latest job opportunities on our portal. Connect with leading companies seeking professionals like you. 
                        Explore diverse careers with our new postings.</p>
                    
                        <div
                        class="mt-7 scale-100 p-6 bg-white dark:bg-violet-400/30 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
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
<!-- Third Container -->



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
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
