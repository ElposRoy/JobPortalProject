<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Sidebar from '@/Layouts/Sidebar.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import { Head } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';

import Slide from '@/Components/Slide.vue'
import Carousel from '@/Components/Carousel.vue'

const baseurl = ref('');
onMounted(() => {
  baseurl.value = location.origin;
});


</script>

<script>




    export default {
  data() {
    return {

       

      baseurl: location.origin,
      carouselSlides: [
        { title: 'Job-Type', key: 'Type' },
        { title: 'Job-Type', key: 'Type' },
        { title: 'Job-Type', key: 'Type' },
        
      ],
      carouselCards: [
        { title: 'Job-Type', key: 'Type' },
        { position: 'Position', key: 'Job_position' },
        { posted: 'Posted', key: 'Posted' },
        
      ],

    
    };
  },
  computed: {
    totalCarouselCards() {
        return Math.ceil(this.carouselCards.length / 3);
      
    },
   
  },

  mounted() {
   
  },
  
};

</script>

<template>
    <Head title="Jobseeker Dashboard" />

    <Sidebar>
      
        <div class="p-4 sm:ml-64">


         
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

               <!-- Alert when no Resume found for jobseeker -->
               <div id="alert-additional-content-1" class="p-4 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
                  <div class="flex items-center">
                    <svg class="flex-shrink-0 w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium">You have not yet created a resume profile</h3>
                  </div>
                  <div class="mt-2 mb-4 text-sm">
                     Creating a resume profile in your it is essential for job seekers because it allows
                      to present your qualifications, skills, and work experience in a structured and professional manner.</div>
                  <div class="flex">
                    <button type="button" class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      <svg class="-ml-0.5 mr-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                        <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                      </svg>
                      Create Resume
                    </button>
                    <button type="button" class="text-blue-800 bg-transparent border border-blue-800 hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-blue-600 dark:border-blue-600 dark:text-blue-400 dark:hover:text-white dark:focus:ring-blue-800" data-dismiss-target="#alert-additional-content-1" aria-label="Close">
                      Dismiss
                    </button>
                  </div>
                </div>


                <!-- First Row  -->
               <div class="grid grid-cols-3 gap-4 mb-4">

                 <!-- Application -->
                  <a href="your_link_here" class="">
                     <div class="flex p-4 h-24 rounded  border border-gray-200 
                     rounded-lg shadow md:flex-row md:max-w-xl hover:bg-sky-100 dark:border-gray-700 dark:bg-gray-800 
                     dark:hover:bg-sky-800">
                         <div class="flex items-center space-x-10">
                             <div class="flex-shrink-0">
                                 <img class="w-14 h-14" :src="baseurl+'/images/Resume-Jobseeker.png'" alt="Neil image">
                             </div>
                             <div class="flex-1 min-w-0">
                                 <p class="text-2xl text-gray-200 dark:text-gray-200">
                                     Applications
                                 </p>
                                 <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                     Your Pending Applications
                                 </p>
                             </div>
                             <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                 $320
                             </div>
                         </div>
                     </div>
                 </a>
                 
                 <!-- Something -->
                 <a href="your_link_here" class="">
                  <div class="flex p-4 h-24 rounded  border border-gray-200 
                  rounded-lg shadow md:flex-row md:max-w-xl hover:bg-sky-100 dark:border-gray-700 dark:bg-gray-800 
                  dark:hover:bg-sky-800">
                      <div class="flex items-center space-x-10">
                          <div class="flex-shrink-0">
                              <img class="w-14 h-14" :src="baseurl+'/images/Resume-Jobseeker.png'" alt="Neil image">
                          </div>
                          <div class="flex-1 min-w-0">
                              <p class="text-2xl text-gray-200 dark:text-gray-200">
                                  Something
                              </p>
                              <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                  Your Pending Applications
                              </p>
                          </div>
                          <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                              $320
                          </div>
                      </div>
                  </div>
              </a>

              <!-- Something -->
              <a href="your_link_here" class="">
               <div class="flex p-4 h-24 rounded  border border-gray-200 
               rounded-lg shadow md:flex-row md:max-w-xl hover:bg-sky-100 dark:border-gray-700 dark:bg-gray-800 
               dark:hover:bg-sky-800">
                   <div class="flex items-center space-x-10">
                       <div class="flex-shrink-0">
                           <img class="w-14 h-14" :src="baseurl+'/images/Resume-Jobseeker.png'" alt="Neil image">
                       </div>
                       <div class="flex-1 min-w-0">
                           <p class="text-2xl text-gray-200 dark:text-gray-200">
                               Other
                           </p>
                           <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                               Your Pending Applications
                           </p>
                       </div>
                       <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                           $320
                       </div>
                   </div>
               </div>
           </a>

               </div>

               <!-- 2nd row Recommended jobs -->
              
               <div class=" mb-4 rounded bg-gray-50 dark:bg-gray-800">    
               
                
                  <div class="flex items-center justify-center  rounded bg-gray-50 dark:bg-gray-800">
                     <p class="text-3xl text-gray-300 dark:text-gray-200 mt-10">
                       RECOMMENDED JOBS
                     </p>
                  </div>
                  
            <Carousel 
            :navigation="true" 
            :pagination="true"
            :start-auto-play="true"
            :timeout="10000"
            class="carousel" 
            v-slot="{currentSlide}"
            >
       
            <!-- Carousel Cards is the numbers of how many slides or paginate  v-for="(job, index) in carouselCards" :key="index"-->
        <Slide v-for="(slide, index) in carouselSlides" :key="index">
            <div v-show="currentSlide === index + 1 " class="slide-info ms-10 me-10 mb-10 absolute flex justify-center items-center inset-0">
            
        <div class="card-jobs m-5 w-full" v-for="(job, index) in carouselCards" :key="index">
    
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    
                <h5 class="mb-2 text-1xl font-semibold tracking-tight text-gray-400 ">Full-time</h5>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Personal Assistant</h5>
                    <h5 class="mb-2 text-2lg font-semibold tracking-tight text-gray-800 dark:text-white">Pasig, Makati City</h5>
                    <h5 class="mb-2 text-1xl font-semibold tracking-tight text-gray-400">4 Days ago</h5>
                </a>

                <div class="flex justify-center mt-5">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 
                    focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full 
                    text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 
                    dark:focus:ring-blue-800">More Info</button>
                </div>
                
            </div>
    
        </div>
             
    
            </div>
          </Slide>
          
      </Carousel>
      
   </div> 
            <!-- 2nd row Recommended jobs -->

            <!-- 4 cards in 3 row -->
               <div class="grid grid-cols-2 gap-4 mb-4">
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
               </div>
            <!-- 4 cards in 3 row -->

               <!-- 4 row  -->
               <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                    Job Advertisement
                  </p>
               </div>
               <!-- 4 row  -->

                 <!-- 5 row  -->
                 <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     News / Announcement 
                  </p>
               </div>
               <!-- 5 row  -->
               
               <div class="grid grid-cols-2 gap-4">
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
               </div>
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

.carousel {
    position : relative;
    max-height: 35vh;
    height: 100vh;

  }
 

</style>

