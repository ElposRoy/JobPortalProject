<script setup>
import { ref, onMounted } from 'vue';
import InputError from '@/Components/InputError.vue';
import EducationInput from '@/Pages/Dashboard/Components/EducationInput.vue';


onMounted(() => {

});


defineProps([
  'dialogResumeHead','PersonalInfo','dialogContact','dialogEducation','dialogLanguage', 'dialogResumePFP','dialogAddEducation','dialogExperience',
 'ResumePFP','imageURL','baseurl', 'EducationValuesForm', 'filteredTertiaryEducation', 'filteredSecondaryEducation', 'filteredPrimaryEducation','education',
 'ExperienceValuesForm','hideJobEnded'
]);
defineEmits(['closeUpdateForm','UpdateHead','UpdateContact','preview_image','UpdateResumePFP',
'openEducationDialog','addEducation','backButton','StillEmployed','addExperience']);


// Function to format the date in a readable format (e.g., "July 6, 2023")
function formatDate(dateString) {
  const options = { year: 'numeric' };
  const date = new Date(dateString);
  return date.toLocaleDateString(undefined, options);
}



</script>



<template>

    <div class="dialog-content">

      

  
  <!-- Modal content -->
  <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
    <!-- Resume Head Update Form -->

    <div v-show="dialogResumePFP">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
         Edit Resume Image
        </h3>
        <button @click="$emit('closeUpdateForm')"  type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 
        rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">Close modal</span>
        </button>
    </div>
    <!-- Modal body -->
    <div class="p-6 space-y-6">
      <div class="grid md:grid-cols-1 md:gap-6">
     
       

   
 <!-- Modal body -->
 <div class="p-6 flex">
 <!-- :src="baseurl+'/images/Resume-Jobseeker.png'" -->
 <div class="p-5">
         <img :src="imageURL ? imageURL : (baseurl + '/images/DefaultImageAdd.png')" alt="Selected image" class="w-36 h-36 rounded p-1 ring-2 ring-gray-300 dark:ring-gray-500">
       </div>
       <div class="flex items-center justify-center w-full">
         <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-34 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
             <div class="flex flex-col items-center justify-center pt-5 pb-6">
                 <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                 </svg>
                 <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                 <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
             </div>
             <input   @input="ResumePFP.Image=$event.target.files[0]"   @change="this.$emit('preview_image',ResumePFP)" id="dropzone-file" type="file" class="hidden" />
         </label>
       </div> 
   
   </div>




        </div>
     
    </div>



    <!-- Modal footer -->
    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
        <button 
        @click="$emit('UpdateResumePFP', ResumePFP.Image,  $page.props.auth.resumeID)" 
        data-modal-hide="staticModal" 
        type="button"
         class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
         font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Changes</button>
             
 <p class="mt-1 text-sm text-gray-500 dark:text-gray-300 mb-5" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
         <InputError class="mt-2"  />
        </div>
  </div>

  

  <div v-show="dialogResumeHead">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
         Edit Resume Head
        </h3>
        <button @click="$emit('closeUpdateForm')"  type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 
        rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">Close modal</span>
        </button>
    </div>
    <!-- Modal body -->
    <div class="p-6 space-y-6">
      <div class="grid md:grid-cols-3 md:gap-6">
        <div>
          <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>  
          <!-- <InputError  :message="form.errors.email" /> -->
          <input 
          v-model="PersonalInfo.FirstName"
          type="text"
          id="First_Name"
         
         
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
            focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 
            dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 
            dark:focus:border-blue-500"
            >
       
      </div>
      <div>
        <label for="middle_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle Name</label>  
        <!-- <InputError  :message="form.errors.email" /> -->
        <input 
        v-model="PersonalInfo.MiddleName"
        type="text"
        id="Middle_Name"
       
        
          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
          focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 
          dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 
          dark:focus:border-blue-500"
          >
     
    </div>
    <div>
      <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>  
      <!-- <InputError  :message="form.errors.email" /> -->
      <input 
      v-model="PersonalInfo.LastName"
      type="text"
      id="last_name"
     
        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 
        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 
        dark:focus:border-blue-500"
        >
   
  </div>
        </div>
     
    </div>

    <div class="p-6 space-y-3">
      <div class="grid md:grid-cols-1 md:gap-6">
        <div>
          <label for="desired_position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desired Position</label>  
          <!-- <InputError  :message="form.errors.email" /> -->
          <input 
          v-model="PersonalInfo.DesiredPosition"
          type="text"
          id="desired_position"
         
         
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
            focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 
            dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 
            dark:focus:border-blue-500"
            >
       
      </div>
        </div>
  
      </div>

      <div class="p-6 space-y-3">
        <div class="grid md:grid-cols-1 md:gap-6">
        
      <div class="mb-5">
  
        <label for="message" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Career Objective</label>
        <textarea   v-model="PersonalInfo.CareerObjective" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your career objectives here..."></textarea>
        
        </div>

          </div>
    
        </div>


    <!-- Modal footer -->
    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
        <button 
        @click="$emit('UpdateHead', PersonalInfo,  $page.props.auth.resumeID)" 
        data-modal-hide="staticModal" 
        type="button"
         class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
         font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Changes</button>
         <InputError class="mt-2"  />
        </div>
  </div>

<!-- Contact Update Form -->
  <div v-show="dialogContact">
    <!-- Modal header -->
    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
       Edit Contact
      </h3>
      <button @click="$emit('closeUpdateForm')"  type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 
      rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
          <span class="sr-only">Close modal</span>
      </button>
  </div>
  <!-- Modal body -->
  <div class="p-6 space-y-3">
    <div class="grid md:grid-cols-2 md:gap-6">
      <div>
        <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>  
        <!-- <InputError  :message="form.errors.email" /> -->
        <input 
        v-model="PersonalInfo.PhoneNumber"
        type="text"
        id="phone_number"
       
       
          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
          focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 
          dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 
          dark:focus:border-blue-500"
          >
     
    </div>

    <div>
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>  
      <!-- <InputError  :message="form.errors.email" /> -->
      <input 
      v-model="PersonalInfo.Email"
      type="text"
      id="email"
     
     
        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 
        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 
        dark:focus:border-blue-500"
        >
   
  </div>


      </div>

      
      <div>
        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>  
        <!-- <InputError  :message="form.errors.email" /> -->
        <input 
        v-model="PersonalInfo.Address"
        type="text"
        id="address"
       
       
          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
          focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 
          dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 
          dark:focus:border-blue-500"
          >
     
    </div>
    </div>

   


  <!-- Modal footer -->
  <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
      <button 
      @click="$emit('UpdateContact', PersonalInfo,  $page.props.auth.resumeID)" 
      data-modal-hide="staticModal" 
      type="button"
       class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
       font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Changes</button>
       <InputError class="mt-2"  />
      </div>
</div>

<div v-show="dialogEducation">
 <!-- Modal header -->
 <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
   Update Education
  </h3>
  <button  @click="$emit('closeUpdateForm')"   type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 
  rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
      <span class="sr-only">Close modal</span>
  </button>
</div>
<!-- Modal body -->
<div class="p-6 space-y-3">
  <div class="flex items-center">
    <label for="message" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Add Education : </label>
    <button type="button" @click="$emit('openEducationDialog',EducationValuesForm,'Tertiary')" class="text-gray-900 bg-white border ms-3 border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 
    focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-1.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 
    dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">+ Tertiary</button>

    <button type="button" @click="$emit('openEducationDialog',EducationValuesForm,'Secondary')"  class="text-gray-900 bg-white border ms-3 border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 
    focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-1.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 
    dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">+ Secondary</button>

    <button type="button" @click="$emit('openEducationDialog',EducationValuesForm,'Primary')" class="text-gray-900 bg-white border ms-3 border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 
    focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-1.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 
    dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">+ Primary</button>
    

  </div>

  <hr class="w-full h-0.5 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-gray-700">
  
  <div class="grid gap-6 mb-6 md:grid-cols-3" v-show="!dialogAddEducation">
    <!-- Tertiary -->
    <div  class="w-full max-w-sm bg-white  shadow dark:bg-gray-800 dark:border-gray-700 pe-4 border-r-4 ">
      <h5 class="mb-1 text-md text-gray-900 dark:text-white text-center ">TERTIARY</h5>

      <div  v-for="(educationItem, index) in filteredTertiaryEducation(education)"
      :key="index"  class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-2">
        <div class="flex justify-between px-4 pt-4">

          <div>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ formatDate(educationItem.StartDate)  }} - {{ formatDate(educationItem.EndDate) }}</span>
          </div>
    <div>
      <span class="cursor-pointer inline-flex items-center justify-center w-6 h-6 mr-2 text-sm font-semibold text-gray-800 bg-sky-500 hover:bg-blue-800 rounded-full dark:bg-blue-700 dark:text-gray-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white"
         viewBox="0 0 24 24"><path fill="currentColor" d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 
         0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75L3 17.25Z"/></svg>
         
        <span class="sr-only">Edit</span>
      </span>
      
      <span class="cursor-pointer inline-flex items-center justify-center w-6 h-6 mr-2 text-sm font-semibold text-gray-800 bg-red-500 hover:bg-red-800 rounded-full dark:bg-red-700 dark:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24"><path fill="currentColor" d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6v12Z"/></svg>
       
        <span class="sr-only">Delete </span>
      </span>
    </div>
      
      
        </div>
        <div class="flex flex-col items-center text-center pb-10 p-5 ">
            
            <h5 class="mb-1 text-md text-gray-900  dark:text-white">{{ educationItem.School }}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ educationItem.Degree }}</span>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ educationItem.Address }}</span>
        </div>
      </div>

    </div>
   
<!-- Secondary -->
<div class="w-full max-w-sm bg-white shadow dark:bg-gray-800 dark:border-gray-700 pe-4 border-r-4">
  <h5 class="mb-1 text-md text-gray-900 dark:text-white text-center ">Secondary</h5>

  <div  v-for="(educationItem, index) in filteredSecondaryEducation(education)"
  :key="index" class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-2">
    <div class="flex justify-between px-4 pt-4">

      <div>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ formatDate(educationItem.StartDate)  }} - {{ formatDate(educationItem.EndDate) }}</span>
      </div>
<div>
  <span class="cursor-pointer inline-flex items-center justify-center w-6 h-6 mr-2 text-sm font-semibold text-gray-800 bg-sky-500 hover:bg-blue-800 rounded-full dark:bg-blue-700 dark:text-gray-300">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white"
     viewBox="0 0 24 24"><path fill="currentColor" d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 
     0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75L3 17.25Z"/></svg>
     
    <span class="sr-only">Edit</span>
  </span>
  
  <span class="cursor-pointer inline-flex items-center justify-center w-6 h-6 mr-2 text-sm font-semibold text-gray-800 bg-red-500 hover:bg-red-800 rounded-full dark:bg-red-700 dark:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24"><path fill="currentColor" d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6v12Z"/></svg>
   
    <span class="sr-only">Delete </span>
  </span>
</div>
  
  
    </div>
    <div class="flex flex-col items-center text-center pb-10 p-5 ">
        
      <h5 class="mb-1 text-md text-gray-900  dark:text-white">{{ educationItem.School }}</h5>
      <span class="text-sm text-gray-500 dark:text-gray-400">{{ educationItem.Degree }}</span>
      <span class="text-sm text-gray-500 dark:text-gray-400">{{ educationItem.Address }}</span>
     
    </div>
  </div>

</div>

<!-- Primary -->
<div class="w-full max-w-sm bg-white  shadow dark:bg-gray-800 dark:border-gray-700 pe-4 ">
  <h5 class="mb-1 text-md text-gray-900 dark:text-white text-center ">Primary</h5>

  <div  v-for="(educationItem, index) in filteredPrimaryEducation(education)"
  :key="index" class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-2">
    <div class="flex justify-between px-4 pt-4">

      <div>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ formatDate(educationItem.StartDate)  }} - {{ formatDate(educationItem.EndDate) }}</span>
      </div>
<div>
  <span class="cursor-pointer inline-flex items-center justify-center w-6 h-6 mr-2 text-sm font-semibold text-gray-800 bg-sky-500 hover:bg-blue-800 rounded-full dark:bg-blue-700 dark:text-gray-300">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white"
     viewBox="0 0 24 24"><path fill="currentColor" d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 
     0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75L3 17.25Z"/></svg>
     
    <span class="sr-only">Edit</span>
  </span>
  
  <span class="cursor-pointer inline-flex items-center justify-center w-6 h-6 mr-2 text-sm font-semibold text-gray-800 bg-red-500 hover:bg-red-800 rounded-full dark:bg-red-700 dark:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24"><path fill="currentColor" d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6v12Z"/></svg>
   
    <span class="sr-only">Delete </span>
  </span>
</div>
  
  
    </div>
    <div class="flex flex-col items-center text-center pb-10 p-5 ">
        
      <h5 class="mb-1 text-md text-gray-900  dark:text-white">{{ educationItem.School }}</h5>

      <span class="text-sm text-gray-500 dark:text-gray-400">{{ educationItem.Address }}</span>
     
    </div>
  </div>

</div>
  </div>  
 
  <EducationInput 
  class="border-2 border-gray-600 rounded" 
  v-show="dialogAddEducation" :EducationValuesForm="EducationValuesForm" :dialogAddEducation="dialogAddEducation"></EducationInput>


</div>




<!-- Modal footer -->
<div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 justify-between">
  <button   v-show="dialogAddEducation"
  @click="$emit('addEducation',EducationValuesForm, $page.props.auth.resumeID)"
  data-modal-hide="staticModal" 
  type="button"
   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
   font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>

   <button   v-show="dialogAddEducation"
  @click="$emit('backButton')"
  data-modal-hide="staticModal" 
  type="button"
   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
   font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800">Back</button>

  <button 
  v-show="!dialogAddEducation"
  data-modal-hide="staticModal" 
  type="button"
   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
   font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800">Close</button>
   <InputError class="mt-2"  />
  </div>
  


    </div>

  
    <div v-show="dialogLanguage">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
        Update Language
        </h3>
        <button @click="$emit('closeUpdateForm')"  type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 
        rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">Close modal</span>
        </button>
    </div>
    <!-- Modal body -->
    <div class="p-6 space-y-3">
   
        <div class="justify-center">
          <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Language</label>  
          <!-- <InputError  :message="form.errors.email" /> -->
          <input 
          v-model="PersonalInfo.Language"
          type="text"
          id="Language"
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
            focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 
            dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 
            dark:focus:border-blue-500"
            >
       
      </div>
       
  
<div  class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <div class="">
      <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Your Language: </h5>
    
        <span 
        id="badge-dismiss-dark" class="inline-flex items-center mb-2 px-2 py-1 mr-2 text-md font-medium text-gray-800 bg-gray-100 rounded dark:bg-gray-700 dark:text-gray-300">
         Tagalog
          <button
      
           type="button" 
          class="inline-flex items-center p-1 ml-2 text-sm text-gray-400 bg-transparent rounded-sm hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-gray-300" data-dismiss-target="#badge-dismiss-dark" aria-label="Remove">
            <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">Remove Language</span>
          </button>
        </span>
    
  </div>

</div>

        
      </div>
  
     
  
  
    <!-- Modal footer -->
    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
        <button 
      
        data-modal-hide="staticModal" 
        type="button"
         class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
         font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Changes</button>
         <InputError class="mt-2"  />
        </div>
  </div>

  
  <div v-show="dialogExperience">
    <!-- Modal header -->
    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
      Add Experience
      </h3>
      <button @click="$emit('closeUpdateForm')"  type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 
      rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
          <span class="sr-only">Close modal</span>
      </button>
  </div>
  <!-- Modal body -->
  <div class="p-6 space-y-6">
    <form>
        <div class="grid gap-6 mb-6 md:grid-cols-5">
         
                  <!-- Fix this datepicker tailwind -->
                  <div date-rangepicker class="flex items-center col-span-5 justify-center">
                    <div class="mx-2 text-gray-500 dark:text-gray-400 text-sm" id="readableStartDate"></div>
                    <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    
                    <input 
                    name="start"
                    type="text"
                   v-model="ExperienceValuesForm.JobStarted"
                    class=" date-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                    focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 
                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Date of Start"
                    onfocus="(this.type='date')"
                    onblur="(this.type='text')"
                    >
                
                    </div>
                   
                    <span class="mx-4 text-gray-500">to</span>
                    <div  v-show="!hideJobEnded"  class="mx-2 text-gray-500 dark:text-gray-400 text-sm " id="readableEndDate"></div>
                    <div v-show="!hideJobEnded"  class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                               <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                             </svg>
                         </div>
                    <input 
                    name="end"
                    v-model="ExperienceValuesForm.JobEnded"
                    type="text"
                    class=" date-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Date of End"
                    onfocus="(this.type='date')"
                    onblur="(this.type='text')"
                    >
               
                </div>
            

                  <span v-show="!hideJobEnded"  class="mx-4 text-gray-500">or</span>
                  <input 
                  @click="$emit('StillEmployed',ExperienceValuesForm)"
                  v-model="ExperienceValuesForm.StillEmployed"
                  id="default-checkbox"
                   type="checkbox" value="" 
                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
   
                <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Still Employed</label>
                </div>
  
            <div class="col-span-3">
                <label for="School"  
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                <input v-model="ExperienceValuesForm.Company"  type="text" id="School" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                placeholder="Ex: Computer Communication Development Institute" required>
                
            </div>
          

            <div class="col-span-2">
              <label for="Address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
              <input  v-model="ExperienceValuesForm.Position"  type="text" id="Address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
              dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
              placeholder="Ex: Encoder" required>
          </div>
            
          
        </div>

        <div  >

       
        <div class="grid gap-6 mb-6 md:grid-cols-6">
            <div class="col-span-2">
                <label for="Degree" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                <input
                v-model="ExperienceValuesForm.Location" 
                 type="text" id="Degree" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                placeholder="Ex: Address" required>
            </div>
            <div class="col-span-2">
              <label for="Degree" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location Type</label>
              <!-- Onsite, Hybrid,  Remote, Work From Home -->
              <input
              v-model="ExperienceValuesForm.LocationType" 
               type="text" id="Degree" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
              dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
              placeholder="Ex: Address" required>
          </div>
          <div class="col-span-2">
            <label for="Degree" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Employment Type</label>
            <input
            v-model="ExperienceValuesForm.EmploymentType" 
             type="text" id="Degree" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Ex: Address" required>
        </div>

         
            
          
        </div>

        <div  class="grid gap-6 mb-6 md:grid-cols-1">
          
<label for="Description" class="block text-sm font-medium text-gray-900 dark:text-white">Description</label>
<textarea id="Description" v-model="ExperienceValuesForm.Description"  rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your journey in this education..."></textarea>


        </div>
</div>


    </form>
</div>


  <!-- Modal footer -->
  <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
      <button 
      @click="$emit('addExperience', ExperienceValuesForm,  $page.props.auth.resumeID)"
      data-modal-hide="staticModal" 
      type="button"
       class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
       font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Experience</button>
       <InputError class="mt-2"  />
      </div>
</div>


  
</div>

  <slot/>

    </div>

</template>


  <style>
  input[type="date"]::-webkit-calendar-picker-indicator {
    /* Hide the default arrow icon on Chrome and Safari */
    display: none;
  }
  
  /* Show the placeholder text even before clicking on the input */

  
  .date-input:before {
    content: attr(placeholder);
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    color: #a0aec0; /* Placeholder color */
    pointer-events: none; /* Avoid interfering with user interactions */
  }
</style>