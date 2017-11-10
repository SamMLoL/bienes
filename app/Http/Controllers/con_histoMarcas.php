<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sel_marca;
use App\sel_marca1;
use App\sel_marca2;


class con_histoMarcas extends Controller
{
    public function index()
    {
    	$histoMarca= sel_marca::all();
    	$histoMarca1= sel_marca1::all();
    	$histoMarca2= sel_marca2::all();
    	

        return view('añadir.historicoMarcas', compact('histoMarca','histoMarca1','histoMarca2'));
    }
}
