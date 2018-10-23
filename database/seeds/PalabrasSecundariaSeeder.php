<?php

use Illuminate\Database\Seeder;

class PalabrasSecundariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dificultad = 5;
      $dataArray = array("pueblos","instrucciones","campaña","objetos","verduras",
      "desarrollo","inmensidad","celular","crítica","orden","romance","aspiraba",
      "respuesta","cuento","carta","transparente","lealtad","selección","ironía",
      "tercera","zorro","magia","mitología","historia","pensar","Julián",
      "grande","singular","pingüino","gaucho","arquero","popular","corazón",
      "huella","aire","Cecília","vestido","alacena","cristal","yema","hora",
      "conejo","barco","funciones","obligatorio","secundario","albergar",
      "castillo","saberes","tortuga","vida","carpintero","narrador","joven",
      "pergamino","esponja","física","pesado","amigo","marca","carácter",
      "esposa","pasión","reyes","pintor","cordilleras","química","isla",
      "primitivo","ballena","guerrero","examen","jueces","absurdo","intensión",
      "hormiguero","indio","liebre","científico","infantil","excavar","antiguo",
      "combinación","ambigüedad","sobrenatural","instructivo","sugerencia",
      "juvenil","temporal","aceite","desfile","espuma","teléfono","palabras",
      "distraído","vampiros","director","sonido","semejante","bandera",
      "contradicción","asombrado","huella","animal","existencia","esquina",
      "suspiro","literatura","promueve","razón","gestión","máscara","pedagogía",
      "tornado","biblioteca","arboleda","cima","discurso","cabra","grito",
      "novela","relato","desierto","desafío","complicado","aventura","surco",
      "chispas","diálogo","escapar","marino","frondoso","espectáculo","máquina",
      "altura","zona","presente","territorio","helado","lentes","infiltrado",
      "aplauso","humor","redactar","Francia","auxilio","planeta","pasajero",
      "araña","morfología","despertar","avanzar","sueño","experimento",
      "silencio","retratar","cámara","mercado","párrafo","diecinueve","soleado",
      "caballo","vacaciones","código","duplicado","fotografía","promesa",
      "sustantivo","kilómetro","enigma","actitud","cuerpo","familia","azul",
      "rostro","litoral","político","extraño","investigador","encuesta",
      "especie","deportivo","vulgar","inclusión","figura","compañero",
      "humorístico","historieta","militar","método","sustitución","afirmación",
      "adverbio","aprensión","convencer","confinamiento","elementos","lápidas",
      "característica","verano","estética","peligro","difusión","medicina",
      "relación","cabeza","cantante","aventura","promoción","arquitecto",
      "postura","origen","cementerio","sangre","ideas","arcilla","reglamento",
      "estudiante","diario","tumba","fuego","habitación","siniestro","saludable",
      "votación","error","aparición","fauna","semana","amplificador","luces",
      "página","amplia","video","significado","pronombre","pueblos","columna",
      "encendía","etéreo","misión","fórmula","lágrimas","naturaleza","social",
      "tarjeta","fragmento","lámpara","infinito","ocupación","apariencias",
      "prolijidad","detective","borrador","señorita","escritor","rural",
      "comunitario","parlamento","juvenil","delincuente","despedida","aspecto",
      "brindar","capricho","operación","representación","glándulas","pastillas",
      "exposición","necesidad","Riachuelo","características","temperatura",
      "aburrido","importante","léxico","protección","absorción","desarrollo",
      "arrugas","ortografía","conjugación","variedad","camioneta","funciones",
      "escuela","cerradura","vagabundo","primavera","sílabas","belleza",
      "aterrizar","precio","candado","órgano","huérfano","extranjero","explotar",
      "crimen");
        foreach ($dataArray as $data){
          DB::table('palabras')->insert([
            'palabra'=> $data,
            'dificultad_id'=> $dificultad,
          ]);
        }
    }
}
