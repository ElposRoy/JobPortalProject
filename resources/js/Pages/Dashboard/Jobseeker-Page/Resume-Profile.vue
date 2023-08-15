<script setup>

import { router } from '@inertiajs/vue3'
import { useForm, Head } from '@inertiajs/vue3';
import { reactive, onMounted, ref } from 'vue';

// Components
import InputError from '@/Components/InputError.vue';
import Footer from '@/Layouts/Footer.vue';
import Sidebar from '@/Layouts/Sidebar.vue';
import EducationInput from '@/Pages/Dashboard/Components/EducationInput.vue';
import SkillInput from '@/Pages/Dashboard/Components/SkillInput.vue';
import ExperienceInput from '@/Pages/Dashboard/Components/ExperienceInput.vue';
import UpdateForm from '@/Pages/Dashboard/Components/UpdateForm.vue';

import UpdateDialog from '@/Pages/Dashboard/Components/UpdateDialog.vue';

defineProps(['resume','education','experiences','skills']);

const baseurl = ref('');
onMounted(() => {
  baseurl.value = location.origin;

});

function formatYear(dateString) {
  const options = { year: 'numeric' };
  const date = new Date(dateString);
  return date.toLocaleDateString(undefined, options);
}

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


const ResumePFP = useForm ({
  Image: '',

});


const PersonalInfo = useForm ({

  DesiredPosition: '',
  LastName: '',
  FirstName: '',
  MiddleName: '',
  Address: '',
  PhoneNumber: '',
  Email: '',
  CareerObjective: '',
 

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



const ReferenceForm= useForm ({
  Name: '',
  Company: '',
  Position: '',
  Phone: '',
  Email: '',
});


</script>


<script>
export default {



  data: () => ({
   
    imageURL: null,
    hideJobEnded: false,
    skillErrorMessage: '',

    dialogResumeHead: false,
    dialogContact: false,

    dialogEducation: false,
    dialogSkill: false,
    dialogEducation: false,
    dialogExperience: false,

    errorMessage: '',

  

    
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
  dialogResumeHead(val){
    val || this.closeUpdateForm()
  },
  dialogContact(val){
    val || this.closeUpdateForm()
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
 
 
    },

methods: {
 // if the this.inertia post is undefined, use async and await 
 async UpdateHead() {

    try {
      await this.$inertia.post(route('resume-profile.addEducation', resume,), {
        onSuccess: () => {
       
      },
      });
      
      // Handle success
    } catch (error) {
      // Handle error
    }
  },



  async addEducation() {
    try {
      await this.$inertia.post(route('resume-profile.addEducation', resume,), {
        onSuccess: () => {
       
      },
      });
      
      // Handle success
    } catch (error) {
      // Handle error
    }
  },

  async addExperience() {
    try {
      await this.$inertia.post(route('resume-profile.addExperience', '1'), {
        onSuccess: () => {
       
      },
      });
      
      // Handle success
    } catch (error) {
      // Handle error
    }
  },

  async addSkill() {
    try {
      await this.$inertia.post(route('resume-profile.addSkill', '1'),  {
        onSuccess: () => {
       
        },
     
      });
      
      // Handle success
    } catch (error) {
      // Handle error
    }
  },
  async addLanguage() {
    try {
      await this.$inertia.post(route('resume-profile.addLanguage', '1'), {
        onSuccess: () => {
       
      },
      });
      
      // Handle success
    } catch (error) {
      // Handle error
    }
  },
  async addReference() {
    try {
      await this.$inertia.post(route('resume-profile.addReference', '1'), {
        onSuccess: () => {
       
      },
      });
      
      // Handle success
    } catch (error) {
      // Handle error
    }
  },

  openResumeHead(PersonalInfo,Fname,Mname,Lname,Position,CareerObjective){
    
    PersonalInfo.DesiredPosition = Position ;
    PersonalInfo.CareerObjective = CareerObjective
    PersonalInfo.FirstName  = Fname;
    PersonalInfo.MiddleName  = Mname;
    PersonalInfo.LastName  = Lname;


    this.dialogResumeHead = true;
    
  },
  openContact(PersonalInfo,Phone, Email, Address){
    
    PersonalInfo.PhoneNumber = Phone ;
    PersonalInfo.Email = Email
    PersonalInfo.Address = Address;
   


    this.dialogContact = true;
    
  },


  closeUpdateForm(){
 
  this.dialogResumeHead = false;
  this.dialogContact = false;
 },


  closeEducationDialog(){
    this.dialogEducation = false;

  },
  closeSkillsDialog(){
    this.dialogSkill=false;
  },
 closeExperienceDialog(){
 
    this.dialogExperience = false;
  },
 

},
}
</script>



<template>
    <Head title="Dashboard-Announcements" />
  
    <Sidebar>
      
      <UpdateDialog
      :dialogResumeHead="dialogResumeHead"
      :dialogContact="dialogContact">

      <UpdateForm
      :dialogResumeHead="dialogResumeHead"
      :dialogContact="dialogContact"
      :PersonalInfo="PersonalInfo"
      @closeUpdateForm="closeUpdateForm">

      </UpdateForm>
        <!-- <SkillInput>

        </SkillInput>

        <ExperienceInput>

        </ExperienceInput>

        <EducationInput>

        </EducationInput> -->

      </UpdateDialog>

        <div class="p-4 sm:ml-64">
            <div class="p-2 border-2 border-gray-200  dark:bg-gray-400 rounded-lg dark:border-gray-700 mt-14">

                 <div class="flex items-center justify-center  mb-4 rounded bg-gray-50 dark:bg-gray-800">
                
                  
                  <div class="grid md:grid-cols-5">
            <!-- Left Column -->
  <div  class="col-span-1 block max-w-full p-6 bg-white border bg-gray-200 border-gray-200  shadow  dark:bg-gray-800 dark:border-gray-700 ">


    
    <div
  class="relative max-w-xs overflow-hidden bg-cover bg-no-repeat mb-5"
  data-te-ripple-init
  data-te-ripple-color="light">
  <img
  :src="baseurl+'/storage/images/Pfp.jpeg'"
  class="object-fill h-52 w-52"
    alt="Louvre" />
  <a class="cursor-pointer">
    <div
      class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
  </a>
</div>
  

    <div>
      <div class="flex justify-between relative">
        <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Contact</h5>
        <button @click="openContact(PersonalInfo, resume.PhoneNumber, resume.Email, resume.Address)" type="button" class="absolute top-1/2 transform -translate-y-1/2 right-0 px-2 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" viewBox="0 0 24 24"><path fill="currentColor" d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75L3 17.25Z"/></svg>
       
        </button>

        
      </div>
      
     
      <hr class="h-1 mb-3 bg-gray-200 border-0 dark:bg-gray-700">

      <div class="mb-5">
        <p class="font-normal tracking-tight text-gray-900 dark:text-white">Phone</p>
  <p class="text-sm text-gray-500 dark:text-gray-400">{{resume.PhoneNumber}}</p>
      </div>

      <div class="mb-5">
        <p class="font-normal tracking-tight text-gray-900 dark:text-white">Email</p>
        <p class="text-sm text-gray-500 dark:text-gray-400">{{resume.Email}}</p>
      </div>

      <div class="mb-5">
        <p class="font-normal tracking-tight text-gray-900 dark:text-white">Address</p>
        <p class="text-sm text-gray-500 dark:text-gray-400">{{ resume.Address }}</p>
      </div>
    </div>

    
    <div >
      <div class="flex justify-between relative">
        <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Education</h5>
        <button type="button" class="absolute top-1/2 transform -translate-y-1/2 right-0 px-2 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" viewBox="0 0 24 24"><path fill="currentColor" d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75L3 17.25Z"/></svg>
       
        </button>

        
      </div>
      
      <hr class="h-1 mb-3 bg-gray-200 border-0 dark:bg-gray-700">

      <div class="mb-5" v-for="(educationItem, index) in education" :key="index">
        <template v-if="educationItem.Level === 'Tertiary'">


          <p class="text-sm text-gray-500 dark:text-gray-400">Tertiary ( {{formatYear(educationItem.StartDate)}} to {{formatYear(educationItem.EndDate)}} )</p>
          <p class="font-normal tracking-tight text-gray-900 dark:text-white">{{educationItem.School}}</p>
          <p class="text-sm text-indigo-500 dark:text-indigo-400">{{educationItem.Degree}}</p>
          <p class="text-sm text-gray-500 dark:text-gray-400">{{educationItem.Address}}</p>
        </template>
        <hr class="h-px  bg-gray-200 border-0 dark:bg-gray-700">
      </div>
    
      <div class="mb-5" v-for="(educationItem, index) in education" :key="index">
        <template v-if="educationItem.Level === 'Secondary'">

          <p class="text-sm text-gray-500 dark:text-gray-400">Secondary( {{formatYear(educationItem.StartDate)}} to {{formatYear(educationItem.EndDate)}} )</p>
          <p class="font-normal tracking-tight text-gray-900 dark:text-white">{{educationItem.School}}</p>
          <p class="text-sm text-indigo-500 dark:text-indigo-400">{{educationItem.Degree}}</p>
          <p class="text-sm text-gray-500 dark:text-gray-400">{{educationItem.Address}}</p>
        </template>
        <hr class="h-px  bg-gray-200 border-0 dark:bg-gray-700">
      </div>
  
      <div class="mb-5" v-for="(educationItem, index) in education" :key="index">
        <template v-if="educationItem.Level === 'Primary'">

          <p class="text-sm text-gray-500 dark:text-gray-400">Primary ( {{formatYear(educationItem.StartDate)}} to {{formatYear(educationItem.EndDate)}} )</p>
          <p class="font-normal tracking-tight text-gray-900 dark:text-white">{{educationItem.School}}</p>
          <p class="font-normal tracking-tight text-gray-900 dark:text-white">{{educationItem.Degree}}</p>
          <p class="text-sm text-gray-500 dark:text-gray-400">{{educationItem.Address}}</p>
        </template>
        <hr class="h-px  bg-gray-200 border-0 dark:bg-gray-700">
      </div>
     
    </div>
  
    
    <div>
      <div class="flex justify-between relative">
        <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Skills</h5>
        <button type="button" class="absolute top-1/2 transform -translate-y-1/2 right-0 px-2 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" viewBox="0 0 24 24"><path fill="currentColor" d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75L3 17.25Z"/></svg>
       
        </button>

        
      </div>
      
      <hr class="h-1 mb-3 bg-gray-200 border-0 dark:bg-gray-700">

      <div class="mb-5">
      

      <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
          <li class="flex items-center" v-for="(skillItem, index) in skills" :key="index">
              <svg class="w-3.5 h-3.5 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
              </svg>
              {{ skillItem.Skill }}
          </li>
     
        
      </ul>

      </div>

     
    </div>

    <div>
      <div class="flex justify-between relative">
        <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Languages</h5>
        <button type="button" class="absolute top-1/2 transform -translate-y-1/2 right-0 px-2 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" viewBox="0 0 24 24"><path fill="currentColor" d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75L3 17.25Z"/></svg>
       
        </button>

        
      </div>
      
      <hr class="h-1 mb-3 bg-gray-200 border-0 dark:bg-gray-700">

      <div class="mb-5">
      

      <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
          <li class="flex items-center">
            <svg class="flex-shrink-0 mr-2 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
           </svg>
            English
          </li>
       
          <li class="flex items-center">
            <svg class="flex-shrink-0 mr-2 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
           </svg>
            Bicol
        </li>
        
      </ul>

      </div>

     
    </div>

  

  
  </div>


<!-- RIGHT MAIN -->

<div class="col-span-4 block max-w-full p-6 bg-white border border-gray-100  shadow  dark:bg-gray-100 dark:border-gray-700 ">

  <div class="mt-5 mb-9">
    <div class="relative">
      <h5 class="mb-2 text-5xl font-bold tracking-tight text-black font-mono tracking-widest">{{resume.FirstName}} {{resume.MiddleName[0]}}. {{ resume.LastName }}</h5>
      <button @click="openResumeHead(PersonalInfo,resume.FirstName,resume.MiddleName,resume.LastName,resume.DesiredPosition,resume.CareerObjective)" type="button" class="absolute top-0 right-0 mt-[-0.5rem] mr-[-0.5rem] px-2 py-2  text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white " viewBox="0 0 24 24"><path fill="currentColor" d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75L3 17.25Z"/></svg>
      Edit
      </button>
   
  </div>
  
  
    <h5 class="mb-2 text-2xl font-normal text-gray-800 dark:text-gray-700">{{resume.DesiredPosition}}</h5>

    <p class="text-md text-gray-800 dark:text-gray-700 text-justify">
    {{ resume.CareerObjective }}
    </p>
    <!-- <hr class="h-1 mb-3 mt-3 bg-gray-200 border-0 dark:bg-gray-700"> -->

  </div>
 
  <div>
    <div class="flex justify-between relative">
      <h5 class="mb-1 text-2xl font-bold tracking-tight text-black">Experience</h5>
      <button type="button" class="absolute top-1/2 transform -translate-y-1/2 right-0 px-2 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" viewBox="0 0 24 24"><path fill="currentColor" d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75L3 17.25Z"/></svg>
      </button>
    </div>
    
    <hr class="h-1 mb-3 bg-gray-200 border-0 dark:bg-gray-700">

    <div class="flex items-center mb-3 bg-gray-600" v-for="(experienceItem, index) in experiences" :key="index">
      <div
          class="my-4 ms-3 rounded-full h-10 w-10 flex items-center bg-indigo-300 ring-4 ring-indigo-400 ring-opacity-30">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" 
          viewBox="0 0 24 24"><path 
          fill="currentColor" d="M10 2h4a2 2 0 0 1 2 2v2h4a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8c0-1.11.89-2 
          2-2h4V4c0-1.11.89-2 2-2m4 4V4h-4v2h4Z"/></svg>
      </div>
  
      <div class="max-w-full w-full ms-5 p-6 bg-white  shadow dark:border-gray-700">
       
        <div class="flex justify-between items-center">
          <h5 class=" text-2xl font-semibold tracking-tight text-gray-900 dark:text-gray-900">{{experienceItem.Company}}</h5>
          <h5 class=" text-2sm font-semibold tracking-tight text-gray-900  dark:text-gray-900">{{formatYear(experienceItem.JobStarted) }} to {{formatYear( experienceItem.JobEnded)}}</h5>
        </div>
        <p class=" font-bold text-indigo-500 dark:text-indigo-900">{{ experienceItem.Position }}  - ( {{ experienceItem.EmploymentType }})</p>
        <p class="mb-2 font-bold text-indigo-500 dark:text-indigo-900">{{  experienceItem.Location }} - ({{experienceItem.LocationType }}) </p>
      
        
          <p class="mb-3 font-normal text-gray-500 dark:text-gray-600 text-justify">
            {{  experienceItem.Description}}
          </p>
       
      </div>
  </div>




  

  </div>

  <!-- References -->
  <div class="mb-10">
    <div class="flex justify-between relative">
      <h5 class="mb-1 text-2xl font-bold tracking-tight text-black">References</h5>
      <button type="button" class="absolute top-1/2 transform -translate-y-1/2 right-0 px-2 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" viewBox="0 0 24 24"><path fill="currentColor" d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75L3 17.25Z"/></svg>
      </button>
    </div>
   
    <hr class="h-1 mb-3 bg-gray-200 border-0 dark:bg-gray-700">

    <div class="grid md:grid-cols-3 gap-5 mt-7 ">
   
<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-300 dark:border-gray-700">
  <div class="flex justify-end px-4 pt-4">
    
    
  </div>
  <div class="flex flex-col items-center pb-5">
   
      <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-black">Refreree D. Call</h5>
      <span class="text-sm text-gray-500 dark:text-black"> (MIT Instructor) Company</span>
      <span class="text-sm text-gray-500 dark:text-black">09917320847</span>
      <span class="text-sm text-gray-500 dark:text-black">email@gmail.com</span>
  </div>
</div>



      </div>
  </div>

  <div class="text-center ">
    <span class="text-md text-gray-500 dark:text-black">I hereby certify that all the above information are true and correct according to my own knowledge and belief.</span>

  </div>

</div>



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
</style>
