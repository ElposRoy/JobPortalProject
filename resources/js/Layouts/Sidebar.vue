

<script setup>
import { ref, onMounted } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

defineProps(['hasResume']);
const baseurl = ref('');
const currentPath = ref(window.location.pathname);

const isActiveLink = (path) => {
  return currentPath.value === path;
};

// Function to show/hide dropdown
const resultDropdownValue = ref("hidden");
const showDropdown = (dropDownValue) => {
   
  resultDropdownValue.value = dropDownValue === resultDropdownValue.value ? "hidden" : dropDownValue;

};


onMounted(() => {
  baseurl.value = location.origin;
});


</script>


<script>
export default {
    data (){
        return ({
            baseurl: location.origin,
            isSidebarOpen: false,
        })
    },
    
    computed: {
    sidebarClass() {
      // Compute the class based on the sidebar state
      return {
        'fixed top-0 left-0 z-40 w-64 h-screen transition-transform sm:translate-x-0 transform-none': !this.isSidebarOpen, //if false
        'pt-20 -translate-x-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700': this.isSidebarOpen, //if true
      };
    },
  },
  methods: {
    toggleSidebar() {
      // Toggle the sidebar state
      this.isSidebarOpen = !this.isSidebarOpen;
    },
  },
    
}
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
       
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">

            <button @click="toggleSidebar" 
            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 
            focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
              </button>


          <a href="https://flowbite.com" class="flex ml-2 md:mr-24">
            <img class="fill-current h-8 w-8 mr-2" :src="baseurl+'/images/Logo.png'">
    
           
            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Axolios</span>
          </a>
        </div>
        
        <div class="flex items-center">
       
        <button type="button" class="me-4 relative inline-flex items-center p-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
            <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
            <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
          </svg>
          <span class="sr-only">Notifications</span>
          <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
            20</div>
        </button>

         
        <button type="button" class="relative inline-flex items-center p-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><path fill="currentColor" d="M21 19v1H3v-1l2-2v-6c0-3.1 2.03-5.83 5-6.71V4a2 2 0 0 1 2-2a2 2 0 0 1 2 2v.29c2.97.88 5 3.61 5 6.71v6l2 2m-7 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2"/></svg><span class="sr-only">Notifications</span>
          <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
            4+</div>
        </button>


      </div>
        

        <div class="flex items-center">
            <div class="flex items-center ml-3">
              
                <button  id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
                   
                    <img class="w-8 h-8 mr-2 rounded-full" :src="baseurl+'/storage/public/images/Pfp.jpeg'" alt="user photo">
                    ELPOS ROY
                
                  </button>
         
                  
            </div>
          </div>
      </div>
    </div>
  </nav>

  
  
  <aside v-if="$page.props.auth.userRoles.includes('admin')" 
  id="logo-sidebar" 
  class="fixed top-0 left-0 z-40 w-64
   h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200
   sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" 
   aria-label="Sidebar">

    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
       <ul class="space-y-2 font-medium">
          <li>
           <Link 
           :href="route('jobseeker.index')"
           class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
           >
           <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
               <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
               <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
            </svg>
            <span class="ml-3">Dashboard</span>
           </Link>
            
               
          </li> 
          <li>

           <Link
           :href="route('home')"
           class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
           >
           <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
               <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Home</span>
            <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
         
          
           </Link>
         
          </li>
     
          <li>

               <Link :href="route('logout')" method="post" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                   <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Sign Out</span>

               </Link>
           
          </li>
         
       </ul>
    </div>
 </aside>


  <aside v-if="$page.props.auth.userRoles.includes('jobseeker')" id="logo-sidebar" :class="sidebarClass" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
     <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
           <li>
            <Link 
            :href="route('jobseeker.index')"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
             </svg>
             <span class="ml-3">Dashboard</span>
            </Link>
             
                
           </li> 

           <li>

            <Link
            :href="route('home')"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" width="24" height="24" viewBox="0 0 24 24"><defs><path id="solarHomeBold0" fill-rule="evenodd" d="M10.75 9.5a1.25 1.25 0 1 1 2.5 0a1.25 1.25 0 0 1-2.5 0Z" clip-rule="evenodd"/></defs><g fill="currentColor"><path d="M18.5 3H16a.5.5 0 0 0-.5.5v.059l3.5 2.8V3.5a.5.5 0 0 0-.5-.5Z"/><use href="#solarHomeBold0" fill-rule="evenodd" clip-rule="evenodd"/><path fill-rule="evenodd" d="m20.75 10.96l.782.626a.75.75 0 0 0 .936-1.172l-8.125-6.5a3.75 3.75 0 0 0-4.686 0l-8.125 6.5a.75.75 0 0 0 .937 1.172l.781-.626v10.29H2a.75.75 0 0 0 0 1.5h20a.75.75 0 0 0 0-1.5h-1.25V10.96ZM9.25 9.5a2.75 2.75 0 1 1 5.5 0a2.75 2.75 0 0 1-5.5 0Zm2.8 3.75c.664 0 1.237 0 1.696.062c.492.066.963.215 1.345.597s.531.853.597 1.345c.058.43.062.96.062 1.573v4.423h-1.5V17c0-.728-.002-1.2-.048-1.546c-.044-.325-.114-.427-.172-.484c-.057-.057-.159-.128-.484-.172c-.347-.046-.818-.048-1.546-.048c-.728 0-1.2.002-1.546.048c-.325.044-.427.115-.484.172c-.057.057-.128.159-.172.484c-.046.347-.048.818-.048 1.546v4.25h-1.5v-4.3c0-.664 0-1.237.062-1.696c.066-.492.215-.963.597-1.345s.854-.531 1.345-.597c.459-.062 1.032-.062 1.697-.062h.098Z" clip-rule="evenodd"/><use href="#solarHomeBold0" fill-rule="evenodd" clip-rule="evenodd"/></g></svg>
             <span class="flex-1 ml-3 whitespace-nowrap">Home</span>
             <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
          

            </Link>
          
           </li>

           <li>
            <button @click="showDropdown('show')" type="button" class="flex items-center  w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                  
                <svg xmlns="http://www.w3.org/2000/svg"   
                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 
                dark:text-gray-400 dark:group-hover:text-white" 
                width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 2a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2m0 7c2.67 0 8 1.33 8 4v3H4v-3c0-2.67 5.33-4 8-4m0 1.9c-2.97 0-6.1 1.46-6.1 2.1v1.1h12.2V17c0-.64-3.13-2.1-6.1-2.1Z"/></svg>
                
                  <span class="flex-1 ml-3 text-left whitespace-nowrap">Profile</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="dropdown-example" class=" py-2 space-y-2"  v-if="resultDropdownValue === 'show'">
              <li>
                <Link
                :href="route('resume-profile.show', 'Resume-' + $page.props.auth.resumeID )"
                class="flex items-center w-full p-2 text-gray-900 transition 
                duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                >
                <svg xmlns="http://www.w3.org/2000/svg" 
                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 
                dark:text-gray-400 dark:group-hover:text-white" 
                width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M13 9h5.5L13 3.5V9M6 2h8l6 6v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.11.89-2 2-2m8 18v-1c0-1.33-2.67-2-4-2s-4 .67-4 2v1h8m-4-8a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2Z"/></svg><span class="flex-1 ml-3 whitespace-nowrap">
                        Resume</span>
               
                </Link>
              </li>
                  <li>
                    <Link
                    :href="route('profile.edit')"
                    class="flex items-center w-full p-2 text-gray-900 transition 
                    duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" width="24" height="24" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd">
                        <path d="M24 0v24H0V0h24ZM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018Zm.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="currentColor" d="M6 7a5 5 0 1 1 10 0A5 5 0 0 1 6 7Zm5-3a3 3 0 1 0 0 6a3 3 0 0 0 0-6ZM4.413 17.601c-.323.41-.413.72-.413.899c0 .118.035.232.205.384c.197.176.55.37 1.11.543c1.12.346 2.756.521 4.706.563a1 1 0 1 1-.042 2c-1.997-.043-3.86-.221-5.254-.652c-.696-.216-1.354-.517-1.852-.962C2.347 19.906 2 19.274 2 18.5c0-.787.358-1.523.844-2.139c.494-.625 1.177-1.2 1.978-1.69C6.425 13.694 8.605 13 11 13c.447 0 .887.024 1.316.07a1 1 0 0 1-.211 1.989C11.745 15.02 11.375 15 11 15c-2.023 0-3.843.59-5.136 1.379c-.647.394-1.135.822-1.45 1.222Zm16.8-3.567a2.5 2.5 0 0 0-3.536 0l-3.418 3.417a1.5 1.5 0 0 0-.424.849l-.33 2.308a1.001 1.001 0 0 0 1.133 1.133l2.308-.33a1.5 1.5 0 0 0 .849-.424l3.417-3.418a2.5 2.5 0 0 0 0-3.535Zm-2.122 1.414a.5.5 0 0 1 .707.707l-3.3 3.3l-.825.118l.118-.825l3.3-3.3Z"/></g></svg><span class="flex-1 ml-3 whitespace-nowrap">
                            Edit Profile</span>
                   
                    </Link>
                  </li>
                  <li>

                    <Link
                    :href="route('profile.edit')"
                    class="flex items-center w-full p-2 text-gray-900 transition 
                    duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M18 2a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h12m0 2h-5v8l-2.5-2.25L8 12V4H6v16h12V4Z"/></svg>
                     <span class="flex-1 ml-3 whitespace-nowrap">Applications</span>
                   
                    </Link>
                   
                  </li>
                
            </ul>
         </li>

        

           <li>

            <Link
            :href="route('dashboard-announcement')"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 11H4V8h16m0 7h-7v-2h7m0 6h-7v-2h7m-9 2H4v-6h7m9.33-8.33L18.67 3L17 4.67L15.33 3l-1.66 1.67L12 3l-1.67 1.67L8.67 3L7 4.67L5.33 3L3.67 4.67L2 3v16a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V3l-1.67 1.67Z"/></svg>
             <span class="flex-1 ml-3 whitespace-nowrap">Announcements</span>
             <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
          
            </Link>


           </li>

           <li>

            <Link
            :href="route('job')"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
            
            <svg xmlns="http://www.w3.org/2000/svg" 
            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" 
            width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path d="M3 9a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2zm5-2V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m-4 5v.01"/><path d="M3 13a20 20 0 0 0 18 0"/></g></svg> <span class="flex-1 ml-3 whitespace-nowrap">Jobs</span>
            </Link>


           
           </li>

           <li>

            
            <Link
            :href="route('company')"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
            <svg xmlns="http://www.w3.org/2000/svg"  class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"  width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M18 15h-2v2h2m0-6h-2v2h2m2 6h-8v-2h2v-2h-2v-2h2v-2h-2V9h8M10 7H8V5h2m0 6H8V9h2m0 6H8v-2h2m0 6H8v-2h2M6 7H4V5h2m0 6H4V9h2m0 6H4v-2h2m0 6H4v-2h2m6-10V3H2v18h20V7H12Z"/></svg>
             <span class="flex-1 ml-3 whitespace-nowrap">Companies</span>
            </Link>


           
           </li>
        
         <li>

            <Link
            :href="route('profile.edit')"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" width="20" height="20" viewBox="0 0 20 20"><g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M8.232 11.768A2.493 2.493 0 0 0 10 12.5c.672 0 1.302-.267 1.768-.732A2.493 2.493 0 0 0 12.5 10c0-.672-.267-1.302-.732-1.768A2.493 2.493 0 0 0 10 7.5c-.672 0-1.302.267-1.768.732A2.493 2.493 0 0 0 7.5 10c0 .672.267 1.302.732 1.768Zm2.829-.707c-.28.28-.657.439-1.061.439c-.404 0-.78-.16-1.06-.44S8.5 10.405 8.5 10s.16-.78.44-1.06s.656-.44 1.06-.44s.78.16 1.06.44s.44.656.44 1.06s-.16.78-.44 1.06Z"/><path d="m14.216 3.773l-1.27.714a6.213 6.213 0 0 0-1.166-.48l-.47-1.414a.5.5 0 0 0-.474-.343H9.06a.5.5 0 0 0-.481.365l-.392 1.403a6.214 6.214 0 0 0-1.164.486L5.69 3.835a.5.5 0 0 0-.578.094L3.855 5.185a.5.5 0 0 0-.082.599l.714 1.27c-.199.37-.36.76-.48 1.166l-1.414.47a.5.5 0 0 0-.343.474v1.777a.5.5 0 0 0 .365.481l1.403.392c.122.405.285.794.486 1.164l-.669 1.333a.5.5 0 0 0 .094.578l1.256 1.256a.5.5 0 0 0 .599.082l1.27-.714c.37.199.76.36 1.166.48l.47 1.414a.5.5 0 0 0 .474.343h1.777a.5.5 0 0 0 .481-.365l.392-1.403a6.21 6.21 0 0 0 1.164-.486l1.333.669a.5.5 0 0 0 .578-.093l1.256-1.257a.5.5 0 0 0 .082-.599l-.714-1.27c.199-.37.36-.76.48-1.166l1.414-.47a.5.5 0 0 0 .343-.474V9.06a.5.5 0 0 0-.365-.481l-1.403-.392a6.208 6.208 0 0 0-.486-1.164l.669-1.333a.5.5 0 0 0-.093-.578l-1.257-1.256a.5.5 0 0 0-.599-.082Zm-1.024 1.724l1.184-.667l.733.733l-.627 1.25a.5.5 0 0 0 .019.482c.265.44.464.918.59 1.418a.5.5 0 0 0 .35.36l1.309.366v1.037l-1.327.44a.5.5 0 0 0-.328.354a5.216 5.216 0 0 1-.585 1.42a.5.5 0 0 0-.007.502l.667 1.184l-.733.733l-1.25-.627a.5.5 0 0 0-.482.019c-.44.265-.918.464-1.418.59a.5.5 0 0 0-.36.35l-.366 1.309H9.525l-.44-1.327a.5.5 0 0 0-.355-.328a5.217 5.217 0 0 1-1.42-.585a.5.5 0 0 0-.502-.007l-1.184.667l-.733-.733l.627-1.25a.5.5 0 0 0-.019-.482a5.216 5.216 0 0 1-.59-1.418a.5.5 0 0 0-.35-.36l-1.309-.366V9.525l1.327-.44a.5.5 0 0 0 .327-.355c.125-.5.323-.979.586-1.42a.5.5 0 0 0 .007-.502L4.83 5.624l.733-.733l1.25.627a.5.5 0 0 0 .482-.019c.44-.265.918-.464 1.418-.59a.5.5 0 0 0 .36-.35l.366-1.309h1.037l.44 1.327a.5.5 0 0 0 .354.327c.5.125.979.323 1.42.586a.5.5 0 0 0 .502.007Z"/></g></svg> <span class="flex-1 ml-3 whitespace-nowrap">Settings</span>
            </Link>

  


         </li>

         <li>

            <Link
            :href="route('about-us')"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
            <svg xmlns="http://www.w3.org/2000/svg"  
             class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"  width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M11 9h2V7h-2m1 13c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m-1 15h2v-6h-2v6Z"/></svg>
             <span class="flex-1 ml-3 whitespace-nowrap">About us</span>
            </Link>

         </li>


         <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
           <li>

                <Link :href="route('logout')" method="post" as="button" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                     </svg>
                     <span class="flex-1 ml-3 whitespace-nowrap">Sign Out</span>

                </Link>
            
           </li>
          
        </ul>
     </div>
  </aside>
  


 
  

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
