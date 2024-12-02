@extends ("layouts.admin")

@section("content")
<div class="row">
    <h1>Listado de horarios</h1>

</div>
<div class="row">
  <div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Horarios Registrados</h3>
          
          <div class="card-tools">
          <a href="{{url("admin/horarios/create")}}" class="btn btn-primary">
              Registrar nuevo
          </a>
          </div>
        

      </div>

      <div class="card-body">

          <table id="example1"class="table table-bordered table-hover table-sm">
              <thead class="thead-dark">
                  <tr>
                  <th style="text-align: center;"><b>Nro</b></th>
                  <th style="text-align: center;"><b>Docente encargado</b></th>
                  <th style="text-align: center;"><b>Día laboral</b></th>
                  <th style="text-align: center;"><b>Hora inicio de turno</b></th>
                  <th style="text-align: center;"><b>Hora fin de turno</b></th>
                  <th style="text-align: center;"><b>Laboratorio</b></th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($horarios as $index => $horario)
                  <tr>
                      <td style="text-align: center;">{{ $index + 1 }}</td>
                      <td>{{ $horario->personal->nombre ." ".$horario->personal->apellido}}</td>
                      <td>{{ $horario->dia }}</td>
                      <td>{{ $horario->hora_inicio }}</td>
                      <td>{{ $horario->hora_fin }}</td>
                      <td>{{ $horario->laboratorio->nombre." Curso: ". $horario->laboratorio->curso." Especialidad: ". $horario->laboratorio->especialidad }}</td>
                  
                  </tr>
                  @endforeach
              </tbody>
          </table>
          <script>
            $(function () {
              $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
              }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
              $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
              });
            });
          </script>
      </div>
    </div>
  </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-primary">
          <div class="card-header">
            <h3 class="card-title">Calendarios de reservas</h3>       
          </div>
          <div class="card-body">
            <table style="font-size: 15px; text-align: center" class="table table-bordered table-hover table-sm">
              <thead class="thead-dark">
                <tr style="text-align: center">
                  <th>Hora</th>
                  <th>Lunes</th>
                  <th>Martes</th>
                  <th>Miercoles</th>
                  <th>Jueves</th>
                  <th>Viernes</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $horas = ["07:00:00 - 08:00:00","08:00:00 - 09:00:00","09:00:00 - 10:00:00","10:00:00 - 11:00:00","11:00:00 - 12:00:00","12:00:00 - 13:00:00","13:00:00 - 14:00:00","14:00:00 - 15:00:00","15:00:00 - 16:00:00","16:00:00 - 17:00:00","17:00:00 - 18:00:00","18:00:00 - 19:00:00","19:00:00 - 20:00:00",];
                  $diasSemana = ["LUNES","MARTES","MIERCOLES","JUEVES","VIERNES"];
                @endphp
                @foreach ($horas as $hora)
                    @php
                      list($hora_inicio,$hora_fin) = explode(" - ",$hora);
                    @endphp
                 <tr>
                    <td>{{$hora}}</td>
                    @foreach ($diasSemana as $dia)
                      @php
                      $nombre_docente = "";
                      foreach ($horarios as $horario){
                          if(strtoupper($horario->dia) == $dia &&
                            $hora_inicio >= $horario->hora_inicio &&
                            $hora_fin <= $horario->hora_fin ){
                              $nombre_docente= $horario->personal->nombre." - ".$horario->laboratorio->nombre;
                            }
                      }
                      @endphp    
                      <td>{{$nombre_docente}}</td>                
                    @endforeach
                    
                 </tr>
                @endforeach
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
@endsection