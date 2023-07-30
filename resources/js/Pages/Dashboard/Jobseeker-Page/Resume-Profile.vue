<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Sidebar from '@/Layouts/Sidebar.vue';

import { useForm,Head } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import { router } from '@inertiajs/vue3'


import Dialog from '@/Pages/Dashboard/Components/Dialog.vue';
import EducationInput from '@/Pages/Dashboard/Components/EducationInput.vue';
import SkillInput from '@/Pages/Dashboard/Components/SkillInput.vue';



const baseurl = ref('');
onMounted(() => {
  baseurl.value = location.origin;
});

// Function to format the date in a readable format (e.g., "July 6, 2023")
function formatDate(dateString) {
  const options = { year: 'numeric', month: 'long', day: 'numeric' };
  const date = new Date(dateString);
  return date.toLocaleDateString(undefined, options);
}


const EducationValuesForm = useForm ({
  Level: '',
  StartDate: null,
  EndDate: null,
  School: '',
  Address: '',
  Degree: '',
  Description: '',

});

const SkillValuesForm = useForm ({
  Skill: '',

});

const EducationArray= useForm ({
  EducationCollection: JSON.parse(localStorage.getItem('currentEducation')) || [],

});

const SkillArray = useForm ({
  SkillCollection: JSON.parse(localStorage.getItem('currentSkill')) || [],

});

const showSkillAddedd  = useForm ({
  SkillAddedd: JSON.parse(localStorage.getItem('addeddSkill')) || [],

});




</script>

<script>
export default {
  
  data: () => ({

    errorMessage: '',
    getSkillArrayLength: null,
    AddeddSkillCard: false,
    dialogEducation: false,
    dialogSkill: false,
    dialogEducation: false,
    TertiaryCard: false,
    SecondaryCard: false,
    PrimaryCard: false,
   
  
    // prod:{}
  }
  ),
  computed: {
 
},

watch: {
  dialogEducation (val) {
    val || this.closeEducationDialog()
  },
  dialogSkill (val) {
    val || this.closeSkillsDialog()
  },
  TertiaryCard (val) {
    val || this.closeTertiaryCard()
  },
  SecondaryCard (val) {
    val || this.closeSecondaryCard()
  },
  PrimaryCard (val) {
    val || this.closePrimaryCard()
  },
  AddeddSkillCard(val){
    val || this.hideSkillAddeddCard()
  }


},

created () {
  this.initialize()
  this.checkEducation() //Check if there is an exisitng education addedd then show it 
},

methods: {
 
 
  initialize () {
    localStorage.removeItem('currentSkill');
  },

  checkEducation(){
    const CheckEducationCollection = JSON.parse(localStorage.getItem('currentEducation')) || [];
    
    // Check if there is an item with Level === 'Tertiary'
    const hasTertiaryLevel = CheckEducationCollection.some((item) =>
      item.Level.toLowerCase() === 'tertiary'
    );
    const hasSecondaryLevel = CheckEducationCollection.some((item) =>
      item.Level.toLowerCase() === 'secondary'
    );
    const hasPrimaryLevel = CheckEducationCollection.some((item) =>
      item.Level.toLowerCase() === 'primary'
    );

    if (hasTertiaryLevel) {
      this.TertiaryCard = true;
    }

    if (hasSecondaryLevel) {
      this.SecondaryCard = true;
    }
    if (hasPrimaryLevel) {
      this.PrimaryCard = true;
    }
  },
  
  openEducationDialog(Form,Level){
    this.dialogEducation = true;
    Form.Level = Level
  localStorage.removeItem('currentEducation');
  
  },
  openSkillsDialog(SkillAddedd,length){

    this.dialogSkill = true;

    length = SkillAddedd.SkillAddedd.length;
 if(length > 0){
      this.AddeddSkillCard=true;
    }

},
  closeEducationDialog(){
    this.dialogEducation = false;

  },
  closeSkillsDialog(){
    this.dialogSkill=false;
  },
  clearSkills(skillAddedd){
    localStorage.removeItem('addeddSkill');
    skillAddedd.SkillAddedd=[];
    this.AddeddSkillCard=false;
  },

  handleSubmit(EducationArray,EducationValue) {
  // Validate the form before emitting the event
 
  if (EducationValue.Level === 'Tertiary' || EducationValue.Level === 'Secondary') {
    if (!EducationValue.StartDate || !EducationValue.EndDate || !EducationValue.School || !EducationValue.Degree || !EducationValue.Address) {
      this.errorMessage = "Please fill in all required fields.";
      return;
    }
  } else if (EducationValue.Level === 'Primary') {
    if (!EducationValue.StartDate || !EducationValue.EndDate || !EducationValue.School || !EducationValue.Address) {
     
      this.errorMessage = "Please fill in all required fields.";
      return;
    }
  } else {
    this.errorMessage = "Invalid education level."; // Show an error message for invalid education level
    return;
  }

  // All required fields are filled, reset the error message and run the "addEducation" function
  this.errorMessage = '';
  return this.addEducation(EducationArray,EducationValue);
},


  addEducation(EducationArray,formValues){
 
    if(formValues.Level === 'Tertiary'){
      this.TertiaryCard = true;
    }
    else if(formValues.Level === 'Secondary'){
      this.SecondaryCard = true;
    }
    else if(formValues.Level === 'Primary'){
      this.PrimaryCard = true;
    }

    const newEducation = {}; //New object to be store the values
    newEducation.Level = formValues.Level;
    newEducation.StartDate = formValues.StartDate ; 
    newEducation.EndDate = formValues.EndDate ; 
    newEducation.School = formValues.School ; 
    newEducation.Address = formValues.Address ; 
    newEducation.Degree = formValues.Degree ; 
    newEducation.Description = formValues.Description ; 

    EducationArray.EducationCollection.push(newEducation);
    
    localStorage.setItem('currentEducation', JSON.stringify(EducationArray.EducationCollection));

  
  },

  addSkill(SkillAddedd,formValues,length){
 
    length = SkillAddedd.SkillAddedd.length + 1;

    console.log(length)
    const newSkill = {}; //New object to be store the values
    newSkill.Skill = formValues.Skill;
 
    SkillAddedd.SkillAddedd.push(newSkill)

    localStorage.setItem('addeddSkill', JSON.stringify(SkillAddedd.SkillAddedd));

    if(length > 0){
      this.AddeddSkillCard=true;
    }
    formValues.reset();
   
},

// Education Cards
  closeTertiaryCard(){
    this.TertiaryCard=false;
  },
  closeSecondaryCard(){
    this.SecondaryCard=false;
  },
  closePrimaryCard(){
    this.PrimaryCard=false;
  },
  hideSkillAddeddCard(){
    this.AddeddSkillCard=false;
  },
  
// Education Cards
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
      <button type="button" @click="openEducationDialog(EducationValuesForm,'Tertiary')" class="text-gray-900 bg-white border ms-3 border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 
      focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-1.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 
      dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">+ Tertiary</button>

      <button type="button" @click="openEducationDialog(EducationValuesForm,'Secondary')"  class="text-gray-900 bg-white border ms-3 border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 
      focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-1.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 
      dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">+ Secondary</button>

      <button type="button" @click="openEducationDialog(EducationValuesForm,'Primary')"  class="text-gray-900 bg-white border ms-3 border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 
      focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-1.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 
      dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">+ Primary</button>
      

    </div>

    <div>

      <hr class="w-full h-0.5 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-gray-700">

      <Dialog 
      :dialogEducation="dialogEducation"
      >
        <EducationInput 
        :dialogEducation="dialogEducation"
        :errorMessage="errorMessage"
        :EducationValuesForm="EducationValuesForm"
        :EducationArray="EducationArray"
        @closeEducationDialog="closeEducationDialog"
        @handleSubmit="handleSubmit"
        @addEducation="addEducation">
        </EducationInput>
      </Dialog>

      <div class="grid md:grid-cols-3 md:gap-3">

            <!-- Tertiary Col -->
            <div  v-show="TertiaryCard"
            class="w-full max-w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <div class="flex justify-between px-4 pt-4">
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white text-center">Tertiary</h5>
                  <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
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
              <div  
                    v-for="(educationItem, index) in EducationArray.EducationCollection"
                    :key="index"
                    id="EducationCard" 
                  class="block max-w-full p-6 m-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    
                    <div class="flex justify-end">
                    
                      <p class="font-normal text-orange-700 dark:text-orange-300"> {{ formatDate(educationItem.StartDate)  }} - {{ formatDate(educationItem.EndDate) }}</p>
                  
                    </div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ educationItem.School }}</h5>
                    <p class="font-normal text-green-700 dark:text-green-300">{{ educationItem.Degree }}</p>
                  
                    <p class="font-normal text-gray-700 dark:text-gray-300">{{ educationItem.Address }}</p>
                  
                    <p class="font-normal mt-3 text-gray-700 dark:text-gray-400 text-justify ">
                      {{ educationItem.Description }}</p>
                  </div> 
            </div>
            <!-- Tertiary Col -->
                  

            <!-- SEcondary Col -->
            <div v-show="SecondaryCard"
            class="w-full max-w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <div class="flex justify-between px-4 pt-4">
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white text-center">Secondary</h5>
                  <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
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
              <div  
                    v-for="(educationItem, index) in EducationArray.EducationCollection"
                    :key="index"
                    id="EducationCard" 
                  class="block max-w-full p-6 m-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    
                    <div class="flex justify-end">
                    
                      <p class="font-normal text-orange-700 dark:text-orange-300"> {{ formatDate(educationItem.StartDate)  }} - {{ formatDate(educationItem.EndDate) }}</p>
                  
                    </div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ educationItem.School }}</h5>
                    <p class="font-normal text-green-700 dark:text-green-300">{{ educationItem.Degree }}</p>
                  
                    <p class="font-normal text-gray-700 dark:text-gray-300">{{ educationItem.Address }}</p>
                  
                    <p class="font-normal mt-3 text-gray-700 dark:text-gray-400 text-justify ">
                      {{ educationItem.Description }}</p>
                  </div> 
            </div>
            <!-- SEcondary Col -->

            <!-- Primary Col -->
            <div v-show="PrimaryCard"
            
            class="w-full max-w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <div class="flex justify-between px-4 pt-4">
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white text-center">Primary</h5>
                  <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
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
              <div  
                    v-for="(educationItem, index) in EducationArray.EducationCollection"
                  
                    :key="index"
                    id="EducationCard" 
                  class="block max-w-full p-6 m-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    
                    <div class="flex justify-end">
                    
                      <p class="font-normal text-orange-700 dark:text-orange-300"> {{ formatDate(educationItem.StartDate)  }} - {{ formatDate(educationItem.EndDate) }}</p>
                  
                    </div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ educationItem.School }}</h5>
                    <p class="font-normal text-green-700 dark:text-green-300">{{ educationItem.Degree }}</p>
                  
                    <p class="font-normal text-gray-700 dark:text-gray-300">{{ educationItem.Address }}</p>
                  
                    <p class="font-normal mt-3 text-gray-700 dark:text-gray-400 text-justify ">
                      {{ educationItem.Description }}</p>
                  </div> 
            </div>
            <!-- Primary Col -->
            
        </div>



    </div>

  </div>



<hr class="w-full h-1 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-sky-700">


    <!-- SKILLS SECTION -->
    <div class="Skills">

      <div class="flex items-center">
        <label for="message" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Skills</label>
        <button type="button"  @click="openSkillsDialog(showSkillAddedd,getSkillArrayLength)" class="text-gray-900 bg-white border ms-3 border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 
        focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-1.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 
        dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">+ Add Skill</button>


      </div>

      <div>

        <hr class="w-full h-0.5 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-gray-700">

        <Dialog :dialogSkill="dialogSkill">
          <SkillInput
          :AddeddSkillCard="AddeddSkillCard"
          :SkillValuesForm="SkillValuesForm"
          :showSkillAddedd="showSkillAddedd"
          :getSkillArrayLength="getSkillArrayLength "
          @addSkill="addSkill"
          @closeSkillsDialog="closeSkillsDialog"
          @clearSkills="clearSkills"
          >

          </SkillInput>
        </Dialog>

        <div class="grid md:grid-cols-3 md:gap-3">

        

          </div>



      </div>

    </div>
    <!-- SKILLS SECTION -->

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

