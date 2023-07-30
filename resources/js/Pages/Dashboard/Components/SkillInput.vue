<script setup>
import DateRangePicker from 'flowbite-datepicker/DateRangePicker';
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


defineProps(['SkillValuesForm','showSkillAddedd','errorMessage','getSkillArrayLength','AddeddSkillCard']);
defineEmits(['closeSkillsDialog','addSkill','clearSkills']);






</script>
<template>
 
  
  <div class="dialog-content">

      

  
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
             SKILLS
          </h3>
          <button   @click="$emit('closeSkillsDialog')" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 
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
  <label for="default-skill" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Add Skill</label>
  <div class="relative">
      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
      </div>
      <input v-model="SkillValuesForm.Skill" type="text" id="default-skill" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Add your skills here ..." required>
      <button
       type="button" 
      @click="$emit('addSkill',showSkillAddedd,SkillValuesForm,getSkillArrayLength)"
      class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 
      focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4
       py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Skill</button>
  </div>
</form>


<div v-show="AddeddSkillCard" class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <div class="flex justify-between">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Addedd Skills</h5>
      <button   @click="$emit('clearSkills',showSkillAddedd)" type="button" 
      class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
      data-modal-hide="staticModal">
        <span>Clear Skills</span>
          <span class="sr-only">Close modal</span>
      </button>
  </div>
  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the skills you have addedd to be shown in your resume.</p>

  <span  v-for="(skillItem, index) in showSkillAddedd.SkillAddedd"
  :key="index" id="badge-dismiss-dark" class="inline-flex items-center mb-2 px-2 py-1 mr-2 text-md font-medium text-gray-800 bg-gray-100 rounded dark:bg-gray-700 dark:text-gray-300">
    {{ skillItem.Skill }}
    <button type="button" 
    class="inline-flex items-center p-1 ml-2 text-sm text-gray-400 bg-transparent rounded-sm hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-gray-300" data-dismiss-target="#badge-dismiss-dark" aria-label="Remove">
      <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
      <span class="sr-only">Remove Skills</span>
    </button>
  </span>

</div>

      </div>
      
      <!-- Modal footer -->
      <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
          <button 
        
          data-modal-hide="staticModal" 
          type="button"
           class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
           font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
           <InputError class="mt-2" :message="errorMessage" />
          </div>
  </div>
  
    <slot/>
  
      </div>
</template>

