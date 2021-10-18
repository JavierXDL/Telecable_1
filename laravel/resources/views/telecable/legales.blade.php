@extends('telecable.layouts.template')
@section('title', 'Telecable Bacalar')

@section('content')
<div class="prueba container  mt-5"> <!--Inicio de mi container-->

<a href="http://www.ift.org.mx/usuarios-y-audiencias/television-de-paga-0" style="color:#000000; text-decoration: none;" target="_blank"> Lineamiento del IFT</a> <!--Primer PDF-->
</div> <!-- Fin del primer container-->

<div class=" prueba container mt-5"> <!--segundo Container-->
<a href="{{ asset('assets/pdf/registro_149-2018.pdf') }}" style="color:#000000; text-decoration: none;" target="_blank">Registro 149-2018</a>
</div> <!-- Fin del segundo Container-->

<div class=" prueba container mt-5"> <!--tercer Container-->
<a  href="{{ asset('assets/pdf/Aviso_De_privacidad_tcb_2015.pdf') }}" style="color:#000000; text-decoration: none;" target="_blank"> Avisos de privacidad TCB 2015 </a>
</div> <!-- Fin del tercer Container-->

<div class=" prueba container mt-5"> <!--cuarto Container-->
<a href="{{ asset('assets/pdf/Contrato_tv_restringida.pdf') }}" style="color:#000000; text-decoration: none;" target="_blank"> Contrato TV Restringida 07 de Agosto del 2018 </a>
</div> <!-- Fin del cuarto Container-->

<div class=" prueba container mt-5"> <!--cuarto prueba-->
<a href="{{ asset('assets/pdf/Contrato_tv_restringida.pdf') }}" style="color:#000000; text-decoration: none;" target="_blank"> Contrato TV Restringida 07 de Agosto del 2018 </a>
</div> <!-- Fin del cuarto Container-->



@endsection