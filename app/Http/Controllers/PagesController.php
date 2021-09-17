<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Mail\ComentarioMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;

class PagesController extends Controller
{
    public function landing()
    {
    	return view('landing');
    }
    public function postComment(Request $request)
    {
    	$details = [
    		'title' => $request->asunto,
    		'body' => $request->mensaje,
    		'mail' => $request->email
    	];
    	Mail::to("opcsrlseguridad@gmail.com")->send(new ComentarioMail($details));
    	return Comentario::create(['nombre' => $request->nombre, 'email' => $request->email, 'asunto' => $request->asunto, 'mensaje' => $request->mensaje]);
    	
    }	
}