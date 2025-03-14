<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function funLogin(Request $request){
       
        //Validar datos
        $credenciales = $request->validate([
            'email' => 'required|email', //array asociativo
            'password' => 'required'
        ]);


        //Verificar si el correo y la contraseña son correctos
        if(!Auth::attempt($credenciales)){
            return response()->json([
                'message' => 'Credenciales incorrectas'
            ],401);
        }
        //Obtener el token
         $token = $request->user()->createToken("Token Auth")->plainTextToken;      
        //Retornar respuesta
        return response()->json([
            'acces_token' => $token,"user" => $request->user()
        ],201);
    }

    public function funRegister(Request $request){

        

    }

    public function funProfile(Request $request){
        
        $usuario = $request->user();
        return response()->json($usuario);

    }

    public function funLogout(Request $request){
        
        $usuario = $request->user();
        $usuario->tokens()->delete();
        return response()->json([
            'message' => 'Sesión cerrada'
        ], 200);
    }
}
