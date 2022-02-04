
<template>
    <div >
            <transition  name="slide-fade">
                <template v-if="step==0" >
                    <div class="col-12" style="padding: 0;">
                            <home :step.sync="step"/>
                    </div>
                </template>
            </transition >
    
            <transition  name="slide-fade">
                    <travel  v-if="step==1" 
                    />
            </transition >

    </div>



</template>
<script>
    import Home from './Home.vue';
    import Travel from './Travel.vue';


    export default {
        name: 'Conexa',
        
        props:{
        },

        components:{
            'home': Home
            // 'checkout': Checkout,

        },
        data() {
            return {
                step:0
            };
        },
        created() {
        },
        methods: {
            
        }
    }
</script>

<style>

.slide-fade-enter-active {
  transition: all .3s ease;
}
.slide-fade-leave-active {
  transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active below version 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}

        
</style>