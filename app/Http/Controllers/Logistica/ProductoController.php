<?php

namespace App\Http\Controllers\Logistica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        return view('logistica.almacen.producto');
    }

    public function index2(){
        return view('logistica.proveedor.index');
    }
}
