<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Controllers\ProductoController;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['pedidos']=Pedido::paginate(10);
        return view('pedidos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $datosPedido = $request->except('_token');

        
        $producto = Producto::find($datosPedido['Id_Productos']);
        
        $precio_unitario = $producto->Precio;
        
        $cantidad = $datosPedido['Cantidad'];
        
        $datosPedido['precio_unitario'] = $precio_unitario;
        $datosPedido['precio_total'] = $precio_unitario * $cantidad;

        
        Pedido::insert($datosPedido);
        response()->json($datosPedido);
        return redirect('pedidos')->with('mensaje','Pedido agregado exitosamente');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pedido=Pedido::findOrFail($id);
        return view('pedidos.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosPedido = request()->except(['_token', '_method']);
        $producto = Producto::find($datosPedido['Id_Productos']);
        $precio_unitario = $producto->Precio;
        $cantidad = $datosPedido['Cantidad'];
        $datosPedido['precio_unitario'] = $precio_unitario;
        $datosPedido['precio_total'] = $precio_unitario * $cantidad;
        
        $pedido = Pedido::find($id);
        $pedido->status = $request->input('Status');
        $pedido->cantidad = $request->input('Cantidad');

        if ($pedido->status == 'entregado' || $pedido->status == 'Entregado' || $pedido->status == 'ENTREGADO') {
            $producto = Producto::find($pedido->id_productos);
            $producto->Stock -= $pedido->cantidad;
            $producto->save();
        }

        Pedido::where('id', '=', $id)->update($datosPedido);


        $pedido=Pedido::findOrFail($id);
        view('pedidos.edit', compact('pedido'));
        return redirect('pedidos');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $pedido=Pedido::findOrFail($id);
        Pedido::destroy($id);
        return redirect('pedidos')->with('mensaje','Pedido eliminado exitosamente');
    }
}