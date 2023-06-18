<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);


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


</script>

<script>

 export default{
  data(){
    return ({
      baseurl: location.origin
    })
  },
}

</script>

<template>


    <nav class="flex items-center justify-between flex-wrap bg-slate-100 p-6 border-b-2 border-red-400">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            
           <img class="fill-current h-8 w-8 mr-2" :src="baseurl+'/images/Logo.png'">
    
          <span class="font-semibold text-2xl tracking-tight text-red-600">MOIXIE</span>
        </div>
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 border rounded text-slate-200 border-slate-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
          <div class="text-sm lg:flex-grow">
    
            <Link :href="route('home')" class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-red-400 mr-4">
             Home
            </Link>
    
            <Link :href="route('announcement')" class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-red-400 mr-4">
            Announcements
            </Link>
    
            <Link  :href="route('job')" class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-red-400 mr-4">
            Jobs
              </Link>
    
            <Link  :href="route('company')" class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-red-400 mr-4">
             Companies
            </Link>
    
            <Link  :href="route('about-us')" class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-red-400">
              About us
            </Link>
        
           
          </div>
         
    
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-white-600 hover:text-white-900 dark:text-white-400 "
                >Dashboard</Link
            >
    
            <template v-else>
                <Link
                    :href="route('login')"
                    class="font-semibold text-white-600 hover:text-white-900 dark:text-white-400 "
                    >Log in</Link
                >
    
                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ml-4 font-semibold text-white-600 hover:text-white-900 dark:text-white-400"
                    >Register</Link
                >
            </template>
        </div>
    
    
        </div>
      </nav>

      <main>
        <slot />
    </main>

</template>
