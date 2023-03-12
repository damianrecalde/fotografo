<!-- Importación del layout base -->
@extends('layouts.base')

<!-- Contenido de la página html -->

@section('contenido')

<!-- página web spa -->

<div class="container-fluid">
<!-- Primera sección o home del sitio -->
  <section-home id="home">
    <div class="shadow-title parallax-top-shadow">SANTANA</div>
    <div class="title"><span>JUAN MANUEL</span><span>Fotógrafo y<a target="_blanck" href="salfia.com">Diseñador</a><i class="fa fa-instagram pl-2" aria-hidden="true"></i></span></div>
  </section-home>

  <!-- Fin de la primera sección o home del sitio -->
</div>
  

<!-- Segunda sección algo de mi -->

<section class="prueba" id="about">

</section>

<!-- Fin de la segunda sección algo de mi -->

<!-- Tercera sección portfolio de imágenes -->

<section id="portfolio">
  <div class="shadow-slider parallax-top-shadow">NATURE</div>
  <div class="container alineacion">
    <div class="row">
      <div class="col col-lg-10">
        <div id="carouselExampleCaptions" class="carousel">
          <!--div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div-->
          <div class="carousel-inner">
            <div class="carousel-item active" id="uno">
              <img src="https://images.pexels.com/photos/190537/pexels-photo-190537.jpeg?auto=compress&cs=tinysrgb&h=1080&w=1920" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" id="dos">
              <img src="https://images.pexels.com/photos/196666/pexels-photo-196666.jpeg?auto=compress&cs=tinysrgb&h=1080&w=1920" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" id="tres">
              <img src="https://images.pexels.com/photos/110649/pexels-photo-110649.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=1080&w=1920" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col col-lg-2 alineacion">
        <ul class="nav flex-column m-auto">
          <li class="nav-item">
            <a class=" nav-link pb-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-label="Slide 1"><i class="fa fa-circle-thin puntero" aria-hidden="true"></i><span class="shadow-lista">NATURE </span></a>
          </li>
          <li class="nav-item">
            <a class=" nav-link pb-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"><i class="fa fa-circle puntero" aria-hidden="true"></i><span class="shadow-lista"> BODAS </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link pb-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"><i class="fa fa-circle-thin puntero" aria-hidden="true"></i><span class="shadow-lista"> QUINCE AÑOS </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"><i class="fa fa-circle-thin puntero" aria-hidden="true"></i><span class="shadow-lista"> PORTFOLIOS </span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
    
  
</section>

<!-- Fin de tercera sección portfolio de imágenes -->

<!-- Cuarta sección tipos de trabajo -->

<section id="work">

</section>

<!-- Fin de cuarta sección tipos de trabajo -->

<!-- Quinta sección formulario de contacto -->

<section id="contact">

</section>

<!-- Fin de quinta sección formulario de contacto -->

<!-- Fin de lsitio web spa --> 
@endsection