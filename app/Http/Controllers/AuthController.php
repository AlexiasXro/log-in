<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Register
    public function register(){
        // GET + Post
        //echo "<h1>registro controlador</h1>";
        return view("auth.register");
    }

    //Login
    public function login(){
        // GET + Post
        //echo "<h1>loguin</h1>";
        return view("auth.login");
    }
    

    //Dashboard
    public function dashboard(){
        // After Login
        //echo "<h1>dashboard</h1>";
        return view("auth.dashboard");
    }

    


    //Prodile
    public function profile(){
        // After Login
        echo "<h1> profile</h1>";
    }

    public function accses(Request $request) {
        $user = User::where('email', $request->user)->first();

        // Verificar si el usuario existe
        if ($user) {
            // Obtener la contraseña almacenada del usuario
            $hashedPassword = $user->password;
    
            // Verificar si la contraseña proporcionada coincide con la contraseña almacenada
            if (Hash::check($request->password, $hashedPassword)) {
                // La contraseña es correcta, puedes redirigir al usuario a su dashboard
                return view("profile");
            } else {
                // Contraseña incorrecta
                return "<p>Contraseña incorrecta</p>";
            }
        } else {
            // Usuario no encontrado
            return "<p>Usuario no encontrado</p>";
        }
        
        
        
    }

    public function validate(Request $req){
        
    }
    public function registation(Request $request){
        
        
        if($request->password == $request->confpsw){
            $u = New User;
            $u->email = $request->user;
            $u->password = $request->password;
            $u->is_admin = false;
            $u->save();
            return view("auth.login");
        }else{
            return "<h1> ERROR </H1>";
        };
    }

    //Logout
    public function logout(){
        // After Login
        echo "<h1>logout</h1>";

    }


}


