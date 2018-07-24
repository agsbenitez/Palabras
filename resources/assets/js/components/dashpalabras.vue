<!--<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        Esto es un ejemplo de VUE
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>-->
<template>
    <div id="a" class="row">
            <div style="width: 100%">
                <h1 class="page-header" style="align-content:center">Palabras por Alumno</h1>
            </div>

        <div id="div1" >
            <button type="button" id="myBtn" class="btn btn-primary pull-right" v-on:click.prevent="getPalabras"
                    data-target="#create" disabled>Randoms!</button>
            <!--<a href="#"  id="myBtn" class="btn btn-primary pull-right" disabled="false"
            v-on:click.prevent="getPalabras" data-target="#create">
                Randoms
            </a>-->
            <select name='selectalumno' id='selectalumno' v-model="selctAlumn" v-on:click="hab">
              <option selected="" disabled="" value="">Choose your make</option>
              <option v-for="alumno in alumnos" :value="alumno.id">{{
                alumno.apellido + ' ' + alumno.nombre}}</option>
            </select>

          <div style="text-aling:centre">
            <table class="table table-hover table-striped " >

              <thead>
                <tr>
                  <th>id</th>
                  <th>Palabra</th>
                  <th>Dificultad</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="palabra in palabras">
                  <td class="lead">{{palabra.id}}</td>
                  <td class="lead">{{palabra.palabra}}</td>
                  <td class="lead">{{palabra.dificultad.dificultad}}</td>
                </tr>
              </tbody>
            </table>
          </div>
            <button type="button" id="myBtnG" class="btn btn-primary pull-right" v-on:click.prevent="Guardar"
                    data-target="#create" disabled>Guardar</button>
          <!--<a href="#" class="btn btn-primary pull-right"
           data-target="#create">
              Guardar
          </a>-->
        </div>
      </div>
</template>

<style>
    button {
        text-align: center;
        vertical-align: middle;
        user-select: none;
        white-space: nowrap;
        cursor: pointer;
        display: inline-block;
        margin-bottom: 0;
    }

    .contenedor{
        display: flex;
    }
    .elemento{
        width: 25%;
    }
    .destacado{
        margin-left: 2em;
        border: dot-dash
    }

</style>

<script>


    // ver esto para hacer random de los elementos de la tabla palabras
    //Math.floor((Math.random() * 100) + 1);
    export default {
        mounted() {
            console.log('Componente Montado.')
        },

        data(){
            return {
                "alumnos": [],
                "palabras":[],
                "selctAlumn":0,
                "msg":"el mensaje",
                "nabled":"false"
                }
            },

        created: function () {
            this.getAlumnos();
            //this.getPalabras();

        },

        methods:{

            hab:function(){

                document.getElementById("myBtn").disabled = false;
            },

            getAlumnos: function(){
                var url= '/alumnos';
                axios.get(url).then(response =>{
                    this.alumnos = response.data;

                }).catch((error)=>{
                    console.log(error);
                })
            },

            getPalabras: function () {
                var url='/palabrasRandom';
                axios.get(url).then(response=>{
                    this.palabras = response.data;
                    document.getElementById("myBtnG").disabled = false;
                    toastr.success("Se han Seleccionado Palabras al Azar");

                }).catch((error)=>{
                    console.log(error);
                })

            },

            Guardar: function(){
              var url='sort';
              axios.post(url,{
                  'alumno':this.selctAlumn,
                 'palabra':this.palabras
              }).then(response =>{
                     console.log(response)
              });
            }
        }


    }
</script>
