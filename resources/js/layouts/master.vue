<template>
  <div>
    <headerSection/>
    <transition name="component-fade" mode="out-in">
        <router-view :key="$route.fullPath"></router-view>
    </transition>
     <footerSection/>
   
    
  </div>


</template>


<script>
import headerSection from '../components/header.vue'
import footerSection from '../components/footer.vue'

export default {
   components:{
      headerSection,
      footerSection
        },
  created(){
    //  this.$store.commit('setAuthuser', (window.authUser));
  },
}
</script>