<?php

namespace App\Http\Controllers\RRHH\Reportes\Asistencia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        return view('recursos-humanos.reportes.asistencia-general');
    }
}
