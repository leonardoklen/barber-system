<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request) {
        try {
            $user = User::where('email', $request->query('email'))->where('password', $request->query('password'))->first();
            if($user) {
                return response()->json(["message" => "Login Autorizado!"], 200);
            } else {
                return response()->json(["message" => "E-mail ou senha incorretos!"], 404);
            }
        } catch(\Throwable $error) {
            return response()->json(["message" => "Falha ao tentar realizar login: " . $error->getMessage()], 500);
        }
    }
}
