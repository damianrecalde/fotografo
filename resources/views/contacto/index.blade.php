<!-- Importación del layout base -->
@extends('layouts.base')

<!-- Contenido de la página html -->

@section('contenido')
<head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  


</head>
<body>

<div class="video">
        <img src="https://i.ytimg.com/vi/cr3Bf53Lseo/maxresdefault.jpg" alt="logo"/>
        <div class="overlay">
            <div class="container">
                <h2>contactame</h2>
                <p class="h2-bottom">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting.</p>
                <div class="social">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-linkedin"></i>
                    <i class="fa fa-pinterest"></i>
                </div>
                <form>
                    <input type="text" name="name" placeholder=" your name">
                    <input type="email" name="email" placeholder="your email">
                    <input type="tel" name="phone" placeholder="your phone">
                    <input type="url" name="website" placeholder="your website">
                    <input type="text" name="subject" placeholder="subject">
                    <textarea placeholder="your message"></textarea>
                    <button><div>send
                        <i class="fa fa-arrow-right"></i></div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection