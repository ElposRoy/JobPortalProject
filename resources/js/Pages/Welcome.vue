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


const role = '';




function toRegister(rolePicked) {
  const role = rolePicked;
  const url = `${window.location.origin}/register?role=${encodeURIComponent(role)}`;
  window.location.href = url;
}

</script>

<script>
export default {
    data (){
        return ({
            baseurl: location.origin,
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
        class="relative absolute sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-lighter bg-center  dark:bg-dots-lighter selection:bg-blue-700 selection:text-white"
    >
    
      <!-- max-auto removed here -->
        <div class="max-w-8xl ">
            <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-20 justify-center">
                <!-- <div class="absolute inset-0 -z-10 h-full w-full object-right md:object-center">
                    
                </div> -->
                <img :src="baseurl+'/images/HomeBanner.jpg'" alt="" class="absolute inset-0 -z-10 h-full w-full fill-current object-right md:object-center" />
               
                <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
                  <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
                </div>
                <!-- max-auto removed here -->
                <div class=" max-w-4xl px-2 lg:px-8">
                      <!-- max-auto removed here -->
                  <div class=" max-w-1xl lg:mx-0">
                    <span class="bg-blue-100  text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">-Axolios Online Job Portal</span>
                   
                        <p class=" mt-5 font-bold tracking-tight text-white sm:text-6xl tracking-wide drop-shadow-xl">EXPERIENCE A FRESH WAY TO LOOK FOR A JOB</p>
                  
                
                    <div class=" max-w-3xl lg:px-2 text-justify">
                        <div class="mx-auto mt-5 max-w-2xl lg:mx-0 lg:max-w-none">
          
                          <!-- <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                            <a v-for="link in links" :key="link.name" :href="link.href">{{ link.name }} <span aria-hidden="true">&rarr;</span></a>
                          </div> -->
                      
                       <div class="mb-5">
                        <h2 class="text-2xl font-bold tracking-tight text-white sm:text-2xl">SEARCH POSTED JOBS</h2>
                        <span 
                        class="bg-blue-100  text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 
                        dark:text-white-400 border border-blue-400">Stay informed with our newly posted job offers! Easiest way to get your dream job.</span>
                       </div>
                          <dl class="mt-2 grid grid-cols-1 gap-3 sm:mt-2 sm:grid-cols-3 lg:grid-cols-3">
                             
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
              <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by category" required>
          </div>
          
          <!-- Search Magnifying Button -->
          
          
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px- rounded-full text-1xl">
              SEARCH
            </button>
                          </dl>
                        </div>
          
                    </div>
  
                      </div>
                
                </div>
    

    <div class="mx-auto w-full p-4 py-6 ms-8 mt-10 lg:py-8">
      <div class="sm:flex sm:items-center sm:justify-start">
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


              </div>

              
              <div class="isolate overflow-hidden my-5 rounded-md mx-10">
                <span class="flex text-md text-gray-500 sm:text-center dark:text-gray-400  justify-center">Axolios is  an newly and advanced onlime job portal platform trusted by leading employer brands</span>
                <div class="flex justify-center">
                    <dl class="grid grid-cols-1 gap-8  my-3 sm:grid-cols-2  md:grid-cols-4 lg:grid-cols-5 ">

                        
                        <span>
                            <img class="fill-current h-14 w-14 mr-2" :src="baseurl+'/images/Logo.png'">
                        </span>
                     
                        <span>
                            <img class="fill-current h-14 w-14 mr-2" :src="baseurl+'/images/Logo.png'">
                        </span>
                     
                        
                        <span>
                            <img class="fill-current h-14 w-14 mr-2" :src="baseurl+'/images/Logo.png'">
                        </span>
                     
                        
                        <span>
                            <img class="fill-current h-14 w-14 mr-2" :src="baseurl+'/images/Logo.png'">
                        </span>
                     
                        
                        <span>
                            <img class="fill-current h-14 w-14 mr-2" :src="baseurl+'/images/Logo.png'">
                        </span>
                     
    
                    </dl>
    
                </div>
             
                </div>
                
                <!-- Announcement Carousel here -->

                <!-- Announcement Carousel here -->


            <div class="mt-10 px-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        

                
                    <a @click="toRegister('Jobseeker')" class="cursor-pointer flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"  :src="baseurl+'/images/JobseekerRegister.png'" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">JOBSEEKER REGISTER</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Discover a world of opportunities and take your career to new heights by registering as a job seeker on our innovative and user-friendly job portal website.</p>
                        </div>
                        
                    </a>
                    
                    
             



                    <a @click="toRegister('Employer')"  class="cursor-pointer flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto p-5 md:w-48 md:rounded-none md:rounded-l-lg" :src="baseurl+'/images/EmployerRegister.png'" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">EMPLOYER REGISTER</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Unlock the power to find the perfect candidates for your organization's success by registering as an employer on our cutting-edge job portal website. 
                                Streamline your hiring process and connect with top talent like never before.</p>
                        </div>
                        
                    </a>
                    
                    

        
                
                </div>
            </div>

            
           
             

              <div class="relative isolate overflow-hidden rounded-md mx-2 my-15 mb-10">
             <div class="px-20 pb-15 ">
                     <!-- How it Work Part -->
                     <div>
                        <dl class="grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-4 lg:grid-cols-4 text-center">
                        
                   

                               
                        <div class="max-w-full shadow shadow-xl bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 ">
                            <a href="#">
                                <img :src="baseurl+'/images/CreateResumeCard.jpg'" alt=""  class="rounded-t-lg  transition duration-300 ease-in-out hover:scale-110" />
                        
                            </a>
                            <div class="p-5 ">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center dark:text-white">Create a Resume</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    Creating a resume on a job portal is vital for presenting your skills and experience to potential employers efficiently. </p>
                            
                            </div>
                        </div>

        
                        <div class="max-w-full shadow shadow-xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img :src="baseurl+'/images/BuildProfileCard.jpg'" alt=""  class="rounded-t-lg  transition duration-300 ease-in-out hover:scale-110" />
                        
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center dark:text-white">Build Profile</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Showcases your skills, experience, and qualifications to potential employers or collaborators.</p>
                               
                            </div>
                        </div>
                        <div class="max-w-full shadow shadow-xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img :src="baseurl+'/images/SearchJobCard.jpg'" alt=""  class="rounded-t-lg  transition duration-300 ease-in-out hover:scale-110" />
                        
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center dark:text-white">Find your job</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> It encourages users to utilize the platform's resources to search and apply for job opportunities that match their skills and preferences. </p>
                               
                            </div>
                        </div>
                        <div class="max-w-full shadow shadow-xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img :src="baseurl+'/images/SubmitCard.jpg'" alt=""  class="rounded-t-lg  transition duration-300 ease-in-out hover:scale-110" />
                        
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center dark:text-white">Submit your application</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Submitting your application increases visibility, and enables efficient communication with  employers.</p>
                               
                            </div>
                        </div>
                            
                         </dl>
                     </div>
                     
                        <!-- How it work -->
        
             </div>
                </div>

                       <!-- News -->
             
                       <div class="relative isolate overflow-hidden rounded-md mx-2 my-15 mb-10">
                        <div class="px-20 pb-15 ">
                               
                                <div>
                                   <div class="grid gap-8 sm:mt-20 grid-cols-1  sm:grid-cols-5 lg:grid-cols-5 ">
                                   
                                    <div class="m-1 shadow-2xl col-span-5">
                                        <div href="#" class="flex flex-col items-center justify-center bg-white border border-gray-200 rounded-t-lg shadow md:flex-row md:max-w-full dark:border-gray-700 dark:bg-gray-800">
                                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-60 md:rounded-none md:rounded-l-lg p-5" :src="baseurl+'/images/NewsPaper.png'" alt="">
                                            <div class="flex flex-col justify-between p-4 leading-normal text-center">
                                                <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">AXOLIOS NEWS</h5>
                                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                                    Our team of experts scours the latest headlines to provide you with news that impacts your professional life.
                                                    From industry trends and job market reports to career advice and workplace culture, our News Section is your
                                                    resource for all things related to your professional aspirations.
                                                </p>
                                                <div class="flex items-center justify-center"> <!-- Wrapping div for center-aligning the button -->
                                                    <button type="button" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 
                                                    hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800
                                                    shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm 
                                                    px-5 py-2.5 text-center mr-2 mb-2">READ MORE</button>
                                                </div>
                                            </div>
                                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-60 md:rounded-none md:rounded-l-lg p-5" :src="baseurl+'/images/NewsPaper.png'" alt="">
                                        </div>
                                        <div class="max-w-full shadow shadow-xl bg-white border border-gray-200 dark:bg-gray-100 dark:border-gray-700 ">
                                       
                                            <div class="p-5 ">
                                                <dl class="mt-2 grid grid-cols-1 gap-3 sm:mt-2 sm:grid-cols-3 lg:grid-cols-5">
                                                             <!-- CARD NEWS -->
                               <div class="m-1 col-span-1 shadow-2xl col-span-1">
                                <div class="m-1 shadow-2xl">
                                    <div class="max-w-full shadow shadow-sm bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 ">
                                        <a href="#">
                                            <img :src="baseurl+'/images/CreateResumeCard.jpg'" alt=""  class="rounded-t-lg  " />
                                    
                                        </a>
                                        <div class="p-5 ">
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center dark:text-white">Create a Resume</h5>
                                            </a>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        
                                        </div>
                                    </div>
                                </div>
                               </div>
                                 <!-- CARD NEWS -->

                                          <!-- CARD NEWS -->
                               <div class="m-1 col-span-1 shadow-2xl col-span-1">
                                <div class="m-1 shadow-2xl">
                                    <div class="max-w-full shadow shadow-sm bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 ">
                                        <a href="#">
                                            <img :src="baseurl+'/images/CreateResumeCard.jpg'" alt=""  class="rounded-t-lg  " />
                                    
                                        </a>
                                        <div class="p-5 ">
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center dark:text-white">Create a Resume</h5>
                                            </a>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        
                                        </div>
                                    </div>
                                </div>
                               </div>
                                 <!-- CARD NEWS -->

                                          <!-- CARD NEWS -->
                               <div class="m-1 col-span-1 shadow-2xl col-span-1">
                                <div class="m-1 shadow-2xl">
                                    <div class="max-w-full shadow shadow-sm bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 ">
                                        <a href="#">
                                            <img :src="baseurl+'/images/CreateResumeCard.jpg'" alt=""  class="rounded-t-lg  " />
                                    
                                        </a>
                                        <div class="p-5 ">
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center dark:text-white">Create a Resume</h5>
                                            </a>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        
                                        </div>
                                    </div>
                                </div>
                               </div>
                                 <!-- CARD NEWS -->
                                          <!-- CARD NEWS -->
                               <div class="m-1 col-span-1 shadow-2xl col-span-1">
                                <div class="m-1 shadow-2xl">
                                    <div class="max-w-full shadow shadow-sm bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 ">
                                        <a href="#">
                                            <img :src="baseurl+'/images/CreateResumeCard.jpg'" alt=""  class="rounded-t-lg  " />
                                    
                                        </a>
                                        <div class="p-5 ">
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center dark:text-white">Create a Resume</h5>
                                            </a>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        
                                        </div>
                                    </div>
                                </div>
                               </div>
                                 <!-- CARD NEWS -->
                                          <!-- CARD NEWS -->
                               <div class="m-1 col-span-1 shadow-2xl col-span-1">
                                <div class="m-1 shadow-2xl">
                                    <div class="max-w-full shadow shadow-sm bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 ">
                                        <a href="#">
                                            <img :src="baseurl+'/images/CreateResumeCard.jpg'" alt=""  class="rounded-t-lg  " />
                                    
                                        </a>
                                        <div class="p-5 ">
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center dark:text-white">Create a Resume</h5>
                                            </a>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        
                                        </div>
                                    </div>
                                </div>
                               </div>
                                 <!-- CARD NEWS -->
                                                    </dl>
                   
                                            </div>
                                        </div>
                                    </div>
                                    
                       

                                 
                                    </div>
                                </div>
                               
                   
                        </div>
                           </div>
                         <!-- News -->



            <!-- Second Part -->
              <div class="p-10 my-10"> 
                <div class="isolate overflow-hidden my-5 rounded-md mx-10 text-center flex justify-center">
                    <span class="bg-purple-100 text-purple-800 text-2xl font-medium mr-2 px-5 py-0.5 rounded-full dark:bg-purple-900 dark:text-purple-300">LATEST JOB POSTED</span>
                  
                
                 
                    </div>
                    
    <!-- Third Container -->
            <div class="mt-14 px-20 ">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 lg:gap-10">
                <div class="w-full border-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-white dark:border-gray-300">
                    <div class="flex justify-between px-4 pt-4">
                      
                         <div class="items-center">
                            <span class="items-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">Green</span>
                         </div>
                         <div class="items-center">
                            <button type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                  <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                                </svg>
                                <span class="sr-only">Icon description</span>
                              </button>
                            </div>
                         
                     
                    
                    </div>
                    <div class="flex flex-col items-center pb-10">
                  

                        <img class="w-24 h-24  my-5 rounded-full shadow-lg ring-2 ring-gray-300 dark:ring-gray-500" :src="baseurl+'/images/Logo.png'" />
       
                 
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-gray-700">Back-end Developer</h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Rizal St. Sorsogon City </span>
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white 
                            bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 
                            dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Apply now</a>
                              </div>
                    </div>
                </div>

                  
                <div class="w-full border-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-white dark:border-gray-300">
                    <div class="flex justify-between px-4 pt-4">
                      
                         <div class="items-center">
                            <span class="items-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">Green</span>
                         </div>
                         <div class="items-center">
                            <button type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                  <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                                </svg>
                                <span class="sr-only">Icon description</span>
                              </button>
                            </div>
                         
                     
                    
                    </div>
                    <div class="flex flex-col items-center pb-10">
                  

                        <img class="w-24 h-24  my-5 rounded-full shadow-lg ring-2 ring-gray-300 dark:ring-gray-500" :src="baseurl+'/images/Logo.png'" />
       
                 
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-gray-700">PHP Back-end Web Developer</h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Rizal St. Sorsogon City </span>
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white 
                            bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 
                            dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Apply now</a>
                              </div>
                    </div>
                </div>

                
                

                  
                <div class="w-full border-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-white dark:border-gray-300">
                    <div class="flex justify-between px-4 pt-4">
                      
                         <div class="items-center">
                            <span class="items-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">Green</span>
                         </div>
                         <div class="items-center">
                            <button type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                  <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                                </svg>
                                <span class="sr-only">Icon description</span>
                              </button>
                            </div>
                         
                     
                    
                    </div>
                    <div class="flex flex-col items-center pb-10">
                  

                        <img class="w-24 h-24  my-5 rounded-full shadow-lg ring-2 ring-gray-300 dark:ring-gray-500" :src="baseurl+'/images/Logo.png'" />
       
                 
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-gray-700">PHP Back-end Web Developer</h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Rizal St. Sorsogon City </span>
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white 
                            bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 
                            dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Apply now</a>
                              </div>
                    </div>
                </div>


                  
                <div class="w-full border-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-white dark:border-gray-300">
                    <div class="flex justify-between px-4 pt-4">
                      
                         <div class="items-center">
                            <span class="items-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">Green</span>
                         </div>
                         <div class="items-center">
                            <button type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                  <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                                </svg>
                                <span class="sr-only">Icon description</span>
                              </button>
                            </div>
                         
                     
                    
                    </div>
                    <div class="flex flex-col items-center pb-10">
                  

                        <img class="w-24 h-24  my-5 rounded-full shadow-lg ring-2 ring-gray-300 dark:ring-gray-500" :src="baseurl+'/images/Logo.png'" />
       
                 
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-gray-700">PHP Back-end Web Developer</h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Rizal St. Sorsogon City </span>
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white 
                            bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 
                            dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Apply now</a>
                              </div>
                    </div>
                </div>


                    <!-- NEWS -->
    
    
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
    




    <!-- <nav aria-label="  Page navigation example">
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
    </nav> -->
  
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
