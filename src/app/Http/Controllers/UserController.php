<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



class UserController extends Controller
{
    public function login(Request $request)
    {
        try {
            $user = User::where('email', $request->query('email'))->where('password', $request->query('password'))->first();

            if ($user) {
                $this->initSession($user->name);
                return response()->json(["message" => true], 200);
            } else {
                return response()->json(["message" => false], 404);
            }
        } catch (\Throwable $error) {
            return response()->json(["message" => "Falha ao tentar realizar login: " . $error->getMessage()], 500);
        }
    }

    public function initSession($userName)
    {
        session_start();
        $_SESSION['userName'] = $userName;
    }

    public function sessionDestroy() {
        session_start();
        session_destroy();
    }

    public static function checkIfSessionExists($location) {
        if($location != '/entrar') {
            if(!isset($_SESSION['userName'])) {
                header("Location: " . $_SERVER['HTTP_HOST'] . "/entrar");
                exit;
            }
        }
    }

}
