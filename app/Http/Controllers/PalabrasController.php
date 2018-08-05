<?php

namespace App\Http\Controllers;

use home\ariel\diplomado\Palabras\app\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Difucultad;
USe App\Palabra;
use function PHPSTORM_META\type;


class PalabrasController extends Controller
{
    Public function palabrasRandom(Request $request){

        //$palabrasRoandom = DB::table('palabras')->get();
        $palabrasRoandom = Palabra::where('dificultad_id', '=', $request->nivel)
        ->get();

        $random[] = 0;

        for( $i = 0; $i <= 4; $i++){
          $rand =rand(1,$palabrasRoandom->count());
          $random[$i] = $palabrasRoandom[$rand];
        }


        return $random;
    }
}
