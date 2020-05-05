<template>
    <div>
        <a-card title="Reserva ahora tu cita" style="width: 300px">
            <p><a-input placeholder="Nombre" /></p>
            <p><a-input placeholder="Email" /></p>
            <p><a-input placeholder="Telefono" /></p>
        </a-card>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                
            }
        },
        mounted() {
            // console.log('Component mounted.')
        },
        methods: {
            changeImg(array) {
                console.log(array);
            }
        }
    }
</script>