<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AdminPagesController extends Controller
{

    public function loginAdmin(){
        return view('admin.login');
    }

    public function dashboardAdmin(){
        if (!Auth::check()) {
            return redirect('/loginAdmin');
        }
        return view('admin.dashboard');
    }
    

    //fonction connexion page admin
    public function authenticate(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if ($user && $request->password == $user->password) {
            if ($user->statut == 1){
                Auth::login($user);
                return redirect('/dashboardAdmin');
            } else {
            return redirect('/loginAdmin')->with('error', 'Identifiants incorrects');
        }
    }else{
        return redirect('/loginAdmin')->with('error', 'Identifiants incorrects');
    }
 }
    public function logout() {
        Auth::logout();
        return redirect('/loginAdmin');
    }
}
