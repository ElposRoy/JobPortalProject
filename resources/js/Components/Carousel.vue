<template>
    <div class="carousel">
        <slot :currentSlide="currentSlide"/>

        <!-- Navigation -->

        <div v-if="navEnabled" class="navigate">
            <div class="toggle-page left">
                <i @click="prevSlide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none"><path d="M24 
                        0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.
                        02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-
                        .185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.
                        022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.
                        003-.012l-.01-.01l-.184-.092Z"/><path fill="currentColor" d="M3.283 10.94a1.5 1.5 0 0 0 0 2.12l5.656 5.658a1.5 1.5 0 1 0 2.122-2.122
                        L7.965 13.5H19.5a1.5 1.5 0 0 0 0-3H7.965l3.096-3.096a1.5 1.5 0 1 0-2.122-2.121L3.283 10.94Z"/></g></svg>
                </i>
               
            </div>

            <div class="toggle-page right">
              <i @click="nextSlide">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="currentColor" d="m15.06 5.283l5.657 5.657a1.5 1.5 0 0 1 0 2.12l-5.656 5.658a1.5 1.5 0 0 1-2.122-2.122l3.096-3.096H4.5a1.5 1.5 0 0 1 0-3h11.535L12.94 7.404a1.5 1.5 0 0 1 2.122-2.121Z"/></g></svg>
              </i>
            </div>


        </div>

        <!-- Pagination -->
        <div v-if="pagination" class="pagination">
            <span 
            v-for="(slide, index) in getSlideCount" 
            @click="goToSlide(index)"
            :key="index" 
            :class="{active : index + 1 === currentSlide }"
            >
            
            </span>
        </div>


    </div>
</template>



<script>
import { ref, onMounted } from "vue";
export default {

        props: ["startAutoPlay", "timeout", "navigation", "pagination"],
    //data or setup
    data(props){
        const currentSlide = ref(1); // SHOW FIRST Info
        const getSlideCount = ref(null); //Carousel Slide Counter


        //Duration of Carousel to change content
        const timeoutDuration = ref(props.timeout === undefined ? 5000 : props.timeout); 

        //Enable or Disable the auto play of Carousel
        const autoPlayEnabled = ref(props.startAutoPlay === undefined ? true : props.startAutoPlay); 

        const paginationEnabled = ref(props.pagination === undefined ? true : props.pagination);

        const navEnabled = ref(props.navigation === undefined ? true : props.navigation);

        // Next Slide
        const nextSlide = () => {
            if(currentSlide.value === getSlideCount.value) {
                currentSlide.value = 1
                return;
            }
            currentSlide.value += 1;
        }

        // Previous Slide

        const prevSlide = () => {
            if (currentSlide.value === 1 ){
                currentSlide.value = 1;
                return;
            }
            currentSlide.value -=1 ;
        }

        //Pagination Span
        const goToSlide = (index) => {
            currentSlide.value = index + 1
        }

        //Auto Play 
        const autoPlay = () => {
            setInterval (() => {
                nextSlide()
            }, timeoutDuration.value);
        }

            if(autoPlayEnabled.value){
                autoPlay();
            }

        onMounted(() => {
            getSlideCount.value = document.querySelectorAll('.slide').length;

        })

        return {currentSlide, nextSlide, prevSlide, getSlideCount, goToSlide, paginationEnabled, navEnabled};
    },
}
</script>

<style lang="scss">

    .navigate{
        padding : 0 16px;
        height : 100%;
        width : 100%;
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;

        .toggle-page{
            display: flex;
            flex: 1;
        }

        .right{
            justify-content: flex-end;
        }

        i{
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            background-color: #6347c7;
            color: #fff;
        }
    }
    .pagination{
        position: absolute;
        bottom: 24px;
        width: 100%;
        display: flex;
        gap: 16px;
        justify-content: center;
        align-items: center;

        span{
            cursor:pointer;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #fff;
            box-shadow: 0 1px 3px 0 rgba(0,0,0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        }
        
        .active{
            background-color: #6347c7;
        }
    }
</style>