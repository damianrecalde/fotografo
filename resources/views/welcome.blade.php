<!-- Importación del layout base -->
@extends('layouts.base')

<!-- Contenido de la página html -->
@section('contenido')
<!-- página web spa -->

<div class="container-fluid">
    <!-- Menú de navegación -->
  <nav>
    <ul>
      <li><a href="Salfia.co">Home</a></li>
      <li><a href="#about">About me</a></li>
      <li>Portfolio</li>
      <li>Work</li>
      <li>Contact me</li>
      <li class="slide"></li>
    </ul>
  </nav>
  <!-- Fin del menú de navegación -->

  <!-- Primera sección o home del sitio -->
  <section-home>
    <div class="shadow-title parallax-top-shadow">SANTANA</div>
    <div class="title"><span>JUAN MANUEL</span><span>Fotógrafo y<a target="_blanck" href="salfia.com">Diseñador</a><i class="fa fa-instagram pl-2" aria-hidden="true"></i></span></div>
  </section>
  <!-- Fin de la primera sección o home del sitio -->
</div>

<!-- Fin de lsitio web --> 
@endsection