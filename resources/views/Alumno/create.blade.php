@extends('welcome')
@section('title', 'Contact')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal">
                <fieldset>
                    <legend>Crear un Alumno</legend>
                    <div class="form-group">
                        <label for="Nobre" class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="Apellido" class="col-lg-2 control-label">Apellido</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                            </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection