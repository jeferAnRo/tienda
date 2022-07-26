@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>carrito</title>
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

background-color:#E6F0F0
 !important
 

}

.content{
    background-color:#E6F0F0
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
            
            <a class="navbar-brand m-auto" href="{{route('home')}}" aling="left">
                <img src="{{asset('images/atras.png')}}" width="50" alt="" loading="lazy">
                <h5>atras</h5>
            </a> 
            
        </div>
    </nav>

     
                
</body>
</html>