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
  <div class="w3-row">
    <div class="w3-col m3 l2 w3-center">
      <div style="width: 100%">
        <h1 class="page-header" style="align-content:center">Palabras por Alumno</h1>
      </div>
      <div id="div1">
        <!-- <button type="button" id="myBtn" class="btn btn-primary pull-right" v-on:click.prevent="getPalabras"
            data-target="#create" disabled>
            Jugar!
        </button> -->
        <select :options="options" v-model="optSelected"   v-on:click="getAlumnos">
          <option selected="" disabled value="0">Elija Uno</option>
          <option v-for="op in options" :value="op.id">
            {{op.dificultad}}
          </option>
        </select>
        <select name='selectalumno' id='selectalumno' v-model="selctAlumn" v-on:click="getPalabrasxAlumno">
          <option selected="" disabled="" value="">
            Elija Una Opción
          </option>
          <option v-for="alumno in alumnos" :value="alumno.id" :elAlumnonombre="alumno.nombre">
            {{alumno.apellido + ' ' + alumno.nombre}}
          </option>
        </select>
        <div style="text-aling:centre">
          <table class="table table-hover table-striped " >
            <thead>
              <tr>
                <th>Palabras</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="palabra in palabras">
                <td class="lead" >{{palabra.palabra.palabra}}</td>
                <td class="col-xs-3" width="10px">
                  <button v-on:click="show(palabra.palabra.palabra)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editexp">ver</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- <button type="button" id="myBtnG" class="btn btn-primary pull-right" v-on:click.prevent="Guardar"
        data-target="#create" disabled>
        Guardar
      </button> -->
    </div>
    <div class="w3-col m8 l10 w3-center">
      <p id="Al">{{elAlumnonombre}}</p>
      <p id="Pal">{{elAlumnoapellido}}</p>
        
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

    #Al{
      font-size: 70px;
    }

    #Pal{
      font-size: 200px;
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
                "elAlumnonombre":"",
                "elAlumnoapellido":"",
                "alumnos": [],
                "palabras":[],
                "error":[],
                "options":[],
                "optSelected":[],
                "dificultad":"",
                "selctAlumn":0,
                "msg":"el mensaje",
                "nabled":"false"
                }
            },

        created: function () {
          this.getDificultad();
          },

        methods:{


            hab:function(){

                document.getElementById("myBtn").disabled = false;
            },

            show: function(palabra){
              this.elAlumnoapellido = palabra;
            },

            getDificultad: function(){
              var url = '/dificultad';
              axios.get(url).then(response => {
                this.options = response.data;
              }).catch((error)=>{
                console.log(error);
              })

            },

            getAlumnos: function(){
                //console.log(this.optSelected);
                var url= '/alumnos?nivel=' + this.optSelected;
                axios.get(url).then(response =>{
                    this.alumnos = response.data;

                }).catch((error)=>{
                    console.log(error);
                })
            },

            getPalabrasxAlumno: function(){
              var url='/play?alumno=' + this.selctAlumn;
              axios.get(url).then(response=>{
                this.palabras = response.data;
                this.elAlumnonombre = response.data[0].alumno.apellido +" " + response.data[0].alumno.nombre;
                this.elAlumnoapellido = "";
                
              //  toastr.success("Se han Seleccionado las Palabras del Alumno");
              }).chatch((error)=>{
                this.errors = error.response.data.message;
                console.log(error);
              })
            },

            /*getPalabras: function () {
                var url='/palabrasRandom?nivel=' + this.optSelected;
                axios.get(url).then(response=>{
                    this.palabras = response.data;
                    document.getElementById("myBtnG").disabled = false;
                    toastr.success("Se han Seleccionado Palabras al Azar");
                }).catch((error)=>{

                    console.log(error);
                })
            },*/

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
