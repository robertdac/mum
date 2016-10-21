<div class="lista">
    <table class="table table-striped">
        <table class="table table-striped">
            <?php    $carro = session()->get('carro');  $num = 1; ?>
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

            @foreach($carro as $car)
                <tr>
                    <td>{{ $num  }} </td>
                    <td> {{ $car['nombre']   }}</td>
                    <td> {{ $car['unidad']." ".$car['medida']  }} </td>
                    <td>
                        <button value="{{ $car['id']  }}" type="button" class="add{{$car['id']}} btn btn-success btn-sm">+
                        </button>
                        <button id="rem" type="button" class="btn btn-warning btn-sm">-</button>
                        <button id="quit" type="button" class="btn btn-danger btn-sm">X</button>

                    </td>
                    <td>{{ $car['precio']. "€" }}</td>
                </tr>
                <?php $num++  ?>
            @endforeach

            </tbody>
        </table>

    </table>



</div>