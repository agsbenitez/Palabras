<?php

namespace App\Http\Controllers;

use App\AlumnoPalabras;
Use App\Alumnos;
Use App\Palabras;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use home\ariel\diplomado\Palabras\app\User;

use Illuminate\Support\Facades\DB;



class AlumnoPalanbrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          $palabrasxalumno =  AlumnoPalabras::where(
            'alumno','=', $request->alumno)
            ->where('correcto','=',null)
            ->get();
          return $palabrasxalumno;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request,[
        'alumno'=>'required',
        'palabra'=>'required'
      ]);


      $alumno = $request->alumno;
      $palabras = $request->palabra;

      try{
        for ($i=0;$i<=count($palabras)-1; ++$i){
            $newentrada = new AlumnoPalabras();
            $newentrada->alumno = $alumno;
            $newentrada->palabra = $palabras[$i]["id"];
            $newentrada->save();
        }

        $msg="succes";

      }catch (\Exception $e){
        $msg=$e->getMessage();
        return new JsonResponse($msg, 500);

      }
        return $msg;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
