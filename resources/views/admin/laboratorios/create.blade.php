@extends ("layouts.admin")

@section("content")
<div class="row">
    <h1>Registro de laboratorio</h1>
</div>
<hr>

<div class="row">
    <div class="col-md-9">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Llene los datos</h3>
            </div>
            <div class="card-body">
                <form action="{{url("/admin/laboratorios/create")}}" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form group">
                                <label for="">Nombre de laboratorio</label> <b>*</b>
                                <input type="text" value="{{old("nombre")}}" name="nombre" class="form-control" required>
                                @error("nombre")
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form group">
                                <label for="">Curso</label> <b>*</b>
                                <input type="text" value="{{old("curso")}}" name="curso" class="form-control" required>
                                @error("curso")
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form group">
                                <label for="">Piso ubicado</label> <b>*</b>
                                <input type="text" value="{{old("piso")}}" name="piso" class="form-control" required>
                                @error("piso")
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>                   

                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">Especialidad</label> <b>*</b>
                                <input type="text" value="{{old("especialidad")}}"name="especialidad" class="form-control" required>
                                @error("especialidad")
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form group">
                                <label for="">Estado</label> <b>*</b>
                                <select name="estado" id="" class="form-control">
                                <option value="ACTIVO">ACTIVO</option>
                                <option value="INACTIVO">INACTIVO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form group">
                                <a href="{{url("admin/laboratorios")}}" class="btn btn-secondary">cancelar</a>
                                <button type="submit" class="btn btn-primary">Registrar laboratorio</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection