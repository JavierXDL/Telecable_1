@extends('telecable.layouts.template')
@section('title', 'Telecable Bacalar')
@section('content')

    <div class="container">
        <div class=" titlequestion text-center  mt-4">
            Preguntas Frecuentes
        </div>
        <div class=" mt-5" id="accordion">
            <div class="card w-75 mb-2 mx-auto">
                <div class="card-header" id="headingOne">
                    <span class="question py-2" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne" type="button">
                        ¿En Dónde y cómo puedo realizar el pago de mi servicio?
                    </span>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Puede acudir a las oficinas situadas en Av. 11 con calle 20, para realizar su pago en efectivo o
                        con
                        tarjeta bancaria.
                    </div>
                </div>
            </div>

            <div class="card w-75 mb-2 mx-auto">
                <div class="card-header" id="headingTwo">
                    <span class="question py-2" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo" type="button">
                        ¿Cuántos días tengo para pagar sin cobro de recargo?
                    </span>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Puede realizar el pago anticipado antes de las días 10 del mes que corresponda dicho pago de
                        renta o pagar antes del 20 del mes antes mencionado pagando renta normal.
                    </div>
                </div>
            </div>

            <div class="card w-75 mb-2 mx-auto">
                <div class="card-header" id="headingThree">
                    <spa class="question py-2" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree" type="button">
                        ¿Cómo solicito mi factura electrónica?
                    </spa>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Al momento de su pago en ventanilla puede solicitar su factura impresa o directamente al correo
                        electrónico que proporcione, así como proporcionar los datos completos y claros para la
                        elaboración
                        de
                        la misma.
                    </div>
                </div>
            </div>

            <div class="card w-75 mb-2 mx-auto">
                <div class="card-header" id="headingFour">
                    <span class="question py-2" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                        aria-controls="collapseFour" type="button">
                        ¿Cómo cancelar mi contrato?
                    </span>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        Primero no tener adeudo alguno con la empresa, posteriormente solicitar la baja definitiva
                    </div>
                </div>
            </div>

            <div class="card w-75 mb-2 mx-auto">
                <div class="card-header" id="headingFive">
                    <span class="question py-2" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                        aria-controls="collapseFive" type="button">
                        ¿Puedo adelantar mensualidades o realizar pago anual?
                    </span>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        Si puede realizar sus pagos anticipados o anuales
                    </div>
                </div>
            </div>

            <div class="card w-75 mb-2 mx-auto">
                <div class="card-header" id="headingSix">
                    <span class="question py-2" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                        aria-controls="collapseSix" type="button">
                        ¿Cómo solicito cambio de domicilio?
                    </span>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        Siempre y cuando tengamos cobertura con gusto se realiza el cambio de domicilio
                    </div>
                </div>
            </div>

            <div class="card w-75 mb-2 mx-auto">
                <div class="card-header" id="headingSeven">
                    <span class="question py-2" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                        aria-controls="collapseSeven" type="button">
                        ¿Puedo obtener servicio para mi negocio?
                    </span>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        Sí, sería un plan comercial y pago
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection