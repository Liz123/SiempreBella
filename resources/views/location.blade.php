
@extends('layouts.main')

@section('location-content')

<section class="contenedor4">   
<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 py-2 fondo">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h6 class="text-center contact">Contactos</h6>

                        <div class="row justify-content-center">
                            <table>
                                <tbody class="tbodyInfo">
                                <tr>
                                    <td><p id="ImportDate">Numero:</p></td>
                                    <td><p id="date">81 2101 88 71<p></td>
                                </tr>
                                <tr>
                                    <td><p id="ImportDate">Ubicación:</p></td>
                                    <td><p id="date">Venustiano Carranza 229,Constituyentes de Queretaro 3er Sector, San Nicolás de los Garza N.L.</p></td>
                                </tr>

                                </tbody>
                            </table>
                            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d731.3024530918563!2d-100.25436017125821!3d25.721134907203666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662ead6a514f007%3A0x89df6f027c45c9db!2sVenustiano%20Carranza%20229%2C%20Constituyentes%20de%20Queretaro%203er%20Sector%2C%2066490%20San%20Nicol%C3%A1s%20de%20los%20Garza%2C%20N.L.!5e1!3m2!1ses!2smx!4v1573257175919!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">
                            
                        </iframe>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection