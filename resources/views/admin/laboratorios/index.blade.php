@extends ("layouts.admin")

@section("content")
<div class="row">
    <h1>Listado de laboratorios</h1>

</div>
<div class="row">
<div class="col-md-10">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Laboratorios Registrados</h3>
      <div class="card-tools">
        <a href="{{url("admin/laboratorios/create")}} "  class="btn btn-primary" >
          Registrar nuevo
        </a>
      </div>
    </div>

    <div class="card-body">

        <table id="example1"class="table table-bordered table-hover table-sm">
            <thead class="thead-dark">
                <tr>
                <th style="text-align: center;"><b>Nro</b></th>
                <th style="text-align: center;"><b>Laboratorio</b></th>
                <th style="text-align: center;"><b>Curso</b></th>
                <th style="text-align: center;"><b>Piso</b></th>
                <th style="text-align: center;"><b>Especialidad</b></th>
                <th style="text-align: center;"><b>Estado</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laboratorios as $index => $laboratorio)
                <tr>
                    <td style="text-align: center;">{{ $index + 1 }}</td>
                    <td>{{ $laboratorio->nombre}}</td>
                    <td>{{ $laboratorio->curso }}</td>
                    <td>{{ $laboratorio->piso }}</td>
                    <td>{{ $laboratorio->especialidad }}</td>
                    <td>{{ $laboratorio->estado }}</td>
                    
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



    <br><br>

</div>
@endsection