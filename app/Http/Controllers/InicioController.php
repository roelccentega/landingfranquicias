<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactanosForm;
use Illuminate\Support\Facades\Mail;

class InicioController extends Controller
{
    public function index()
    {
    	return view('web.index');
    }
    public function contacto(){
    	return view('web.contacto');
    }

    public function postContactanos(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'name' => 'required',
//            'g-recaptcha-response' => 'required|captcha',

        ]);
        $emails = [ 'ccenteproga@gmail.com'];
        $mail = new ContactanosForm($request->all());
        Mail::to($emails)->send($mail);


//        Mail::to($request->user())->send(new OrderShipped($order));
        return redirect('/contacto')->with('notification','¡Enhorabuena! Tu mensaje ha sido enviado con éxito.');
//        return redirect('/contacto')->with('status', ' ¡Enhorabuena! Tu mensaje ha sido enviado con éxito.');
    }

}
