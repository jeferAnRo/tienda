

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>E-COMERCE</title>
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
</head>
<body>
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
    
   <!-- Categorías -->
   <div class="row justify-content-center ">
        <div class="col-10 col-md-12">
            <nav class="text-center my-3" bg-main>
                <a href="{{route('home')}}" class="mx-3 pb-3 link-category d-block d-md-inline btn btn">TODOS</a>
                
                @foreach($categories as $category)
                    <a href="{{route('products.category',$category->name)}}" class="mx-3 pb-3 link-category d-block d-md-inline  {{(isset($categoryIdSelected)  &&  $category->id == $categoryIdSelected) ? 'selected-category': ''}} btn btn" ">{{$category->name}}</a>
                @endforeach

                <a href="{{route('admin.categories.index')}}"class ="btn btn-primary">ADMIN</a>

            </nav>
        </div>
    </div>
    
    <br>
   

    
        <!-- Categorías -->

        
        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <!-- Post 1 -->
                    @foreach ($product as $Products)

                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{('images/etiqueta.jpg')}}" alt="{{$Products->name}}">
                            <div class="card-body">
                                <small class="card-txt-category"></small>
                                <h5 class="card-title my-2">{{$Products->name}}</h5>
                                <div class="d-card-text">
                                  
                                </div>
                                <a href="{{route('detalles',$Products->id)}}" class="post-link" btn btn><b>Detalles</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left" >
                                        <span class="card-txt-author">Precio {{$Products->precio}}</span>
                                    </div>
                                    
                                    <div class="col-6 text-right">
                                        <button class="btn btn-warning" ">Comprar</button>
                                        <a href="{{route('carrito')}}"class ="btn btn-primary">Carritos</a>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>

            <div class="col-12">
                <!-- Paginador -->

            </div>
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
                <p class="mt-3">Copyright © 2022 jeferson<br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>