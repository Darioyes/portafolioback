<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function store(Request $request)
    {

        //reglas de validacion
        $rules = [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'message' => 'required|min:3|max:500'
        ];

        //validamos los datos
        $validator = Validator::make($request->input(), $rules);
        if($validator->fails()){
            return response()->json([
                'message' => 'Error al validar los datos',
                'errors' => $validator->errors(),
                'success' => false
            ],400);
        }

        //recibimos los datos de la request

        $name = $request->input('name');
        $email = $request->input('email');
        $content = $request->input('message');

        $contactMail = new ContactMail($name,$email,$content);

        //creamos el Mail:to enviando lo que no llega por el $request
        Mail::to('info@dariocode.com')
            ->send($contactMail);
        
        return response()->json([
            'message' =>'Hola '.$name .' gracias por tu comentario, pronto me estaré comunicando contigo',
            'success' => false
        ],200);
    }

}
