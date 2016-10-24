<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;

use App\Http\Requests;


class CarritoController extends Controller
{


    public function __construct()
    {
        $this->middleware('web');

    }


    public function addCarrito(Request $request, $id)
    {


        $item = $request->session()->get('carro');
        //$request->session()->forget('carro');
        //unset($item[0]);

        //dd($item);


        //Busca  si un pedido esta repetido
        if ($item) {
            $repetidos = array_search($id, array_column($request->session()->get('carro'), 'id'));


        } else {

            $repetidos = false;

        }

        if ($repetidos === false) {

            $pro = Productos::where('id', $id)->first(['id', 'nombre', 'descripcion', 'precio', 'unidad', 'medida', 'tipo'])->toArray();

            $request->session()->push('carro', $pro);
            //dd($request->session('carro'));


            $this->totalCarrito();
            $this->descuentoCarrito();
            $this->tresx2();

            return view('carrito');


            // redirect('/');

        }

        $this->totalCarrito();
        $this->descuentoCarrito();
        $this->tresx2();


        return view('carrito');


    }

    public function sumCarrito(Request $request, $id)
    {


        $carro = $request->session()->get('carro');
        $pro = $this->buscaIdCarrito($carro, $id);

        $items = $request->session()->get('carro.' . $pro . '.precio');
        $medida = $request->session()->get('carro.' . $pro . '.medida');
        $unidad = $request->session()->get('carro.' . $pro . '.unidad');

        $request->session()->put("carro." . $pro . ".precio", $items + 1);
        $request->session()->put("carro." . $pro . ".unidad", ($medida == 'gr') ? $unidad + 100 : $unidad + 1);


        $this->totalCarrito();
        $this->tresx2();


        return view('carrito');


    }


    public function restCarrito(Request $request, $id)
    {
        $carro = $request->session()->get('carro');

        $pro = $this->buscaIdCarrito($carro, $id);


        $items = $request->session()->get('carro.' . $pro . '.precio');
        $medida = $request->session()->get('carro.' . $pro . '.medida');
        $unidad = $request->session()->get('carro.' . $pro . '.unidad');
        //dd($lolo,$medida);

        $request->session()->put("carro." . $pro . ".precio", $items - 1);
        $request->session()->put("carro." . $pro . ".unidad", ($medida == 'gr') ? $unidad - 100 : $unidad - 1);


        $total = $request->session()->get('carro');

        $this->totalCarrito();
        $this->tresx2();


        return view('carrito');

    }

    public function restFilaCarrito($id, Request $request)
    {

        $soloId = $request->session()->get('carro');
        //$resul = array_search($id, $soloId);


        $pro = $this->buscaIdCarrito($soloId, $id);

        $event_data_display = $request->session()->get("carro");
        unset($event_data_display[$pro]);
        $request->session()->set("carro", $event_data_display);

        $this->totalCarrito();
        $this->descuentoCarrito();
        $this->tresx2();

        return view('carrito');


    }


    public function totalCarrito()
    {


        $precio = session()->get('carro');

        //dd($precio);

        $total = 0;
        foreach ($precio as $pre) {
            $total += $pre['precio'];

        }

        session()->set('total', $total);


    }


    public function descuentoCarrito()
    {
        $productos = Session()->get('carro');

        //dd($productos);
        $num = 0;

        foreach ($productos as $pro) {

            if ($pro['tipo'] == 'pasta' || $pro['tipo'] == 'granos') {
                $num += 1;

            }
            if ($pro['tipo'] == 'ensalada') {

                $num += 1;

            }
            if ($pro['tipo'] == 'carne' || $pro['tipo'] == 'pollo') {

                $num += 1;

            }
            if ($pro['tipo'] == 'bebida') {

                $num += 1;
            }


        }


        if ($num >= 4) {
            session()->set('descuento', '!Ya armaste tu menu!, recibes el 20% Dto.');

        } else {

            session()->forget('descuento');

        }


    }


    public function tresx2()
    {

        $productos = Session()->get('carro');


        foreach ($productos as $pro) {


           // dd($pro['medida'] == 'ud' && $pro['unidad'] >= 3);

            if ($pro['medida'] == 'ud' && $pro['unidad'] >= 3) {

                session()->set('3x2', 'por la compra de 3 '.$pro['nombre'] .' solo pagas dos');

                break;

            } else {

                session()->forget('3x2');


            }


        }


    }

    /*
     * Buca la poscion exacta  de un id del producto
     * lamentablemnete en esta ocacion no me sirve
     * array_search('snart', array_column($array_subjected_to_search, 'name'));
     *
     * */


    public function buscaIdCarrito($array, $id)
    {


        foreach ($array as $index => $value) {
            if ($id == $value['id']) {
                return $index;
                break;

            }


        }


    }


    public function vistaCarrito()
    {

        return view('carrito');
    }


    public function trampaCarrito($id, Request $request)
    {
        $pro = array_search($id, array_column($request->session()->get('carro'), 'id'));

        $lolo = $request->session()->get('carro.' . $pro);
        $items = $request->session()->get('carro.' . $pro . '.precio');
        $medida = $request->session()->get('carro.' . $pro . '.medida');
        $unidad = $request->session()->get('carro.' . $pro . '.unidad');
        //dd($lolo,$medida);

        $request->session()->put("carro." . $pro . ".precio", $items + 1);
        $request->session()->put("carro." . $pro . ".unidad", ($medida == 'gr') ? $unidad + 100 : $unidad + 1);


        return view('carritoTrampa');

    }


}
