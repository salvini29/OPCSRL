<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class PagesController extends Controller
{
    public function landing()
    {
    	return view('landing');
    }
    public function postComment(Request $request)
    {
    	return Comentario::create(['nombre' => $request->nombre, 'email' => $request->email, 'asunto' => $request->asunto, 'mensaje' => $request->mensaje]);
    	
    }	
}