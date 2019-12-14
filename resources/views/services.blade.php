@extends('layouts.main')

@section('services-content')

<section class="contenedor3">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 my-4">
				<h6 class="text-center services">Los mas buscados </h6>
				<div class="col-lg-12 col-sm-12 prueba">
					<div class="row justify-content-center">
						<!--div class="col-lg-3 my-2 titles" >
							<div class="subtitles">
								<p class="text-center">Limpieza Facial</p>
								<span class="row justify-content-center imagen">
									<img src="imgs/crema.png"></span>
							</div-->
			
						<div class="col-lg-4 my-2 titles" >
						   <a  id="unas" href="{{ url('services/unas')  }}" >
							<div class="subtitles">
								<p class="text-center">Aplicación de Uñas</p>
								<span class="row justify-content-center imagen">
									<img src="/imgs/unas.png"></span>
								</div>
              </a>
						</div>
						<!--div class="col-lg-3 my-2 titles" >
							<div class="subtitles">
								<p class="text-center">Aplicación de Tintes</p>
								<span class="row justify-content-center imagen">
									<img src="imgs/champu.png"></span>
								</div>
						</div-->
						<!--div class="col-lg-3 my-2 titles" >
							<div class="subtitles">
								<p class="text-center">Aplicación de Pestañas</p>
								<span class="row justify-content-center imagen">
									<img src="imgs/rizador-de-pestanas.png"></span>
								</div>
						</div-->
						<!--div class="col-lg-3 my-2 titles" >
							<div class="subtitles">
								<p class="text-center">Corte de cabello</p>
								<span class="row justify-content-center imagen">
									<img src="imgs/peine.png"></span>
								</div>
						</div-->
						<div class="col-lg-4 my-2 titles" >
             				 <a id="peinados" href="{{ url('services/peinados')  }}">
							<div class="subtitles">
								<p class="text-center">Peinados</p>
								<span class="row justify-content-center imagen">
									<img src="/imgs/plancha.png"></span>
								</div>
              </a>
						</div>
						<div class="col-lg-4 my-2 titles" >
              <a href="{{ url('services/maquillaje')  }}" id="maquillaje">
							<div class="subtitles">
								<p class="text-center">Maquillaje</p>
								<span class="row justify-content-center imagen">
									<img src="/imgs/cepillo.png"></span>
								</div>
              </a>
						</di>
          </div>

				</div>
		</div>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-lg-12">
		<div class="row justify-content-center">
		<div class="col-lg-6 tablBorder1">
			<table class="table table-condensed table-hover table-dark">
    <thead>
      <tr>
        <th>Servicios</th>
        <th>Precios</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Limpieza Facial</td>
        <td>Doe</td>
      </tr>
      <tr>
        <td>Aplicación de Uñas</td>
        <td>Moe</td>
      </tr>
      <tr>
        <td>Aplicación de Tintes</td>
        <td>Dooley</td>
      </tr>
      <tr>
        <td>Aplicación de Pestañas</td>
        <td>Dooley</td>
      </tr>
       <tr>
        <td>Corte de Caballo</td>
        <td>Dooley</td>
      </tr>
       <tr>
        <td>Peinados</td>
        <td></td>
      </tr>
       <tr>
        <td>Maquillaje</td>
        <td>Dooley</td>
      </tr>
    </tbody>
  </table>
		</div>
	</div>
</div>
</div>
</div>
</section>

@endsection