@extends('layout')
@section('content')
    <div class="row">
        @foreach($productos as $pro )
            <div class="col-md-4">
                <h2>{{ $pro->nombre }}  </h2>
                <img src="http://lorempixel.com/400/100/food/" alt="..." class="img-responsive">
                <p> {{ $pro->descripcion }}</p>
                <p>
                    <a href="{{ url('carrito/'.$pro->id)  }}" class="btn btn-primary" role="button">Agregame al
                        plato</a>

                </p>
            </div>

        @endforeach


        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                    class="sr-only">Close</span></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <table class="table table-striped">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Peticion</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ensalada de espinaca</td>
                                <td> 100 gr</td>
                                <td>

                                    <span style="margin-right: 5px" class=" glyphicon glyphicon-plus"
                                          aria-hidden="true"></span>
                                    <span class=" glyphicon glyphicon-minus" aria-hidden="true"></span>

                                </td>
                                <td>5€</td>
                            </tr>

                            </tbody>
                        </table>

                    </table>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>

                </div>
            </div>
        </div>


    </div>





@endsection