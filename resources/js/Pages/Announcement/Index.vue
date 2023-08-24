<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3'
import { useForm, Head } from '@inertiajs/vue3';


// Components
import HomeNav from '@/Layouts/HomeNav.vue';
import Footer from '@/Layouts/Footer.vue';

const currentPath = ref(window.location.pathname);

const isActiveLink = (path) => {
  return currentPath.value === path;
};



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
    <Head title="Announcements" />
  
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
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-20 justify-center">
            <img :src="baseurl+'/images/AnnouncementBanner.jpg'" alt="" class="absolute inset-0 -z-10 h-full w-full fill-current object-right md:object-center" />
               
            <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
              <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
            </div>
            <!-- max-auto removed here -->
       


<div class="mx-auto w-full lg:py-4 flex justify-center">
    <div class="flex">
        <div>
            <img :src="baseurl+'/images/LoudSpeaker.png'" class="w-44 h-44 max-w-xl me-10 rounded-lg" alt="image description">
        </div>
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-6xl font-bold tracking-tight text-gray-900 dark:text-white">ANNOUNCEMENTS</h5>

        <form>   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 
                rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400
                 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Announcement " required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>

              </div>

    </div>
  
 
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
                               <div class="grid gap-8 sm:mt-20 grid-cols-1  sm:grid-cols-5 lg:grid-cols-5 ">
                               
                                <div class="mx-10 p-10 shadow-2xl col-span-5">
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Page > All
                                    </p>

                                    <div class="flex">
                                        <Link :href="route('home')" class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-red-400 mr-8"
                                        >
                                         All
                                        </Link>
                                        <Link :href="route('home')" class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-red-400 mr-8"
                                        >
                                         News
                                        </Link>
                                        <Link :href="route('home')" class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-red-400 mr-8"
                                        >
                                         Announcements
                                        </Link>
                                        <Link :href="route('home')" class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-red-400 mr-8"
                                        >
                                         Acivities
                                        </Link>
                                         
                                    </div>
                               
                                    <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">

                                    <div class="flex flex-col mb-2 items-center justify-start bg-white border border-gray-200 shadow md:flex-row md:max-w-full dark:border-gray-700 dark:bg-gray-800">
                                        <div class="mx-10 text-center">
                                            <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                                Jun 03
                                            </div>
                                            <div class="font-normal text-gray-700 dark:text-gray-400 flex items-center">
                                                <span class="mr-1">03:00</span>
                                                <span class="text-sm">A.M.</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col p-4 leading-normal border-l-4 border-indigo-500">
                                            <div class="flex">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">AXOLIOS NEWS</h5>
                                                <div class="ms-4 flex items-center">
                                                    <button type="button" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 
                                                    hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800
                                                    shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm 
                                                    px-3 py-1 text-center mr-2 mb-2">Read more</button>
                                                </div>
                                            </div>
                                          
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                                Our team of experts scours the latest headlines to provide you with news that impacts your professional life.
                                                From industry trends and job market reports to career advice and workplace culture, our News Section is your
                                                resource for all things related to your professional aspirations ....
                                            </p>
                                        
                                        </div>
                                    </div>
 
                             
                                   

                                </div>
                                
                          
                             
                             
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
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">GET ALL THE LATEST NEWS AND UPDATE FROM AXOLIOS</h5>
                                               

                           
                                    <hr class="h-px my-2  bg-gray-200 border-0 dark:bg-gray-700">

                                    <form>   
                                        <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500 dark:text-gray-400" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5l-8-5V6l8 5l8-5v2z"/></svg>


                                              
                                            </div>
                                            <input type="search" id="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your email address" required>
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
