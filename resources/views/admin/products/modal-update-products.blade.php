<!-- modal update-->
            <div class="modal fade" id="modal-update-products-{{$products->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content bg-default">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Actualizar Productos</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="{{route('admin.products.update',$products->id)}}"method="POST">
                                            {{csrf_field()}}
                                    <div class="modal-body">
                                        <div class="form-goup">
                                            <label for="">name</label>
                                            <input type="text" name="name"class="form-control" id="products" value="{{$products->name}}">
                                  </div>
                                        <div class="modal-body">
                                        <div class="form-goup">
                                            <label for="">descripcion</label>
                                            <BR>
                                            <textarea name="descripcion"  class="form-control" id="descripcion" cols="30" rows="10">{{$products->descripcion}}</textarea> 
                                        </div>
                                        <div class="modal-body">
                                        <div class="form-goup">
                                            <label for="">precio</label>
                                            <input type="text" name="precio"class="form-control" id="products" value="{{$products->precio}}">
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
                        <!-- /.modal update -->