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
    class="relative absolute sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-lighter bg-center  dark:bg-dots-lighter selection:bg-blue-700 selection:text-white"
>

  <!-- max-auto removed here -->
    <div class="max-w-8xl ">
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-5 justify-center">
            <img :src="baseurl+'/images/AnnouncementBanner.jpg'" alt="" class="absolute inset-0 -z-10 h-full w-full fill-current object-right md:object-center" />
               
            <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
              <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
            </div>
            <!-- max-auto removed here -->
       


            <div class="mx-auto w-full lg:py-4 flex flex-col items-center">
                <h5 class="mb-2 text-6xl font-bold tracking-tight text-gray-900 dark:text-white mb-5">JOB SEARCH</h5>
                <form class="w-full max-w-3xl">
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                               WHAT
                                </span>
                                <input type="text" id="website-admin" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by position">
                              </div>
                        </div>
                        <div>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                WHERE
                                </span>
                                <input type="text" id="website-admin" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by location">
                              </div>
                        </div>
                    </div>
                    
                    <!-- Buttons below the inputs -->
                    <div class="flex justify-center mb-5">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md mr-2 hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                            FIND JOBS
                        </button>
                     
                    </div>
                </form>
            </div>
            

<!-- More About us  -->
<div class="sm:flex sm:items-center sm:justify-center">
    
    <span class="text-md text-gray-500 sm:text-center dark:text-gray-200 me-7">More about us: 
    </span>
    <div class="flex mt-4 space-x-5 sm:justify-start sm:mt-0">
      <button type="button" class="text-white border border-blue-400 bg-blue-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 
      font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center 
      dark:focus:ring-blue-800 ">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
              <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
          </svg>
        <span class="sr-only">Facebook page</span>
        </button>


        <button type="button" class="text-white border border-blue-700 bg-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 
        font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center d
        dark:focus:ring-blue-800 ">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
          <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
      </svg>
    <span class="sr-only">Discord community</span>
          </button>


          <button type="button" class="text-white border border-blue-700 bg-blue-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 
          font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center d
          dark:focus:ring-blue-800 ">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
              <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
          </svg>
            <span class="sr-only">Twitter page</span>
            </button>

            <button type="button" class="text-white border border-gray-700 bg-gray-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 
            font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center d
            dark:focus:ring-gray-800 ">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
        </svg>
        <span class="sr-only">GitHub account</span>
              </button>
  
   
    </div>
</div>


          </div>

  
         

                   <!-- News -->
         
                   <div class="relative isolate overflow-hidden rounded-md mx-2  mb-10">
                    <div class="px-20 pb-15 ">
                           
                            <div>
                               <div class="grid gap-2 sm:mt-20 grid-cols-1  sm:grid-cols-1 lg:grid-cols-4 mx-10 ">
                              <div class="col-span-1">
   <!-- JOB CARD BUTTONS -->
  
<div class="w-full max-w-full bg-white border border-gray-400 rounded-lg shadow ">
    <div class="flex justify-end px-4 pt-4">
        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400  focus:ring-2 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
            <span class="sr-only">Open dropdown</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2" aria-labelledby="dropdownButton">
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
            </li>
            </ul>
        </div>
    </div>
    <div class="flex flex-col mx-5  pb-5">
      
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-blac">V-Card Center</h5>
        <div class="flex mb-2">
            <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">Web Developer</span>
            <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">System Ad</span>
        </div>
      
    <div class="flex mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M8.75 10a3.25 3.25 0 1 1 6.5 0a3.25 3.25 0 0 1-6.5 0Z"/><path fill="currentColor" fill-rule="evenodd" d="M3.774 8.877a8.038 8.038 0 0 1 8.01-7.377h.432a8.038 8.038 0 0 1 8.01 7.377a8.693 8.693 0 0 1-1.933 6.217L13.5 20.956a1.937 1.937 0 0 1-3 0l-4.792-5.862a8.693 8.693 0 0 1-1.934-6.217ZM12 5.25a4.75 4.75 0 1 0 0 9.5a4.75 4.75 0 0 0 0-9.5Z" clip-rule="evenodd"/></svg>
        <span class="text-sm text-gray-500 dark:text-gray-900">Visual Designer</span>

    </div>

    <div class="flex mb-2">
        <span class="bg-blue-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-300 border border-blue-300">Full time</span>
        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-yellow-300 border border-yellow-300">Remote</span>
    </div>

    <div class="flex">
        <svg xmlns="http://www.w3.org/2000/svg" class="me-1 text-orange-700" width="24" height="24" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="currentColor" d="M16 14a5 5 0 0 1 5 5v1a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-1a5 5 0 0 1 5-5h8Zm4-6a1 1 0 0 1 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1V9a1 1 0 0 1 1-1Zm-8-6a5 5 0 1 1 0 10a5 5 0 0 1 0-10Z"/></g></svg>
        <span class="text-sm text-gray-500 dark:text-gray-900">Hiring Multiple</span>
        </div>
       
        <div class="mt-5 ">
<ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">

  
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 mr-2 text-s text-gray-500 dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         <span class="text-sm text-gray-500 dark:text-gray-500">Hiring Multiple</span>
    </li>
    <li class="flex items-center">
        <svg class="w-3.5 h-3.5 mr-2 text-s text-gray-500 dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
         </svg>
         <span class="text-sm text-gray-500 dark:text-gray-500">Hiring Multiple</span>
    </li>
</ul>

        </div>

       
        <div class="flex justify-between items-center">
            <span class="text-sm text-gray-500 dark:text-gray-500">Active 4 days ago</span>


            <div class="flex mt-2 space-x-3 md:mt-6">
                <button  class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg 
                hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 
                dark:focus:ring-blue-800">View Job</button>
                  </div>
        </div>
    </div>
</div>

      <!-- JOB CARD BUTTONS -->
      
                              </div>
                          
                               <!-- LATEST JOBS POSTED (col-span-2)-->
             <div
             class="col-span-3 border-2 border-gray-400 scale-100 p-6 bg-white dark:bg-white  from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 
             dark:shadow-none flex focus:outline focus:outline-2 focus:outline-red-500"
         >
             <div class=" max-w-full">
              <div class="flex flex-col divide-y divide-y">
                <div class="relative flex">
                    <img class="w-24 h-26 p-2" :src="baseurl+'/images/Logo.png'" alt="image description">
                  <div class="ms-3">
                    <!-- Company Name -->
                        <h4 class="text-2xl font-bold tracking-tight text-black sm:text-2xl">V-CARD CENTER</h4>
                  
                    <!-- Address -->
                    <p class="text-blue-800" >Seabreeze Homes Cabid-an Sorsogon City</p> 
                    <!-- Phone Number -->
                 
                    
                    <div class="m-2 flex">
                    <p class="text-gray-600">Hiring:</p>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-2 text-center">
                        <span class="ms-2 bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 
                        rounded dark:bg-blue-900 dark:text-blue-300">Web Developer</span>
                        <span class="ms-2 bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 
                        rounded dark:bg-blue-900 dark:text-blue-300">System Analyst</span>
                        <span class="ms-2 bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 
                        rounded dark:bg-blue-900 dark:text-blue-300">IT Documentation</span>
                        
                    </div>
                    <div class="absolute top-0 right-0 ...">
                        <button type="button" class="px-6 py-3.5 text-base font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white mr-2" viewBox="0 0 512 512"><path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480v-83.6c0-4 1.5-7.8 4.2-10.7l167.6-182.9c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8l-88.3-44.2C7.1 311.3.3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"/></svg>


                            APPLY NOW
                          </button>
                      </div>
                    </div>
                   
                  </div>
                  
                  
                </div>
                
                <!-- OVERFLOW HERE (h-screen) -->
              <div class="overflow-y-auto " style="height: 120vh;">
                  

<div class="max-w-full p-6 me-2 my-2 bg-white border border-gray-400 rounded-lg shadow">
   
  
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-black">JOB DETAILS</h5>
  
    <p class="mb-3 font-normal text-sm text-gray-500 dark:text-gray-400">Here’s how the job details align with your job preferences.</p>
    
    <div class="grid gap-2 grid-cols-1  sm:grid-cols-2 lg:grid-cols-2  ">
  <div class="col-span-1">
    <div class="flex mb-2 items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 12.5a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7ZM10.5 16a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0Z"/><path fill="currentColor" d="M17.526 5.116L14.347.659L2.658 9.997L2.01 9.99V10H1.5v12h21V10h-.962l-1.914-5.599l-2.098.715ZM19.425 10H9.397l7.469-2.546l1.522-.487L19.425 10ZM15.55 5.79L7.84 8.418l6.106-4.878l1.604 2.25ZM3.5 18.169v-4.34A3.008 3.008 0 0 0 5.33 12h13.34a3.009 3.009 0 0 0 1.83 1.83v4.34A3.009 3.009 0 0 0 18.67 20H5.332A3.01 3.01 0 0 0 3.5 18.169Z"/></svg><span class="text-sm text-gray-500 dark:text-gray-900">Salary :</span>
        <span class="bg-gray-100 text-gray-800 text-xs ms-2 me-2 font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">14k Php</span>
        
    </div>

     <div class="flex mb-2 items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="24" height="24" viewBox="0 0 256 256"><path fill="currentColor" d="M152 112a8 8 0 0 1-8 8h-32a8 8 0 0 1 0-16h32a8 8 0 0 1 8 8Zm80-40v128a16 16 0 0 1-16 16H40a16 16 0 0 1-16-16V72a16 16 0 0 1 16-16h40v-8a24 24 0 0 1 24-24h48a24 24 0 0 1 24 24v8h40a16 16 0 0 1 16 16ZM96 56h64v-8a8 8 0 0 0-8-8h-48a8 8 0 0 0-8 8Zm120 57.61V72H40v41.61A184 184 0 0 0 128 136a184 184 0 0 0 88-22.39Z"/></svg> <span class="text-sm text-gray-500 dark:text-gray-900">Job Type :</span>
        <span class="bg-gray-100 text-gray-800 text-xs ms-2 me-1 font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Full-time</span>
        <span class="bg-gray-100 text-gray-800 text-xs ms-2 me-1 font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Work from home</span>
  
    </div>

     <div class="flex mb-2 items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="24" height="24" viewBox="0 0 48 48"><mask id="ipSTime0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z"/><path stroke="#000" stroke-linecap="round" d="M24.008 12v12.01l8.479 8.48"/></g></mask><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSTime0)"/></svg> <span class="text-sm text-gray-500 dark:text-gray-900">Shift Schedule :</span>
        <span class="bg-gray-100 text-gray-800 text-xs ms-2 me-2 font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Monday to Friday</span>
  
        <span class="bg-gray-100 text-gray-800 text-xs ms-2 me-2 font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">8 hours shift</span>
  
        <span class="bg-gray-100 text-gray-800 text-xs ms-2 me-2 font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Weekends</span>
  
    </div>
  </div>


<div class="col-span-1">
 
    <div class="flex mb-2 items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 12.5a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7ZM10.5 16a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0Z"/>
            <path fill="currentColor" d="M17.526 5.116L14.347.659L2.658 9.997L2.01 9.99V10H1.5v12h21V10h-.962l-1.914-5.599l-2.098.715ZM19.425 
            10H9.397l7.469-2.546l1.522-.487L19.425 10ZM15.55 5.79L7.84 8.418l6.106-4.878l1.604 2.25ZM3.5 18.169v-4.34A3.008 3.008 0 0 0 5.33 
            12h13.34a3.009 3.009 0 0 0 1.83 1.83v4.34A3.009 3.009 0 0 0 18.67 20H5.332A3.01 3.01 0 0 0 3.5 18.169Z"/></svg><span class="text-sm 
            text-gray-500 dark:text-gray-900">Email :</span>
        <span class="text-gray-800 text-small ms-2 me-2 font-medium  rounded  dark:text-gray-700">companyemail@gmail.com</span>
        
    </div>

    <div class="flex mb-2 items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 12.5a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7ZM10.5 16a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0Z"/>
            <path fill="currentColor" d="M17.526 5.116L14.347.659L2.658 9.997L2.01 9.99V10H1.5v12h21V10h-.962l-1.914-5.599l-2.098.715ZM19.425 
            10H9.397l7.469-2.546l1.522-.487L19.425 10ZM15.55 5.79L7.84 8.418l6.106-4.878l1.604 2.25ZM3.5 18.169v-4.34A3.008 3.008 0 0 0 5.33 
            12h13.34a3.009 3.009 0 0 0 1.83 1.83v4.34A3.009 3.009 0 0 0 18.67 20H5.332A3.01 3.01 0 0 0 3.5 18.169Z"/></svg><span class="text-sm 
            text-gray-500 dark:text-gray-900">Contact :</span>
            <span class="text-gray-800 text-small ms-2 me-2 font-medium  rounded  dark:text-gray-700">09917384950</span>
    </div>

    <div class="flex mb-2 items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 12.5a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7ZM10.5 16a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0Z"/>
            <path fill="currentColor" d="M17.526 5.116L14.347.659L2.658 9.997L2.01 9.99V10H1.5v12h21V10h-.962l-1.914-5.599l-2.098.715ZM19.425 
            10H9.397l7.469-2.546l1.522-.487L19.425 10ZM15.55 5.79L7.84 8.418l6.106-4.878l1.604 2.25ZM3.5 18.169v-4.34A3.008 3.008 0 0 0 5.33 
            12h13.34a3.009 3.009 0 0 0 1.83 1.83v4.34A3.009 3.009 0 0 0 18.67 20H5.332A3.01 3.01 0 0 0 3.5 18.169Z"/></svg><span class="text-sm 
            text-gray-500 dark:text-gray-900">Applications end in :</span>
            <span class="bg-red-100 text-gray-800 text-xs ms-2 me-2 font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-700 dark:text-gray-200">August 32, 2023</span>
  
    </div>
</div>

        </div>
   
   
</div>

                  <div >
                <div class="text-black me-8 text-justify">
                    <div class="About-Company">
                        <h2 class="mt-5 font-bold text-lg text-black mb-2">ABOUT (COMPANY)</h2>
                        <p class="text-base">The Department is the primary government agency responsible for conservation, management, 
                            development and proper use of the country's environment and natural resources, specifically 
                            forest and grazing lands, mineral resources, including those in reservation and watershed areas, 
                            and lands of public domain. as well as the licensing and regulation of all natural resources as
                             may be provided for by law in order to ensure equitable sharing of the benefits derived therefrom 
                             for the welfare of the present and future generations of Filipinos. </p>
                             
                    </div>

                    <div class="Job Description">
                        <h2 class="mt-5 font-bold  text-lg text-black mb-2">Full Job Description</h2>
                       <div class="ms-4">
                        <p class="text-base">1. Provide administrative support in the planning, formulating and implementing a records management 
                            and archival administration program for the efficient creation, utilization, maintenance, retention, storage, 
                            preservation, conservation and disposal of public records including the adoption of security measures and vital 
                            records protection program for the Agency; </p>

                        <p class="text-base">
                            2. Provide administrative support for knowledge management activities 
                        which includes coordination with other units within the organization for capturing knowledge of employees that 
                        should be shared and retained within the organization; 
                        </p>

                        <p class="text-base">
                            3. Assist in preparing documents for meetings and presentations
                            during knowledge sharing sessions and related activities; 
                        </p>
                        <p class="text-base">
                            4. Assist in the development and maintenance of an efficient 
                            records system; and 
                        </p>
                        <p class="text-base">
                            5. Perform other duties of a regular or special nature as may be assigned from time to time. 
                        </p>

                       </div>
                    </div>
                  
                 
                    <div class="Responsibilities">

                        <div class="About-Company">
                            <h2 class="mt-5 text-lg font-bold  text-black mb-2">Responsibilities</h2>
                             <div class="ms-4">
                                <p class="text-base">The Department is the primary government agency responsible for conservation, management, 
                                    development and proper use of the country's environment and natural resources, specifically 
                                    forest and grazing lands, mineral resources, including those in reservation and watershed areas, 
                                    and lands of public domain. as well as the licensing and regulation of all natural resources as
                                     may be provided for by law in order to ensure equitable sharing of the benefits derived therefrom 
                                     for the welfare of the present and future generations of Filipinos. </p>
    
                                    
                                </div>
                          
                        </div>
                    </div>
                

                    <div class="Skills">
                        <h2 class="mt-5 text-lg font-bold  text-black mb-2">Skills</h2>

                        <div class="ms-4">
                            <p class="text-base">1. Provide administrative support in the planning, formulating and implementing a records management 
                                and archival administration program for the efficient creation, utilization, maintenance, retention, storage, 
                                preservation, conservation and disposal of public records including the adoption of security measures and vital 
                                records protection program for the Agency; </p>
                                <p class="text-base">2. Provide administrative support in the planning, formulating and implementing a records management 
                                    and archival administration program for the efficient creation, utilization, maintenance, retention, storage, 
                                    preservation, conservation and disposal of public records including the adoption of security measures and vital 
                                    records protection program for the Agency; </p>
                        </div>
                      
                    </div>

                    <div class="Qualifications">
                        <h2 class="mt-5 text-lg font-bold  text-black mb-2">Qualifications</h2>
                  <div class="ms-4">
                         
                    <p class="text-base">
                        <span class="inline-flex items-center p-1 mr-2 text-sm font-semibold text-blue-800 bg-blue-100 rounded-full dark:bg-gray-700 dark:text-blue-400">
                            <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Icon description</span>
                          </span>
                        High school diploma or equivalent; associate's degree or relevant certification is preferred.
                    </p>

                    <p class="text-base">
                        <span class="inline-flex items-center p-1 mr-2 text-sm font-semibold text-blue-800 bg-blue-100 rounded-full dark:bg-gray-700 dark:text-blue-400">
                            <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Icon description</span>
                          </span>
                        Previous experience in a medical administrative role or similar position is highly desirable.
                    </p>
                    <p class="text-base">
                        <span class="inline-flex items-center p-1 mr-2 text-sm font-semibold text-blue-800 bg-blue-100 rounded-full dark:bg-gray-700 dark:text-blue-400">
                            <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Icon description</span>
                          </span>
                        Hands on experience and proficiency in using Athena Billing Software is a requirement
                    </p>
                    <p class="text-base">
                        <span class="inline-flex items-center p-1 mr-2 text-sm font-semibold text-blue-800 bg-blue-100 rounded-full dark:bg-gray-700 dark:text-blue-400">
                            <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Icon description</span>
                          </span>
                        Strong computer skills, including proficiency in Microsoft Office Suite and email management.
                    </p>
                  </div>

                    </div>
                 
                    <div class="Education">
                        <h2 class="mt-5 font-bold  text-lg text-black">Education</h2>
                        <div class="ms-4">
                            <p class="text-base">I.T. Bachelor Degree </p>
                        </div>
                       
                    </div>
                 
                    <div class="Education">
                        <h2 class="mt-5 font-bold  text-lg text-black">Benefit and Others</h2>
                  <div class="ms-4">
                    <p class="text-base">
                        SSS, Philhealth, Pag-Ibig
                    </p>
                    <p class="text-base">
                        13th Month Pay
                    </p>
                    <p class="text-base">
                        HMO and Life Insurance (AVEGA)
                    </p>
                  </div>
                    </div>
                 
                </div>
              
                <hr class="h-1 my-2  bg-gray-200 border-0 dark:bg-gray-700 me-2">

                <div class="BottomButton mb-2">


                    <div class="flex justify-between mx-10">
                        <button type="button" class="px-6 py-3.5 text-base font-medium text-white inline-flex items-center bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white mr-2" viewBox="0 0 256 256"><path fill="currentColor" d="M224 48v120a8 8 0 0 1-2.76 6c-15.28 13.23-29.89 18-43.82 18c-18.91 0-36.57-8.74-53-16.85C97.87 162 74.79 150.61 48 171.77V216a8 8 0 0 1-16 0V48a8 8 0 0 1 2.77-6c36-31.18 68.31-15.21 96.79-1.12C159 54.46 182.79 66.2 210.76 42A8 8 0 0 1 224 48Z"/></svg>
                          
                            REPORT JOB
                          </button>
                          <button type="button" class="px-6 py-3.5 text-base font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white mr-2" viewBox="0 0 512 512"><path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480v-83.6c0-4 1.5-7.8 4.2-10.7l167.6-182.9c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8l-88.3-44.2C7.1 311.3.3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"/></svg>


                            APPLY NOW
                          </button>
                    </div>
                </div>


                  </div>
                  <!-- TABLE -->


                
              </div>   <!-- OVERFLOW HERE -->


              </div>
                
                
             </div>
             
         </div>
         <!-- LATEST JOBS POSTED -->
                             
                                </div>
                            </div>
                           
               
                    </div>
                       </div>
                     <!-- News -->


                     
                   <div class="relative isolate overflow-hidden rounded-md mx-2  mb-10">
                    <div class="px-20 pb-15 ">
                           
                            <div>
                               <div class="flex justify-center">
                               
                                <div class="mx-10 p-10 ">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">GET UPDATED IMMEDIATELY WHEN WE POST NEW JOB OFFERS FROM</h5>
                                               

                           
                                    <hr class="h-px my-2  bg-gray-200 border-0 dark:bg-gray-700">

                                    <form>   
                                        <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-black">Search</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500 dark:text-gray-400" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5l-8-5V6l8 5l8-5v2z"/></svg>


                                              
                                            </div>
                                            <input type="search" id="search" class="block w-full p-4 pl-10 text-sm text-white border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your email address" required>
                                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subscribe</button>
                                        </div>
                                    </form>
                                    
                                   

                                </div>
                                
                          
                             
                             
                                </div>
                            </div>
                           
               
                    </div>
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
