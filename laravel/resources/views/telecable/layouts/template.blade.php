<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--favicon-->
    <!--styles-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,500;1,300&display=swap');
        /*para la caberzera*/
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap');
        /* Roboto mino para letras mas grandes */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap');
        /*para texto normal*/

    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">

    {{-- link de tipografia --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Poppins:ital,wght@1,300;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">


</head>

<body>
    <!--header-->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">

        <a class="navbar-brand mr-5" href="{{ url('/') }} ">
            <h3>Telecable Bacalar</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link mx-2" href="#">
                    <h4>Cobertura</h4>
                </a>
                <a class="nav-item nav-link mx-2" href="#">
                    <h4>Sobre Nosotros</h4>
                </a>
                <a class="nav-item nav-link mx-2" href="#">
                    <h4>Sucursales</h4>
                </a>
                <a class="nav-item nav-link mx-2" href="#" data-toggle="modal" data-target="#ReportModalCenter">
                    <h4>Reportar Fallo</h4>
                </a>
                <a class="nav-item nav-link mx-2" href="{{ url('listaCanales/') }}">
                    <h4>Canales</h4>
                </a>
                <a class="nav-item nav-link mx-2" href="#">
                    <h4>Ayuda</h4>
                </a>

            </div>
        </div>
        <div class="nav justify-content-end navbar-nav ">
            <a class="navbar-brand" href="tel:+52983 834 2507">
                <h4>Llámanos al</h4>
                <h3> 983 834 2507</h3>
            </a>
        </div>
    </nav>
    <!--headerEnd-->

    <!--nav-->

    <!--content-->
    @yield('content')
    <!--contentEnd-->

    {{-- formulario de ayuda --}}
    <!-- Modal -->
    <div class="modal fade" id="HelpModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">¿En que podemos ayudarte?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- este es el contenido de el formulario --}}
                    <form action="{{ route('contactanos.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <!-- para colocar nombre y numero-->
                                <div class="col">
                                    <label for="name">*Nombre
                                    </label>
                                    <input type="text" class="form-control" name="name" id="name" required
                                        placeholder="Nombre">
                                </div>
                                <div class="col">
                                    <label for="telephone">Numero Telefonico </label>
                                    <input type="text" class="form-control" name="telephone" id="telephone" required
                                        placeholder="Numero Telefonico">
                                </div>
                            </div><br><!-- fin para colocar nombre y numero-->
                            <label for="email">*Correo Electronico </label>
                            <input type="email" class="form-control" name="email" id="email" required
                                aria-describedby="emailHelp" placeholder="Correo Electronico">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">*Mensaje: </label>
                            <textarea class="form-control" name="message" id="message-text" required></textarea>
                        </div>
                        {{-- mensaje --}}
                        <small class="form-text text-muted"> Todos los campos marcados son Obligatorios, Su informacion
                            no sera conpartida.</small>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm"
                                data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
                        </div>
                    </form>
                    {{-- para validar los campos sean ingresados --}}
                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    {{-- fin de validacion de los campos --}}
                </div>
            </div>
        </div>
    </div>
    {{-- fin de formulario de ayda --}}

    {{-- para abrir el formulario de ayuda --}}
    <div class="formhelp">
        <ul>
            <li>
                <a href="" class="icon-chat" data-toggle="modal" data-target="#HelpModalCenter"></a>
            </li>
            <li>
                <a href="{{ url('preguntas_frecuentes/') }}" class="icon-help"></a>
            </li>
        </ul>
    </div>
    {{-- fin de iconos para abrir el formulario --}}

    {{-- formulario de Repote de fallos --}}
    
    <!-- Modal -->
    <div class="modal fade" id="ReportModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">¿En que podemos ayudarte?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- este es el contenido de el formulario --}}
                    <form action="{{ route('Reportes.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <!-- para colocar nombre y numero-->
                                <div class="col">
                                    <label for="contractNumber">*Numero de Contrato
                                    </label>
                                    <input type="text" class="form-control" name="contractNumber" id="contractNumber" required
                                        placeholder="Numero de Contrato">
                                </div>
                                <div class="col">
                                    <label for="telephoneR">*Numero Telefonico </label>
                                    <input type="text" class="form-control" name="telephoneR" id="telephoneR" required
                                        placeholder="Numero Telefonico">
                                </div>
                            </div><br><!-- fin para colocar nombre y numero-->
                            <label for="emailR">*Correo Electronico </label> 
                            <input type="emailR" class="form-control" name="emailR" id="emailR" required
                                aria-describedby="emailHelp" placeholder="Correo Electronico">
                        </div>
                        <div class="form-group">
                            <label for="Faultdescription" class="col-form-label">*Descripcion de la Falla: </label>
                            <textarea class="form-control" name="Faultdescription" id="Faultdescription" required></textarea>
                        </div>
                        {{-- mensaje --}}
                        <small class="form-text text-muted"> Todos los campos marcados son Obligatorios, Su informacion
                            no sera conpartida.</small>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm"
                                data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
                        </div>
                    </form>
                    {{-- para validar los campos sean ingresados --}}
                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    {{-- fin de validacion de los campos --}}
                </div>
            </div>
        </div>
    </div>
    {{-- fin de formulario de Reporte de Fallos --}}

    <!--footer-->
    <footer class="mt-5">
        <!-- Copyright -->
        <div class="pie-pagina">
            <a href="#">
                <img class="pie-img" src="{{ asset('assets/img/facebook.png') }}">
            </a>
            <p class="derechos"> © 2021 Copyright: Telecable Bacalar S.A de C.V | Todos los derechos
                reservados | <a href="{{ url('avisos_legales/') }}"
                    style="color:#FFFFFF; text-decoration: none;">Avisos Legales</a>
                | Cláusulas de contratación </p>
        </div>
    </footer>
    <!--End footer-->

    <!--script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!--CDN Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="
                    stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--CDN BootstrapEnd-->
    {{-- link para sweet alert 2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- para mandar mensaje de que el formulario se envio exitosamente --}}
    @if (session('info'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Hemos recibido tu mensaje, te contestaremos lo antes posible',
                showConfirmButton: false,
                timer: 1600
            })
        </script>
        {{-- fin del mesaje --}}
    @endif
    {{-- para validar el campo de numer --}}
    <script type="text/javascript">
        // Initialize our function when the document is ready for events.
        jQuery(document).ready(function() {
            // Listen for the input event.
            jQuery("#telephone, #telephoneR,#contractNumber").on('input', function(evt) {
                // Allow only numbers.
                jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
            });
        });
    </script>
</body>


</html>
