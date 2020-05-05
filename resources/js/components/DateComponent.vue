<template>
    <div>
        <a-card title="Reserva ahora tu cita" style="width: 300px">
            <p><a-input placeholder="Nombre" v-model="date.name"/></p>
            <p><a-input placeholder="Email" v-model="date.email"/></p>
            <p><a-input placeholder="Telefono" v-model="date.phone"/></p>
            <p><button type="button" class="btn btn-warning">Reservar Ahora</button></p>
        </a-card>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                date:{
                    name:'',
                    email:'',
                    phone:'',
                },
            }
        },
        mounted() {
            // console.log('Component mounted.')
        },
        methods: {
            reserveDate() {
                let me = this;
                axios.post('date',{
                    data : me.date,
                }).then((response) => {

                });
            }
        }
    }
</script>