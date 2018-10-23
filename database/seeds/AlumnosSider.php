<?php

use Illuminate\Database\Seeder;

class AlumnosSider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alumnos = [       	
        	["apellido"=>"Rivero", "nombre"=>"Tatiana", "dni"=>"50040785","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria Nº 439 ´´Niñas Ayohuma´´"],
        	["apellido"=>"Palacios", "nombre"=>"Ismael", "dni"=>"49771611","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria Nº 439 ´´Niñas Ayohuma´´"],
        	["apellido"=>"Machuca", "nombre"=>"Giuliana", "dni"=>"50179673","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria Nº 439 ´´Niñas Ayohuma´´"],
        	["apellido"=>"Castagnino", "nombre"=>" Marcos", "dni"=>"50142999","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria Nº 439 ´´Niñas Ayohuma´´"],
        	["apellido"=>"Ramos", "nombre"=>"Celeste", "dni"=>"50601642","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria Nº 164 ´´José María Aguilar´´"],
        	["apellido"=>"Flores", "nombre"=>"Joaquin", "dni"=>"49213823","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria Nº 164 ´´José María Aguilar´´"],
        	["apellido"=>"Fernandez", "nombre"=>"Verónica", "dni"=>"49711629","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria Nº 164 ´´José María Aguilar´´"],
        	["apellido"=>"Torres", "nombre"=>"Brian Nicolas", "dni"=>"48614991",
        	"dificultad_id"=>4,"institucion"=>"Escuela Primaria N° 605 ´´Ejército Argentino´´"],
        	["apellido"=>"Quiroz", "nombre"=>"Sherley", "dni"=>"50196273","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria N° 605 ´´Ejército Argentino´´"],
        	["apellido"=>"Gomez", "nombre"=>" Iara Elizabeth", "dni"=>"49769510",
        	"dificultad_id"=>4,"institucion"=>"Escuela Primaria N° 605 ´´Ejército Argentino´´"],
        	["apellido"=>"Zambón", "nombre"=>"Daiana Elizabeth", "dni"=>"50062029",
        	"dificultad_id"=>4,"institucion"=>"Escuela Primaria  N° 403´´Bartolomé Mitre´´"],
        	["apellido"=>"Esterche", "nombre"=>"Brenda Nicole", "dni"=>"49992100","dificultad_id"=>4,"institucion"=>"Escuela Primaria  N° 403´´Bartolomé Mitre´´"],
        	["apellido"=>"Gomez Collantes", "nombre"=>"María José", "dni"=>"50124151",
        	"dificultad_id"=>4,"institucion"=>"Escuela Primaria  N° 403´´Bartolomé Mitre´´"],
        	["apellido"=>"Diaz", "nombre"=>"Alan Agustín", "dni"=>"50198097","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria  N° 403´´Bartolomé Mitre´´"],
        	["apellido"=>"Luque", "nombre"=>"Gustavo Enzo", "dni"=>"50124728","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria  N° 403´´Bartolomé Mitre´´"],
        	["apellido"=>"Maidana", "nombre"=>"Gastón", "dni"=>"50198038","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria  N° 403´´Bartolomé Mitre´´"],
        	["apellido"=>"Romero", "nombre"=>"Jordana", "dni"=>"49452680","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria  N° 403´´Bartolomé Mitre´´"],
        	["apellido"=>"Perez", "nombre"=>"Milena", "dni"=>"50028195","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria  N° 403´´Bartolomé Mitre´´"],
        	["apellido"=>"Vallejos", "nombre"=>"Daniel", "dni"=>"50028142","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria  N° 403´´Bartolomé Mitre´´"],
        	["apellido"=>"López", "nombre"=>"Agurtina Elizabeth", "dni"=>"48261216",
        	"dificultad_id"=>4,"institucion"=>"Escuela Primaria Nº 445´´Paso Martinez´´"],
        	["apellido"=>"Vallejos", "nombre"=>"Camila Soledad", "dni"=>"47421414",
        	"dificultad_id"=>4,"institucion"=>"Escuela Primaria Nº 445´´Paso Martinez´´"],
        	["apellido"=>"Olivares", "nombre"=>"Luciana Jaqueline", "dni"=>"46841566",
        	"dificultad_id"=>4,"institucion"=>"Escuela Primaria Nº 445´´Paso Martinez´´"],
        	["apellido"=>"Cardozo", "nombre"=>"Sol Aimará", "dni"=>"49452052","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria N° 553´´San Cayetano´´"],
        	["apellido"=>"Fernández", "nombre"=>"Rocio Janel", "dni"=>"49771649",
        	"dificultad_id"=>4,"institucion"=>"Escuela Primaria N° 553´´San Cayetano´´"],
        	["apellido"=>"Roa", "nombre"=>"Nicolás Emanuel", "dni"=>"49769582",
        	"dificultad_id"=>4,"institucion"=>"Escuela Primaria N° 553´´San Cayetano´´"],
        	["apellido"=>"Barrios", "nombre"=>"Pedro Luis", "dni"=>"48787437","dificultad_id"=>4,
        	"institucion"=>"Escuela Primaria N° 887´´José Alfredo Ferreira´´"],
        	["apellido"=>"Villalva", "nombre"=>"Celeste", "dni"=>"44089196","dificultad_id"=>5,
        	"institucion"=>"Escuela Secundaria ´´Coronel José Armand´´"],
        	["apellido"=>"Benitez", "nombre"=>"Antonia Noemí", "dni"=>"43210098",
        	"dificultad_id"=>5,"institucion"=>"Escuela Secundaria ´´Coronel José Armand´´"],
        	["apellido"=>"Gómez Esquivel", "nombre"=>"Natalio", "dni"=>"45645946",
        	"dificultad_id"=>5,"institucion"=>"Escuela Secundaria ´´Coronel José Armand´´"],
        	["apellido"=>"Gandulla", "nombre"=>"Evelyn", "dni"=>"45373238","dificultad_id"=>5
        	,"institucion"=>"Colegio Secundario ´´San Cayetano´´"],
        	["apellido"=>"Lencinas", "nombre"=>"Fabio", "dni"=>"43210752","dificultad_id"=>5,
        	"institucion"=>"Colegio Secundario ´´San Cayetano´´"],
        	["apellido"=>"Lencinas", "nombre"=>"Juan Jose", "dni"=>"45939410","dificultad_id"=>5,
        	"institucion"=>"Colegio Secundario ´´San Cayetano´´"],
        	["apellido"=>"Gimenez Ramos", "nombre"=>"Miltón", "dni"=>"45456280","dificultad_id"=>5,"institucion"=>"Colegio Secundario ´´Paso Pesoa´´"],
        	["apellido"=>"Salerno", "nombre"=>"Sebastina Andres", "dni"=>"44253810","dificultad_id"=>5,"institucion"=>""],
        	["apellido"=>"Basconcello", "nombre"=>"Angéla Antonela", "dni"=>"42422979","dificultad_id"=>5,"institucion"=>"Colegio Secundario ´´Paso Pesoa´´"]
        	];

        	foreach ($alumnos as $alumno){
          		DB::table('alumnos')->insert([
            	'apellido'=> $alumno['apellido'],
            	'nombre'=>$alumno['nombre'],
            	'dni'=>$alumno['dni'],
            	'dificultad_id'=> $alumno['dificultad_id'],
            	'institucion'=>$alumno['institucion']
          ]);
    	}
    }
}
