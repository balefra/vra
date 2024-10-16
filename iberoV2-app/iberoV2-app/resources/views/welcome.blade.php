<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Research Assistant</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
    <div class="container">
        <img src="{{ asset('assets/iberov2.png') }}" alt="Logo Virtual Research Assistant" class="logo">
        <img src="{{ asset('assets/uNIVERSIDA TRES CULTURAS.png') }}" alt="Logo Virtual Research Assistant" class="logo1">


        <h1>Virtual <span class="highlight">Research Assistant</span></h1>

        <div class="buttons-container">
            <div class="button-card">
                <a href="{{ url('/formulacion') }}" class="btn btn-orange">
                    <img src="{{ asset('assets/iconsformulacion.png') }}" alt="Icono Check">
                    <span>Formulación Proyecto</span>
                </a>
            </div>
            <div class="button-card">
                <a href="/reporte-avance" class="btn btn-green">
                    <img src="{{ asset('assets/icons.reporte.png') }}" alt="Icono Reporte">
                    <span>Reporte Último Avance</span>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
