<?php

use Illuminate\Database\Seeder;

class PalabrasPrimaria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dificultad = 4;
      $dataArray = array(
        "mundo","música","pueblo","cantor","antiguo","doscientos","arte","libro",
        "cárcel","viaje","pintura","guerra","planeta","tigr","barco","ciencia",
        "familia","Mateo","cine","sombra","regla","pizarrón","estrella","junio",
        "yerba","semana","manteca","prueb","ayuda","modelo","compás","peces",
        "naranja","bolsa","guante","olla","rey","fuego","queso","media","hojas",
        "ciencia","verde","tabla","comida","dibujo","número","tierra","dinero",
        "Germán","pingüino","figura","magia","poesía","leche","color","patio",
        "jugar","pas","pileta","remera","marca","pila","chicos","helado","misión",
        "oveja","lluvia","viejo","azúcar","negro","lápiz","mensaje","mayo",
        "perro","cigüeña","roca","playa","chiste","brillo","viento","tarde",
        "alas","cuna","ramos","amor","lunar","calor","grupo","héroe","niñera",
        "flores","cielo","barrio","puerta","miedo","sombra","plaza","diario",
        "escuela","mente","bosque","hijo","hombre","felizpájaro","amigo",
        "águila","monte","nubes","grillo","muro","ladrón","hierba","desagüe",
        "mujer","manzana","mariposa","banco","hogar","pelota","iglesia","nieve",
        "basura","secreto","agua","pájaro","tigre","madre","personaje","viento",
        "estación","vampiro","gupo","parque","magos","trueno","joven","asado",
        "cuadro","jabón","pulpo","lechuga","papel","pomelo");
        foreach ($dataArray as $data){
          DB::table('palabras')->insert([
            'palabra'=> $data,
            'dificultad_id'=> $dificultad,
          ]);
        }
    }
}
