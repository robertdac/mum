@extends('layout')
@section('content')


    {!!  Form::open(['route' => 'productos.store','method'=>'post'])   !!}

    <div class="panel panel-primary">

        <div class="panel-heading TEXT-CENTER">NUEVA COMIDA</div>
        <div class="panel-body">

            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <div class="row">

                <div class="col-xs-3">

                    {!! Form::label('nombre','Nombre de la comida:')  !!}
                    {!! Form::text('nombre',old('nombre'),[ 'class'=>"form-control"]) !!}

                </div>
                <div class="col-xs-3">

                    {!! Form::label('descripcion')  !!}
                    {!! Form::text('descripcion',old('descripcion'),[ 'class'=>"form-control"]) !!}

                </div>
                <div class="col-xs-3">

                    {!! Form::label('precio')  !!}
                    {!! Form::text('precio',old('precio'),[ 'class'=>"form-control"]) !!}

                </div>
                <div class="col-xs-3">

                    {!! Form::label('unidad')  !!}
                    {!! Form::text('unidad',old('unidad'),[ 'placeholder'=>'ejemplo: 100 o 1','class'=>"form-control"]) !!}

                </div>
                <div class="col-xs-3">

                    {!! Form::label('tipo')  !!}
                    {!! Form::text('tipo',old('tipo'),[ 'placeholder'=>'ejemplo: ensalada, bocadillo, bebida etc','class'=>"form-control"]) !!}

                </div>  <div class="col-xs-3">

                    {!! Form::label('medida')  !!}
                    {!! Form::text('medida',old('medida'),[ 'placeholder'=>'ejemplo: gr o ud','class'=>"form-control"]) !!}

                </div>


            </div>

            <div style="margin-top: 20px" class=" text-center">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])   !!}
                {!! link_to('/productos', 'Volver', ['class' => 'btn btn-primary']) !!}

            </div>


        </div>
    </div>

    {!! Form::close()   !!}


    <script>


        $(document).ready(function () {

//MAYUSCULAS
            $('.mayusculas').keyup(function () {
                $(this).val($(this).val().toUpperCase());
            });


        });


    </script>


@endsection

