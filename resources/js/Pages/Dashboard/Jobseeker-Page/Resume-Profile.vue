<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Sidebar from '@/Layouts/Sidebar.vue';

import { Head } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';


import Dialog from '@/Pages/Dashboard/Components/Dialog.vue';
import Tertiary from '@/Pages/Dashboard/Components/Tertiary.vue';

const baseurl = ref('');
onMounted(() => {
  baseurl.value = location.origin;
});


</script>

<script>
export default {
  
  data: () => ({

  
    dialogEducation: false,
 
   
  
    // prod:{}
  }
  ),
  computed: {
 
},

watch: {
  dialogEducation (val) {
    val || this.closeTertiaryDialog()
  },


},

created () {
  this.initialize()
},

methods: {

  initialize () {

  },

  openTertiaryDialog(){
    
    this.dialogEducation = true;
    console.log('asd');
   
  },

  closeTertiaryDialog(){
    this.dialogEducation = false;

  },


},
}
</script>

<template>
    <Head title="Jobseeker Dashboard" />

    <Sidebar>
      
        <div class="p-4 sm:ml-64">


         
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

               <!-- Alert when no Resume found for jobseeker -->
               <!-- <div id="alert-additional-content-1" class="p-4 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
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
                </div> -->


               <!-- 2nd row Recommended jobs -->
              
               <div class=" mb-4 p-10 rounded bg-gray-50 dark:bg-gray-800">    
               
                
                  <div class=" rounded bg-gray-50 dark:bg-gray-800">
                   
<form>
  <div class="">
    <h5 class="text-2xl font-bold tracking-tight text-white sm:text-2xl mb-4">STEP 1</h5>
  
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Formal Picture</label>
    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300 mb-5" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
    

    <hr class="w-full h-1 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-sky-700">

    <div class="grid md:grid-cols-4 md:gap-6 mt-5 mb-5 items-center">

      <div class="flex ">
        <h5 class="text-2sm font-bold tracking-tight text-white sm:text-1sm mb-4 me-5">Gender: </h5>
        <div class="flex-none items-center">
            <div class="flex-1 w-20 ">
                <div class="flex items-center mb-4">
                    <input id="default-radio-1" type="radio" value="" name="default-radio" 
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    
                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Male</label>
                </div>
            </div>
        </div>
        <div class="flex-none w-32 ">
            <div class="flex ">
                <input  id="default-radio-2" type="radio" value="" name="default-radio" 
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
            </div>
        </div>
      </div>

      <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="floating_Citizenship" id="floating_Citizenship" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_Citizenship" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Citizenship</label>
    </div>
    </div>
   
   
    
    <div class="grid md:grid-cols-4 md:gap-6">
      <div class="relative z-0 w-full mb-6 group">
          <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
      </div>
      <div class="relative z-0 w-full mb-6 group">
          <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
      </div>
      <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="floating_middle_name" id="floating_middle_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_middle_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Middle name</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="floating_suffix" id="floating_suffix" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_suffix" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Suffix</label>
    </div>
    


    </div>

    
    <div class="grid md:grid-cols-5 md:gap-6">
        
    <div class="col-span-1">
      <input type="number" id="helper-text" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Age">
    </div>
      <div class="relative z-0 w-full mb-6 group">
        <input type="number" id="helper-text" aria-describedby="helper-text-explanation" 
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
        focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Weight">
      </div>
      <div class="relative z-0 w-full mb-6 group">
        <input type="number" id="helper-text" aria-describedby="helper-text-explanation" 
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
        focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Height">
      </div>
   
      <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="floating_address" id="floating_address" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date of Birth</label>
    </div>
    
    <div class="relative z-0 w-full mb-6 group">
      <input type="text" name="floating_address" id="floating_address" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="floating_address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Birth Place</label>
  </div>
    </div>
    
    <!-- Blood Type -->
    <div class="grid md:grid-cols-4 md:gap-6">
   
    
      <div class="col-span-4">
        <h5 class="text-2sm font-bold tracking-tight text-white sm:text-1sm mb-4 me-5">Blood type: </h5>
        <div class="grid grid-cols-4 gap-4">
          
          <div class="flex items-center">
        
            <input id="blood-type-a" type="radio" value="" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-a" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type A+</label>
            
            
          </div>
          
          <div class="flex items-center">
            <input id="blood-type-b" type="radio" value="" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-b" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type B+</label>
          </div>
    
          <!-- Add the third blood type radio button -->
          <div class="flex items-center">
            <input id="blood-type-o" type="radio" value="" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type O+</label>
          </div>
          
          <div class="flex items-center">
            <input id="blood-type-o" type="radio" value="" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type AB</label>
          </div>
          
          <div class="flex items-center">
            <input id="blood-type-o" type="radio" value="" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type A-</label>
          </div>

          <div class="flex items-center">
            <input id="blood-type-o" type="radio" value="" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type B-</label>
          </div>

          <div class="flex items-center">
            <input id="blood-type-o" type="radio" value="" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type O-</label>
          </div>

          <div class="flex items-center">
            <input id="blood-type-o" type="radio" value="" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type AB-</label>
          </div>
          
        </div>
      </div>
    </div>
    

    <!-- Civil Status -->
    <div class="grid md:grid-cols-4 md:gap-6 mt-5 mb-5">
   
    
      <div class="col-span-4">
        <h5 class="text-2sm font-bold tracking-tight text-white sm:text-1sm mb-4 me-5">Civil Status: </h5>
        <div class="grid grid-cols-4 gap-4">
          
          <div class="flex items-center">
        
            <input id="Civil-status-a" type="radio" value="" name="Civil-status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="Civil-status-a" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Single</label>
            
            
          </div>
          
          <div class="flex items-center">
            <input id="Civil-status-b" type="radio" value="" name="Civil-status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="Civil-status-b" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Married</label>
          </div>
    
          <!-- Add the third blood type radio button -->
          <div class="flex items-center">
            <input id="Civil-status-o" type="radio" value="" name="Civil-status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="Civil-status-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Widowed</label>
          </div>
          
          <div class="flex items-center">
            <input id="Civil-status-o" type="radio" value="" name="Civil-status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="Civil-status-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Divorce</label>
          </div>
          
     

          
        </div>
      </div>
      
    </div>

    <hr class="w-full h-1 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-sky-700">

    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="floating_address" id="floating_address" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
    </div>

    <div class="grid md:grid-cols-2 md:gap-6">
      <div class="relative z-0 w-full mb-6 group">
          <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
      </div>
      <div class="relative z-0 w-full mb-6 group">
          <input type="text" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
      </div>
    </div>

<div class="mb-5">
  
<label for="message" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Career Objective</label>
<textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your career objectives here..."></textarea>

</div>

<hr class="w-full h-1 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-sky-700">

  <div class="Education">

    <div class="flex items-center">
      <label for="message" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Education </label>
      <button type="button" @click="openTertiaryDialog()" class="text-gray-900 bg-white border ms-3 border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 
      focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-1.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 
      dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">+ Tertiary</button>

      <button type="button" class="text-gray-900 bg-white border ms-3 border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 
      focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-1.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 
      dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">+ Secondary</button>

      <button type="button" class="text-gray-900 bg-white border ms-3 border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 
      focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-1.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 
      dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">+ Primary</button>
      

    </div>

    <div>

      <hr class="w-full h-0.5 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-gray-700">

      <Dialog :dialogEducation="dialogEducation">
        <Tertiary 
        :dialogEducation="dialogEducation"
        @closeTertiaryDialog="closeTertiaryDialog">
        </Tertiary>
      </Dialog>
<!-- 
<div  class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
  
  <div class="flex justify-between">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Computer Communication Development Institute</h5>
    <p class="font-normal text-orange-700 dark:text-orange-300">2020 - 2023</p>

  </div>
  
  <p class="font-normal text-green-700 dark:text-green-300">Bachelor of Science in Information Technology</p>

  <p class="font-normal mt-3 text-gray-700 dark:text-gray-400 text-justify ">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
    when an unknown printer took a galley of type and scrambled it to make a type 
    specimen book. It has survived not only five centuries, but also the leap into 
    electronic typesetting, remaining essentially unchanged. It was popularised in 
    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and 
    more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div> -->


    </div>

  </div>



<hr class="w-full h-1 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-sky-700">


    <button type="button" 
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
    focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center 
    dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
  
  </div>
  </form>
  
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
  
  .hide{
    display:none;
  }
 

</style>

