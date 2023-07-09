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
    <img class="fill-current h-25 w-25 mr-2" :src="baseurl+'/images/Logo.png'">
</template>
