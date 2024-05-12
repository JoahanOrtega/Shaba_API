<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\User;

class SaleController extends Controller
{
    // GET - Obtener todas las ventas
    public function index()
    {
        $sales = Sale::all()->groupBy('id_user');
        return response()->json($sales, 200);
    }
    // GET - Obtener las ventas de un usuario
    public function indexByUser($id)
    {
        // Validar que el ID de usuario sea un entero válido
        if (!is_numeric($id)) {
            return response()->json(['message' => 'El ID de usuario debe ser un número válido'], 400);
        }
        // Verificar si el ID de usuario existe en la tabla de usuarios
        if (!User::where('id', $id)->exists()) {
            return response()->json(['message' => 'El ID de usuario no existe'], 404);
        }

        // Filtrar las ventas por el ID del usuario
        $sales = Sale::where('id_user', $id)->get();
        
        return response()->json($sales, 200);
    }

    // GET - Obtener una venta por su ID
    public function show($id)
    {
        $sale = Sale::find($id);
        if (!$sale) {
            return response()->json(['message' => 'Venta no encontrada'], 404);
        }
        return response()->json($sale, 200);
    }

    // POST - Crear una nueva venta
    public function store(Request $request)
    {
        $request->validate([
            'id_product' => 'required|exists:products,id_product',
            'id_user' => 'required|exists:customers,id',
            'sale_date' => 'required|date',
            'total_price' => 'required|numeric|min:0'
        ]);

        $sale = Sale::create($request->all());
        return response()->json($sale, 201);
    }

    // PUT - Actualizar una venta existente
    public function update(Request $request, $id)
    {
        $sale = Sale::find($id);
        if (!$sale) {
            return response()->json(['message' => 'Venta no encontrada'], 404);
        }

        $request->validate([
            'id_product' => 'required|exists:products,id_product',
            'id_customer' => 'required|exists:customers,id',
            'sale_date' => 'required|date',
            'total_price' => 'required|numeric|min:0'
        ]);

        $sale->update($request->all());
        return response()->json($sale, 200);
    }

    // DELETE - Eliminar una venta
    public function destroy($id)
    {
        $sale = Sale::find($id);
        if (!$sale) {
            return response()->json(['message' => 'Venta no encontrada'], 404);
        }
        $sale->delete();
        return response()->json(['message' => 'Venta eliminada correctamente'], 200);
    }
}
