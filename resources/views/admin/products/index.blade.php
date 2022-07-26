@extends('adminlte::page')
@section('title','Admin-Productos')
@section('content_header')
<h1>
    Productos
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-products">
        Crear
    </button>
    <a href="{{route('home')}}" class="btn btn-danger ">TIENDA</a>
</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Productos</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="products" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                           
                            <th>PRODUCTOS</th>
                            <th>DESCRIPCION</th>
                            <TH>PRECIO</TH>
                            
                            
                           
                            <th>ACCIONES</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($products as $products)
                        
                        <tr>
                            <td>{{ $products->id }}</td>
                           
                            <td>{{ $products->name }}</td>
                            <td>{{ $products->descripcion }}</td>
                            <td>{{ $products->precio}}</td>
                            
                           
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-products-{{$products->id}}">
                                    Editar
                                </button>
                                <form action="{{route('admin.products.delete', $products->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>

                        <!--modal -UPDATE PRODUCTS -->
                        @include('admin.products.modal-update-products')
                        <!--/.modal --> 
                        @endforeach
                    
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            
                            <th>PRODUCTOS</th>
                            <th>DESCRIPCION</th>
                            <TH>PRECIO</TH>
                          
                            
                          
                            <th>ACCIONES</th>
                           
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<!-- modal -->
<div class="modal fade" id="modal-create-products">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Crear Productos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
                <form action="/admin/products/store" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
            <div class="modal-body">
                <div class="form-goup">
                    <label for="name">products</label>
                    <input type="text" name="name"class="form-control" id="products">
                </div>

                <div class="form-goup">
                    <label for="category-id">categoria</label>
                    <br>
                    <select name="category_id" id="category-id">
                        <option value=""></option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-goup">
                    <label for="descripcion">descripcion</label>
                    <textarea name="descripcion" class="form-control"id="descripcion" cols="30" rows="10"></textarea>
                    
                </div>

                <div class="form-goup">
                    <label for="precio">precio</label>
                    <input type="text" name="precio"class="form-control" id="precio">
                </div>
                
                <div class="form-goup">
                    <label for="featured">imagen principal</label>
                    <input type="file" name="featured"class="form-control" id="featured">
                </div>
               
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </div>
            </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



@stop
@section('js')
<script>
$(document).ready(function() {
    $('#products').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop
