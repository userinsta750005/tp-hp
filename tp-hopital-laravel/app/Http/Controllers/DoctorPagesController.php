<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorPagesController extends Controller
{
    public function loginDocteur(){
        return view('docteur.login');
    }

    public function dashboardDocteur(){
        if (!Auth::check()) {
            return redirect('/loginDocteur');
        }
        return view('docteur.dashboard');
    }
    

    public function authenticate(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if ($user && $request->password == $user->password) {
            if ($user->statut == 0){
                Auth::login($user);
                return redirect('/dashboardDocteur');
            } else {
            return redirect('/loginDocteur')->with('error', 'Identifiants incorrects');
        }
    }
 }
    public function logout() {
        Auth::logout();
        return redirect('/loginDocteur');
    }
}
