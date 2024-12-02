@extends ("layouts.admin")

@section("content")
<div class="row">
    <h1>Panel Principal</h1>
</div>
<div class="row">

@can("admin.index")
<div class="col-lg-3 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{$total_usuarios}}</h3>
        <p>Usuarios</p>
      </div>
      <div class="icon">
        <i class="ion fas bi bi-file-person"></i>
      </div>
      <a href="{{url("admin/usuarios")}}" class="small-box-footer">Más información <i class="fas bi bi-file-person"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{$total_laboratorios}}</h3>
        <p>Laboratorios</p>
      </div>
      <div class="icon">
        <i class="ion fas bi bi-building-check"></i>
      </div>
      <a href="{{url("admin/laboratorios")}}" class="small-box-footer">Más información <i class="fas bi bi-file-person"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{$total_personals}}</h3>
        <p>Personales</p>
      </div>
      <div class="icon">
        <i class="ion fas bi bi-person-raised-hand"></i>
      </div>
      <a href="{{url("admin/personals")}}" class="small-box-footer">Más información <i class="fas bi bi-file-person"></i></a>
    </div>
  </div>
</div>
@endcan
  

@endsection