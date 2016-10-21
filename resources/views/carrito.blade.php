@extends('layout')
@section('content')


    <div class="lista">
        <table class="lista table table-striped">
            <?php   $num = 1; ?>
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


                @foreach( session()->get('carro') as $car)
                    <tr>
                        <td>{{ $num  }} </td>
                        <td> {{ $car['nombre']   }}</td>
                        <td> {{ $car['unidad']." ".$car['medida']  }} </td>
                        <td>

                            <a href="{{ url('suma').'/'.$car['id'] }}" class="btn btn-success btn-sm"
                               role="button">+</a>
                            <a href="{{ url('restar').'/'.$car['id'] }}" class="btn btn-warning btn-sm"
                               role="button">-</a>
                            <a href="{{ url('fila').'/'.$car['id'] }}" class="btn btn-danger btn-sm" role="button">x</a>


                        </td>
                        <td>{{ $car['precio']. "€" }}</td>
                    </tr>
                    <?php $num++  ?>
                @endforeach

                <tr>

                    <td>{{ session()->get('descuento')  }}</td>
                    <td>{{ session()->get('3x2')  }}</td>
                    <td><a href="{{ url('/') }}" class="btn btn-info btn-sm" role="button">volver al menu</a></td>

                </tr>

                </tbody>
            </table>

        </table>
    </div>

    <script>
        $(document).ready(function () {

            $(".add10").on('click', function () {

                //$.get("{{ url('carrito2/10') }}");


                $.get("{{ url('carrito2/10') }}", function (data) {
                    // alert("Data: " + data);
                    $('.lista').html(data);
                });


            });
        });
    </script>

@endsection






