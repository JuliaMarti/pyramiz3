
<template>
    <section id="service-status" class="white">
        <h2>Práctico Conexa</h2>
        <h4>TEST</h4>
        <a @click="start">Conectar con equipo de control</a>
    </section>
</template>
<script>
    import Swal from 'sweetalert2';


    export default {
        name: 'Home',
       
        props:{
            step: {}
        },
        methods: {
            start(){
                
                Swal.fire(
                'Mucha suerte!',
                '',
                'success'
                )

                this.$emit('update:step',1)
            },
        }
    }
</script>

<style>

#service-status {
    background-color: #165A6D;
    padding: 80px 0;
    text-align: center;
}



#service-status h2 {
    font-size: 48px;
    margin-bottom: 20px;
}

#service-status h4 {
    color: #50C1DB;
    font-size: 19px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 55px;
    font-weight:600;
}

#service-status a {
    background: white;
    border-radius: 5px;
    padding: 10px 20px;
    -webkit-box-shadow: 0 0 4px 4px rgb(0 0 0 / 10%);
    box-shadow: 0 0 4px 4px rgb(0 0 0 / 10%);
    color: #272727;
    letter-spacing: 0.1em;
    -webkit-transition: all 350ms ease-in-out;
    transition: all 350ms ease-in-out;
    font-weight:600;
    cursor:pointer;

}


#service-status a:hover {
    color: white;
    background: #00A5CD;
}
        
</style>