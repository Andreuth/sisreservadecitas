@extends ("layouts.admin")

@section("content")
<div class="row">
    <h1>Registro de horario</h1>
</div>
<hr>

<div class="row">
    <div class="col-md-10">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Llene los datos</h3>
            </div>
            <div class="card-body">
                <form action="{{url("/admin/horarios/create")}}" method="POST">
                @csrf
                <div class="row">
                <div class="col-md-6">
                            <div class="form group">
                                <label for="">Personal</label> <b>*</b>
                                <select name="personal_id" id="" class="form-control">
                                    @foreach ($personals as $personal)
                                    <option value="{{$personal->id}}">{{$personal->nombre." ".$personal->apellido." - ".$personal->horario}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">Laboratorio</label> <b>*</b>
                                <select name="laboratorio_id" id="" class="form-control">
                                    @foreach ($laboratorios as $laboratorio)
                                    <option value="{{$laboratorio->id}}">{{$laboratorio->nombre." - ".$laboratorio->curso." - ".$laboratorio->especialidad}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
<br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form group">
                                <label for="">Día</label> <b>*</b>
                                <select name="dia" id="" class="form-control">
                                    <option value="LUNES">LUNES</option>
                                    <option value="MARTES">MARTES</option>
                                    <option value="MIERCOLES">MIERCOLES</option>
                                    <option value="JUEVES">JUEVES</option>
                                    <option value="VIERNES">VIERNES</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form group">
                                <label for="">Hora de inicio</label> <b>*</b>
                                <input type="time" value="{{old("hora_inicio")}}" name="hora_inicio" class="form-control" required>
                                @error("hora_inicio")
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form group">
                                <label for=""> Hora de fin </label> <b>*</b>
                                <input type="time" value="{{old("hora_fin")}}" name="hora_fin" class="form-control" required>
                                @error("hora_fin")
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>                   

                    <br>
                    <div class="row">


                    </div>

                 

                    <hr>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form group">
                                <a href="{{url("admin/horarios")}}" class="btn btn-secondary">cancelar</a>
                                <button type="submit" class="btn btn-primary">Registrar Horario</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection