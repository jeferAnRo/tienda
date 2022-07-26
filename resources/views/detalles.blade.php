@extends('layouts.app')

@section('title', 'detalles')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles Producto</title>
</head>
<body>
<style>
a{
    text-decoration: none
    color: black
}
   
hr{
    width: 15%
    border-top: 2px solid #9D9D9D
    margin: 0 auto
    margin-bottom: 2rem
}
    
.bg-main{

background-color:#028C79
 !important
 

}

.content{
    background-color:#AEB3B3
}
    

.selected-category{
    border-bottom: 2px solid black
}
   

.card-txt-category{
    color: #9D9D9D
    font-size: 12px
}
    
.card-txt-author{
    color: #9D9D9D
    font-size: 14px
}
   
.card-txt-date{
    color: #9D9D9D
    font-size: 14px
}
   

.card{
    box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.2)
    border-radius: 1.25rem
    .card-img-top
        border-top-left-radius: calc(1.25rem - 1px)
        border-top-right-radius: calc(1.25rem - 1px)
        box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.2)
    border-radius: 1.25rem
    .card-img-top
        border-top-left-radius: calc(1.25rem - 1px)
        border-top-right-radius: calc(1.25rem - 1px)
}
    

.post-txt{
    color: #9D9D9D
}
.nav{
    color:  #C3C4C4!important
}
    
    </style>

<nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="#">
                <img src="{{asset('images/logo1.png')}}" width="320" alt="" loading="lazy">
                <h1>E.comerce</h1>
            </a>  
            
             
            
            <a class="navbar-brand m-auto" href="{{route('carrito')}}" aling="left">
                <img src="{{asset('images/carrito.png')}}" width="50" alt="" loading="lazy">
                <h5>carrito</h5>
            </a> 
        </div>
    </nav>
    <!-- Contenido -->
    <section class="container-fluid content py-5">
        <div class="row justify-content-center">
            <!-- Post -->
            <div class="col-12 col-md-7 C">
                <h1>{{$productdetalle->name}}</h1>
                <hr>
                <img src="{{asset('images/etiqueta.jpg')}}" alt="{{$productdetalle->name}}" class="img-fluid">

                
            </div>
            <div class="col-md-3 offset-md-1  ">
                <p>
               
                <p class="text-left mt-505 post-txt">
                    <span><H2>PRECIO</H2> {{$productdetalle->precio}}</span>
                    
                </p>
                <p class="text-left" >
                    <H2>DESCIPCION</H2>
                    {{$productdetalle->descripcion}}
                </p>
                <p class="text-left post-txt"><i><H2>CATEGORIA</H2>{{$productdetalle->category->name}}</i></p>
                
                                        <button class="btn btn-warning">Comprar</button>
                                        <button class="btn btn-primary">Carrito</button>
                                        <a class="navbar-brand m-auto" href="{{route('home')}}" aling="left">
                <img src="{{asset('images/atras.png')}}" width="39px" alt="50px" loading="lazy">
               
            </a>
                                    
                </p>
                <a class="navbar-brand m-auto" href="{{route('home')}}" aling="left">
                <img src="{{asset('images/etiqueta.jpg')}}" alt="{{$productdetalle->name}}" class="img-fluid">
                </a>
                


        </div>
    </section>
    <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="{{asset('images/logo1.png')}}" alt="YouDevs logo" width="120" id="logofooter">
            </div>
            <div id="col-md-10">
                <a href="https://www.facebook.com/youdevs">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook youdevs">
                </a>
                <a href="https://www.instagram.com/youdevs">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram youdevs">
                </a>
                <a href="https://www.youtube.com/c/YouDevsOficial">
                    <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube youdevs">
                </a>
                <p class="mt-3">Copyright © 2022 JEFERSON. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    



</body>
</html>
