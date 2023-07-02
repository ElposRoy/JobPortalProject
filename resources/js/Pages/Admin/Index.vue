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
    <Head title="About-Us" />
  
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
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32 rounded-md text-center flex justify-center">
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
              <div class=" max-w-1xl lg:mx-0 ">
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">MOIXIE ONLINE JOB PORTAL</h2>
                <p class="mt-3 text-lg leading-8 text-gray-300 justify-normal">“Work to become, not to acquire.” </p>
                <p class="mt-3 text-lg leading-8 text-gray-300 justify-normal">Unlock Your Dream Job Today! With our vast selection of opportunities, we connect talented individuals like you with incredible career paths. Find the perfect job that aligns with your aspirations and takes your professional journey to new heights.</p>
              </div>


              <!-- How it Work Part -->
              <div class="flex justify-center">
                <dl class="grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-3 lg:grid-cols-3">
                
               
               
           
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">CONTACT US</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">We're here to help! Feel free to reach out to us with any questions, feedback, or concerns. Our team is ready to assist you.</p>
                    <span class="bg-blue-100 text-blue-800 text-xl font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">099173229292</span>
                </div>
            </div>


                    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">EMAIL US</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Have a question or need assistance? Send us an email  and our team will get back to you as soon as possible.</p>
                    <span 
                    class="bg-blue-100 text-blue-800 text-xl font-medium mr-2 px-2.5 py-0.5 
                    rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">youremail@gmail.com</span>
                </div>
            </div>


            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
             
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">LOCATION</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> Feel free to visit us during our operating hours. We look forward to welcoming you!</p>
                    <span class="text-blue-800 text-xl font-medium mr-2 px-2.5 py-0.5 
                    rounded  dark:text-blue-400 ">City Hall, Sorsogon Diversion Rd, Sorsogon City</span>
                </div>
            </div>

                    
                 </dl>
             </div>
                <!-- How it work -->

            </div>

            
          </div>
<!-- Second Container -->
        <div class="mt-14">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 text-center flex justify-center">
               

                <div
                    class=" scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
                    dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
                >
                    <div >
                    
                        <h2 class="text-4xl font-bold tracking-tight text-white sm:text-3xl">MISSION</h2>
                        <p class="mt-4 text-gray-200 dark:text-gray-200 text-md leading-relaxed">The department shall promote peace and order, ensure public safety, strengthen capability of local government units through active people participation and a professionalized corps of civil servants. </p>
                        
                      
                    </div>
                    
                </div>
                <div
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
                dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
            >
                <div>
                
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-3xl">VISION</h2>
                    <p class="mt-4 text-gray-200 dark:text-gray-200 text-md leading-relaxed">A strongly determined and highly trusted department committed to capacitate and nutrture local goverment units, public order and safety institutions to sustain peaceful, progressive, and resilient communities where people live happily. </p>
               
                </div>
                
            </div>
            
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
