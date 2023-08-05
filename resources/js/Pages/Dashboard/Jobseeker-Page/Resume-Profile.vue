<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Sidebar from '@/Layouts/Sidebar.vue';
import InputError from '@/Components/InputError.vue';

import { useForm,Head } from '@inertiajs/vue3';
import { reactive, onMounted, ref } from 'vue';
import { router } from '@inertiajs/vue3'


import Dialog from '@/Pages/Dashboard/Components/Dialog.vue';
import EducationInput from '@/Pages/Dashboard/Components/EducationInput.vue';
import SkillInput from '@/Pages/Dashboard/Components/SkillInput.vue';
import ExperienceInput from '@/Pages/Dashboard/Components/ExperienceInput.vue';



const baseurl = ref('');
onMounted(() => {
  baseurl.value = location.origin;
});

const validateEmail = (email) => {
  return String(email)
    .toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};

const validatePhoneNumber = (phoneNumber) => {
  return String(phoneNumber).match(/^(\+?63|0)9\d{9}$/);
};


// Function to format the date in a readable format (e.g., "July 6, 2023")
function formatDate(dateString) {
  const options = { year: 'numeric', month: 'long', day: 'numeric' };
  const date = new Date(dateString);
  return date.toLocaleDateString(undefined, options);
}

const overallForm = useForm ({
  Image: '',
  Gender: '',
  Citizenship: '',
  LastName: '',
  FirstName: '',
  MiddleName: '',
  Suffix: '',
  Age: '',
  BirthDate: '',
  BirthPlace: '',
  BloodType: '',
  CivilStatus: '',
  Address: '',
  PhoneNumber: '',
  Email: '',
  CareerObjective: '',
  Weight: '',
  Height: '',


  Skill: [],
  Education: [],
  Experience: [],
});


const ResumePFP = useForm ({
  Image: '',

});

const PersonalInfo = useForm ({
  Gender: '',
  Citizenship: '',
  LastName: '',
  FirstName: '',
  MiddleName: '',
  Suffix: '',
  Age: '',
  BirthDate: '',
  BirthPlace: '',
  BloodType: '',
  CivilStatus: '',
  Address: '',
  PhoneNumber: '',
  Email: '',
  CareerObjective: '',
  Weight: '',
  Height: '',

});


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

const ExperienceValuesForm = useForm ({
  JobStarted: '',
  JobEnded: '',
  StillEmployed: '',
  Company: '',
  Position: '',
  Location: '',
  LocationType: '',
  EmploymentType: '',
  Description: '',
});


const EducationArray= useForm ({
  EducationCollection: JSON.parse(localStorage.getItem('currentEducation')) || [],

});

const ExperienceArray = useForm ({
  ExperienceCollection: JSON.parse(localStorage.getItem('currentExperience')) || [],

});

const showSkillAddedd  = useForm ({
  SkillAddedd: JSON.parse(localStorage.getItem('addeddSkill')) || [],


  
});


const filteredTertiaryEducation = () => {
    const educationCollection = EducationArray.EducationCollection || [];
    return educationCollection.filter((educationItem) => educationItem.Level === 'Tertiary');
     
  };
  const filteredSecondaryEducation = () => {
    const educationCollection = EducationArray.EducationCollection || [];
    return educationCollection.filter((educationItem) => educationItem.Level === 'Secondary');
     
  };
  const filteredPrimaryEducation = () => {
    const educationCollection = EducationArray.EducationCollection || [];
    return educationCollection.filter((educationItem) => educationItem.Level === 'Primary');
     
  };


</script>

<script>
export default {
  
  data: () => ({
    Step1: true,
    Step2: false,
    Step3: false,
    Step4: false,
    Step5: false,
    Step6: false,

    imageURL: null,
    hideJobEnded: false,
    skillErrorMessage: '',

    errorExperienceMessage: '',
    errorMessage: '',

    firstErrorStep: '',
    secondErrorStep: '',
    thirdErrorStep: '',
    fourthErrorStep: '',
    fifthErrorStep: '',
    finalErrorStep: '',


    getSkillArrayLength: null,
    AddeddSkillCard: false,

    dialogEducation: false,
    dialogSkill: false,
    dialogEducation: false,
    dialogExperience: false,

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
  dialogExperience(val){
    val || this.closeExperienceDialog()
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
  },

},

created () {
  this.initialize()
  this.checkEducation() //Check if there is an exisitng education addedd then show it 
  this.checkSkill()   //Check if a skill was added when refreshing page
},

methods: {
 
 
  initialize () {
    localStorage.removeItem('currentEducation');
  },

  Preview_image(Form) {
        this.imageURL= URL.createObjectURL(Form.Image)
      
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



  checkSkill(){
    const CheckSkillCollection = JSON.parse(localStorage.getItem('addeddSkill')) || [];
  

    if (CheckSkillCollection.length >0) {
      this.AddeddSkillCard= true;
    }
    else{
      this.AddeddSkillCard= false;
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

  openExperienceDialog(){
  this.dialogExperience = true;
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
  closeExperienceDialog(){
 
    this.dialogExperience = false;
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

    formValues.reset();

    this.dialogEducation = false;
  },

  addSkill(SkillAddedd,formValues,length){
 
    if (!formValues.Skill) {
      this.skillErrorMessage = "Please fill in skill field.";
      return;
    }
    else{
      this.skillErrorMessage = "";
    }

    length = SkillAddedd.SkillAddedd.length + 1;

  
    const newSkill = {}; //New object to be store the values
    newSkill.Skill = formValues.Skill;
 
    SkillAddedd.SkillAddedd.push(newSkill);

    localStorage.setItem('addeddSkill', JSON.stringify(SkillAddedd.SkillAddedd));

    if(length >0 ){
      this.AddeddSkillCard = true;
    }
    
    formValues.reset();
    

},

  addExperience(formValues,ExperienceArray){
  
    if (!formValues.JobStarted || !formValues.Company 
    || !formValues.Position || !formValues.Location || !formValues.LocationType
    || !formValues.EmploymentType || !formValues.Description) {

 
      this.errorExperienceMessage = "Please fill in all required fields.";
      return;
    }
    else if (!formValues.StillEmployed){

      if(!formValues.JobEnded){
        this.errorExperienceMessage = "Please fill in a date of your job ended or still employed.";
      return;
      }
     
    }
    else if (formValues.StillEmployed){

      formValues.JobEnded = '';

      }
    else{
    
      this.errorExperienceMessage = "";
    }


    const newExperience = {}; //New object to be store the values
    newExperience.JobStarted = formValues.JobStarted;
    newExperience.JobEnded = formValues.JobEnded; 
    newExperience.StillEmployed = formValues.StillEmployed;
    newExperience.Company = formValues.Company; 
    newExperience.Position = formValues.Position; 
    newExperience.Location = formValues.Location; 
    newExperience.LocationType = formValues.LocationType; 
    newExperience.EmploymentType = formValues.EmploymentType; 
    newExperience.Description = formValues.Description ; 

    ExperienceArray.ExperienceCollection.push(newExperience);
 
    localStorage.setItem('currentExperience', JSON.stringify(ExperienceArray.ExperienceCollection));
    formValues.reset();
    formValues.StillEmployed = false;
    this.hideJobEnded = false;
    this.dialogExperience = false;
  },

  StillEmployed(formValues){

    if(!formValues.StillEmployed){
      this.hideJobEnded = true;
    
      return
    }
    else{
      this.hideJobEnded = false;
     
      return
    }
  },


// close/remove/hide/ etc.
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
  removeSkill(getSkill,SkilllAddedd,length){
  
        // Find the index of the object with the matching id
        const index = SkilllAddedd.SkillAddedd.findIndex((item) => item.Skill=== getSkill);
    // If the object exists, remove it from the array
    if (index !== -1) {
      SkilllAddedd.SkillAddedd.splice(index, 1);
      localStorage.setItem('addeddSkill', JSON.stringify(SkilllAddedd.SkillAddedd));
        //Call the GetTotal Function to Calculate the total
    }

    length = SkilllAddedd.SkillAddedd.length ;

  
    if(length >0 ){
      this.AddeddSkillCard = true;
    }
    else{
      this.AddeddSkillCard = false;
    }

  },
  removeExperience(Experience,company,position) {
  // Find the index of the object with the matching Company and Position
  const index = Experience.ExperienceCollection.findIndex((item) => item.Company === company && item.Position=== position);

  // If the object exists, remove it from the array
  if (index !== -1) {

    Experience.ExperienceCollection.splice(index, 1);
    localStorage.setItem('currentExperience', JSON.stringify(Experience.ExperienceCollection));
  }
  },

  //NEXT BUTTONS and Back Buttons
  FirstNextButton(ResumePFP){
    
    if(!ResumePFP.Image){
      this.firstErrorStep = 'Please upload a Resume Picture';
    }
    else{
      this.firstErrorStep = '';
      this.Step1=false;
    this.Step2=true;
    }


   
  },
  SecondNextButton(PersonalInfo){
   
    if( !PersonalInfo.Gender || !PersonalInfo.CivilStatus || !PersonalInfo.LastName || !PersonalInfo.FirstName || !PersonalInfo.MiddleName || 
     !PersonalInfo.Age || !PersonalInfo.Weight || !PersonalInfo.Height || !PersonalInfo.BirthDate || !PersonalInfo.BirthPlace ||
    !PersonalInfo.BloodType || !PersonalInfo.CivilStatus ){
        this.secondErrorStep = 'Please fill in all required fields'

      }
      else{
        this.Step2=false;
    this.Step3=true;
      }

  },
  SecondBackButton(){
    this.Step2=false;
    this.Step1=true;
  },
  ThirdNextButton(PersonalInfo,validateEmail,validatePhoneNumber){

    if( !PersonalInfo.Address || !PersonalInfo.PhoneNumber || !PersonalInfo.Email || !PersonalInfo.Description){
        this.thirdErrorStep = 'Please fill in all required fields!'
      }
      else if(!validateEmail(PersonalInfo.Email)){
        this.thirdErrorStep = 'Please input a valid email address!'
      }
      else if(!validatePhoneNumber(PersonalInfo.PhoneNumber)){
        this.thirdErrorStep = 'Please input a correct phone number in phillipine number format!'
      }
      else{
      this.Step3=false;
      this.Step4=true;
      }


   
  },
  ThirdBackButton(){
    this.Step2=true;
    this.Step3=false;
  },
  FourthNextButton(){
    this.Step4=false;
    this.Step5=true;
  },
  FourthBackButton(){
    this.Step3=true;
    this.Step4=false;
  },
  FifthNextButton(){
    this.Step5=false;
    this.Step6=true;
  },
  FifthBackButton(){
    this.Step4=true;
    this.Step5=false;
  },
  FinalNextButton(overallForm,ResumePFP,PersonalInfo,EducationArray,showSkillAddedd,ExperienceArray){
    overallForm.Image = ResumePFP.Image;
    overallForm.Gender = PersonalInfo.Gender;
    overallForm.Citizenship = PersonalInfo.Citizenship;
    overallForm.LastName = PersonalInfo.LastName;
    overallForm.FirstName = PersonalInfo.FirstName;
    overallForm.MiddleName = PersonalInfo.MiddleName;
    overallForm.Suffix = PersonalInfo.Suffix;
    overallForm.Age = PersonalInfo.Age;
    overallForm.Weight = PersonalInfo.Weight;
    overallForm.Height = PersonalInfo.Height;
    overallForm.BirthDate = PersonalInfo.BirthDate;
    overallForm.BirthPlace = PersonalInfo.Image;
    overallForm.BloodType = PersonalInfo.BloodType;
    overallForm.CivilStatus = PersonalInfo.CivilStatus;
    overallForm.Address = PersonalInfo.Address;
    overallForm.PhoneNumber = PersonalInfo.PhoneNumber;
    overallForm.Email = PersonalInfo.Email;
    overallForm.CareerObjective = PersonalInfo.CareerObjective;
    
    overallForm.Skill =  showSkillAddedd.SkillAddedd;
    overallForm.Education = EducationArray.EducationCollection;
    overallForm.Experience = ExperienceArray.ExperienceCollection;
    
    console.log(overallForm)
  },
  FinalBackButton(){
    this.Step5=true;
    this.Step6=false;
  },

},
}
</script>

<template>
    <Head title="Jobseeker Dashboard" />

    <Sidebar>
      
        <div class="p-4 sm:ml-64">


         
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

          
              
               <div class=" mb-4 p-10 rounded bg-gray-50 dark:bg-gray-800">    
               
                
                  <div class=" rounded bg-gray-50 dark:bg-gray-800">
                   
<form>
  <div class="">
  
  
   <div v-show="Step1">
    <h5 class="text-2xl font-bold tracking-tight text-white sm:text-2xl mb-4">STEP 1</h5>
    <div class="flex">
      <div v-show="imageURL" class="p-5">
        <img :src="imageURL" alt="Selected image" class="w-36 h-36 rounded ring-2 ring-gray-300 dark:ring-gray-500">
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
            <input   @input="ResumePFP.Image=$event.target.files[0]"   @change="Preview_image(ResumePFP)" id="dropzone-file" type="file" class="hidden" />
        </label>
      </div> 
    </div>
   
<p class="mt-1 text-sm text-gray-500 dark:text-gray-300 mb-5" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
    <hr class="w-full h-1 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-sky-700">
   

      <div class="flex justify-end">
        <InputError class="mt-2" :message="firstErrorStep" />
        <button @click="FirstNextButton(ResumePFP)" type="button" 
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
      focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto ms-5 px-5 py-2.5 text-center 
      dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
   
      </div>
 
   
   </div>

  
   <div v-show="Step2">
    <h5 class="text-2xl font-bold tracking-tight text-white sm:text-2xl mb-4">STEP 2</h5>
    <div class="grid md:grid-cols-4 md:gap-6 mt-5 mb-5 items-center">

      <div class="flex ">
        <h5 class="text-2sm font-bold tracking-tight text-white sm:text-1sm mb-4 me-5">Gender: </h5>
        <div class="flex-none items-center">
            <div class="flex-1 w-20 ">
                <div class="flex items-center mb-4">
                    <input   v-model="PersonalInfo.Gender" id="default-radio-1" type="radio" value="Male" name="default-radio" 
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    
                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Male</label>
                </div>
            </div>
        </div>
        <div class="flex-none w-32 ">
            <div class="flex ">
                <input v-model="PersonalInfo.Gender" id="default-radio-2" type="radio" value="Female" name="default-radio" 
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
            </div>
        </div>
      </div>

      <div class="relative z-0 w-full mb-6 group">
        <input  v-model="PersonalInfo.Citizenship" type="text" name="floating_Citizenship" id="floating_Citizenship" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_Citizenship" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Citizenship</label>
    </div>
    </div>
   
   
    
    <div class="grid md:grid-cols-4 md:gap-6">
      <div class="relative z-0 w-full mb-6 group">
          <input  v-model="PersonalInfo.LastName" type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
      </div>
      <div class="relative z-0 w-full mb-6 group">
          <input v-model="PersonalInfo.FirstName"  type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
      </div>
      <div class="relative z-0 w-full mb-6 group">
        <input v-model="PersonalInfo.MiddleName" type="text" name="floating_middle_name" id="floating_middle_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_middle_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Middle name</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input v-model="PersonalInfo.Suffix" type="text" name="floating_suffix" id="floating_suffix" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_suffix" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Suffix</label>
    </div>
    


    </div>

    
    <div class="grid md:grid-cols-5 md:gap-6">
        
    <div class="col-span-1">
      <input v-model="PersonalInfo.Age" type="number" id="helper-text" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Age">
    </div>
      <div class="relative z-0 w-full mb-6 group">
        <input v-model="PersonalInfo.Weight" type="number" id="helper-text" aria-describedby="helper-text-explanation" 
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
        focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Weight">
      </div>
      <div class="relative z-0 w-full mb-6 group">
        <input v-model="PersonalInfo.Height" type="number" id="helper-text" aria-describedby="helper-text-explanation" 
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
        focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Height">
      </div>
   
      <div class="relative z-0 w-full mb-6 group">
        <input v-model="PersonalInfo.BirthDate" type="text" name="floating_BirthDate" id="floating_BirthDate" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_BirthDate" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date of Birth</label>
    </div>
    
    <div class="relative z-0 w-full mb-6 group">
      <input v-model="PersonalInfo.BirthPlace" type="text" name="floating_BirthPlace" id="floating_BirthPlace" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="floating_BirthPlace" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Birth Place</label>
  </div>
    </div>
    
    <!-- Blood Type -->
    <div class="grid md:grid-cols-4 md:gap-6">
   
    
      <div class="col-span-4">
        <h5 class="text-2sm font-bold tracking-tight text-white sm:text-1sm mb-4 me-5">Blood type: </h5>
        <div class="grid grid-cols-4 gap-4">
          
          <div class="flex items-center">
        
            <input v-model="PersonalInfo.BloodType" id="blood-type-a" type="radio" value="A+" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-a" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type A+</label>
            
            
          </div>
          
          <div class="flex items-center">
            <input v-model="PersonalInfo.BloodType" id="blood-type-b" type="radio" value="B+" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-b" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type B+</label>
          </div>
    
          <!-- Add the third blood type radio button -->
          <div class="flex items-center">
            <input v-model="PersonalInfo.BloodType" id="blood-type-o" type="radio" value="O+" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type O+</label>
          </div>
          
          <div class="flex items-center">
            <input v-model="PersonalInfo.BloodType" id="blood-type-o" type="radio" value="AB" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type AB</label>
          </div>
          
          <div class="flex items-center">
            <input v-model="PersonalInfo.BloodType" id="blood-type-o" type="radio" value="A-" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type A-</label>
          </div>

          <div class="flex items-center">
            <input v-model="PersonalInfo.BloodType" id="blood-type-o" type="radio" value="B-" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type B-</label>
          </div>

          <div class="flex items-center">
            <input v-model="PersonalInfo.BloodType" id="blood-type-o" type="radio" value="O-" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="blood-type-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood Type O-</label>
          </div>

          <div class="flex items-center">
            <input v-model="PersonalInfo.BloodType" id="blood-type-o" type="radio" value="AB-" name="blood-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
        
            <input v-model="PersonalInfo.CivilStatus" id="Civil-status-a" type="radio" value="Single" name="Civil-status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="Civil-status-a" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Single</label>
            
            
          </div>
          
          <div class="flex items-center">
            <input v-model="PersonalInfo.CivilStatus" id="Civil-status-b" type="radio" value="Married" name="Civil-status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="Civil-status-b" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Married</label>
          </div>
    
          <!-- Add the third blood type radio button -->
          <div class="flex items-center">
            <input v-model="PersonalInfo.CivilStatus" id="Civil-status-o" type="radio" value="Widowed" name="Civil-status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="Civil-status-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Widowed</label>
          </div>
          
          <div class="flex items-center">
            <input v-model="PersonalInfo.CivilStatus" id="Civil-status-o" type="radio" value="Divorce" name="Civil-status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="Civil-status-o" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Divorce</label>
          </div>
          
     

          
        </div>
      </div>
      
    </div>

    <hr class="w-full h-1 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-sky-700">
  
    <div class="flex justify-between">

      <button @click="SecondBackButton(PersonalInfo)" type="button" 
      class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none
      focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center 
      dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Go back</button>

      <InputError class="mt-2" :message="secondErrorStep" />

      <button @click="SecondNextButton(PersonalInfo)" type="button" 
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
      focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center 
      dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
    </div>
   
    </div>


    <div v-show="Step3">
      <h5 class="text-2xl font-bold tracking-tight text-white sm:text-2xl mb-4">STEP 3</h5>
    <div class="relative z-0 w-full mb-6 group">
        <input v-model="PersonalInfo.Address" type="text" name="floating_address" id="floating_address" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
    </div>

    <div class="grid md:grid-cols-2 md:gap-6">
      <div class="relative z-0 w-full mb-6 group">
          <input v-model="PersonalInfo.PhoneNumber" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
      </div>
      <div class="relative z-0 w-full mb-6 group">
          <input  v-model="PersonalInfo.Email" type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
      </div>
    </div>

<div class="mb-5">
  
<label for="message" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Career Objective</label>
<textarea  v-model="PersonalInfo.Description" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your career objectives here..."></textarea>

</div>

<hr class="w-full h-1 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-sky-700">

<div class="flex justify-between">
  <button  @click="ThirdBackButton()"  type="button" 
  class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none
      focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center 
      dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Go back</button>
      <InputError class="mt-2" :message="thirdErrorStep" />
  <button @click="ThirdNextButton(PersonalInfo,validateEmail, validatePhoneNumber)" type="button" 
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
    focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center 
    dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
</div>

</div>


<!--   -->
  <div  v-show="Step4" class="Education">
    <h5 class="text-2xl font-bold tracking-tight text-white sm:text-2xl mb-4">STEP 4</h5>
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
                    v-for="(educationItem, index) in filteredTertiaryEducation(EducationArray)"
                    :key="index"
                    id="EducationCard" 
                  class="block max-w-full p-6 m-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"
                  >
                    
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
                    v-for="(educationItem, index) in filteredSecondaryEducation(EducationArray)"
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
                    v-for="(educationItem, index) in filteredPrimaryEducation(EducationArray)"
                  
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
    <hr class="w-full h-1 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-sky-700">
    <div class="flex justify-between">
      <button  @click="FourthBackButton()"  type="button" 
      class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none
      focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center 
      dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Go back</button>
      <InputError class="mt-2" :message="fourthErrorStep" />
      <button  @click="FourthNextButton(PersonalInfo)"  type="button" 
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
        focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center 
        dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
    </div>

  </div>


    <!-- SKILLS SECTION  -->
    <div  v-show="Step5" class="Skills">
      <h5 class="text-2xl font-bold tracking-tight text-white sm:text-2xl mb-4">STEP 5</h5>
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
          :skillErrorMessage="skillErrorMessage"
          @addSkill="addSkill"
          @closeSkillsDialog="closeSkillsDialog"
          @clearSkills="clearSkills"
          @removeSkill="removeSkill"
          >

          </SkillInput>
        </Dialog>

        <div class="grid md:grid-cols-1 ">

        
<div  v-show="AddeddSkillCard" class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
 
 
      <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Your Skills</h5>
 
  <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Here are your skills that you want to be shown in your resume.</p>

  <span v-for="(skillItem, index) in showSkillAddedd.SkillAddedd"
  :key="index" id="badge-dismiss-dark" class="inline-flex items-center mb-2 px-2 py-1 mr-2 text-md font-medium text-gray-800 bg-gray-100 rounded dark:bg-gray-700 dark:text-gray-300">
    {{ skillItem.Skill }}
    <button
    @click="removeSkill(skillItem.Skill,showSkillAddedd,getSkillArrayLength)"
     type="button" 
    class="inline-flex items-center p-1 ml-2 text-sm text-gray-400 bg-transparent rounded-sm hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-gray-300" data-dismiss-target="#badge-dismiss-dark" aria-label="Remove">
      <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
      <span class="sr-only">Remove Skills</span>
    </button>
  </span>
</div>


          </div>



      </div>
      <hr class="w-full h-1 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-sky-700">

      <div class="flex justify-between">
        <button  @click="FifthBackButton()"  type="button" 
        class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none
      focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center 
      dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Go back</button>
      <InputError class="mt-2" :message="fifthErrorStep" />
        <button   @click="FifthNextButton(PersonalInfo)"   type="button" 
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
          focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center 
          dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
      </div>

      
    </div>
    <!-- SKILLS SECTION -->




 <!-- Experience SECTION -->
 <div v-show="Step6" class="Experience">
  <h5 class="text-2xl font-bold tracking-tight text-white sm:text-2xl mb-4">STEP 6</h5>
  <div class="flex items-center">
    <label for="message" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Experiences</label>
    <button type="button" @click="openExperienceDialog()" class="text-gray-900 bg-white border ms-3 border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 
    focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-1.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 
    dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">+ Add Experience</button>


  </div>

  <div>

    <hr class="w-full h-0.5 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-gray-700">

    <Dialog :dialogExperience="dialogExperience" >
   
      <ExperienceInput
      :hideJobEnded="hideJobEnded"
      :ExperienceArray="ExperienceArray"
      :ExperienceValuesForm="ExperienceValuesForm"
      :errorExperienceMessage="errorExperienceMessage"
      @addExperience="addExperience"
      @StillEmployed="StillEmployed"
      @closeExperienceDialog="closeExperienceDialog"
      >

      </ExperienceInput>
    </Dialog>

    <div class="grid md:grid-cols-2 gap-4">

      <div v-for="(experienceItem, index) in ExperienceArray.ExperienceCollection"
      :key="index" class="max-w-full mb-5 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-between">
       <div class="flex">
        <svg class="w-7 h-7 me-3 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path fill="currentColor" d="M18 15h-2v2h2m0-6h-2v2h2m2 6h-8v-2h2v-2h-2v-2h2v-2h-2V9h8M10 7H8V5h2m0 6H8V9h2m0 6H8v-2h2m0 6H8v-2h2M6 7H4V5h2m0 6H4V9h2m0 6H4v-2h2m0 6H4v-2h2m6-10V3H2v18h20V7H12Z"/></svg>
        <label for="message" class="block mb-2  text-2xl font-medium text-gray-900 dark:text-white">{{experienceItem.Company}}</label>
       </div>
         
       <button @click="removeExperience(ExperienceArray,experienceItem.Company,experienceItem.Position)" type="button" class="px-3 py-2 text-sm font-medium text-center inline-flex items-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
      
        Remove
      </button>
    </div> 
    <p class="font-normal text-green-700 dark:text-green-300"> {{ formatDate(experienceItem.JobStarted)  }} - 
       <span v-if="experienceItem.StillEmployed">Still Employed</span>
      <span v-else>{{ formatDate(experienceItem.JobEnded) }}</span></p>


    <p class="mb-1 font-normal text-gray-500 dark:text-gray-200">Position: {{experienceItem.Position}}
     
    </p>
        <p class="mb-1 font-normal text-gray-500 dark:text-gray-200">Location: {{experienceItem.Location}}</p>
        <p class="mb-1 font-normal text-gray-500 dark:text-gray-200">Location Type: {{experienceItem.LocationType}}</p>
        <p class="mb-1 font-normal text-gray-500 dark:text-gray-200">Employment Type: {{experienceItem.EmploymentType}}</p>
        <hr class="w-full h-0.5 mx-auto my-4 bg-sky-100 border-0 rounded md:my-5 dark:bg-gray-700">
        <label for="Degree" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job Description</label>
        <div class="max-w-full mb-5 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <p class="text-justify font-normal text-gray-500 dark:text-gray-300">{{experienceItem.Description}}</p>
        </div>
    </div>
    

      </div>



  </div>
 <div class="flex justify-between">
        <button @click="FinalBackButton()"   type="button" 
        class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none
      focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center 
      dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Go back</button>
      <InputError class="mt-2" :message="finalErrorStep" />
        <button   @click="FinalNextButton(overallForm,ResumePFP,PersonalInfo,EducationArray,showSkillAddedd,ExperienceArray)"  type="button" 
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
          focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center 
          dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Done</button>
      </div>

</div>
<!-- Experience  SECTION -->


  
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

