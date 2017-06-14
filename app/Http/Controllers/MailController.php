<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Correo;
use Mail;
use Redirect;
use Session;
class MailController extends Controller
{
	public function index()
    {
    }
    public function create()
    {

    }

    public function store( Request $request)
    {
    	Mail::send('about.contact',$request->all(),function($msj){
    		$msj->subject('Correo del contacto');
    		$msj->to('hektorhugover2@gmail.com');
    	});
			$mail = new Correo;
            $mail->nombre	= $request->name;
            $mail->correo	= $request->email;
            $mail->mensaje	= $request->mensaje;
            $mail->save();
    	Session::flash('message','Mensaje enviado correctamente');
    	return Redirect::to('/contacto');
	}
}
