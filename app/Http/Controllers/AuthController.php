<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Register
    public function register(){
        // GET + Post
        return view("auth.register");
    }

    //Login
    public function login(){
        // GET + Post
        return view("auth.login");
    }
    

    //Dashboard
    public function dashboard(){
        // After Login
        echo "<h1>dashboard</h1>";
        return view("auth.dashboard");
    }

     //forgotten password
    public function forg_pass(){
        // GET + Post
        return view("auth.forg_pass");
    }

    public function home(){
        // GET + Post
        return view("home");
    }
    
    public function home_user(){
        // GET + Post
        return view("auth.home_user");
    }

    //Prodile
    public function profile(){
        // After Login
        echo "<h1> profile</h1>";
    }

    public function access(Request $request) {
        $user = User::where('email', $request->user)->first();

        // Verificar si el usuario existe
        if ($user) {
            // Obtener la contraseña almacenada del usuario
            $hashedPassword = $user->password;

            // Verificar si la contraseña proporcionada coincide con la contraseña almacenada
            if (Hash::check($request->password, $hashedPassword)) {
                // La contraseña es correcta, puedes redirigir al usuario a su dashboard
                return view("auth.home_user");
            } else {
                // Contraseña incorrecta, redirige con un mensaje de error
                return redirect()->back()->withErrors([
                    'password' => 'Usuario o contraseña no encontrado.',
                ]);
            }
        } else {
            // Usuario no encontrado, redirige con un mensaje de error
            return redirect()->back()->withErrors([
                'user' => 'Usuario o contraseña no encontrado.',
            ]);
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


