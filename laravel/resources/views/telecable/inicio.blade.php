@extends('telecable.layouts.template')
@section('title', 'Telecable Bacalar')

@section('content')
{{-- link del css para el paquete basico --}}
<link rel="stylesheet" href="{{ asset('assets/css/styleshomecard.css') }}">
    <!-- Inicio del carrousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="container-fluid p-4">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('assets/img/banner_soporte_2.png') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/img/banner_soporte_2.png') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div><!-- Fin de mi container -->
    <!-- Fin del carrousel -->

    <!--inicio de card de Paquete-->
    <div class=" my-5 mx-3">
        <div class="row justify-content-md-center">
            <div class="col-sm-8">
                <div class="card">
                    <!--headercard-->
                    <div class="card-header">
                        Paquete Básico
                    </div>
                    <!--bodycard-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                {{-- columna 3 del card --}}
                                <div class="lyricscard text-center">
                                    Paga tan sólo:
                                    <div class="textoresaldado">$240 </div>al mes
                                </div>
                            </div>
                            <div class="col text-center">
                                {{-- columna 2 del card --}}
                                <img class=" imgPB"
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Logo_Azteca_7_2011.svg/1200px-Logo_Azteca_7_2011.svg.png"
                                    alt="canal 7">
                                <img class=" imgPB"
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Unicable_logo.svg/1200px-Unicable_logo.svg.png"
                                    alt="Unicable">
                                <img class="imgPB"
                                    src="https://upload.wikimedia.org/wikipedia/commons/0/07/Logotipo-Canal-5-M%C3%A9xico.png"
                                    alt="canal 5">
                                <img class=" img2PB"
                                    src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Golden_Edge_Logo_2020.png"
                                    alt="golden">
                                <img class="img2PB"
                                    src="https://logos-marcas.com/wp-content/uploads/2021/02/Comedy-Central-Logo.png"
                                    alt="Comedy Cenntral">
                            </div>
                            <div class="col">
                                {{-- columna 3 de card --}}
                                <div class="lyricscard text-center">
                                    Disfruta más de 80 <br>
                                    canales
                                </div>
                            </div>
                            <div class="col">
                                {{-- colunman 4 del card --}}
                                <div class="lyricscard text-center">
                                    ¡Contrata ya! y<br> obtén la instalación <br>
                                    <div class="textoresaldado">¡GRATIS! </div>
                                </div>
                            </div>
                        </div>
                        <h6>*Aplica restricciones *IVA no incluido</h6>
                        <div class="text-center">
                            <h4><button class="btn btn-danger" href="{{ url('listaCanales/') }} ">¡Contrata Aquí!</button>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de card de paquete-->

    <!-- Contenedor_Canales -->
    <div class="text-center mt-5">
        <div class="titlecanales"> Canales más vistos</div>
    </div>
    <!--fin del contenedor principal -->
    <!-- contenedor de los canales  -->
    <div class="contenedor-canales">
        <div class="card-canales">
            <a href="{{ url('listaCanales/') }}">
                <img class="card-img-top img-fluid" src="{{ asset('assets/img/Las_Estrellas.png') }}"
                    alt="Card image cap">
            </a>
        </div>
        <div class="card-canales">
            <a href="{{ url('listaCanales/') }}">
                <img class="card-img-top img-fluid" src="{{ asset('assets/img/TV_Azteca.png') }}" alt="Card image cap">
            </a>
        </div>
        <div class="card-canales">
            <a href="{{ url('listaCanales/') }}">
            <img class="card-img-top img-fluid" src="{{ asset('assets/img/Telemundo_logo.png') }}" alt="Card image cap">
            </a>
        </div>
    </div>
    <!--Fin del contenedor de los canales-->

    <!-- contenedor canales 2 -->
    <div class="contenedor-canales">
        <div class="card-canales">
            <a href="{{ url('listaCanales/') }}">
                <img class="card-img-top img-fluid" src="{{ asset('assets/img/Discovery_Kids.png') }}"
                    alt="Card image cap">
            </a>
        </div>
        <div class="card-canales">
            <a href="{{ url('listaCanales/') }}">
                <img class="card-img-top img-fluid" src="{{ asset('assets/img/Disney_Channel.png') }}"
                    alt="Card image cap">
            </a>
        </div>
        <div class="card-canales">
            <a href="{{ url('listaCanales/') }}">
                <img class="card-img-top img-fluid" src=" {{ asset('assets/img/Logo_Disney_XD.png') }} "
                    alt="Card image cap">
            </a>
        </div>
    </div>
    <!--Fin del contenedor canales 2-->
    <div class="text-center" >
    <a style="color:#000000; text-decoration: none; font-size: 1rem" href="{{ url('listaCanales/') }}">  Ver mas canales...</a>
    </div>

@endsection
