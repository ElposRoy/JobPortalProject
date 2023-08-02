<script setup>

import { ref, onMounted } from 'vue';
import InputError from '@/Components/InputError.vue';

// Function to format the date in a readable format (e.g., "July 6, 2023")
function formatDate(dateString) {
  const options = { year: 'numeric', month: 'long', day: 'numeric' };
  const date = new Date(dateString);
  return date.toLocaleDateString(undefined, options);
}

// Wait for DOM to be ready before accessing the elements
onMounted(() => {
  // Get references to the date inputs and the elements to display the readable dates
  const startDateInput = document.querySelector('input[name="start"]');
  const endDateInput = document.querySelector('input[name="end"]');
  const readableStartDateElement = document.getElementById('readableStartDate');
  const readableEndDateElement = document.getElementById('readableEndDate');

  // Event listener to update the readable dates when the date inputs change
  startDateInput.addEventListener('change', () => {
    const startDate = startDateInput.value;
    readableStartDateElement.textContent = formatDate(startDate);
  });

  endDateInput.addEventListener('change', () => {
    const endDate = endDateInput.value;
    readableEndDateElement.textContent = formatDate(endDate);
  });
});


defineProps(['ExperienceValuesForm','ExperienceArray','errorExperienceMessage','hideJobEnded']);
defineEmits(['closeExperienceDialog','addExperience','StillEmployed']);






</script>
<template>
 
  
  <div class="dialog-content">

      

  
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
            EXPERIENCE
          </h3>
          <button @click="$emit('closeExperienceDialog')" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 
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
                  placeholder="Ex: Rizal St. Sorsogon City" required>
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
          @click="$emit('addExperience',ExperienceValuesForm,ExperienceArray)"
          data-modal-hide="staticModal" 
          type="button"
           class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
           font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
           <InputError class="mt-2" :message="errorExperienceMessage" />
          </div>
  </div>
  
    <slot/>
  
      </div>
</template>

