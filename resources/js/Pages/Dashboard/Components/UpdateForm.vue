<script setup>
import { ref, onMounted } from 'vue';
import InputError from '@/Components/InputError.vue';



onMounted(() => {

});


defineProps(['dialogResumeHead','PersonalInfo','dialogContact']);
defineEmits(['closeUpdateForm']);






</script>
<template>

    <div class="dialog-content">

      

  
  <!-- Modal content -->
  <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
    <!-- Resume Head Update Form -->
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
    
      data-modal-hide="staticModal" 
      type="button"
       class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
       font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Changes</button>
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