<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz Uleam</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #d71c1c;
            padding: 10px;
            color: white;
            text-align: right;
            position: relative;
        }

        .header .acceder-btn {
            background-color: #fff;
            color: #d71c1c;
            border: none;
            padding: 5px 15px;
            cursor: pointer;
            font-weight: bold;
            border-radius: 5px;
        }

        .banner {
            text-align: center;
            background-color: #444;
            color: white;
            padding: 20px 0;
        }

        .banner img {
            max-width: 100%;
            height: auto;
        }

        .main-content {
            text-align: center;
            margin-top: 10px;
        }

        .main-content h1 {
            font-size: 2.5rem;
            color: black;
        }

        .main-content .ir-btn {
            display: inline-block;
            margin-top: 15px;
            background-color: #d71c1c;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 5px;
        }

        .main-content .ir-btn:hover {
            background-color: #b01515;
        }
    </style>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- jQuery -->
    <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Sweet alert 2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>
<body>
    <div class="header">
        <a href="{{url('/admin/horarios')}}" class="acceder-btn">Acceder</a>
    </div>

    <div class="banner">
        <h1>Universidad Laica Eloy Alfaro de Manabí</h1>
        
        
    </div>

    <div class="main-content">
        <h1>Sistema de reservas de laboratorios</h1>
        <!-- Imagen con enlace directo -->
        <img src="{{url("dist/img/logouleam.jpg")}}" alt="Logo Uleam">
        <a href="{{url('/admin/horarios')}}" class="ir-btn">IR</a>
    </div>
</body>
</html>
