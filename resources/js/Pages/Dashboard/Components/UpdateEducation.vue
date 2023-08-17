<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Sidebar from '@/Layouts/Sidebar.vue';
import InputError from '@/Components/InputError.vue';

import { useForm,Head } from '@inertiajs/vue3';
import { reactive, onMounted, ref } from 'vue';
import { router } from '@inertiajs/vue3'


import EducationInput from '@/Pages/Dashboard/Components/EducationInput.vue';


</script>

<script>
export default {
  data: () => ({
   
  }
  ),
  computed: {
  
},

watch: {

},

created () {

},

methods: {
 
 
  initialize () {
  
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

