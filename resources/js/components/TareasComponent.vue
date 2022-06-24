<template>
    <div>
        <h3>Agregar notas</h3>
        <form @submit.prevent="agregar">
            <input type="text" placeholder="nombre" class="form-control mb-2" v-model="nota.nombre">
            <input type="text" placeholder="descripcion" class="form-control mb-2" v-model="nota.descripcion">
            <button class="btn btn-primay" type="submit">Agregar</button>
        </form>

    </div>

</template>
<script>
export default{
    data(){
        return{
            notas:[],
            nota: {nombre:'',descripcion:''}
        }
    },
    methods:{
        agregar(){
            console.log(this.nota.nombre, this.nota.descripcion);
             const params ={
                nombre : this.nota.nombre,
                descripcion : this.nota.descripcion
            }
            this.nota.nombre='';
            this.nota.nombre='';
            axios.post('miproyecto8/public/notas',params)
            .then(res=>{
                this.notas.push(res.data)
            })
            .catch(function (error) {
                console.log(error);
            })
            .then(function () {
                // siempre sera ejecutado
            });


        }

    }
}
</script>

