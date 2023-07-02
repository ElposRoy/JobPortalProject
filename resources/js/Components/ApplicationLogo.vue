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
    <img class="fill-current h-8 w-8 mr-2" :src="baseurl+'/images/Logo.png'">
</template>
