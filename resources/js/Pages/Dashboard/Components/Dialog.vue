<script setup>


defineProps(['dialogEducation','dialogSkill']);

</script>
<template>

    <div class="dialog">

      

  <!-- Main modal -->
  <div
  id="staticModal"
  data-modal-backdrop="static"
  tabindex="-1"
  class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center flex"
  :class="{
    'hidden': !(dialogEducation || dialogSkill),
  'modal-open': dialogEducation || dialogSkill,
}"
  aria-modal="true"
  role="dialog"
>
  <div class="modal-overlay"></div> <!-- The modal overlay element -->
  <div class="relative w-full lg:max-w-4xl max-h-full">
    <slot/>
  </div>
</div>



    </div>

</template>


 <script>
 export default {
 
 }
 </script>
 
 <style>


.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.6); /* Adjust the opacity (last value) as needed */
  z-index: -1; /* To position the overlay behind the modal content */
}

</style>